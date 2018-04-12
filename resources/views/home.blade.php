@extends('spark::layouts.profile')

@section('content')

    <home :user="user" inline-template>
        <div class="container">

            <!-- Application Dashboard -->
            <div class="row">
                <div class="large-12 medium-12 small-12 columns" id="p-namediv">
                <div>
                    <div id="nameBox">
                    <h3>
                    {{$items->user->full_name}}
                    </h3>
                    </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="border" class="col-md-3">
                   <div class="form-group"><a href="http://www.instagram.com/{{$items->user->username}}"><img src="{{$items->user->hd_profile_pic_url_info->url}}"
                                                    class="center-block img-responsive"></a>                    
                   </div> 
                   <div class="form-group">
                    <h3>Account Type</h3>
                    <p>Influencer</p>
                   </div>
                    <div class="form-group">
                    <h3>Est. Influence Value</h3>
                    <p>$5000</p>
                   </div>
                    <div class="form-group">
                    <h3>Management Team</h3>
                    <p>None</p>
                   </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">


                             <div class="panel panel-primary">

                                <div class="panel-heading table-responsive">Influencer Statics</div>

                                <div class="panel-body ">
<div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#feed">
                        <i class="orange ace-icon fa fa-rss bigger-120"></i>
                        Activity Feed
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#friends">
                        <i class="blue ace-icon fa fa-users bigger-120"></i>
                        Friends
                    </a>
                </li>

                <li>
                    <a data-toggle="tab" href="#pictures">
                        <i class="pink ace-icon fa fa-picture-o bigger-120"></i>
                        Pictures
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-24">
                <div id="home" class="tab-pane in active">
                   <div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">IG Followers</th>
                          <th scope="col">Tags</th>
                          <th scope="col">Mentions</th>
                          <th scope="col">Media</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>                         
                          <td>{{$items->user->follower_count}}</td>
                          <td>{{$items->user->usertags_count}}</td>
                          <td>{{$items->user->follower_count}}</td>
                          <td>{{$items->user->media_count}}</td>                          
                        </tr>
                       
                      </tbody>
                    </table>
                   </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="widget-box transparent">
                                <div class="widget-header widget-header-small">
                                    <h4 class="widget-title smaller">
                                        <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                        Biography
                                    </h4>
                                </div>

                                <div class="widget-body">
                                    <div class="widget-main">
                                        <p>
                                            {{$items->user->biography}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /#home -->

                <div id="feed" class="tab-pane">
                    <div class="profile-feed row">
                        <div class="col-sm-6">
                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar1.png">
                                    <a class="user" href="#"> Alex Doe </a>
                                    changed his profile photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        an hour ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Susan Smith's avatar" src="http://bootdey.com/img/Content/avatar/avatar2.png">
                                    <a class="user" href="#"> Susan Smith </a>

                                    is now friends with Alex Doe.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        2 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    joined
                                    <a href="#">Country Music</a>

                                    group.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    uploaded a new photo.
                                    <a href="#">Take a look</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        5 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="David Palms's avatar" src="http://bootdey.com/img/Content/avatar/avatar3.png">
                                    <a class="user" href="#"> David Palms </a>

                                    left a comment on Alex's wall.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        8 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>
                                    published a new blog post.
                                    <a href="#">Read now</a>

                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        11 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar4.png">
                                    <a class="user" href="#"> Alex Doe </a>

                                    upgraded his skills.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        12 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged out.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="profile-activity clearfix">
                                <div>
                                    <i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
                                    <a class="user" href="#"> Alex Doe </a>

                                    logged in.
                                    <div class="time">
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        16 hours ago
                                    </div>
                                </div>

                                <div class="tools action-buttons">
                                    <a href="#" class="blue">
                                        <i class="ace-icon fa fa-pencil bigger-125"></i>
                                    </a>

                                    <a href="#" class="red">
                                        <i class="ace-icon fa fa-times bigger-125"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="space-12"></div>

                    <div class="center">
                        <button type="button" class="btn btn-sm btn-primary btn-white btn-round">
                            <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                            <span class="bigger-110">View more activities</span>

                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                        </button>
                    </div>
                </div><!-- /#feed -->

                <div id="friends" class="tab-pane">
                    <div class="profile-users clearfix">
                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Bob Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Bob Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Content Editor</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 20 mins ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Rose Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Rose Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Graphic Designer</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 30 min ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Jim Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-busy"></span>
                                            Jim Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">SEO &amp; Advertising</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
                                            <span class="grey"> 1 hour ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="Alex Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-idle"></span>
                                            Alex Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Marketing</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class=""> 40 minutes idle </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="Phil Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Phil Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Public Relations</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 2 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Susan Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-online"></span>
                                            Susan Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">HR Management</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
                                            <span class="green"> 20 mins ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Jennifer Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Jennifer Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Graphic Designer</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 2 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="itemdiv memberdiv">
                            <div class="inline pos-rel">
                                <div class="user">
                                    <a href="#">
                                        <img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Alexa Doe's avatar">
                                    </a>
                                </div>

                                <div class="body">
                                    <div class="name">
                                        <a href="#">
                                            <span class="user-status status-offline"></span>
                                            Alexa Doe
                                        </a>
                                    </div>
                                </div>

                                <div class="popover">
                                    <div class="arrow"></div>

                                    <div class="popover-content">
                                        <div class="bolder">Accounting</div>

                                        <div class="time">
                                            <i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
                                            <span class="grey"> 4 hours ago </span>
                                        </div>

                                        <div class="hr dotted hr-8"></div>

                                        <div class="tools action-buttons">
                                            <a href="#">
                                                <i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                                            </a>

                                            <a href="#">
                                                <i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hr hr10 hr-double"></div>

                    <ul class="pager pull-right">
                        <li class="previous disabled">
                            <a href="#">← Prev</a>
                        </li>

                        <li class="next">
                            <a href="#">Next →</a>
                        </li>
                    </ul>
                </div><!-- /#friends -->

                <div id="pictures" class="tab-pane">
                    <ul class="ace-thumbnails">
                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/2/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/3/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/4/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/5/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/6/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/7/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>

                        <li>
                            <a href="#" data-rel="colorbox">
                                <img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
                                <div class="text">
                                    <div class="inner">Sample Caption on Hover</div>
                                </div>
                            </a>

                            <div class="tools tools-bottom">
                                <a href="#">
                                    <i class="ace-icon fa fa-link"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-paperclip"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-pencil"></i>
                                </a>

                                <a href="#">
                                    <i class="ace-icon fa fa-times red"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div><!-- /#pictures -->
            </div>
        </div>
    </div>
                                    
                                </div>

                            </div>


                        </div>

                </div>
            </div>
        </div>

    </home>
@endsection
