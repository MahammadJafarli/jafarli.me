@extends('admin.admin')

@section('content')
    <h1>Socials</h1>
    <hr>
    <a href="{{ url('/socialCreate') }}"><button type="button" class="btn btn-success pull-right">Add Social</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Icon</th>
            <th>Link</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $social)
            <tr>
                <td>{{ $social->id }}</td>
                <td>{{ $social->icon }}</td>
                <td>{{ $social->href }}</td>
                <td>
                    <a href="/social/{{ $social->id }}/socialEdit" style="float: left"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    <form action="social/{{ $social->id }}/delete" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection