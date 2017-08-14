@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Edit About</h1>
            <hr>
            <form action="/about/{{ $about->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name" value="{{ $about->about_name }}">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif
                <label class="form-control-label">Position</label>
                <input class="form-control" type="title" name="position" value="{{ $about->about_position }}">
                @if($errors->has('position'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('position')}}.
                    </div>
                @endif
                <label class="form-control-label">Title</label>
                <input class="form-control" type="title" name="title" value="{{ $about->about_title }}">
                @if($errors->has('title'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('title')}}.
                    </div>
                @endif
                <label class="form-control-label">Text</label>
                <input class="form-control ckeditor" type="title" name="text" value="{!!  $about->about_text !!}">
                {{--<textarea name="text" class="form-control ckeditor" value="{{ $about->about_text }}"></textarea><br>--}}
                @if($errors->has('text'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('text')}}.
                    </div>
                @endif
                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary" value="{{ $about->about_image }}"><br>
                @if($errors->has('img'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('img')}}.
                    </div>
                @endif
                <a href="{{url('/about')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection