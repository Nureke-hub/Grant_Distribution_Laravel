

<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
    <style>

        /* NAVIGATION */
        nav {
            width: 100%;
            margin: 0 auto;
            background: #fff;

            box-shadow: 0px 5px 0px #dedede;
        }
        nav ul {
            list-style: center;
            text-align: left;
        }
        nav ul li {
            display: inline-block;
        }
        nav ul li a {
            display: block;
            padding: 15px;
            text-decoration: none;
            color: black;
            font-weight: 800;
            text-transform: uppercase;
            margin: 0 10px;
        }
        ul img{
            padding-left: 0;
        }
        nav ul li a,
        nav ul li a:after,
        nav ul li a:before {
            transition: all .5s;
        }
        nav ul li a:hover {
            color: #aaa;
        }



        /* SHIFT */
        nav.shift ul li a {
            position:relative;
            z-index: 1;
        }
        nav.shift ul li a:hover {
            color: black;
        }
        nav.shift ul li a:after {
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            width: 100%;
            height: 1px;
            content: '.';
            color: transparent;
            background: rgb(0, 223, 195);
            visibility: none;
            opacity: 0;
            z-index: -1;
        }
        nav.shift ul li a:hover:after {
            opacity: 1;
            visibility: visible;
            height: 100%;
        }

    </style>
</head>
<body>

<nav class="shift">

    <ul style="float: left">
        <img style = "margin-left:35px; float: left;"src="/img/iitu_logo.png">
        <li><a href="/professions">Professions</a></li>
        <li><a href="/decan">All candidates</a></li>
        <li><a href="/isChecked">Verified candidates</a></li>
        <li><a href="/unChecked">Unverified candidates</a></li>
        <li><a href="/algorithm">Run algorithm</a></li>
    </ul>
</nav>







