<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/adminNav')


<div class="container mt-4 pt-4">
    <form action="/add" method="get">
    <div style="float:left; width: 200px;">
        <button type="submit" class="btn1 mt-3 mb-3 ">+Add</button>
    </div>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Code</th>
            <th scope="col">Count of Grant</th>
            <th scope="col">Count of quota</th>

        </tr>
        </thead>
        <tbody>
        @foreach($professions as $st)
            <tr>
                <th scope="row">{{$st->id}}</th>
                <td><a href="/viewProfession/{{$st->id}}">
                        {{$st->name}}</a></td>
                <td>{{$st->code}}</td>
                <td>{{$st->count_of_grants}}</td>


                @if($st->quota==1)
                    <td>{{$st->count_of_quota}}</td>
                @else
                    <td>0</td>
                    @endif

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

@include('templates/footer')
</html>
