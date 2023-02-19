

<style>
.upper{
    background: #0a9;
    width: 100%;
    margin: 0;
    color: #fff;
    padding: 40px 0px;
}

.lower{
    background: rgb(10,55,65);
    width: 100%;
    margin: 0;
    color: #fff;
    padding: 40px 0;
}

input[type="text"]{
    background: #0a9;
    outline: none;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    padding: 3px 0;
    line-height: 10px 0;
    margin: 10px 0;
}

input[type="text"]::placeholder{
    color: #fff;
    font-size: 14px;
}

input[type="submit"]{
    background: #0a9;
    outline: none;
    border: 1px solid #fff;
    color: #fff;
    padding: 10px 10px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 500;
    letter-spacing: 1px;
    max-width: 200px;
}

input[type="submit"]:hover{
    background: rgb(10,55,65);
    outline: none;
    border: 1px solid rgb(10,55,65);
}

.lower-upper{
    border-bottom: .3px solid #999;
    padding: 10px 0;
}

.lower-lower>div>p{
    color: #ccc;
    font-size: 12px;
    line-height: 5px;
}

.social>a, a{
    color: #fff;
}

.social>a:hover, a:hover{
    color: #0a9;
    text-decoration: none;
}
</style>
<div class="text-center" style="background: #000;">
    <div class="upper text-left">
        <div class="row mx-5">
        <div class="col-12">
            <h3 class="" style="margin-bottom: 30px; text-transform: capitalize;">subscribe to our mailing list</h3>
        </div>
            <form action="" class="col-12">
            <input type="text" placeholder="FIRST NAME" class="col-lg-3 mx-2">
            <input type="text" placeholder="LAST NAME" class="col-lg-3 mx-2">
            <input type="text" placeholder="EMAIL ADDRESS" class="col-lg-3 mx-2">
            <input type="submit" value="SUBSCRIBE" class="col-lg-2 mx-2">
            </form>
        </div>
    </div>

    <div class="lower">
        <div class="lower-upper row mx-5">
            <div class="col-lg-3">
                <a href="./index.php"><img src="./imgs/logo4.png" alt="" style="height: 90px;"></a>
            </div>
            <div class="social col-lg-5 row text-center justify-content-center my-3">
                <a href="./about.php" class="mx-2">About us</a>
                <a href="./contactus.php" class="mx-2">Contact us</a>
                <a href="./ourprojects.php" class="mx-2">Our projects</a>
            </div>
            <div class="ml-auto social col-lg-3">
               <a href=""> <i class="fab fa-facebook fa-2x ml-2 my-1"></i></a>
               <a href="https://api.whatsapp.com/send?phone=256782629160&fbclid=IwAR3d4jIlz4fmht0sJPffYtndzay51S116q1qwImLkbQ1MBkFfoMQsWW1TII">
                    <i class="fab fa-whatsapp fa-2x ml-2 my-1"></i>
                </a>
               <a href="https://twitter.com/"> <i class="fab fa-twitter fa-2x ml-2 my-1"></i></a>
               <a href=""> <i class="fab fa-linkedin fa-2x ml-2 my-1"></i></a>
               <a href=""> <i class="fab fa-instagram fa-2x ml-2 my-1"></i></a>
            </div>
        </div>
        
        <div class="lower-lower row mx-5 text-left" style="padding: 30px 0 0 0;">
        <div class="col-lg-8">
        <h6>Address:</h6>
        <p style="line-height: 20px;">
        Plot No. 257, North Park Plaza | Bypass link, Brooklynn Road | 
        Bweyogerere Industrial and Business Park | P.O Box 860012, 
        Kireka-Namugongo Road Kira Division-Wakiso District | Uganda
        </p>
        </div>

        <div class="col-lg-2">
        <h6>TEL:</h6>
        <p>Phone: <a href="tel:+256-782 629160">+256-782 629160</a></p>
        <p>Office: <a href="tel:+256-702 311250">+256-702 311250</a></p>
        </div>

        <div class="col-lg-2">
        <h6>Email</h6>
        <p><a href="mailto: nocubicleinnovates@gmail.com">nocubicleinnovates@gmail.com</a></p>
        <p><a href="mailto: mbagutaliber0@gmail.com">mbagutaliber0@gmail.com</a></p>
        </div>
        <p class="col-lg-12 my-4" style="color: #0a9;">
        Developed by: Anatoli | Copyright &copy 2021 Nocubicle Innovates
        </p>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){

    $(".banner-inner").addClass("active");

    $(window).scrollTop(0);
    
    $(".banner-inner-content .overlay div").waypoint(function(direction){
        $("nav.navbar").addClass("waypoint");
    }, {
        offset: "0%"

    });

    $(".banner-inner-content .overlay div").waypoint(function(direction){
        $("nav.navbar").addClass("nowaypoint");
        $("nav.navbar").removeClass("waypoint");
    }, {
        offset: "1%"

    });

    $(".banner-inner").waypoint(function(direction){
        $("nav.navbar").addClass("waypoint");
    }, {
        offset: "0%"

    });

    $(".banner-inner").waypoint(function(direction){
        $("nav.navbar").addClass("nowaypoint");
        $("nav.navbar").removeClass("waypoint");
    }, {
        offset: "1%"

    });

    $(".navbar-toggler-icon").click(function(){
        $("nav.navbar").addClass("active");
    });

    $("#toggle-btn").click(function(){
        $("#close-nav-btn").show();
        $(this).hide();
    });

    $("#close-nav-btn").click(function(){
        $("#toggle-btn").show();
        $(this).hide();
    });

    $(".dropdown-toggle, .link").mouseover(function(){
        $(this).css("color", "#0a9");
        $(".navbar").css("background", "rgb(10,55, 65)");
    })

    $(".dropdown-toggle, .link").mouseout(function(){
        $(this).css("color", "#fff");
        $(".navbar").css("background", "rgb(10,55, 65,.0)");

    });

    $(".vision, .mission").waypoint(function(direction){
        $(this).addClass("active");
    },{
      offset: "80%" 
    });

    $(".projects-child1").mouseover(function(){
        $(".padding-inner1").addClass("active");
    });

    $(".projects-child1").mouseout(function(){
        $(".padding-inner1").removeClass("active");
    });

    $(".projects-child2").mouseover(function(){
        $(".padding-inner2").addClass("active");
    });

    $(".projects-child2").mouseout(function(){
        $(".padding-inner2").removeClass("active");
    });

    $(".projects-child3").mouseover(function(){
        $(".padding-inner3").addClass("active");
    });

    $(".projects-child3").mouseout(function(){
        $(".padding-inner3").removeClass("active");
    });

    $(".projects-child4").mouseover(function(){
        $(".padding-inner4").addClass("active");
    });

    $(".projects-child4").mouseout(function(){
        $(".padding-inner4").removeClass("active");
    });

});
</script>
</body>
</html>