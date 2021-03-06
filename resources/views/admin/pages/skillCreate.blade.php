@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Create Skill</h1>
            <hr>
            <form action="/skill-create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif
                <label class="form-control-label">Description</label>
                <input class="form-control" type="title" name="description">
                {{--@if($errors->has('description'))--}}
                    {{--<div class="alert alert-warning">--}}
                        {{--<strong>Warning!</strong> {{$errors->first('description')}}.--}}
                    {{--</div>--}}
                {{--@endif--}}
                <label class="form-control-label">Percent</label>
                <input class="form-control" type="title" name="percent"><br>
                @if($errors->has('percent'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('percent')}}.
                    </div>
                @endif
                <label class="form-control-label">Class Name</label>
                <input class="form-control" type="title" name="class">
                {{--@if($errors->has('name'))--}}
                    {{--<div class="alert alert-warning">--}}
                        {{--<strong>Warning!</strong> {{$errors->first('name')}}.--}}
                    {{--</div>--}}
                {{--@endif--}}
                {{--<input type="file" name="img" class="btn btn-primary"><br>--}}
                <a href="{{url('/skills')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection