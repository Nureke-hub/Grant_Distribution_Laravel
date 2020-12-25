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
    <ul style="float: left">
        <img style = "margin-left:35px; float: left;"src="/img/iitu_logo.png">
        <li><a href="/professions">Professions</a></li>
        <li><a href="/decan">All candidates</a></li>
        <li><a href="/isChecked">Verified candidates</a></li>
        <li><a href="/unChecked">Unverified candidates</a></li>
        <li><a href="/algorithm">Run algorithm</a></li>
    </ul>
</nav>



<div class="container p-4">
    <div class="row pt-5 pl-4">
    <div class="col-4">
        <img src="img/add.png" style="width: 300px;">
    </div>
    <div class="col-8">
    <form action="/addProfession" method="POST">
        @csrf

        <div class="input-group mb-3 col-8">
            <span class="input-group-text" id="basic-addon1">Name</span>
            <input type="text" name="name" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 col-8">
            <span class="input-group-text" id="basic-addon1">Code</span>
            <input type="text" name="code" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
    <div class="input-group mb-3 col-8">
        <span class="input-group-text" id="basic-addon1">Count of grant</span>
        <input type="number" name="count_of_grants" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
    </div>
        <div class="mb-3 form-check col-8 ">

            <input type="checkbox" name="quota" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Quota?</label>

        </div>
        <div class="input-group mb-3 col-8">
            <span class="input-group-text" id="basic-addon1">Count of grant</span>
            <input type="number" name="count_of_quota" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div style="float:left; width: 200px;">
            <button type="submit" class="btn1 mt-3 mb-3 ">+Add</button>
        </div>
    </form>
    </div>
</div>
</div>
</body>

@include('templates/footer')
</html>
