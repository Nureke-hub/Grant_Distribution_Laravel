<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/adminNav')


<div class="container mt-4 pt-4" >
    <form action="/editProfession" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$prof->id}}">
        <div class="input-group mb-3 col-4" style="margin-top: 150px;">
            <span class="input-group-text" id="basic-addon1">Name</span>

            <input type="text"
                   @if($prof->name)
                       value="{{$prof->name}}"
                       @endif
                   name="name"
                   class="form-control"
                   aria-label="Username"
                   aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 col-4">
            <span class="input-group-text" id="basic-addon1">Code</span>
            <input type="text"
                   @if($prof->code)
                   value="{{$prof->code}}"
                   @endif
                   name="code" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3 col-4">
            <span class="input-group-text" id="basic-addon1">Count of grant</span>
            <input type="number"
                   @if($prof->count_of_grants)
                   value="{{$prof->count_of_grants}}"
                   @endif
                   name="count_of_grants" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="mb-3 form-check col-4 ">

            <input type="checkbox" name="quota" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label"  for="exampleCheck1">Quota?</label>

        </div>
        <div class="input-group mb-3 col-4">
            <span class="input-group-text" id="basic-addon1">Count of grant</span>
            <input type="number"
                   @if($prof->count_of_quota)
                   value="{{$prof->count_of_quota}}"
                   @endif
                   name="count_of_quota" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div style="float:left; width: 200px;">
            <a href="/professions" class="btn btn-info mt-3 mb-3 ">Cancel</a>
        </div>
        <div style="float:left; width: 200px;">
            <button type="submit" class="btn btn-success mt-3 mb-3 ">EDIT</button>
        </div>
    </form>
<form action="/delete" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$prof->id}}">
    <div style="float:left; width: 200px;">
        <button type="submit" class="btn btn-danger mt-3 mb-3 ">DELETE</button>
    </div>
</form>
</div>
</body>

@include('templates/footer')
</html>
