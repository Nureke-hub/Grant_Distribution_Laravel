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
                <h2 class="display-5" style="text-align: center; color: red">{{$text}}</h2>
                @if(isset($winner))
                    <img src="img/Winners-pana.png" style="height: 100%;">
                @endif
                @if($winner==null && $winners ==null)
                    <img src="img/no_data.png" style="height: 100%;">
                @endif
                @if($winner==null && $winners !=null)
                    <img src="img/Feeling sorry-bro.png" style="height: 100%;">
                @endif
            </div>
        </div>
    </div>
</div>

</body>
</html>
