
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url(); ?>assets/images/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Bethania
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="#"onclick="to_page('<?php echo base_url(); ?>Dashboard')">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo md5(SHA1(md5('user')))?>">
                        <i class="pe-7s-user"></i>
                        <p>Table User</p>
                    </a>
                </li>

                 <li>
                    <a href="<?php echo md5(SHA1(md5('slider')))?>">
                        <i class="pe-7s-note2"></i>
                        <p>Table Slider 1</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo md5(SHA1(md5('content2/add/slider')))?>">
                        <i class="pe-7s-note2"></i>
                        <p>Table Slider 2</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo md5(SHA1(md5('content1')))?>">
                        <i class="pe-7s-note2"></i>
                        <p>Table Content 1</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo md5(SHA1(md5('content2')))?>">
                        <i class="pe-7s-note2"></i>
                        <p>Table Content 2</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo md5(SHA1(md5('content3')))?>">
                        <i class="pe-7s-note2"></i>
                        <p>Table Content 3</p>
                    </a>
                </li>
              <!--   <li>
                    <a href="notifications.html">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li> -->
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content" id="content-admin">
            <!-- Open Content -->
                <?php  $this->load->view($content);?>
            <!-- End Content -->
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
