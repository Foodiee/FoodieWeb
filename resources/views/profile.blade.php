@extends('layout.index')
@include('layout.modal-profile')
@section('grid-layout')
    <div class="container" style="width:60%;margin-top:100px;">
        <div class="left-side col-md-4">
            <img src="vendors/img/5.jpg" class="logo-profile" height="150" width="150">
        </div>
        <div class="right-side col-md-7">
            <div class="row">
            <h3>
                <span>{{$user["name"]}}</span>
                @if($user["user_id"]==Auth::user()->user_id)
                    <button id="btn-edit"class="btn follow_btn">
                        <em></em>
                        <span>Chỉnh sửa trang cá nhân</span>
                    </button>
                @else
                    <button id="btn-follow" class="btn follow_btn">
                        <em></em>
                        <span>Theo dõi</span>
                    </button>
                @endif
                
            </h3>
          
            </div>
            <ul class="user-info">
                <li><span>7</span> Bài viết</li>
                <li><span>7</span> Album</li>
                <li><span>7</span> Người theo dõi</li>
                <li><span>7</span> theo dõi</li>
            </ul>
        </div>
    </div>
    <div class="wf-container" style="margin-top:40px;width:60%;">
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
                <h3>Heading</h3>
                <p>Content aa asdfasdfjal</p>    
            </div>
        </div>  
    </div> 
   
    <script type="text/javascript">
        $("#btn-edit").click(function(){
            $('.modal-login').modal('show');
        });
    </script>
@stop



