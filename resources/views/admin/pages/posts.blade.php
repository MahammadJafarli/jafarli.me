@extends('admin.admin')
@section('content')
    <h1>Posts</h1>
    <hr>
    <a href="{{ url('/postCreate') }}"><button type="button" class="btn btn-success pull-right">Add Post</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Text</th>
            <th>Categoy</th>
            <th>Image</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->post_title }}</td>
                <td>{!!  $post->post_text !!}</td>
                <td>{{ $post->category->category_name }}</td>
                <td>{{ $post->post_image }}</td>
                <td>
                    <a href="single/{{ $post->id }}">
                        <button type="button" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </a>
                    <a href="/post/{{ $post->id }}/postEdit" style="float: left">
                        <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    </a>
                    <form action="post/{{ $post->id }}/delete" method="post">
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