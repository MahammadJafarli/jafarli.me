@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Create Portfolio</h1>
            <hr>
            <form action="/portfolio-create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name">
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif

                <label class="form-control-label">Link</label>
                <input class="form-control" type="title" name="link">
                @if($errors->has('link'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('link')}}.
                    </div>
                @endif

                <label class="form-control-label">Description</label>
                <input class="form-control" type="title" name="description">
                @if($errors->has('description'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('description')}}.
                    </div>
                @endif

                <label class="form-control-label">Work</label>
                <select class="form-control" name="work">
                    <option>Works</option>
                    @foreach($data as $work )
                        <option value=" {{ $work->id }}"> {{ $work->work_name }}</option>
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

                <a href="{{url('/portfolios')}}"> <button type="button" class="btn btn-warning">Portfolio</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection