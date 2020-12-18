<!DOCTYPE>
<html>
<head>
    @include('templates/header')
    <title>Contacts</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

@include('templates/navbar')


<section id="contact">
    <div class="social">
        <a href="#"> <i class="fab fa-facebook-f"></i></a>
        <a href="#"> <i class="fab fa-instagram"></i></a>
        <a href="#"> <i class="fab fa-twitter"></i></a>
        <a href="#"> <i class="fab fa-whatsapp"></i></a>
        <a href="#"> <i class="fab fa-telegram"></i></a>
    </div>
    <div class="contact-box">
        <div class="c-heading">
            <h1>Get in touch</h1>
            <p>Call or Email Us Regarding Questions Or Issues</p>
        </div>
        <div class="c-inputs">
            <input type="text" placeholder="Full Name"/>
            <input type="email" placeholder="example@gmail.com"/>
            <textarea name="message" placeholder="Write message"></textarea>
            <button> SEND </button>

        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.7764533415343!2d76.9075561147822!3d43.235146379137795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3883692f027581ad%3A0x2426740f56437e63!2z0JzQtdC20LTRg9C90LDRgNC-0LTQvdGL0Lkg0YPQvdC40LLQtdGA0YHQuNGC0LXRgiDQuNC90YTQvtGA0LzQsNGG0LjQvtC90L3Ri9GFINGC0LXRhdC90L7Qu9C-0LPQuNC5!5e0!3m2!1sru!2skz!4v1600625981545!5m2!1sru!2skz" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>

</body>
</html>
