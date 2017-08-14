@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Edit Portfolio</h1>
            <hr>
            <form action="/portfolio/{{ $portfolio->id }}" method="POST" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name" value="{{ $portfolio->portfolio_name }}">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif

                <label class="form-control-label">Link</label>
                <input class="form-control" type="title" name="link"  value="{{ $portfolio->link }}>

                <label class="form-control-label">Description</label>
                <input class="form-control" type="title" name="description" value="{{ $portfolio->description }}">
                @if($errors->has('description'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('description')}}.
                    </div>
                @endif

                <label class="form-control-label">Work</label>
                <select class="form-control" name="work">
                    <option>{{ $portfolio->work->work_name }}</option>
                    @foreach($workData as $work )
                        <option value="{{ $work->id }}"> {{ $work->work_name }}</option>
                    @endforeach
                </select><br>
                @if($errors->has('work'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('work')}}.
                    </div>
                @endif

                <label class="form-control-label">Image</label>
                <input type="file" name="img" class="btn btn-primary"><br>
                @if($errors->has('img'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('img')}}.
                    </div>
                @endif

                <a href="{{url('/portfolios')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Update">
            </form>
        </div>
    </div>
@endsection