@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Edit Service</h1>
            <hr>
            <form action="/service/{{ $service->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name" value="{{ $service->serrvice_name }}">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif

                <label class="form-control-label">Description</label>
                <input class="form-control ckeditor" type="title" name="description" value="{!! $service->service_description !!}">
                @if($errors->has('description'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('description')}}.
                    </div>
                @endif

                <label class="form-control-label">Icon</label>
                <input class="form-control" type="title" name="icon" value="{{ $service->service_icon }}"><br>
                @if($errors->has('icon'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('icon')}}.
                    </div>
                @endif

                <a href="{{url('/about')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection