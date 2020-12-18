<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Sign Up</title>
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


@include('templates/navbar')

<section class="form my-4 mx-5">
    <div class="container" style="padding-right:120px; padding-left:  120px;">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="./img/signup.jfif" class="img-fluid pt-5 px-5">
            </div>
            <div class="col-lg-5 px-5 pt-5">
                <h1 class="font-weight-bold py-3">IITU</h1>
                <h4>Create new accout</h4>
                <form method="POST" action="{{route('signup')}}" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <input type="email" placeholder="Email address"
                                   class="form-control my-2 "
                                   {{$errors ->has('email') ? ' is-invalid':''}}
                                   name="email"
                                   value="{{Request::old('email')?:''}}"
                            >
                            @if ($errors -> first('email'))
                                <span class="help-block text-danger">
                                    {{$errors->first('email')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password"
                                   placeholder="Password"
                                   class="form-control  my-2"
                                   name="password"
                                {{$errors ->has('password') ? ' is-invalid':''}}

                            >
                            @if ($errors -> first('password'))
                                <span class="help-block text-danger">
                                    {{$errors->first('password')}}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="password" placeholder="Re-password" class="form-control  my-2" name="repassword" {{$errors ->has('repassword')? 'is-invalid':''}}>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col" >
                            <button type="submit" class="btn1 mt-3 mb-3">Sign up</button>
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
