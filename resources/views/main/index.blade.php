@extends('layout.master')

@section('title', '형제철강레이져')

@section('open')
    <body class="homepage is-preload">
@endsection

@section('close')
    </body>
@endsection
        
@section('content')
    <!-- Banner -->
    <section id="banner">
        <header>
            <h2>
                ㈜형제철강레이져
            </h2>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, dolorem quibusdam reiciendis enim
                quis soluta voluptates
            </p>
        </header>
    </section>

    <!-- Carousel -->
    <section class="carousel">
        <div class="reel">
            <article>
                <img src="images/hj/productEx.png" alt="">
            </article>

            <article>
                <img src="images/hj/productEx2.png" alt="">
            </article>

            <article>
                <img src="images/hj/productEx3.png" alt="">
            </article>

            <article>
                <img src="images/hj/laserCutting.jpeg" alt="">
            </article>
        </div>
    </section>


    <!-- Features -->
    <div class="wrapper">
        <section id="features" class="container special">
            <header>
                <h2>보유 설비</h2>

                <p>
                    <span class="mBtn mSelect">Bending-M</span>
                    <span class="mBtn">Laser-M</span>
                    <span class="mBtn">Sharing-M</span>
                    <span class="mBtn">Cutting-M</span>
                    <span class="mBtn">Rolling-M</span>
                </p>
            </header>

            <div class="row">
                <article class="col-4 col-12-mobile special">
                    <div class="image featured">
                        <img class="mImage" src="images/hj/bendingM3.jpg" height="250" alt="" />
                    </div>

                    <header>
                        <h3 class="mName">Bending-M_1</h3>
                    </header>

                    <p class="mContent">
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor
                        etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat
                        integer
                        interdum.
                    </p>
                </article>

                <article class="col-4 col-12-mobile special">
                    <div class="image featured">
                        <img class="mImage" src="images/hj/bendingM2.png" height="250" alt="" />
                    </div>

                    <header>
                        <h3 class="mName">Bending-M_2</h3>
                    </header>

                    <p class="mContent">
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor
                        etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat
                        integer
                        interdum.
                    </p>
                </article>

                <article class="col-4 col-12-mobile special">
                    <div class="image featured">
                        <img class="mImage" src="images/hj/bendingM3.jpg" height="250" alt="" />
                    </div>

                    <header>
                        <h3 class="mName">Bending-M_3</h3>
                    </header>

                    <p class="mContent">
                        Amet nullam fringilla nibh nulla convallis tique ante proin sociis accumsan lobortis. Auctor
                        etiam
                        porttitor phasellus tempus cubilia ultrices tempor sagittis. Nisl fermentum consequat
                        integer
                        interdum.
                    </p>
                </article>
            </div>
        </section>
    </div>

    <div id="temp" class="wrapper">
        <h2 id="tempTitle">
            F u t u r e &nbsp;&nbsp;o f&nbsp;&nbsp; H J
            <p id="tempSub">
                ㈜형제철강레이져의 기술로 행복한 세상을 만들겠습니다.
            </p>
        </h2>

        <div id="tempBack">
            <div id="tempFront"></div>
        </div>
    </div>
@endsection