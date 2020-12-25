
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
        <li><a href="{{route('signin')}}">Sign In</a></li>
    </ul>
</nav>
    <title>Sign In</title>
    <style>
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
        }
        .row{
            background: #fff;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }

    </style>
</head>
<body>


<section class="form my-4 mx-5">
    <div class="container" style="padding-right:120px; padding-left:  120px;">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="/img/login.jfif" class="img-fluid pt-5 px-5">
            </div>
            <div class="col-lg-5 px-5 pt-5">
                <h1 class="font-weight-bold py-3">IITU</h1>
                <h4>Sign into your ADMIN account</h4>
                @include('templates/alerts')
                <form method="POST" action="/signInAdmin" novalidate>
                    @csrf
                    <div class="form-row">

                        <div class="col">
                            <input type="text" placeholder="Email address"
                                   class="form-control my-2 " name="email"
                                   value="{{Request::old('email')?:''}}">

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password"
                                   placeholder="Password"
                                   class="form-control  my-2"
                                   name="password">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col" >
                            <button type="submit" class="btn1 mt-3 mb-3">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('templates/footer')
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
