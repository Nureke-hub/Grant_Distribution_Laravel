<!DOCTYPE>
<html>
<head>
    @include('templates/header')
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


@include('templates/navbar')


<section class="form my-4 mx-5">
    <div class="container" style="padding-right:120px; padding-left:  120px;">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <img src="./img/forgot.jfif" class="img-fluid pt-5 px-5">
            </div>
            <div class="col-lg-5 px-5 pt-5">
                <h1 class="font-weight-bold py-3">IITU</h1>
                <h4>Sign into your account</h4>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="email" placeholder="Email address" class="form-control my-2 " name="">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col" >
                            <button type="button" class="btn1 mt-3 mb-3">Send in my email </button>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" placeholder="Enter code word" class="form-control  my-2" name="">            </div>
                    </div>
                    <div class="form-row">
                        <div class="col" >
                            <button type="button" class="btn1 mt-3 mb-3">Send in my email </button>
                        </div>
                    </div>
                    <div class="pb-4">

                        <p>Don't have an account? <a href="/registr">Register here</a></p>
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
