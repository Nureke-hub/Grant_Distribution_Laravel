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
                @if(!($student->isChecked) && ($student->feadback)==null)
                    <h2 style="color: red;">For consideration</h2>
                    <img src="img/inprocess.png" style="height: 100%;">
                @endif

                @if(!($student->isChecked) && ($student->feadback)!=null)
                    <h2 style="color: red;">The admissions committee did not accept your application, check your messages, it will indicate which documents to correct.</h2>
                    <img src="img/Warning-pana.png" style="height: 100%;">
                @endif

                @if($student->isChecked)
                    <h2 style="color: red;">Congratulations, your documents are correct and the selection committee has accepted your application. Wait for the results of the competition.</h2>
                    <img src="img/Ok-amico.png" style="height: 100%;">
                @endif

            </div>
        </div>
    </div>
</div>


<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/slick.min.js"></script>
<script src = "js/main.js"></script>
<!-- END of Scripts -->

</body>
</html>
