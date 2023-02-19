
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

#navbarResponsive .navbar-nav .nav-item .nav-link.projects{
    color: #0a9;
    border-bottom: 2px solid #0a9;
}

.main{
    /*padding: 50px;*/
    width: 90%;
    margin: auto;
}

.banner-main{
    background: url("./imgs/banner3.jpg");
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

.project-content{
    background: rgb(10, 55, 65);
    color: #fff;
    height: 400px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    margin-left: 0px;
    padding: 50px;
}

.project-image{
    height: 400px;
    padding: 0;
}

.project-image>img{
    width: 100%;
    height: 100%;
}

.project-content>p{
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

    .project-content{
        min-height: 80vh;
        margin: 0;
        width: 100vw;
    }

    .project-image{
        height: 30vh;
        margin: 0;
        width: 100vw;
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

}
</style>

<div class="banner">
    <?php include 'inc/header.php'; ?>

    <div class="banner-main" style="">
        <div class="overlay">
            <div class="banner-inner">
                <h2>Our Projects</h2>
                <p class="p-1">We design, prototype, deploy and grow 
                solutions that enable underserved individuals and
                businesses to better leverage the digital economy to 
                grow their businesses and improve theirlivelihoods.</p>
            </div>
        </div>
    </div>


        <div class="containers">

        <div class="main" style="margin-top: 90vh;">
        <div class="my-5 row justify-content-center">
        <div class="col-lg-8 text-center my-5">
            <h1 class="my-5">PROJECTS</h1>
            <p class="p-1">Nocubicle Innovates leverages technological expertise and product development methodologies
(e.g., lean product design, UX research, agile software development, prototyping) to create
meaningful solutions that can enable Individuals users, organizations, SMEs and households to
digitally transform and better leverage the digital economy.</p>

<p class="p-1">We leverage methods by which technology-based products and services can be rapidly
designed, built and scaled in an inclusive manner. We develop frameworks through which
partners and clients can assess readiness to adopt emerging technologies, analyze gaps in
their current technologies and measure their effectiveness.</p>

           </div>
        </div>           
        </div>
    </div>
    </div>


    <div class="mx-5 projects my-5">
        <div class="row justify-content-cente my-5" style="margin-left: ;">
            <div class="col-lg-6 project-content ukulima-text" style="margin-right: ;">
                <h3>Ukulima</h3>
                <p>It is an Agro-input counterfeit products authontication and traceability system. Famers are able to detect fake products using USSD and mobile App. We also enable farmers to order and offer inputs product delivery farm, plays E-extension and E-advisory services. The solution can be accessed on www.ukulima.com</p>
            </div>
            <div class="col-lg-6 project-image" style="padding: 0;">
            <img src="./imgs/alaso_ag.jpg" alt="">
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 project-image" style="padding:0;">
            <img src="./imgs/health2.jpg" alt="">
            </div>
            <div class="col-lg-6 project-content">
                <h3>Lisam Health System</h3>
                <p>This is a community based Healthcare Insurance System that enables low income earners access to quality healthcare from our verified healthcare service providers. Members contribute remit their premiums through their groups/SACCOs and are issued a unique code which they use to access healthcare services using our digital channels. The system can be accessed on www.lisamhealth.com</p>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 project-content" style="margin-right: ;">
                <h3>AgWallet</h3>
                <p>This is a digital lending channel for smallholder farmers who require access to quick, soft and uncollaterised loans. The loans can be accessed via our wallet on the recommendation of the members of the farmer group/SACCO, VSLA or organization.</p>
            </div>
            <div class="col-lg-6 project-image" style="padding:0;">
            <img src="./imgs/wallet.jpg" alt="">
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-lg-6 project-image" style="padding:0;">
            <img src="./imgs/microfinance.jpg" alt="">
            </div>
            <div class="col-lg-6 project-content">
                <h3>Center for Microfinance Innovations.</h3>
                <p>This is a Microfinance consultation arm of our company. We support Microfinance Institutions build innovative digital solutions that enable the Microfinance Institution serve their members better. Our focus is to improve efficiency, access, cost and conviniency for customers using the digital channels. </p>
            </div>
        </div>
    </div>






<?php include 'inc/footer.php'; ?>