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
        <h2>086</h2>
        <embed src="{{url('documents/'.$data->doc_086)}}" width="900px" height="600px" />
    </div>

    <div style="margin-left: 200px;">
        <h2>063</h2>
        <embed src="{{url('documents/'.$data->doc_063)}}" width="900px" height="500" />
    </div>
    @if($data->boy_reg)
        <div style="margin-left: 200px;">
            <h2>Boy registration</h2>
            <embed src="{{url('documents/'.$data->doc_063)}}" width="900px" height="500" />
        </div>
    @endif
    @if($data->pdf_quota)
        <div style="margin-left: 200px;">
            <h2>{{$data->quota}}</h2>
            <embed src="{{url('documents/'.$data->quota)}}" width="900px" height="500" />
        </div>
    @endif
</section>




@include('templates/footer')


</body>
</html>


