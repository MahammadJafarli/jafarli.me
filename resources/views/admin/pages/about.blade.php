
@extends('admin.admin')
@section('content')
    <h1>About</h1>
    <hr>
    {{--<button type="button" class="btn btn-success pull-right"><a href="{{url('/aboutCreate')}}">About Create</a></button>--}}
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Title</th>
            <th>Text</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $about)
            <tr>
                <td>{{ $about->about_name }}</td>
                <td>{{ $about->about_position }}</td>
                <td>{{ $about->about_title }}</td>
                <td>{!! $about->about_text !!}</td>
                <td>{{ $about->about_image }}</td>
                <td>
                    <a href="/about/{{ $about->id }}/aboutEdit">
                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </a>
                    <form action="about/{{ $about->id }}/delete" method="post">
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
