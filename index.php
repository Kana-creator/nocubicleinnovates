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

#navbarResponsive .navbar-nav .nav-item .nav-link.home{
    color: #0a9;
    border-bottom: 2px solid #0a9;
}



.main{
    /*padding: 50px;*/
    width: 90%;
    margin: auto;
}

.banner-main{
    /*background: url("./imgs/banner1.jpg");
    background-size: 100% 100%;*/
    margin-left: -2px;
    height: 100vh; 
    position: absolute; 
    /*width:100%; 
    /*display: flex;
    align-items: center;
    justify-content: center; */
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}


.banner-inner{
    position: absolute;
    text-align: center; 
    width: 100%;
    height: 100%;
}


.banner-inner.active{
    transition: .5s;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 50%;
}

.banner-inner-content{
    background: url("./imgs/AgWallet.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content:nth-of-type(1){
    background: url("./imgs/banner1.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content:nth-of-type(2){
    background: url("./imgs/bod-banner.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content:nth-of-type(3){
    background: url("./imgs/banner3.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content:nth-of-type(4){
    background: url("./imgs/contactus.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content:nth-of-type(5){
    background: url("./imgs/banner2.jpg");
    background-size: 100% 100%;
    height: 100%;
}

.banner-inner-content .overlay div{
    width: 70%;
}

.banner-inner-content .overlay div>h1{
    color: #fff;
    font-size: 75px;
    font-weight: 100;
    letter-spacing: 10px;
}

.banner-inner-content .overlay div>p{
    color: #fff;
    font-size: 20px;
}

.banner-inner-content .overlay div>a.learn-more-btn{
    border: 1px solid #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 10px;
}

.banner-inner-content .overlay div>a.learn-more-btn:hover{
    border: 1px solid #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 10px;
    background: rgb(10,55,65);
}

.overlay{
    background: rgb(10,35,45,.6);
    width: 100%;
    height: 100%;
    color: #fff;

    display: flex;
    align-items: center;
    justify-content: center;
}

img{
    width: 100%;
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
    width: 55%;
    height: 120px;
    margin: auto;
    font-size: 16px;
    padding: 10px 15px;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
}

.padding.ukulima{
    border: 1px solid rgb(10, 55, 65);
    height: 200px;
    background: url("./imgs/ukulima.jpg");
    background-size: 100% 100%;
}

.padding.health{
    border: 1px solid rgb(10, 55, 65);
    height: 200px;
    background: url("./imgs/health.jpg");
    background-size: 100% 100%;
}

.padding.wallet{
    border: 1px solid rgb(10, 55, 65);
    height: 200px;
    background: url("./imgs/AgWallet.jpg");
    background-size: 100% 100%;
}

.padding.insurance{
    border: 1px solid rgb(10, 55, 65);
    height: 200px;
    background: url("./imgs/Insurance.jpg");
    background-size: 100% 100%;
}

.padding-inner>h3{
    color: #fff;
}

.padding-inner1,
.padding-inner2,
.padding-inner3,
 .padding-inner4 { 
    background: /*#0a9*/rgb(10, 55, 65, .4);
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

.model-p, .model-img{
    width: 50%;
}

@media(max-width: 991px){
    
    .banner-main{
        height: 90vh;
    }

    .padding-inner{
    clip-path: inset(0% 0% 0% 0%);

    }

    div.containers{
        padding: 0;
        margin: 0;
        width: 100%;
    }

    

    .main{
        padding: 0;
    }

    .model-p{
        width: 100%;
    } 
    .model-img{
        width: 100%;
        height: 30vh;
    }

    .banner-inner-content .overlay div>h1{
    color: #fff;
    font-size: 30px;
    font-weight: 100;
    letter-spacing: 10px;
}

.banner-inner-content .overlay div>p{
    color: #fff;
    font-size: 16px;
}
}
</style>

<div class="banner">
    <?php include 'inc/header.php'; ?>

    <div class="banner-main" style="">
        <div id="carouselExampleControls" class="banner-inner carousel slide" data-ride="carousel">
            <!--<div class="banner-inner-conten">
                <h1>Nocubicle Innovates</h1>
                <p class="p-1">Minds without borders</p>
            </div>

                <div class="versediv">
    <div id="carouselExampleControls" class="banner-inner carousel slide" data-ride="carousel">
    <div class="overlay">
  <div class="carousel-inner">-->

    <div class="banner-inner-content carousel-item active">    
        <div class="overlay">
            <div>
                <h1>Nocubicle Innovates</h1>
                <p class="p-1">Minds without borders</p>
            </div>            
        </div>
    </div>
    <div class="banner-inner-content carousel-item">    
    <div class="overlay">
            <div>
                <h1>About Us</h1>
                <p class="p-1">We work with the leading innovators 
            to develop and deploy inclusive and sustainable solutions that can 
            improve the lives of low income earners, cooperatives, individuals, 
            small businesses and poor communities.</p>
             <a href="./about.php" class="learn-more-btn text-light">Learn More</a>
            </div>            
        </div>
    </div>
    <div class="banner-inner-content carousel-item">    
    <div class="overlay">
            <div>
                <h1>Our Projects</h1>
                <p class="p-1">We design, prototype, deploy and grow 
                solutions that enable underserved individuals and
                businesses to better leverage the digital economy to 
                grow their businesses and improve theirlivelihoods.</p>
             <a href="./ourprojects.php" class="learn-more-btn text-light">Learn More</a>

            </div>            
        </div>
    </div>
    <div class="banner-inner-content carousel-item">    
    <div class="overlay">
            <div>
                <h1>Contact Us</h1>
                <p class="p-1">We work with the leading innovators 
            to develop and deploy inclusive and sustainable solutions that can 
            improve the lives of low income earners, cooperatives, individuals, 
            small businesses and poor communities.</p>
             <a href="./contactus.php" class="learn-more-btn text-light">Learn More</a>
            </div>            
        </div>
    </div>
  <div class="banner-inner-content carousel-item">    
    <div class="overlay">
            <div>
                <h1>What we do</h1>
                <p class="p-1">We work with the leading innovators 
            to develop and deploy inclusive and sustainable solutions that can 
            improve the lives of low income earners, cooperatives, individuals, 
            small businesses and poor communities.</p>
             <a href="./whatwedo.php" class="learn-more-btn text-light">Learn More</a>
            </div>            
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>

    
           <!-- </div>
        </div>
    </div>-->


        <div class="containers">

        <div class="main" style="margin-top: 90vh;">
        <div class=" row justify-content-center">
        <div class="col-lg-6 text-center my-5">
            <h1 class="my-5">BACKGROUND</h1>
            <p class="p-1">Nocubicle Innovates Limited is a healthcare, Agriculture 
            and Finance Technologies company that builds Inclusive Digital solutions 
            which facilitate access to quality, affordable and reliable services for the 
            low-income earners.</p>
           </div>
        </div>

            <div claa="my-5">
                <div class="row justify-content-center my-5">
                    <div class="col-lg-6 my-5 mx-1 text-light vision" style="background: #0a9; padding: 30px;">
                        <h4><i class="fa fa-eye fa-2x"></i> Our Vision</h4>
                        <p class="p-1 text-light">To amplify African economies using data and digital innovations that 
                        are more inclusive and sustainable.</p>
                    </div>

                    <div class="col-lg-5 my-5 mx-1 text-light mission" style="background: #0a9; padding: 30px;">
                        
                        <h4><i class="fa fa-pen fa-2x"></i>Our Mission</h4>
                        <p class="p-1 text-light">To Foster an Inclusive digital Eco-system for ALL</p>
                    </div>
                </div>
            </div>

            <div class="mx-5 my-5 text-center">
                <h1>OUR MODEL</h1>
                <p class="p-1 model-p" style="margin: auto; margin-bottom: 50px;">Realizing the Interlink between Healthcare, Food and 
                Finance. We believe that wellness and sustainability are interlinked 
                between a health body nurtured by availability of food enhanced by 
                agricultural production and productivity hence creating wealth.</p>

                <img src="./imgs/Modle.jpg" class="model-img" alt="no photo" style="height: 400px">

                <p class="p-1 my-5">Our products are designed for low-income 
                and underserved people and must be truly inclusive. We aim to 
                leverage technology and user-centricity approaches to design 
                products and create solutions that accessible, affordable, and 
                appropriate to the end- user customers, solving specific 
                challenges those users are facing in a waythat meets their 
                needs. Our Tech products must be truly inclusive and designed 
                to reduces costs, improve user experience and better reach 
                low-income and underserved users.</p>
            </div>
        </div>
    </div>
</div>

<div class="mx-5 my-5 row justify-content-center">
    <h1 class="col-12 text-center ">OUR PROJECTS</h1>
    <div class="col-lg-3 projects-child projects-child1 my-5 text-center">
        <!--<h3>Ukulima</h3>-->
        <div class="padding ukulima">
            <div class="padding-inner padding-inner1">
            <h3>Ukulima</h3>
                <a href="./ourprojects.php" class="learn-more text-light">Learn More</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child2 my-5 text-center">
        <!--<h3>Lisam Health System</h3>-->
        <div class="padding health">
            <div class="padding-inner padding-inner2">
                <h3>Lisam Health System</h3>
                <a href="./ourprojects.php" class="learn-more text-light">Learn More</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child3 my-5 text-center">
        <!--<h3>AgWallet</h3>-->
        <div class="padding wallet">
            <div class="padding-inner padding-inner3">
                <h3>AgWallet</h3>
                <a href="./ourprojects.php" class="learn-more text-light">Learn More</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 projects-child projects-child4 my-5 text-center">
        <!--<h3>Microfinance Innovations</h3>-->
        <div class="padding insurance">
            <div class="padding-inner padding-inner4">
                <h3>Microfinance Innovations</h3>
                <a href="./ourprojects.php" class="learn-more text-light">Learn More</a>
            </div>
        </div>
    </div>

    
    </div>
</div>




<?php include 'inc/footer.php'; ?>