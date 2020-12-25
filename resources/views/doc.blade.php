

<!DOCTYPE>
<html>
<head>
   @include('templates/header')
    <title>Main Page</title>
    <style>

        /* NAVIGATION */
        nav {
            width: 100%;
            margin: 0 auto;
            background: #fff;

            box-shadow: 0px 5px 0px #dedede;
        }
        nav ul {
            list-style: center;
            text-align: left;
        }
        nav ul li {
            display: inline-block;
        }
        nav ul li a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: black;
            font-weight: 800;
            text-transform: uppercase;
            margin: 0 10px;
        }
        ul img{
            padding-left: 0;
        }
        nav ul li a,
        nav ul li a:after,
        nav ul li a:before {
            transition: all .5s;
        }
        nav ul li a:hover {
            color: #aaa;
        }



        /* SHIFT */
        nav.shift ul li a {
            position:relative;
            z-index: 1;
        }
        nav.shift ul li a:hover {
            color: black;
        }
        nav.shift ul li a:after {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            width: 100%;
            height: 1px;
            content: '.';
            color: transparent;
            background: rgb(0, 223, 195);
            visibility: none;
            opacity: 0;
            z-index: -1;
        }
        nav.shift ul li a:hover:after {
            opacity: 1;
            visibility: visible;
            height: 100%;
        }

    </style>
</head>
<body>

<nav class="shift">

    <ul>
        <a href="{{route('home')}}"><img style = "margin-left:35px; float: left;"src="/img/iitu_logo.png"></a>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="instruction.html">Instruction</a></li>
        <li><a href="{{route('contacts')}}">Contacts</a></li>
        <li><a href="{{route('results')}}">Results</a></li>
        @if(Auth::check())
            <li><a href="{{route('profile')}}">{{Auth::user()->getEmailOrName()}}</a></li>
            <li><a href="{{route('signout')}}">Sign Out</a></li>

        @else
            <li><a href="{{route('signin')}}">Sign In</a></li>
        @endif
    </ul>
</nav>
<section >
{{--    <iframe src="{{url('img/'.$data->pdf_udastak)}}" style="width: 600px; height: 500px;"></iframe>--}}
    <div style="margin-left: 200px;">
    <embed src="{{url('documents/'.$data->file)}}" width="900px" height="1000" />
    </div>
</section>




@include('templates/footer')


</body>
</html>


