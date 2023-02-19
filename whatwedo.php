

<style>
.navbar{
    /*background: rgb(0,0,100, .1);*/
    min-height: 90px;
    color: #fff;
}

#navbarResponsive .navbar-nav .nav-item .nav-link, .navbar-brand{
    color: #fff;
    text-transform: capitalize;
    font-size: 13px;
}

#navbarResponsive .navbar-nav .nav-item .nav-link:hover{
    color: #0a9;
}

#navbarResponsive .navbar-nav .nav-item .nav-link.whatwedo{
    color: #0a9;
    border-bottom: 2px solid #0a9;
}

.main{
    /*padding: 50px;*/
    width: 90%;
    margin: auto;
}

.banner-main{
    background: url("./imgs/banner2.jpg");
    background-size: 100% 100%;
    height: 100vh; 
    position: absolute; 
    width:100%; 
    top: 0;
    left: 0;
}


.banner-inner{
    position: absolute;
    text-align: center;    
}

.banner-inner.active{
    transition: .5s;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
}

.banner-inner>h2{
    font-size: 75px;
    font-weight: 100;
    letter-spacing: 10px;
    color: #fff;
}

.banner-inner>p{
    color: #fff;
    font-size: 20px;
}

.overlay{
    background: rgb(10,35,45,.4);
    width: 100%;
    height: 100%;
    color: #fff;
}

img{
    width: 100%;
    height: 100%;
}

.vision, .mission{
    margin: 100px;
    transform: scale(0);
    transition: all .5s;
    margin-left: 30em;
}

.vision.active, .mission.active{
    transform: scale(1);
}

.projects-child>h3{
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

.padding{
    border: 1px solid rgb(10, 55, 65);
    height: 200px;
    background: url("./imgs/lifestyle2.jpeg");
    background-size: 100%;
}

.padding-inner1,
.padding-inner2,
.padding-inner3,
 .padding-inner4 { 
    background: #0a9/*rgb(10, 55, 65, .7)*/;
    width: 100%;
    height: 100%;
    clip-path: inset(100% 0% 0% 100%);
    transition: .5s
}

.padding-inner1.active, 
.padding-inner2.active, 
.padding-inner3.active, 
.padding-inner4.active{
    clip-path: inset(0% 0% 0% 0%);
}



.learn-more{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 10px;
}

.learn-more:hover{
    text-decoration: none;
    background: rgb(10,55,65);
}

.left-inno, .left-inno>p{
    color: #fff;
}



@media(max-width: 991px){
    
    .banner-main{
        height: 90vh;
    }

    div.containers{
        padding: 0;
        margin: 0;
        width: 100%;
    }

    .banner-inner{
        margin: auto;
        width: 95%;
    }

    .main{
        padding: 0;
    }

    .banner-inner>h2{
    font-size: 30px;
    font-weight: 100;
    letter-spacing: 10px;
    color: #fff;
}

.banner-inner>p{
    color: #fff;
    font-size: 16px;
}

.right-inno{
    max-height: 200px;
}
}
</style>

<div class="banner">
    <?php include 'inc/header.php'; ?>

    <div class="banner-main" style="">
        <div class="overlay">
            <div class="banner-inner">
                <h2>What We Do</h2>
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
                        <h1 class="my-5">OUR WORK</h1>
                        <p class="p-1">We design, prototype, deploy and grow solutions that enable underserved individuals and
            businesses to better leverage the digital economy to grow their businesses and improve their
            livelihoods.</p>

                    </div>
                </div>            
            </div>
        </div>
</div>

    <div class="row my-5 mx-5" style="padding: 0; background: rgb(10, 55, 65);">
        <div class="left-inno col-lg-6" style="background: rgb(10, 55, 65); padding: 20px;">
        <p>
            <h3>Our Innovations</h3>
        </p>

        <p>Nocubicle Innovates leverages technological expertise and product development methodologies
(e.g., lean product design, UX research, agile software development, prototyping) to create
meaningful solutions that can enable Individuals users, organizations, SMEs and households to
digitally transform and better leverage the digital economy.</p>

        <p>We leverage methods by which technology-based products and services can be rapidly
designed, built and scaled in an inclusive manner. We develop frameworks through which
partners and clients can assess readiness to adopt emerging technologies, analyze gaps in
their current technologies and measure their effectiveness.</p>
        </div>

        <div class="right-inno col-lg-6">
        <img src="./imgs/innovation.jpg" alt="">
        </div>
    </div>




<?php include 'inc/footer.php'; ?>