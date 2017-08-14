<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta name="google" content="nositelinkssearchbox">
    <meta name="robots" content="noindex,nofollow">
    <link rel="stylesheet" type="text/css" href="assets/vendors/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/fastselect.min.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
<nav class="navbar navbar-default navbar-inverse">
    <div class="container" style="display: block;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">
                <img src="images/logo1.png" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{url('/about')}}">About<span class="sr-only">(current)</span></a></li>
                <li><a href="{{url('/skills')}}">Skills</a></li>
                <li ><a href="{{url('/services')}}">Services<span class="sr-only">(current)</span></a></li>
                <li ><a href="{{url('/works')}}">Works<span class="sr-only">(current)</span></a></li>
                <li ><a href="{{url('/portfolios')}}">Portfolios<span class="sr-only">(current)</span></a></li>
                <li><a href="{{ url('/categories') }}">Categories</a></li>
                <li><a href="{{url('/posts')}}">Posts</a></li>
                <li><a href="{{url('/contact')}}">Contact Me</a></li>
                <li><a href="{{url('/socials')}}">Socials</a></li>
                <li><a href="{{url("/logout")}}">Logout</a></li>
            </ul>


        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    @yield('content')
    {{--<table class="table">--}}
        {{--<tbody>--}}
        {{--<tr>--}}
            {{--<td>John</td>--}}
            {{--<td>Doe</td>--}}
            {{--<td>john@example.com</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>Mary</td>--}}
            {{--<td>Moe</td>--}}
            {{--<td>mary@example.com</td>--}}
        {{--</tr>--}}
        {{--<tr>--}}
            {{--<td>July</td>--}}
            {{--<td>Dooley</td>--}}
            {{--<td>july@example.com</td>--}}
        {{--</tr>--}}
        {{--</tbody>--}}
    {{--</table>--}}
</div>
<script src="ckeditor/ckeditor.js"></script>
</body>
</html>
