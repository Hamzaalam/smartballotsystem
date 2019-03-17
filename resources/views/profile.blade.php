@extends('layout.admin')

@section('content')

<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-user"></i>
        USER PROFILE
    </div>
    <div class="card-body">


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
                      Activity
                  </a>
              </li>

          </ul>

          <div class="tab-content no-border padding-24">
              <div id="home" class="tab-pane in active">
                  <div class="row">
                      <div class="col-xs-12 col-sm-3 center">
                          <span class="profile-picture">
                              <img class="editable img-responsive" alt=" Avatar" id="avatar2" src="http://bootdey.com/img/Content/avatar/avatar6.png">
                          </span>

                          <div class="space space-4"></div>

                          <a href="#" class="btn btn-sm btn-block btn-success">
                              <i class="ace-icon fa fa-plus-circle bigger-120"></i>
                              <span class="bigger-110">Edit User profile</span>
                          </a>

                      </div><!-- /.col -->

                      <div class="col-xs-12 col-sm-9">
                          <h4 class="blue">
                              <span class="middle">Hamza Alam</span>
                          </h4>

                          <div class="profile-user-info">
                              <div class="profile-info-row">
                                  <div class="profile-info-name"> Username </div>

                                  <div class="profile-info-value">
                                      <span>Hamzaalam100</span>
                                  </div>
                              </div>

                              <div class="profile-info-row">
                                  <div class="profile-info-name"> Location </div>

                                  <div class="profile-info-value">
                                      <i class="fa fa-map-marker light-orange bigger-110"></i>
                                      <span>Karachi</span>
                                      <span>Sindh</span>
                                  </div>
                              </div>

                              <div class="profile-info-row">
                                  <div class="profile-info-name"> Age </div>

                                  <div class="profile-info-value">
                                      <span>23</span>
                                  </div>
                              </div>

                              <div class="profile-info-row">
                                  <div class="profile-info-name"> Joined </div>

                                  <div class="profile-info-value">
                                      <span>2019/02/15</span>
                                  </div>
                              </div>

                              <div class="profile-info-row">
                                  <div class="profile-info-name"> Last Online </div>

                                  <div class="profile-info-value">
                                      <span>3 hours ago</span>
                                  </div>
                              </div>
                          </div>

                          <div class="hr hr-8 dotted"></div>

                          <div class="profile-user-info">
                              

                              <div class="profile-info-row">
                                  <!--Can put links-->
                              </div>
                          </div>
                      </div><!-- /.col -->
                  </div><!-- /.row -->

                  <div class="space-20"></div>

                  <div class="row">
                      <div class="col-xs-12 col-sm-6">
                          <div class="widget-box transparent">
                              <div class="widget-header widget-header-small">
                                  <h4 class="widget-title smaller">
                                      <i class="ace-icon fa fa-check-square-o bigger-110"></i>
                                      Little About Me
                                  </h4>
                              </div>

                              <div class="widget-body">
                                  <div class="widget-main">
                                      <p>
                                          My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
                                      </p>
                                      <p>
                                          Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
                                      </p>
                                      <p>
                                          The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
                                      </p>
                                      <p>
                                          Thanks for visiting my profile.
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

                          
                      </div><!-- /.col -->

                      <div class="col-sm-6">
                          

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

              
          </div>
      </div>
  </div>
</div>
</div>  

</div>
    
@endsection