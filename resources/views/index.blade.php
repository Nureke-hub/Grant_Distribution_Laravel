<!DOCTYPE>
<html>
<head>
   @include('templates/header')
    <title>Main Page</title>
</head>
<body>


@include('templates/navbar')

@include('templates/alerts')
<section class="slider">
    <div class="container">

        <div class="slider__inner">
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="slider__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>

                    <button type="button" class="slider__btn  default-btn" style="background-color:transparent; "data-toggle="modal" data-target="#exampleModal">
                        Подать  заявку на грант
                    </button>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="slider__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <button type="button" class="slider__btn  default-btn" style="background-color:transparent; "data-toggle="modal" data-target="#exampleModal">
                        Подать  заявку на грант
                    </button>
                </div>
            </div>
            <div class="slider__item">
                <div class="slider__item-content">
                    <div class="slider__title">
                        Lorem ipsum dolor sit amet
                    </div>
                    <div class="slider__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                    <button type="button" class="slider__btn  default-btn" style="background-color:transparent; "data-toggle="modal" data-target="#exampleModal">
                        Подать  заявку на грант
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- END OF SECTION -->





<section class="about">
    <div class="container">
        <div class="about__top">
            <div class="about__title-box">
                <div class="about-title">
                    Lorem ipsum
                </div>
                <div class="about-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>
            <div class="about__btn">
                <a href="#" >
                    Lorem ipsum
                </a>
            </div>
        </div>
        <div class="about__items">
            <div class="about__item">
                <img src="img/aboot_item-1.png" alt="">
                <div class="about__item-title">
                    dolor sit amet
                </div>
                <div class="about__item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="about__item-btn">
                    <a class = "about__item-link" href="#"> Подробнее</a>
                    <a  data-fancybox data-src ="#modal" href="javascript:;" class="default-btn">
                        dolor sit amet
                    </a>
                </div>
            </div>
            <div class="about__item">
                <img src="img/aboot_item-1.png" alt="">
                <div class="about__item-title">
                    Lorem ipsum
                </div>
                <div class="about__item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="about__item-btn">
                    <a class = "about__item-link" href="#"> Подробнее</a>
                    <a  data-fancybox data-src ="#modal" href="javascript:;" class="default-btn">
                        Lorem ipsum
                    </a>
                </div>
            </div>
            <div class="about__item">
                <img src="img/aboot_item-1.png" alt="">
                <div class="about__item-title">
                    Lorem ipsum  dolor
                </div>
                <div class="about__item-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
                <div class="about__item-btn">
                    <a class = "about__item-link" href="#"> Подробнее</a>
                    <a  data-fancybox data-src ="#modal" href="javascript:;" class="default-btn">
                        Lorem ipsum
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services">
    <div class="container">
        <div class="services__title">
            Lorem ipsum
        </div>
        <div class="services__text">
            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
        </div>

    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="pt-4 container">
                <h4> Registration </h4>
                <form>
                    <input type="email" placeholder="Email address" class="form-control my-2 p-3 pb-2" name="">
                    <input type="password" placeholder="Password" class="form-control  my-2 p-3 pb-2" name="">
                    <input type="password" placeholder="Re-password" class="form-control  my-2 p-3" name="">
                    <button type="button" class="btn1 mt-3 mb-3">Registration</button>
                </form>
            </div>
        </div>
    </div>
</div>

@include('templates/footer')


</body>
</html>
