@extends('layout.index')
@section('grid-layout')
    <div class="container" style="width:60%;margin-top:100px;">
        <div class="left-side col-md-5">
            <img src="vendors/img/5.jpg" class="logo-profile" height="150" width="150">
        </div>
        <div class="right-side col-md-6">
            <h3>{{Auth::user()->username}}</h3>
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
@stop

