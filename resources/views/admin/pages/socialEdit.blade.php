@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Update Social</h1>
            <hr>
            <form action="/social/{{ $social->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Icon</label>
                <input class="form-control" type="title" name="icon" value="{{ $social->icon }}">
                @if($errors->has('icon'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('icon')}}.
                    </div>
                @endif
                <label class="form-control-label">Link</label>
                <input class="form-control" type="title" name="link" value="{{ $social->href }}">
                @if($errors->has('link'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('link')}}.
                    </div>
                @endif <br>
                <a href="{{url('/socials')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection