@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="div-col-md-8">
            <h1>Create Category</h1>
            <hr>
            <form action="/category-create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <label class="form-control-label">Name</label>
                <input class="form-control" type="title" name="name"><br>
                @if($errors->has('name'))
                    <div class="alert alert-warning">
                        <strong>Warning!</strong> {{$errors->first('name')}}.
                    </div>
                @endif
                <a href="{{url('/categories')}}"> <button type="button" class="btn btn-warning">Cancel</button></a>
                <input class="btn btn-success" type="submit" name="submit" value="Create">
            </form>
        </div>
    </div>
@endsection