<section >
    <div class="container" >

        <div class = "mt-4"style="float:right; width: 800px; border: 1px solid lightgrey;">
            <div class="pl-4 pr-4 pt-4">
                {{--                Full name && gender--}}
                <div class="pt-4">
                  <div class="form-row">
                    <div class="form-group col">
                        <label for="inputEmail4">Full name:</label>
                        @if($student->full_name)
                            <label style="font-weight: bolder">{{$student->full_name}}</label>
                        @endif
                    </div>
                </div>

                    @if ($student -> gender && $student -> gender==1 )
                        <div class="form-row">
                        <div class="form-group col">
                            <label for="exampleFormControlFile1">Male</label>
                        </div>
                        </div>
                    @endif
                    @if ($student -> gender && $student -> gender==0 )
                        <div class="form-row">
                        <div class="form-group col">
                            <label for="exampleFormControlFile1">Famale</label>
                        </div>
                        </div>
                    @endif
                    <img id="previewImg" alt="profile img"
                         @if($student->photo)
                         src="{{asset('documents')}}/{{$student->photo}}"
                         @endif
                         style="max-width: 130px;margin-top: 20px; margin-bottom: 30px;"/>
                </div>
            </div>

            {{--                    ENd of Full name and Gender--}}

            {{--            Udastac--}}

            <div class="form-rowpt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
                <div class="form-group col-md-6">

                        <h4 style="text-align: center">Datas for identification</h4>
                    <div class="form-group pt-4">
                        <label for="inputCity">IIN</label>
                    <label>
                        @if($udastak)
                            <label style="font-weight: bolder">{{$udastak->iin}}</label>
                            @endif
                    </label>
                    </div>

                    <div class="form-group">
                        <label for="inputAddress">Birthdate</label>
                        @if($udastak)
                            <label style="font-weight: bolder">{{$udastak->birth_date}}</label>
                        @endif
                    </div>

                    <div class="form-group pr-3">
                        <label for="inputAddress">Issued by</label>
                        @if($udastak)
                            <label style="font-weight: bolder">{{$udastak->by_whom}}</label>
                        @endif
                    </div>
                    <div class="form-group pr-3 ">
                        <label for="inputAddress">Nationality</label>
                        @if($udastak)
                            <label style="font-weight: bolder">{{$udastak->nationality}}</label>
                        @endif
                    </div>

                    @if($udastak && $udastak->file)
                        <div class="form-group pt-3 pb-1 pr-3  " >
                            <label for="exampleFormControlFile1">Download student document</label>
                            <a href="/download/{{$udastak->file}}">Dowload</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3  " >
                            <label for="exampleFormControlFile1">View your document</label>
                            <a href="/viewUdastak/{{$udastak->id}}">View</a>
                        </div>
                    @endif
            </div>


            {{--        ENDOF UDASTAK--}}


            <div class="form-rowpt-3 pb-3 mt-3 pl-4 pt-3 pr-3" style="border: 1px solid lightgrey">
                    <h4 class="pt-3 pb-3" style="text-align: center">Datas of school certifcation</h4>
                    <div class="form-group col">
                        <label for="inputPassword">Avarage of certifacation: </label>
                        @if($sch_cer && $sch_cer->avarage_point)
                            <label style="font-weight: bolder">{{$sch_cer->avarage_point}}</label>
                        @endif

                    </div>
                    <div class="form-group col">
                        <label for="inputEmail4">Name of school: </label>
                        @if($sch_cer && $sch_cer->school_name)
                            <label style="font-weight: bolder">{{$sch_cer->school_name}}</label>
                        @endif

                    </div>
                    <div class="form-group col">
                        <label for="inputEmail4">Region</label>
                        @if($sch_cer && $sch_cer->region)
                            <label style="font-weight: bolder">{{$sch_cer->region}}</label>
                        @endif

                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Graduation year: </label>
                        @if($sch_cer && $sch_cer->region)
                            <label style="font-weight: bolder">{{$sch_cer->graduation_year}}</label>
                        @endif
                    </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Type: </label>
                    @if($sch_cer && $sch_cer->type)
                        <label style="font-weight: bolder">{{$sch_cer->type}}</label>
                    @endif
                </div>

                    @if($sch_cer && $sch_cer->file)


                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Download student document</label>
                            <a href="/download/{{$sch_cer->file}}">Dowload</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">View your document</label>
                            <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                        </div>

                    @endif
            </div>

            <div class="mt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">

                    <h4 class="pt-3 pb-3" style="text-align: center">ENT</h4>

                    <div class="form-group row">
                        <label for="inputPassword" class="col col-form-label">Oku sauattylik</label>

                        <div class="col">
                            @if($ents && $ents->reading)
                                <label style="font-weight: bolder">{{$ents->reading}}</label>
                            @endif

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col col-form-label">Matematcalik sauattylik</label>
                        <div class="col">
                            @if($ents && $ents->math)
                                <label style="font-weight: bolder">{{$ents->math}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col col-form-label">History of Kazakhstan</label>
                        <div class="col">
                            @if($ents && $ents->history)
                                <label style="font-weight: bolder">{{$ents->history}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        @if($ents && $ents->subject_1_name)
                        <label for="inputPassword" class="col col-form-label">{{ $ents->subject_1_name}}</label>
                        @endif

                        <div class="col">
                            @if($ents && $ents->subject_1_point)
                                <label style="font-weight: bolder">{{ $ents->subject_1_point}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        @if($ents && $ents->subject_2_name)
                            <label for="inputPassword" class="col col-form-label">{{ $ents->subject_2_name}}</label>
                        @endif

                        <div class="col">
                            @if($ents && $ents->subject_2_point)
                                <label style="font-weight: bolder">{{ $ents->subject_2_point}}</label>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Сertificate TJK </label>
                        @if($ents && $ents->tjk)
                            <label style="font-weight: bolder">{{ $ents->tjk}}</label>
                        @endif
                    </div>
                @if($ents && $ents->language)
                    <label for="inputAddress">Language</label>
                    <label style="font-weight: bolder">{{ $ents->language}}</label>
                @endif
                <div class="form-group">
                    <label for="inputAddress">Total </label>
                    @if($ents && $ents->total)
                        <label style="font-weight: bolder">{{ $ents->total}}</label>
                    @endif
                </div>

                    @if($ents && $ents->file)


                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Download your document</label>
                            <a href="/download/{{$ents->file}}">Download</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">View  document</label>
                            <a href="/viewEnt/{{$ents->id}}">View</a>
                        </div>

                    @endif
            </div>
            <div class="mt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
                <div class="form-group pt-3 pb-1" >
                        <div class="row">
                            <div class="col">
                                <label for="exampleFormControlFile1">086-U with a fluorography image not earlier than March
                                    this year</label>
                            </div>
                            @if($sch_cer && $sch_cer->file&&$student->doc_086)


                                <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                                    <a href="/download/{{$sch_cer->file}}">Download</a>
                                </div>
                                <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                                    <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                                </div>

                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="form-group pt-3 pb-1" >
                        <div class="row">

                            <div class="col">
                                <label for="exampleFormControlFile1">vaccination card (form 063, or child health passport)</label>
                            </div>
                            @if($sch_cer && $sch_cer->file&&$student->doc_063)


                                <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                                    <a href="/download/{{$sch_cer->file}}">Download</a>
                                </div>
                                <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                                    <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                                </div>

                            @endif
                        </div>
                    </div>
                    <hr>
                    <div class="form-group pt-3 pb-1" >
                        <div class="row">
                            @if ($student -> gender && $student -> gender==1 )
                            <div class="col">
                                <label for="exampleFormControlFile1">certificate of registration (for boys)</label>
                            </div>
                                @if($sch_cer && $sch_cer->file && $student->boy_reg)


                                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                                        <a href="/download/{{$sch_cer->file}}">Download</a>
                                    </div>
                                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                                        <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                                    </div>

                                @endif

                                @endif
                        </div>
                    </div>
                    <hr>
                @if($student->quota)
                    <div class="col">
                        <label for="exampleFormControlFile1">{{$student->quota}}</label>
                    </div>
                    @if($sch_cer && $sch_cer->file)


                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                            <a href="/download/{{$sch_cer->file}}">Dowload</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >

                            <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                        </div>

                    @endif

                @endif
            </div>
        </div>
            <form action="/feedback" class="m-4" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$student->id}}">
                <div class="input-group">
                    <span class="input-group-text" style="color: red;">FEEDBACK</span>
                    <textarea name="feadback" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div style="margin-left: 260px;: center; width: 200px;">
                    <button type="submit" class="btn btn-danger mt-3 mb-3 ">Send where wrong</button>
                </div>

            </form>
            <form action="/checkedTrue" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$student->id}}">

                <div style="float: right;">
                    <button type="submit" class="btn btn-success mt-3 mb-3 ">All documents correct</button>
                </div>

            </form>
    </div>

    </div>


</section>
@include('templates/footer')

<script>
    function previewFile(input){
        var file =$("input[type=file]").get(0).files[0];
        if(file){
            var reader = new FileReader();
            reader.onload =function (){
                $('#previewImg').attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
    }
</script>


</body>
</html>
