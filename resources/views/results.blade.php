<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Contacts</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
@include('templates/navbar')

<div class="container" style ="background-color: #DCDCDC;">

    <table class="table table-hover">
        <thead style="text-align: center" class="thead-dark">
        <tr>
            <th scope="col">User id</th>
            <th scope="col">User full name</th>
            <th scope="col">Profession</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody style="text-align: center">
        @foreach($students as $student)
            @foreach($winners as $winner)
                    @if($winner->user_id == $student->id)
                        @foreach($prof_univers as $prof_univer)
                            @if($prof_univer->id == $winner->prof_univer_id)
                                @foreach($professions as $profession)
                                    @if($prof_univer->prof_id == $profession->id)
                                        <tr>
                                            <th scope="row">{{$student->id}}</th>
                                            <td>{{$student->full_name}}</td>
                                            <td>{{$profession->name}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    @endif
            @endforeach
        @endforeach
        </tbody>
    </table>

</div>

</body>
</html>
