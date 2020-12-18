<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/adminNav')


<div class="container mt-4 pt-4">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> Full Name</th>
            <th scope="col">IIN</th>
            <th scope="col">Total of ents</th>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $st)
            <tr>
                <th scope="row">{{$st->id}}</th>
                <td><a href="/viewStudent/{{$st->id}}">
                        {{$st->full_name}}</a></td>
                @foreach($udastak as $u)
                    @if($u->user_id == $st->id)
                        <td>{{$u->iin}}</td>
                    @endif
                @endforeach

                @foreach($ents as $ent)
                    @if($ent->user_id == $st->id)
                        <td>{{$ent->total}}</td>
                        @endif
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

@include('templates/footer')
</html>
