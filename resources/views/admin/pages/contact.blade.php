@extends('admin.admin')
@section('content')
    <h1>Contact Me</h1>
    <hr>
    <a href="{{ url('/contactCreate') }}"><button type="button" class="btn btn-success pull-right">Add Contact</button></a>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>Location</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Text</th>
            <th>Google Mapp</th>
            <th>Options</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $contact)
            <tr>
                <td>{{ $contact->location }}</td>
                <td>{{ $contact->telephone }}</td>
                <td>{{ $contact->email }}</td>
                <td>{!!  $contact->contact_text !!}</td>
                <td style="max-width: 150px !important;overflow: hidden;">{{ $contact->google_map }}</td>
                <td>
                    <a href="/contact/{{ $contact->id }}/contactEdit" style="float: left"><button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                    {{--<form action="contact/{{ $contact->id }}/delete" method="post">--}}
                        {{--{{method_field('DELETE')}}--}}
                        {{--{{csrf_field()}}--}}
                        {{--<button type="submit" class="btn btn-danger">Delete</button>--}}
                    {{--</form>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection