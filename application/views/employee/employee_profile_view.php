

<body class="">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse "> 
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
	<div class="header-seperation" style="display:none"> 
		<ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">	
		 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>		 
		</ul>
      <!-- BEGIN LOGO -->	
      <a href="index-2.html"><img src="assets/img/logo.png" class="logo" alt=""  data-src="assets/img/logo.png" data-src-retina="assets/img/logo2x.png" width="106" height="21"/></a>
      <!-- END LOGO --> 
      <ul class="nav pull-right notifcation-center">	
        <li class="dropdown" id="header_task_bar"> <a href="index-2.html" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" > <div class="iconset top-messages"></div>  <span class="badge" id="msgs-badge">2</span> </a></li>
		<li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>        
      </ul>
      </div>
      <!-- END RESPONSIVE MENU TOGGLER --> 
      <div class="header-quick-nav" > 
      <!-- BEGIN TOP NAVIGATION MENU -->
	  <div class="pull-left"> 
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
        <ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
			<li class="m-r-10 input-prepend inside search-form no-boarder">
				<span class="add-on"> <span class="iconset top-search"></span></span>
				 <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
			</li>
		  </ul>
	  </div>
	 <!-- END TOP NAVIGATION MENU -->
	 <!-- BEGIN CHAT TOGGLER -->
      <div class="pull-right"> 
		<div class="chat-toggler">	
				<a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">
					<div class="user-details"> 
						<div class="username">
							<span class="badge badge-important">3</span> 
							Employee name <span class="bold">($fname)</span>									
						</div>						
					</div> 
					<div class="iconset top-down-arrow"></div>
				</a>	
				<div id="notification-list" style="display:none">
					<div style="width:300px">
						  <div class="notification-messages info">
									<div class="user-profile">
										<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
									</div>
									<div class="message-wrapper">
										<div class="heading">
											David Nester - Commented on your wall
										</div>
										<div class="description">
											Meeting postponed to tomorrow
										</div>
										<div class="date pull-left">
										A min ago
										</div>										
									</div>
									<div class="clearfix"></div>									
								</div>	
							<div class="notification-messages danger">
								<div class="iconholder">
									<i class="icon-warning-sign"></i>
								</div>
								<div class="message-wrapper">
									<div class="heading">
										Server load limited
									</div>
									<div class="description">
										Database server has reached its daily capacity
									</div>
									<div class="date pull-left">
									2 minutes ago
									</div>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="notification-messages success">
								<div class="user-profile">
									<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
								</div>
								<div class="message-wrapper">
									<div class="heading">
										You haveve got 150 messages
									</div>
									<div class="description">
										150 newly unread messages in your inbox
									</div>
									<div class="date pull-left">
									An hour ago
									</div>									
								</div>
								<div class="clearfix"></div>
							</div>							
						</div>				
				</div>
				<div class="profile-pic"> 
					<img src="assets/img/profiles/avatar_small.jpg"  alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> 
				</div>       			
			</div>
		 <ul class="nav quick-section ">
			<li class="quicklinks"> 
				<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">						
					<div class="iconset top-settings-dark "></div> 	
				</a>
				<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li><a href="user-profile.html"> My Account</a>
                  </li>
                  <li><a href="calender.html">My Calendar</a>
                  </li>
                  <li><a href="email.html"> My Inbox &nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a>
                  </li>
                  <li class="divider"></li>                
                  <li><a href="login.html"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
               </ul>
			</li> 
			<li class="quicklinks"> <span class="h-seperate"></span></li> 
			<li class="quicklinks"> 	
			<a id="chat-menu-toggle" href="#sidr" class="chat-menu-toggle" ><div class="iconset top-chat-dark "><span class="badge badge-important hide" id="chat-message-count">1</span></div>
			</a> 
				<div class="simple-chat-popup chat-menu-toggle hide" >
					<div class="simple-chat-popup-arrow"></div><div class="simple-chat-popup-inner">
						 <div style="width:100px">
						 <div class="semi-bold">David Nester</div>
						 <div class="message">Hey you there </div>
						</div>
					</div>
				</div>
			</li> 
		</ul>
      </div>
	   <!-- END CHAT TOGGLER -->
      </div> 
      <!-- END TOP NAVIGATION MENU --> 
   
  </div>
  <!-- END TOP NAVIGATION BAR --> 
</div>

<!-- END HEADER --> 
<!-- BEGIN CONTAINER -->
<div class="page-container row"> 
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar mini" id="main-menu"> 
   <div class="page-sidebar-wrapper" id="main-menu-wrapper">
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
  
  <!-- BEGIN MINI-WIGETS -->

   <!-- END MINI-WIGETS -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	
      <ul>
        <li class="start "> <a href="index-2.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow "></span> </a> 
		   <ul class="sub-menu">
            <li > <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
            <li class=""> <a href="index-2.html"> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
          </ul>
		</li>
        <li class=""> <a href="widgets.html"> <i class="fa fa-th"></i> <span class="title">Widgets</span> <span class="label label-important pull-right ">HOT</span></a> </li>
        <li class=""> <a href="email.html"> <i class="fa fa-envelope"></i> <span class="title">Email</span> <span class=" badge badge-disable pull-right ">203</span></a> </li>
       
                     
        
        
        
        
        
        <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>
        
        
        <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="javascript:;"> <i class="fa fa-plus"></i></a>
          <ul class="sub-menu">
            <li class="side-bar-widgets">
              <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
              <ul class="folders" >
                <li><a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a> </li>
                <li><a href="#">
                  <div class="status-icon red"></div>
                  To do list </a> </li>
                <li><a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a> </li>
                <li class="folder-input" style="display:none">
                  <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                </li>
              </ul>
              <p class="menu-title">PROJECTS </p>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Redesign home page</p>
                </div>
              </div>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Statistical report</p>
                </div>
              </div>
            </li>
          </ul>
        </li>
      </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
	<ul class="folders" >
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" ></li>
	</ul>
	<p class="menu-title">PROJECTS </p>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Redesign home page</p>
			</div>
		</div>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Statistical report</p>
			</div>
		</div>
	</div>
	
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
 </div>
 <a href="#" class="scrollup ">Scroll</a>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content condensed"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="row">
			<div class="col-md-6">
				<div class=" tiles white col-md-12 no-padding">
					<div class="tiles green cover-pic-wrapper">						
						<div class="overlayer bottom-right">
							<div class="overlayer-wrapper">
									<div class="padding-10 hidden-xs">									
										<button type="button" class="btn btn-primary btn-small"><i class="fa fa-check"></i>&nbsp;&nbsp;Following</button> <button type="button" class="btn btn-primary btn-small">Add</button>
									</div>
								</div>
						</div>
					<img src="assets/img/cover_pic.png" alt="">
					</div>
					<div class="tiles white">
			
						<div class="row">
							<div class="col-md-3 col-sm-3" >
								<div class="user-profile-pic">	
									<img width="69" height="69" data-src-retina="assets/img/profiles/avatar2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar.jpg" alt="">
								</div>
								 <div class="user-mini-description">
									<h3 class="text-success semi-bold">
									2548
									</h3>
									<h5>Followers</h5>
									<h3 class="text-success semi-bold">
									457
									</h3>
									<h5>Following</h5>
								</div>
							</div>
							<div class="col-md-5 user-description-box  col-sm-5">
                                                            
                                                            <h4 class="semi-bold no-margin"><?php echo ucfirst($employee->employee_fname)?><span class="semi-bold"><?php echo ucfirst($employee->employee_lname); ?></span>;</h4>
                                                            <h6 class="no-margin"><?php echo ($employee->employee_no)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->employee_email)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->employee_type)?></h6>
                                                            <h6 class="no-margin"><?php echo ($employee->employee_bday)?></h6>
                                                            <h6 class="no-margin"><?php echo ($employee->employee_contact)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->employee_contract)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->company_code)?></h6>
                                                            <h6 class="no-margin"><?php echo ($employee->del_ind)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->added_by)?></h6>
                                                            <h6 class="no-margin"><?php echo ($employee->added_date)?></h6>
                                                            <h6 class="no-margin"><?php echo ucfirst($employee->updated_by)?></h6>
                                                            <h6 class="no-margin"><?php echo ($employee->updated_date)?></h6>
								
							</div>
							<div class="col-md-3  col-sm-3">
								<h5 class="normal">Friends ( <span class="text-success">1223</span> )</h5>
								<ul class="my-friends">
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/d2x.jpg" data-src="assets/img/profiles/d.jpg" src="assets/img/profiles/d.jpg" alt="">
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt="">
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/h2x.jpg" data-src="assets/img/profiles/h.jpg" src="assets/img/profiles/h.jpg" alt="">
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/avatar_small2x.jpg" data-src="assets/img/profiles/avatar_small.jpg" src="assets/img/profiles/avatar_small.jpg" alt=""> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/e2x.jpg" data-src="assets/img/profiles/e.jpg" src="assets/img/profiles/e.jpg" alt=""> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/b2x.jpg" data-src="assets/img/profiles/b.jpg" src="assets/img/profiles/b.jpg" alt=""> 
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/h2x.jpg" data-src="assets/img/profiles/h.jpg" src="assets/img/profiles/h.jpg" alt="">
										</div>
									</li>
									<li><div class="profile-pic"> 
										<img width="35" height="35" data-src-retina="assets/img/profiles/d2x.jpg" data-src="assets/img/profiles/d.jpg" src="assets/img/profiles/d.jpg" alt="">
										</div>
									</li>							
								</ul>	
								<div class="clearfix"></div>
							</div>				
						</div>
				
				  <div class="tiles-body">
				  <div class="row">
					<div class="post col-md-12">
						<div class="user-profile-pic-wrapper">
							<div class="user-profile-pic-normal">
									<img width="35" height="35" data-src-retina="assets/img/profiles/c2x.jpg" data-src="assets/img/profiles/c.jpg" src="assets/img/profiles/c.jpg" alt="">
								</div>
						</div>
						<div class="info-wrapper">					
							<div class="username">
								<span class="dark-text">John Drake</span> in <span class="dark-text">nervada hotspot</span>	
							</div>
							<div class="info">
								Great design concepts by <span class="dark-text">John Smith</span> and his crew! Totally owned the WCG!, Best of luck for your future endeavours, 
								Special thanks for <span class="dark-text">Jane smith</span> for her motivation ;) 
							</div>	
							<div class="more-details">
								<ul class="post-links">
									<li><a href="#" class="muted">2 Minutes ago</a></li>
									<li><a href="#" class="text-info">Collapse</a></li>
									<li><a href="#" class="text-info" ><i class="fa fa-reply"></i> Reply</a></li>
									<li><a href="#" class="text-warning"><i class="fa fa-star"></i> Favourited</a></li>
									<li><a href="#"  class="muted">More</a></li>
								</ul>
							</div>
								<div class="clearfix"></div>
						
							<ul class="action-bar">
								<li><a href="#"  class="muted"><i class="fa fa-comment"></i> 1584</a> Comments</li>
								<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> 47k</a> likes</li>
							</ul>
							<div class="clearfix"></div>
							<div class="post comments-section">
									<div class="user-profile-pic-wrapper">
										<div class="user-profile-pic-normal">
												<img width="35" height="35" alt="" src="assets/img/profiles/e.jpg" data-src="assets/img/profiles/e.jpg" data-src-retina="assets/img/profiles/e2x.jpg">
											</div>
									</div>
									<div class="info-wrapper">					
										<div class="username">
											<span class="dark-text">Thunderbolt</span> 
										</div>
										<div class="info">
											Congrats, <span class="dark-text">John Smith</span>  & <span class="dark-text">Jane Smith</span>
										</div>	
										<div class="more-details">
											<ul class="post-links">
												<li><a href="#" class="muted">2 Minutes ago</a></li>
												<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> Like</a></li>
												<li><a href="#"  class="muted">Details</a></li>
											</ul>
										</div>
										
									</div>	
									<div class="clearfix"></div>						
							</div>
						<div class="post comments-section">
									<div class="user-profile-pic-wrapper">
										<div class="user-profile-pic-normal">
												<img width="35" height="35" src="assets/img/profiles/h.jpg" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" alt="">
											</div>
									</div>
									<div class="info-wrapper">					
										<div class="username">
											<span class="dark-text">Thunderbolt</span> 
										</div>
										<div class="info">
											Congrats, <span class="dark-text">John Smith</span>  & <span class="dark-text">Jane Smith</span>
										</div>	
										<div class="more-details">
											<ul class="post-links">
												<li><a href="#" class="muted">2 Minutes ago</a></li>
												<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> Like</a></li>
												<li><a href="#"  class="muted">Details</a></li>
											</ul>
										</div>
										
									</div>	
									<div class="clearfix"></div>						
							</div>							
						</div>	
						<div class="clearfix"></div>	
						<br>
						<br>
					</div>
				</div>
				</div>
					</div>
				</div>	
			</div>
			
			
			<div class="col-md-6">
				<div class="row">
				<div class="tiles white col-md-12  no-padding">			
					<div class="tiles-body">
						<h5 ><span class="semi-bold">You many also know</span>&nbsp;&nbsp; <a href="#" class="text-info normal-text">view more</a></h5>
						<div class="row">
							<div class="col-md-6">
								<div class="friend-list">
									<div class="friend-profile-pic">
										<div class="user-profile-pic-normal">
										<img width="35" height="35" src="assets/img/profiles/d.jpg" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" alt="">
										</div>
									</div>
									<div class="friend-details-wrapper">
										<div class="friend-name">
											Johne Drake
										</div>
										<div class="friend-description">
											James Smith in commman
										</div>
									</div>
									<div class="action-bar pull-right">
										<button class="btn btn-primary" type="button">Add</button>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="friend-list">
									<div class="friend-profile-pic">
										<div class="user-profile-pic-normal">
										<img width="35" height="35" src="assets/img/profiles/b.jpg" data-src="assets/img/profiles/b.jpg" data-src-retina="assets/img/profiles/b2x.jpg" alt="">
										</div>
									</div>
									<div class="friend-details-wrapper">
										<div class="friend-name">
											Johne Drake
										</div>
										<div class="friend-description">
											James Smith in commman
										</div>
									</div>
									<div class="action-bar pull-right">
										<button class="btn btn-primary" type="button">Add</button>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				</div>
				<br>
				<div class="row">
				  <div class="col-md-12 no-padding">
					<div class="tiles white">
						<textarea rows="3"  class="form-control user-status-box post-input"  placeholder="Whats on your mind?"></textarea>
					</div>
					<div class="tiles grey padding-10">
					<div class="pull-left">
						<button class="btn btn-default btn-sm btn-small" type="button"><i class="fa fa-camera"></i></button>
						<button class="btn btn-default btn-sm btn-small" type="button"><i class="fa fa-map-marker"></i></button>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary btn-sm btn-small" type="button">POST</button>
					</div>					
					<div class="clearfix"></div>
					</div>										
					</div>
				</div>
				<br>
				<br>
				<div class="row">
					<div class="post col-md-12">
						<div class="user-profile-pic-wrapper">
							<div class="user-profile-pic-normal">
									<img width="35" height="35" src="assets/img/profiles/c.jpg" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" alt="">
								</div>
						</div>
						<div class="info-wrapper">					
							<div class="username">
								<span class="dark-text">John Drake</span> in <span class="dark-text">nervada hotspot</span>	
							</div>
							<div class="info">
								Great design concepts by <span class="dark-text">John Smith</span> and his crew! Totally owned the WCG!, Best of luck for your future endeavours, 
								Special thanks for <span class="dark-text">Jane smith</span> for her motivation ;) 
							</div>	
							<div class="more-details">
								<ul class="post-links">
									<li><a href="#" class="muted">2 Minutes ago</a></li>
									<li><a href="#" class="text-info">Collapse</a></li>
									<li><a href="#" class="text-info" ><i class="fa fa-reply"></i> Reply</a></li>
									<li><a href="#" class="text-warning"><i class="fa fa-star"></i> Favourited</a></li>
									<li><a href="#"  class="muted">More</a></li>
								</ul>
							</div>
								<div class="clearfix"></div>
						
							<ul class="action-bar">
								<li><a href="#"  class="muted"><i class="fa fa-comment"></i> 1584</a> Comments</li>
								<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> 47k</a> likes</li>
							</ul>
							<div class="clearfix"></div>
							<div class="post comments-section">
									<div class="user-profile-pic-wrapper">
										<div class="user-profile-pic-normal">
												<img width="35" height="35" data-src-retina="assets/img/profiles/e2x.jpg" data-src="assets/img/profiles/e.jpg" src="assets/img/profiles/e.jpg" alt="">
											</div>
									</div>
									<div class="info-wrapper">					
										<div class="username">
											<span class="dark-text">Thunderbolt</span> 
										</div>
										<div class="info">
											Congrats, <span class="dark-text">John Smith</span>  & <span class="dark-text">Jane Smith</span>
										</div>	
										<div class="more-details">
											<ul class="post-links">
												<li><a href="#" class="muted">2 Minutes ago</a></li>
												<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> Like</a></li>
												<li><a href="#"  class="muted">Details</a></li>
											</ul>
										</div>
										
									</div>	
									<div class="clearfix"></div>						
							</div>
						<div class="post comments-section">
									<div class="user-profile-pic-wrapper">
										<div class="user-profile-pic-normal">
												<img width="35" height="35" data-src-retina="assets/img/profiles/b2x.jpg" data-src="assets/img/profiles/b.jpg" src="assets/img/profiles/b.jpg" alt="">
											</div>
									</div>
									<div class="info-wrapper">					
										<div class="username">
											<span class="dark-text">Thunderbolt</span> 
										</div>
										<div class="info">
											Congrats, <span class="dark-text">John Smith</span>  & <span class="dark-text">Jane Smith</span>
										</div>	
										<div class="more-details">
											<ul class="post-links">
												<li><a href="#" class="muted">2 Minutes ago</a></li>
												<li><a href="#" class="text-error" ><i class="fa fa-heart"></i> Like</a></li>
												<li><a href="#"  class="muted">Details</a></li>
											</ul>
										</div>
										
									</div>	
									<div class="clearfix"></div>						
							</div>	
							<div class="post comments-section">							
								<div class="row-fluid">
									<div class="input-append success date span12">
										<input type="text" class="span11">
										<span class="add-on"><span class="arrow"></span><i class="fa fa-th"></i></span>
									</div>
								</div>
							</div>
						</div>	
						<div class="clearfix"></div>						
					</div>
				</div>
			</div>
		</div>
		
	
	
	</div>
  </div>
<!-- END CONTAINER --> 
</div>
<!-- BEGIN CHAT --> 
<div id="sidr" class="chat-window-wrapper">
	<div id="main-chat-wrapper" >
	<div class="chat-window-wrapper fadeIn" id="chat-users" >
		<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>			
		</div>	
		<div class="side-widget">
		   <div class="side-widget-title">group chats</div>
		    <div class="side-widget-content">
			 <div id="groups-list">
				<ul class="groups" >
					<li><a href="#"><div class="status-icon green"></div>Office work</a></li>
					<li><a href="#"><div class="status-icon green"></div>Personal vibes</a></li>
				</ul>
			</div>
			</div>
		</div>
		<div class="side-widget fadeIn">
		   <div class="side-widget-title">favourites</div>
		   <div id="favourites-list">
		    <div class="side-widget-content" >
				<div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<span class="badge badge-important">3</span>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>					
			</div>
			</div>
		</div>
		<div class="side-widget">
		   <div class="side-widget-title">more friends</div>
			 <div class="side-widget-content" id="friends-list">
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>		
				<div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
					<div class="user-profile">
						<img src="assets/img/profiles/c.jpg"  alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						Jane Smith
						</div>
						<div class="user-more">
						Hello you there?
						</div>
					</div>
					<div class="user-details-status-wrapper">
						
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon green"></div>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
					<div class="user-profile">
						<img src="assets/img/profiles/h.jpg"  alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
					</div>
					<div class="user-details">
						<div class="user-name">
						David Nester
						</div>
						<div class="user-more">
						Busy, Do not disturb
						</div>
					</div>
					<div class="user-details-status-wrapper">
						<div class="clearfix"></div>
					</div>
					<div class="user-details-count-wrapper">
						<div class="status-icon red"></div>
					</div>
					<div class="clearfix"></div>
				</div>				
			</div>		
		</div>
	</div>

	<div class="chat-window-wrapper fadeIn" id="messages-wrapper" style="display:none">
	<div class="chat-header">	
		<div class="pull-left">
			<input type="text" placeholder="search">
		</div>		
			<div class="pull-right">
				<a href="#" class="" ><div class="iconset top-settings-dark "></div> </a>
			</div>					
		</div>
	<div class="clearfix"></div>	
	<div class="chat-messages-header">
	<div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
	<a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
	</div>
	<div class="chat-messages">
		<div class="sent_time">Yesterday 11:25pm</div>
		<div class="user-details-wrapper " >
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Hello, You there?
			   </div>
			</div>					
			<div class="clearfix"></div>
		   <div class="sent_time off">Yesterday 11:25pm</div>
		</div>		
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					How was the meeting?
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="user-details-wrapper ">
			<div class="user-profile">
				<img src="assets/img/profiles/d.jpg"  alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
			</div>
			<div class="user-details">
			  <div class="bubble">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Yesterday 11:25pm</div>
		</div>
		<div class="sent_time ">Today 11:25pm</div>
		<div class="user-details-wrapper pull-right">
			<div class="user-details">
			  <div class="bubble sender">	
					Let me know when you free
			   </div>
			</div>					
			<div class="clearfix"></div>
			<div class="sent_time off">Sent On Tue, 2:45pm</div>
		</div>		
	</div>
	</div>
	<div class="chat-input-wrapper" style="display:none">
		<textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<!-- END CHAT --> 
<!-- END CONTAINER --> 






</body>


</html>