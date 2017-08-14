@extends('admin.admin')
@section('content')
    <h1>Skills</h1>
    <hr>
    <a href="{{ url('/skillCreate') }}"><button type="button" class="btn btn-success pull-right">Add Skill</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Percent</th>
            <th>Class Name</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $skill)
            <tr>
                <td>{{ $skill->id }}</td>
                <td>{{ $skill->skill_name }}</td>
                <td>{{ $skill->skill_desc }}</td>
                <td>{{ $skill->skill_percent }}</td>
                <td>{{ $skill->class }}</td>

                <td>
                    <a href="/skill/{{ $skill->id }}/skillEdit" style="float: left"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    <form action="skill/{{ $skill->id }}/delete" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
