<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" />
    <title>Instruction</title>
    @include('templates/header')
</head>
<body>
@include('templates/navbar')
<div id="wrap">
    <div id="header">
        <div id="logo">
            <h1> Follow the <span>Instruction!! </span> </h1>
        </div>
        <div class="important" style="margin-bottom: 25px; padding-bottom: 25px;">
            <h3> Instruction!! </h3>
            <p>  Welcome dear

                @if(Auth::check())
                    <a href="{{route('profile')}}">{{Auth::user()->getEmailOrName()}}</a>
                @else
                    <a href="#">User</a>
                @endif
                In this platform, you can apply for government and targeted grants.
            </p>
        </div>
        <div id="content">
            <div class="num1">
                <h1> 1 </h1>
            </div>
            <div class="con1">
                <p>In order to apply, you must first register in our system, if you are registered you can skip this point. </p>
            </div>
            <div class="pic1"></div>
            <div class="important" style="width: 100%">
                <p>
                    To do this, on the main page, click on the button:<br>
                    1) "Apply for a grant", in the window that appears, fill in your data correctly and please do not forget your password<br>
                    2) "Sign in", and at the bottom there is a question "You do not have an account? Register here", click on the word "Register here". In the page that appears, fill in the data and do not forget your password.
                </p>
            </div>
            <hr style="color: #1a202c">
<div style="color: black; padding-top: 40px;">

                    <h3> After registration, you are taken to the main page, your email address appears in the top menu, by clicking on it you go to your personal account. </h3>
                    <p>
                        There is a menu on the left side of the site for your account: <br>
                        1) Profile<br>
                        2) My choices<br>
                        3) Status<br>
                        4) Messages<br>
                    </p>
</div>


            <div class="num2">
                <h1> 2 </h1>
            </div>
            <div class="con2">
                <p>
                    Profile. <br>
                    Profile is a page where you fill in all your data.
                </p>
            </div>
            <div class="pic2"></div>
            <div class="important" style="width: 100%">
                <p>
                    <br>

                    From the first, you need to fill in your details as: name, gender and photo 3x4.<br>

                    Second, you need to enter your ID details and upload a photo of him on both sides. Please note that in this field you can upload only one file, so please upload both photos in one file.<br>

                    Third, you must enter the details of the school leaving certificate (Certificate). At the bottom, select which diploma you graduated with and also upload a photo of the Certificate.<br>

                    Fourth, you need to enter the data of the UNT certificate.<br>
                    Choose in which language you took UNT and upload a photo of the Certificate.<br>

                    And the last thing you need to upload the photos of the medical examination in the format 063 and 086. If your gender is male, upload a photo of the registered officer from the military registration and enlistment office.<br>
                    And if you have a quota, then select the type of your quota and upload a photo of it.<br>

                    If you accidentally filled in the data incorrectly and sent it, do not worry, the admissions office will send you back a message with an order that you have entered incorrect data and will indicate where you need to correct the data. After that, you can update the data and re-apply for the grant.
                </p>
            </div>

            <div class="num3">
                <h1> 3 </h1>
            </div>
            <div class="con3">
                <p> My choices.
                    <br>
                    My Choices - on this page you can choose your desired university and profession and apply for a grant.
                </p>
            </div>
            <div class="pic3"></div>
            <div class="important" style="width: 100%">
                <p>
                    <br>
                    <br>
                    Please send your application only after you have filled in all your details in your profile.
                    <br>
                    <br>
                </p>
            </div>


            <div class="num1">
                <h1> 4 </h1>
            </div>
            <div class="con1">
                <p> Status.
                    <br>
                    Status - displays the status of your profile.
                </p>
            </div>
            <div class="pic3"></div>
            <div class="important" style="width: 100%">
                <p>

                    He can be
                    pending - Admissions office is reviewing your details
                    approved - your documents are correct and the selection committee has accepted your candidacy
                    not approved - entered incorrect data please correct.
                    And after the competitions we entered the grant, but did not receive the grant.

                </p>
            </div>


            <div class="num2">
                <h1> 5 </h1>
            </div>
            <div class="con2">
                <p>
                    Messages
                </p>
            </div>
            <div class="pic2"></div>
            <h4 style="margin-top: 40px; padding-top: 25px; color: black">- if you filled in the data incorrectly, then the messages of the selection committee will be displayed here.</h4>

        </div>

        <div id="conbot">
            <div class="botcon">

                <h3> Contacts. Results </h3>
                <p> There is a Contacts button in the header of the site, by clicking on it you will be taken to a page where the map and contacts of our university are displayed.

                    There is a Results button in the header of the site - a list of grant winners will be displayed there. </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
