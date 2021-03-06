@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Create Service</h1>
            <hr>
            <form action="/service-create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif
                <label class="form-control-label">Description</label>
                <textarea name="description" class="form-control ckeditor"></textarea><br>
                @if($errors->has('description'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('description')}}.
                    </div>
                @endif
                <label class="form-control-label">Icon</label>
                <input class="form-control" type="title" name="icon"><br>
                @if($errors->has('icon'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('icon')}}.
                    </div>
                @endif
                {{--<input type="file" name="img" class="btn btn-primary"><br>--}}
                <a href="{{url('/services')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection