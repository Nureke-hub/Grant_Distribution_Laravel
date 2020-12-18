<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/navbar')

@include('templates/alerts')

<section >
    <div class="container" >
        @include('templates/menu')


        <div class = "mt-4"style="float:right; width: 800px; border: 1px solid lightgrey;">
            <div class="pl-4 pr-4 pt-4">
{{--                Full name && gender--}}
                <div class="pt-4">
                    <form action="/editName" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ Auth::id()}}" name="id">

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="inputEmail4">Full name</label>
                            <input type="text" name ="full_name"
                                   @if($student->full_name)
                                       value="{{$student->full_name}}"
                                       @endif
                                   class="form-control" id="inputEmail4"  placeholder="Enter your full name.">
                        </div>

                    </div>
                    <div class="custom-control custom-radio custom-control-inline pl-7 ">
                        <input type="radio" id="gender1" value="M" name="gender" class="custom-control-input"
                        @if ($student -> gender && $student -> gender==true )
                            checked
                            @endif>
                        <label class="custom-control-label" for="gender1">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="gender2" value="F" name="gender" class="custom-control-input"
                               @if ($student -> gender && $student -> gender==false )
                               checked
                            @endif>
                        <label class="custom-control-label" for="gender2" >Famale </label>
                    </div>
                    <div class="form-group mt-3 pt-3 pb-3 pl-3 pr-3" style="border: 1px solid lightgrey">
                        <label>Upload your 3x4 photo</label>
                        <input type="file" class="form-control-file" onchange="previewFile(this)" name="file" id="exampleFormControlFile1">
                        <img id="previewImg" alt="profile img"
                             @if($student->photo)
                                 src="{{asset('documents')}}/{{$student->photo}}"
                                 @endif
                             style="max-width: 130px;margin-top: 20px;"/>
                    </div>

                        <div style="margin-left: 260px;: center; width: 200px;">
                            <button type="submit" class="btn1 mt-3 mb-3 ">Send</button>
                        </div>
                </form>

{{--                    ENd of Full name and Gender--}}



                </div>
            </div>

{{--            Udastac--}}

            <div class="form-rowpt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
                <form action="/editUdastak" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" value="{{ Auth::id()}}" name="user_id">
                <div class="form-group col-md-6">
                    <h4 style="text-align: center">Datas for identification</h4>

                    <label for="inputCity">IIN</label>
                    <input type="number" class="form-control" name="iin" id="inputCity"
                           @if($udastak)
                               value="{{$udastak->iin}}"
                               @endif
                           placeholder="000424600966">
                </div>
                <div class="form-group pb-4">
                    <label for="inputAddress">Birthdate</label>
                    <input type="date"
                           @if($udastak)
                           value="{{$udastak->birth_date}}"
                           @endif
                           name="birth_date" class="form-control" id="inputAddress" style="width: 250px;">
                </div>

                <div class="form-group pr-3 pl-3">
                    <label for="inputAddress">Issued by</label>
                    <input type="text" name="by_whom"
                           @if($udastak)
                           value="{{$udastak->by_whom}}"
                           @endif
                           class="form-control" id="inputAddress" placeholder="KR IIM">
                </div>
                    <div class="form-group pr-3 pl-3">
                        <label for="inputAddress">Nationality</label>
                        <input type="text" name="nationality"
                               @if($udastak)
                               value="{{$udastak->nationality}}"
                               @endif
                               class="form-control" id="inputAddress" placeholder="kazakh">
                    </div>

                    @if($udastak && $udastak->file)

                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Edit your identity card</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Download your document</label>
                            <a href="/download/{{$udastak->file}}">Dowload</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">View your document</label>
                            <a href="/viewUdastak/{{$udastak->id}}">View</a>
                        </div>

                      @else
                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                        <label for="exampleFormControlFile1">Upload your identity card</label>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    @endif
                    <div style="margin-left: 260px;: center; width: 200px;">
                        <button type="submit" class="btn1 mt-3 mb-3 ">Send</button>
                    </div>

            </form>
            </div>


