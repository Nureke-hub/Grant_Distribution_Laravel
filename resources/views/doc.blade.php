<!DOCTYPE>
<html>
<head>
   @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/navbar')
<section >
{{--    <iframe src="{{url('img/'.$data->pdf_udastak)}}" style="width: 600px; height: 500px;"></iframe>--}}
    <div style="margin-left: 200px;">
    <embed src="{{url('documents/'.$data->file)}}" width="900px" height="1000" />
    </div>
</section>




@include('templates/footer')


</body>
</html>


