@extends('admin.admin')
@section('content')
    <h1>Portfolios</h1>
    <hr>
    <a href="{{ url('/portfolioCreate') }}"><button type="button" class="btn btn-success pull-right">Add Portflio</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th><th>Description</th>
            <th>Link</th>
            <th>Work Name</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $portfolio)
            <tr>
                <td>{{ $portfolio->id }}</td>
                <td>{{ $portfolio->portfolio_name }}</td>
                <td>{{ $portfolio->description }}</td>
                <td>{{ $portfolio->link }}</td>
                <td>{{ $portfolio->work->work_name}}</td>
                <td>{{ $portfolio->posrtfolio_image }}</td>
                <td>
                    <a href="/portfolio/{{ $portfolio->id }}/portfolioEdit" style="float: left"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    <form action="portfolio/{{ $portfolio->id }}/delete" method="post">
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