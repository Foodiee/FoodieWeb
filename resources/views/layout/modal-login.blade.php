@section('modal')
  <div class="modal fade modal-login">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="row fluid-container ml-content">
            <div class="logo-profile ml-logo"></div>
            <div class="fluid-container ml-title">Blalalal</div>
            <div class="container ml-fblogin">
              <div class="ml-fblogin-icon">
                <i class="fa fa-facebook-official fa-3x"></i>
                <div class="ml-fblogin-text" style="cursor:pointer;">Tiếp tục với FaceBook</div>
              </div>  
            </div>
            <div class="ml-line-text">hoặc</div>
            {!!Form::open(array('route'=>'postLogin','method' => 'post','files' => true))!!}
            <div class="fluid-container ml-formlogin">
              <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder='Email' data-toggle="popover" data-content="Alert">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" id="password" name="password" placeholder='Mật khẩu'>
              </div>
              <button id = "btn-login"class="btn btn-primary btn-lg btn-block">Đăng nhập</button>
            </div>
            
          </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
   <script type="text/javascript">
      $('.ml-fblogin').on('click', function(){
        FB.login(function(response) {
          if (response.authResponse) {
            FB.api('/me?fields=id,name,email,picture.width(720).height(720),cover,quotes', function(response){
              console.log(response);
              $.ajax({
                  type: "POST",
                  url: "{{url('/login-fb')}}",
                  cache: false,
                  data: {response : response},
                  success: function(data){
                    console.log(data);
                    if(data.result == "success"){
                      window.location = "{{url('/home')}}";
                    }
                  }
              });
            });
          } else {
            console.log('User cancelled login or did not fully authorize.');
          }
        }, {scope: ('email','user_about_me','user_likes')});
      });
//      $("#btn-login").click(function(e){
//            e.preventDefault();
//            var url = $("form").attr("action");
//            var data = $("form").serializeArray();
//            var email = data[1].value;
//            var password = data[2].value;
//            console.log($('form').validate());
//            $.post(url,$("form").serialize(),function(data){
//
//            });
//
//      });
      $('form').validate({
            rules:{
              email:{
                required:true,
                email:true
              },
              password:{
                required:true,
                minlength: 4
              }
            },
            messages:{
              email:{
                required: "Vui lòng nhập email",
                email: "Vui lòng nhập đúng định dạng email"
              },
              password:{
                required: "Vui lòng nhập mật khẩu",
                minlength: "Mật khẩu phải 6 kí tự trở lên"
              }
            },
            submitHandler:function(form){
                event.preventDefault();
                var url = $("form").attr("action");
               $.post(url,$("form").serialize(),function(data){
                    console.log(data);
                    if(data.login=="false"){
                        alert("Sai username/password")
                    }
               });
            }
          });
    </script>
{{-- @stop  --}}
