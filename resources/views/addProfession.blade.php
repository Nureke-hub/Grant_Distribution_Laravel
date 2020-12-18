<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/adminNav')


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
