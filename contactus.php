
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

#navbarResponsive .navbar-nav .nav-item .nav-link.contact{
    color: #0a9;
    border-bottom: 2px solid #0a9;
}

.main{
    /*padding: 50px;*/
    width: 90%;
    margin: auto;
}

.banner-main{
    background: url("./imgs/contactus.jpg");
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


.project-content-right{
    background: rgb(10, 55, 65);
    color: #fff;
    height: 400px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    /*margin-left: -20px;*/
    padding: 50px;
}

.project-content-left{
    background: #0a9;
    color: #fff;
    height: 400px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    /*margin-left: -20px;*/
    padding: 50px;
}

.project-image{
    height: 400px;
}

.project-image>img{
    width: 100%;
    height: 100%;
}

.project-content-right>p{
    color: #fff;
    text-align: left;
}

.project-content-left>p{
    color: #fff;
    text-align: left;
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

.project-image{
    height: 30vh;
}

.project-content-right, .project-content-left{
    min-height: 60vh;
}
}
</style>

<div class="banner">
    <?php include 'inc/header.php'; ?>

    <div class="banner-main" style="">
        <div class="overlay">
            <div class="banner-inner">
                <h2>Contact Us</h2>
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
            <h1 class="my-5">CONTACT DETAILS</h1>
            <p class="p-1">Nocubicle Innovates Limited is a healthcare, Agriculture 
            and Finance Technologies company that builds Inclusive Digital solutions 
            which facilitate access to quality, affordable and reliableservices for the 
            low-income earners.</p>

           </div>
        </div>
            
        </div>
    </div>
</div>    
    </div>
</div>






<div class="mx-5 projects my-5">
        <div class="row justify-content-cente my-5" style="border: 2px solid #0a9; margin-bottom: 250px; min-height: 50vh;">
            <div class="col-lg-6 project-content-left">
                <h3 class="col-12 text-center">Contact Person</h3>
                <p>
                Mbaguta.T.Liberio. <br>
                FOUNDER & CHIEF EXECUTIVE OFFICER <br>
                NOCUBICLE INNOVATES <br>
                "Minds without Borders" <br>
                Email: mbagutaliber0@gmail.com <br>
                Email: nocubicleinnovates@gmail.com</p>
            </div>
            <div class="col-lg-6 project-image">
            <img src="./imgs/contact.png" alt="">
            </div>
        </div>

        <div class="row justify-content-center my-5" style="border: 2px solid rgb(10, 55, 65);">
            <div class="col-lg-6 project-image">
            <img src="./imgs/address.png" alt="">
            </div>
            <div class="col-lg-6 project-content-right">
                <p>
                <h3 class="col-12 text-center">Address</h3>
                Plot No. 257, North Park Plaza. <br>
                    Bypass link, Brooklynn Road. <br>
                    Bweyogerere Industrial and Business Park <br>
                    P.O Box 860012,Kireka-Namugongo Road <br>
                    Kira Division-Wakiso District. <br>
                    Uganda. <br>
                    Phone: +256 782 629 160 <br>
                    Office : +256 702 311 250 <br>
                    Tagline “Inclusive health, Agriculture & Finance <br>
                    Technologies"</p>
            </div>
        </div>
        
    </div>





<?php include 'inc/footer.php'; ?>