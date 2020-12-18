<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Contacts</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
@include('templates/navbar')

<div class="container" style ="background-color: #DCDCDC">

    @include('templates/menu')

    <div class = "mt-4"style="float:right; width: 800px; border: 1px solid lightgrey;">
        <div class = "mt-4"style="float:right; width: 800px; border: 1px solid lightgrey;">
            <div class="pl-4 pr-4 pt-4">
                <h2 class="display-5" style="text-align: center">{{$student->full_name}}</h2>
            </div>
            <div style="text-align: center;">
                @if($student->feadback != null)
                    <h2 style="color: red;">{{$student->feadback}}</h2>
                    <img src="img/message.png" style="height: 100%;">
                @endif
                @if($student->feadback == null)
                    <h2 style="color: red;">You have no new messages</h2>
                    <img src="img/no_data.png" style="height: 100%;">
                @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>