{{--        ENDOF UDASTAK--}}


            <div class="form-rowpt-3 pb-3 mt-3 pl-4 pt-3 pr-3" style="border: 1px solid lightgrey">
                <form action="/editSchoolCerteficate" method="POST" enctype="multipart/form-data">
                    @csrf
                <h4 class="pt-3 pb-3" style="text-align: center">Datas of school certifcation</h4>
                <div class="form-group row">
                    <label for="inputPassword" class="col col-form-label">Avarage of certifacation</label>
                    <div class="col">
                        <input type="number"
                               @if($sch_cer && $sch_cer->avarage_point)
                               value="{{$sch_cer->avarage_point}}"
                               @endif
                               class="form-control" name="avarage_point" id="inputPassword" min="2" max="5" placeholder="4.9" style="width:150px; ">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="inputEmail4">Name of school</label>
                    <input type="text"
                           @if($sch_cer && $sch_cer->school_name)
                           value="{{$sch_cer->school_name}}"
                           @endif
                           name ="school_name" class="form-control" id="inputEmail4"  placeholder="Enter your school name">
                </div>
                <div class="form-group col">
                    <label for="inputEmail4">Region</label>
                    <input type="text"
                           @if($sch_cer && $sch_cer->region)
                           value="{{$sch_cer->region}}"
                           @endif
                           name ="region" class="form-control" id="inputEmail4"  placeholder="Enter your school region">
                </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Graduation year</label>
                        <input type="number"
                               @if($sch_cer && $sch_cer->graduation_year)
                               value="{{$sch_cer->graduation_year}}"
                               @endif
                               name ="graduation_year" class="form-control" id="inputEmail4" maxlength="4" placeholder="Enter your graduation year">
                    </div>
                <div class="pt-4">
                    <div class="custom-control custom-radio custom-control-inline pl-7 ">
                        <input type="radio" id="customRadioInline1"  value="golden"

                               name="type" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline1">Golden medal</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2"  value="red"name="type" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Red certificate </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2"  value="blue" name="type" class="custom-control-input">
                        <label class="custom-control-label" for="customRadioInline2">Blue certificate </label>
                    </div>
                </div>
                    @if($sch_cer && $sch_cer->file)

                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Edit your certeficate</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Download your document</label>
                            <a href="/download/{{$sch_cer->file}}">Dowload</a>
                        </div>
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">View your document</label>
                            <a href="/viewSchCer/{{$sch_cer->id}}">View</a>
                        </div>

                    @else
                        <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                            <label for="exampleFormControlFile1">Upload your identity card</label>
                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    @endif
                    <div style="margin-left: 260px;: center; width: 200px;">
                        <button type="submit" class="btn1 mt-3 mb-3 ">Send</button>
                    </div>
                </form>

            </div>






        <div class="mt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
            <form action="/editENTCerteficate" method="POST" enctype="multipart/form-data">
                @csrf
            <h4 class="pt-3 pb-3" style="text-align: center">ENT</h4>
                @if(Session::has('danger'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('danger')}}
                    </div>

                @endif
            <div class="form-group row">
                <label for="inputPassword" class="col col-form-label">Oku sauattylik</label>
                <div class="col">
                    <input type="number" name="reading" required min="0" max="20"
                           @if($ents && $ents->reading)
                           value="{{$ents->reading}}"
                           @endif
                           class="form-control" id="inputPassword" placeholder="20" style="width:150px; ">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col col-form-label">Matematcalik sauattylik</label>
                <div class="col">
                    <input type="number"
                           @if($ents && $ents->math)
                           value="{{$ents->math}}"
                           @endif
                           name="math" min="0" max="20"required class="form-control" id="inputPassword" placeholder="20" style="width:150px; ">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col col-form-label">History of Kazakhstan</label>
                <div class="col">
                    <input type="number" required
                           @if($ents && $ents->history)
                           value="{{$ents->history}}"
                           @endif
                           name="history" min="0" max="20" class="form-control" id="inputPassword" placeholder="20" style="width:150px; ">
                </div>
            </div>
            <div class="form-group row">
                <select name="subject_1_name"  required class="custom-select col-lg-5 mr-5 ml-3" id="inlineFormCustomSelect" >
                    <option selected>First subject</option>
                    <option value="Mathematic">Mathematic</option>
                    <option value="Phisics">Phisics</option>
                    <option value="Geography">Geography</option>
                </select>
                <div class="col">
                    <input type="number"
                           @if($ents && $ents->subject_1_point)
                           value="{{$ents->subject_1_point}}"
                           @endif
                           name="subject_1_point" required min="0" max="40" class="form-control" id="inputPassword" placeholder="40" style="width:150px; ">
                </div>
            </div>
            <div class="form-group row">
                <select name="subject_2_name" required class="custom-select col-lg-5 mr-5 ml-3" id="inlineFormCustomSelect" >
                    <option selected>First subject</option>
                    <option value="Mathematic">Mathematic</option>
                    <option value="Phisics">Phisics</option>
                    <option value="Geography">Geography</option>
                </select>
                <div class="col">
                    <input type="number" required
                           @if($ents && $ents->subject_2_point)
                           value="{{$ents->subject_2_point}}"
                           @endif
                           name="subject_2_point" min="0" max="40" class="form-control" id="inputPassword" placeholder="40" style="width:150px; ">
                </div>
            </div>
            <div class="form-group">
                <label for="inputAddress">Сertificate TJK </label>
                <input type="text" required
                       @if($ents && $ents->tjk)
                       value="{{$ents->tjk}}"
                       @endif
                       name="tjk" class="form-control" id="inputAddress" placeholder="12345678">
            </div>
            <select name="language" required class="custom-select col-lg-5 mr-5 ml-3" id="inlineFormCustomSelect" >
                <option selected>Language</option>
                <option value="kz">Kazakh</option>
                <option value="ru">Russian</option>
                <option value="eng">English</option>
            </select>

                @if($ents && $ents->file)

                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                        <label for="exampleFormControlFile1">Edit your certeficate</label>
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                        <label for="exampleFormControlFile1">Download your document</label>
                        <a href="/download/{{$ents->file}}">Dowload</a>
                    </div>
                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                        <label for="exampleFormControlFile1">View your document</label>
                        <a href="/viewEnt/{{$ents->id}}">View</a>
                    </div>

                @else
                    <div class="form-group pt-3 pb-1 pr-3 pl-3 " >
                        <label for="exampleFormControlFile1">Upload your identity card</label>
                        <input type="file" name="file" required class="form-control-file" id="exampleFormControlFile1">
                    </div>
                @endif
                <div style="margin-left: 260px;: center; width: 200px;">
                    <button type="submit" class="btn1 mt-3 mb-3 ">Send</button>
                </div>
            </form>

        </div>




        <div class="mt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
            <form action="/editDocFiles" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group pt-3 pb-1" >
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlFile1">086-U with a fluorography image not earlier than March
                                this year</label>
                        </div>
                        <div class="col">
                            <input type="file" name="086" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <hr>




                <div class="form-group pt-3 pb-1" >
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlFile1">vaccination card (form 063, or child health passport)</label>
                        </div>
                        <div class="col">
                            <input type="file" name="063"  class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <hr>


                <div class="form-group pt-3 pb-1" >
                    <div class="row">
                        <div class="col">
                            <label for="exampleFormControlFile1">certificate of registration (for boys)</label>
                        </div>
                        <div class="col">
                            <input type="file" name="boy_reg"class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
                <hr>


            <h4 class="pt-4" style="font-weight: lighter; ">*If you have quota</h4>

            <div class="form-group row">
                <select name="quota" class="custom-select col-lg-5 mr-5 ml-3" id="inlineFormCustomSelect" >
                    <option value="" selected>Quota</option>
                    <option value="1">Quota for orphans</option>
                    <option value="2">Disabled quota</option>
                    <option value="3">WWII quota</option>
                    <option value="4">Quota for Kazakh nationalities who are not citizens of the Republic of Kazakhstan</option>
                </select>
                <div class="col">
                    <input type="file" name="pdf_quota" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>
            <div style="margin-left: 260px;: center; width: 250px;">
                <button type="submit" class="btn1 mt-3 mb-3 ">Send</button>
            </div>
            </form>
        </div>
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
