@extends('admin.admin')
@section('content')
    <div class="row">
        <button type="button" class="btn btn-success pull-right"><a href="{{url('/about')}}">About</a></button>

        <div class="div-col-md-8">
            <h1>Create About</h1>
            <hr>
            <form action="{{url('/about-create')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                @if($errors->has('name'))
                    <strong>{{$errors->first('name')}}</strong>
                @endif
                <label class="form-control-label">Position</label>
                <input class="form-control" type="title" name="position">
                @if($errors->has('position'))
                    <strong>{{$errors->first('position')}}</strong>
                @endif
                <label class="form-control-label">Title</label>
                <input class="form-control" type="title" name="title">
                @if($errors->has('title'))
                    <strong>{{$errors->first('title')}}</strong>
                @endif
                <label class="form-control-label">Text</label>
                <textarea name="text" class="form-control"></textarea><br>
                @if($errors->has('text'))
                    <strong>{{$errors->first('text')}}</strong>
                @endif
                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary"><br>
                @if($errors->has('img'))
                    <strong>{{$errors->first('img')}}</strong>
                @endif
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection