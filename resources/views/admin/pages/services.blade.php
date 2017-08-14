@extends('admin.admin')
@section('content')
    <h1>Services</h1>
    <hr>
    <a href="{{ url('/serviceCreate') }}"><button type="button" class="btn btn-success pull-right">Add Service</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Icon</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $service)
            <tr>
                <td>{{ $service->id }}</td>
                <td>{{ $service->serrvice_name }}</td>
                <td>{!!  $service->service_description !!}</td>
                <td>{{ $service->service_icon }}</td>
                <td>
                    <a href="/service/{{ $service->id }}/serviceEdit" style="float: left"><button type="button" class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    <form action="service/{{ $service->id }}/delete" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger btn-md"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection