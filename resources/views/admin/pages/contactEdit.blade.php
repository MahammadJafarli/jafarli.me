@extends('admin.admin')
@section('content')
    <div class="row">
        {{--<button type="button" class="btn btn-success pull-right"><a href="{{url('/contact')}}">Contact</a></button>--}}

        <div class="div-col-md-8">
            <h1>Edit Contact</h1>
            <hr>
            <form action="/contact/{{ $contact->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Location</label>
                <input class="form-control" type="title" name="location" value="{{ $contact->location }}">
                @if($errors->has('location'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('location')}}.
                    </div>
                @endif

                <label class="form-control-label">Telephone</label>
                <input class="form-control" type="text" name="telephone" value="{{ $contact->telephone }}">
                @if($errors->has('telephone'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('telephone')}}.
                    </div>
                @endif


                <label class="form-control-label">Email</label>
                <input class="form-control" type="email" name="email" value="{{ $contact->email }}">
                @if($errors->has('email'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('email')}}.
                    </div>
                @endif


                <label class="form-control-label">Text</label>
                <textarea name="text" class="form-control ckeditor">{{ $contact->contact_text }}</textarea><br>
                @if($errors->has('text'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('text')}}.
                    </div>
                @endif

                <label class="form-control-label">Google Map</label>
                <input class="form-control" type="title" name="map" value="{{ $contact->google_map }}"><br>
                @if($errors->has('map'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('map')}}.
                    </div>
                @endif
                <a href="{{url('/contact')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection