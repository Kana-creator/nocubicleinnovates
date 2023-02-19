<style>
    * {
        padding: 0;
        margin: 0;
    }

    .navbar {
        /*background: rgb(0,0,100, .1);*/
        min-height: 90px;
        color: #fff;
    }

    #navbarResponsive .navbar-nav .nav-item .nav-link,
    .navbar-brand {
        color: #fff;
        text-transform: capitalize;
        font-size: 13px;
    }

    #navbarResponsive .navbar-nav .nav-item .nav-link:hover {
        color: #0a9;
    }

    #navbarResponsive .navbar-nav .nav-item .nav-link.about {
        color: #0a9;
        border-bottom: 2px solid #0a9;
    }

    .main {
        /*padding: 50px;*/
        width: 90%;
        margin: auto;
    }

    .banner-main {
        background: url("./imgs/bod-banner.jpg");
        background-size: 100% 100%;
        height: 100vh;
        position: absolute;
        width: 100%;
        top: 0;
        left: 0;
    }


    .banner-inner {
        position: absolute;
        text-align: center;
    }

    .banner-inner.active {
        transition: .5s;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .banner-inner>h2 {
        font-size: 75px;
        font-weight: 100;
        letter-spacing: 10px;
        color: #fff;
    }

    .banner-inner>p {
        color: #fff;
        font-size: 20px;
    }

    .overlay {
        background: rgb(10, 35, 45, .4);
        width: 100%;
        height: 100%;
        color: #fff;
    }

    img {
        width: 100%;
        height: 100%;
    }

    .projects-child>h3 {
        background: rgb(10, 55, 65);
        color: #fff;
        width: 50%;
        margin: auto;
        font-size: 16px;
        padding: 10px 5px;
        text-transform: uppercase;
        letter-spacing: 2px;
        text: center;
    }

    .padding {
        padding: 0 20px;
    }

    .director-img {
        overflow: hidden;
    }

    .director-img>img {
        height: 300px;
    }

    .director-img>img:hover {
        transform: scale(1.1);
        transition: 1s;
    }

    @media(max-width: 991px) {

        .banner-main {
            height: 90vh;
        }

        div.containers {
            padding: 0;
            margin: 0;
            width: 100%;
        }

        .banner-inner {
            margin: auto;
            width: 95%;
        }

        .main {
            padding: 0;
        }

        .padding {
            padding: 0;
        }

        .banner-inner>h2 {
            font-size: 30px;
            font-weight: 100;
            letter-spacing: 10px;
            color: #fff;
        }

        .banner-inner>p {
            color: #fff;
            font-size: 16px;
        }

        .director-img img {
            height: 300px;
        }

    }
</style>

<div class="banner">
    <?php include 'inc/header.php'; ?>
    <link rel="shortcut icon" href="imgs/logo3.png" />

    <div class="banner-main" style="">
        <div class="overlay">
            <div class="banner-inner">
                <h2>About Us</h2>
                <p class="p-1">We work with the leading innovators
                    to develop and deploy inclusive and sustainable solutions that can
                    improve the lives of low income earners, cooperatives, individuals,
                    small businesses and poor communities.</p>
            </div>
        </div>
    </div>


    <div class="containers">

        <div class="main" style="margin-top: 90vh;">
            <div class="my-5 row justify-content-center">
                <div class="col-lg-6 text-center my-5">
                    <h1 class="my-5">OUR TEAM</h1>
                    <p class="p-1">Our team of experts include financial analysts, Medical Specialist, Economists, Product
                        managers, full-stack technologists, data scientists, business strategists, researchers, designers,
                        investors, Agricultural experts and Insurance professionals which brings along wealth of
                        experiences in developing inclusive solutions that facilitate better livelihoods and resilience of
                        vulnerable people in emerging economies.</p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="mx-5 row justify-content-center">
    <h3 class="col-12 text-center ">Board Of Directors</h3>
    <div class="col-lg-3 projects-child projects-child1 my-5 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="./imgs/liber.JPG" alt="">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Mbaguta T. Liberio</h6>
                <p class="text-center" style="">Founder & CEO</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-5 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="./imgs/kulubya micah.jpg" alt="">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Dr. Kulubya Micah Phillip</h6>
                <p class="text-center" style="">Co-Founder</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-5 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="/imgs/mackenzi.jpg" alt="">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Dr. Gasyonga Mackenzie</h6>
                <p class="text-center" style="">Advisory Board Member</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-5 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Professor Solomon Lubinga</h6>
                <p class="text-center" style="">Chairman</p>
            </div>
        </div>
    </div>
</div>
</div>



<div class="mx-5 row justify-content-center" style="margin: 150px 0;">
    <h3 class="col-12 text-center my-5">Management Team</h3>
    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="./imgs/liber.JPG" alt="">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Mbaguta T. Liberio</h6>
                <p class="text-center" style="">Founder & CEO</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="./imgs/serunjoji edward.jpg" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Sserunjoji Edward</h6>
                <p class="text-center" style="">Chief Finance Officer</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="/imgs/mackenzi.jpg" alt="">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Ms. Mackenzie Deborah</h6>
                <p class="text-center" style="">Advisory Board Member</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="./imgs/bridget.jpg" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Eng. Bridget Atuhaire</h6>
                <p class="text-center" style="">Chief People Officer</p>
            </div>
        </div>
    </div>


    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;">Dr. Hellen Mugisha</h6>
                <p class="text-center" style="">Chief People Manager</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;"></h6>
                <p class="text-center" style="">Head, Lisam Health</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;"></h6>
                <p class="text-center" style="">Head, Ukulima</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;"></h6>
                <p class="text-center" style="">Head, Markets & Portfolio Growth</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;"></h6>
                <p class="text-center" style="">Head, Legal & Compliance</p>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child1 my-2 text-center">
        <div class="padding">
            <div class="director-img">
                <img src="" alt="image">
            </div>
            <div class="director-name my-3">
                <h6 class="text-center" style="line-height: 0px;"></h6>
                <p class="text-center" style="">Head, Microfinance Innovation Center</p>
            </div>
        </div>
    </div>




</div>
</div>





<?php include 'inc/footer.php'; ?>