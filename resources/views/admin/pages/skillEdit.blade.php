@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Edit Skill</h1>
            <hr>
            <form action="/skill/{{ $skill->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name" value="{{ $skill->skill_name }}">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif

                <label class="form-control-label">Description</label>
                <input class="form-control ckeditor" type="title" name="description" value="{{ $skill->skill_desc }}">
                @if($errors->has('description'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('description')}}.
                    </div>
                @endif

                <label class="form-control-label">Percent</label>
                <input class="form-control" type="title" name="percent" value="{{ $skill->skill_percent }}"><br>
                @if($errors->has('percent'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('percent')}}.
                    </div>
                @endif
                <label class="form-control-label">Class Name</label>
                <input class="form-control" type="title" name="class" value="{{ $skill->class }}">
                <a href="{{url('/skills')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection