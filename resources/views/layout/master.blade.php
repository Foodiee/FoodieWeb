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
                    <li><a href="{{URL::to("/facebook/login")}}">Đăng nhập bằng fb</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
       
    <section style="margin-top:40px;">
        <div class="wf-container">
            <div class="wf-box">
                <img src="vendors/img/5.jpg">
                <div class="content">
                    <h3>Title</h3>
                    <p>Content Here</p>
                    <p>Content Here</p>    
                    <p>Content Here</p>
                </div>
            </div>
            <div class="wf-box">
                <img src="vendors/img/5.jpg">
                <div class="content">
                    <h3>Title</h3>
                    <p>Content aa asdfasdfjal</p>    
                </div>
            </div>
            <div class="wf-box">
                <img src="vendors/img/5.jpg">
                <div class="content">
                    <h3>Heading</h3>
                    <p>Content aa asdfasdfjal</p>    
                </div>
            </div>
			    <div class="wf-box">
            <img src="vendors/img/5.jpg">
            <div class="content">
                <h3>Title</h3>
                <p>Content aa asdfasdfjal</p>    
            </div>
        </div>
        <div class="wf-box">
            <img src="vendors/img/15.jpg">
            <div class="content">
                <h3>Heading</h3>
                <p>Content aa asdfasdfjal</p>    
            </div>
        </div>
        <div class="wf-box">
            <img src="vendors/img/11.jpg">
            <div class="content">
                <h3>Heading</h3>
                <p>Content aa asdfasdfjal</p>    
            </div>
        </div>
        <div class="wf-box">
            <img src="vendors/img/18.jpg">
            <div class="content">
                <h3>Heading</h3>
                <p>Content aa asdf ljaljaljal</p>    
            </div>
        </div>
        </div>    
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

    @include('layout.modal')
</body>

<script>
    $(document).ready(function(){
        $("img").click(function(){
            $(".modal").modal('show'); 
            getPost();
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
    function getPost() {
        $.ajax(
            {
                type:"POST",
                data: {id:"John"},
                url:"{{URL::to('photo')}}",
                success: function(data)
                {
                    console.log(data);
                    $('#modal_title').text(data.title);
                    $('#modal_description').text(data.description);
                }
            });

    }
</script>