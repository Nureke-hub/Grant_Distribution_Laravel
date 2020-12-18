<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Contacts</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
@include('templates/navbar')

<<section class="profile">
    <div class="container" style ="background-color: #DCDCDC">

        @include('templates/menu')

        <div>
            <div class = "mt-4"style="float:right; width: 800px; border: 1px solid lightgrey;">
                <form action="/save_choices" method="post">
                    @csrf
                    <div class="pl-4 pr-4 pt-4">
                        <h2 class="display-5" style="text-align: center">
                            @if($student->full_name)
                                {{$student->full_name}}
                            @endif</h2>
                        <div class="mt-3 pb-3 pl-3 pt-3 pr-3" style="border: 1px solid lightgrey">
                            <h4 class="pt-3 pb-3" style="text-align: center">Choose university</h4>

                            <div class="form-group row">
                                <select name="univer_1" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_1" onchange="getProfs('profs_select_1')">
                                    <option selected value="not">University</option>
                                    @foreach($universities as $univer)
                                        <option value="{{$univer->id}}">{{$univer->name}}</option>
                                    @endforeach
                                </select>
                                <div class="col">
                                    <select name="prof_1" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_1_resp" >
                                        <option selected value="not">Profession </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <select name="univer_2" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_2" onchange="getProfs('profs_select_2')" >
                                    <option selected value="not">University</option>
                                    @foreach($universities as $univer)
                                        <option value="{{$univer->id}}">{{$univer->name}}</option>
                                    @endforeach
                                </select>
                                <div class="col">
                                    <select name="prof_2" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_2_resp" >
                                        <option selected value="not">Profession </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <select name="univer_3" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_3" onchange="getProfs('profs_select_3')" >
                                    <option selected>University</option>
                                    @foreach($universities as $univer)
                                        <option value="{{$univer->id}}">{{$univer->name}}</option>
                                    @endforeach
                                </select>
                                <div class="col">
                                    <select name="prof_3" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_3_resp" >
                                        <option selected value="not">Profession </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <select name="univer_4" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_4" onchange="getProfs('profs_select_4')" >
                                    <option selected>University</option>
                                    @foreach($universities as $univer)
                                        <option value="{{$univer->id}}">{{$univer->name}}</option>
                                    @endforeach
                                </select>
                                <div class="col">
                                    <select name="prof_4" class="custom-select col-lg-5 mr-5 ml-3" id="profs_select_4_resp" >
                                        <option selected value="not">Profession </option>
                                    </select>
                                </div>
                            </div>
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

<script type="text/javascript">
    const getResponse = (url) => {
        return fetch(url).then((resp) => {
            return resp.json();
        });
    };
    const getProfs = (id) => {
        const url = '/get_profs?univer_id=' + document.getElementById(id).value;
        const select = document.getElementById(id+'_resp');
        getResponse(url).then((object) => {
            console.log(object.professions);
            // console.log(typeof object).professions;
            select.innerHTML = `<option selected value='not'>Profession </option>`;
            let list = object.professions;
            for (let i in list) {
                select.innerHTML += `<option value='${list[i].id}' >${list[i].code}</option>`;
            }
        });
    }
</script>
</body>
</html>
