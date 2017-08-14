@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Edit Post</h1>
            <hr>
            <form action="/post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Text</label>
                <input class="form-control" type="title" name="title" value="{{ $post->post_title }}">
                @if($errors->has('title'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('title')}}.
                    </div>
                @endif

                <label class="form-control-label">Text</label>
                <textarea name="text" class="form-control ckeditor" >
                    {!! $post->post_text !!}
                </textarea><br>
                @if($errors->has('text'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('text')}}.
                    </div>
                @endif

                <label class="form-control-label">Category</label>
                <select class="form-control" name="category">
                    <option>{{ $post->category->category_name }}</option>
                    @foreach($categoryData as $category )
                        <option value=" {{ $category->id }}"> {{ $category->category_name }}</option>
                    @endforeach
                </select><br>
                @if($errors->has('category'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('category')}}.
                    </div>
                @endif

                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary"><br>
                @if($errors->has('img'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('img')}}.
                    </div>
                @endif

                <a href="{{url('/posts')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
    <script src="ckeditor/ckeditor.js"></script>
@endsection