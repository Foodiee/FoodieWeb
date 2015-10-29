<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="vendors/css/bootstrap.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="vendors/css/nomalize.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
    <link rel="stylesheet" type="text/css" href="vendors/css/style.css">
    <!-- Latest compiled and minified CSS -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="vendors/js/jquery.min.js"></script>
    <script src="vendors/js/bootstrap.min.js"></script>

    <script src="vendors/js/responsive_waterfall.js"></script>
    <title>Fresh Food</title>
</head>
    
<body>
    {{-- Thanh menu --}}
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a class="navbar-brand logo" href="/" style="margin-left:80px;">
                    <img src="vendors/img/logo.png" height="50" width="50">
                </a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top:25px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            </div>
        
            <div class="collapse navbar-collapse container" id="myNavbar">
                <form class="nav navbar-nav navbar-left" style="margin-top:17px;">
                    <input type="search" placeholder="Search">
                </form> 
                
                <ul class="nav navbar-nav navbar-right" style="margin-top:15px; margin-left:65px;">
                    <li><a href="{{URL::to('home')}}">Home</a></li>
                    <li><a href="{{URL::to('profile')}}">MyPage</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
    <section class="section-features">           
        <div class="row">
            <h2><i class="ion-heart " style="color:rgba(255, 0, 0, 0.74);"></i> Get Interesting Food <i class="ion-heart " style="color:rgba(255, 0, 0, 0.74);"></i></h2>
        </div>
        
        <div class="row">            
            <div class="col span_1_of_3 box">
                <i class="ion-coffee icon-big"></i>
                <h3>Just Taste</h3>
                <p>Những món ăn ngon nhất, rẻ nhất và hấp dẫn nhất </p>
            </div>
            
            <div class="col span_1_of_3 box">
                <i class="ion-android-walk icon-big"></i>
                <h3> Easy Find A Way To</h3>
                <p> Tìm đường đến 1 cách vô cùng dễ dàng</p>
            </div>
            
            <div class="col span_1_of_3 box">
                <i class="ion-android-camera icon-big"></i>
                <h3>Take Photos For It</h3>
                <p>Hãy chụp những bức ảnh đẹp nhất để chia sẻ cùng bạn bè mình nhé!</p>
            </div>
        </div>
    </section>
       
    <section>
        @yield('grid-layout')
    </section>
                        
    <footer>
        <div class="row">
            <div class="col span_1_of_2">
                <ul class="footer-nav">
                    <li><a href="#"> Main Page</a></li>
                    <li><a href="mypage.html"> My Page</a></li>
                    <li><a href="#"> About Us</a></li>
                </ul>
            </div>
                
            <div class="col span_1_of_2">
                <ul class="social-links">
                    <li><a href="#"> <i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"> <i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"> <i class="ion-social-googleplus"></i></a></li>
                    <li><a href="#"> <i class="ion-social-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>   
</body>

<script>
    $(document).ready(function(){
        $("#showup").click(function(){
            $("#modal").toggle(1000); 
        });

        $("#upload-img").click(function(){
            $("#modal").toggle(1000); 
            $(".bar").toggle(2000);
            $(".bar-fill").css("width","100%");
        });
    
        var waterfall = new Waterfall({ 
            minBoxWidth: 250 
        });
    }); 
</script>
</html>