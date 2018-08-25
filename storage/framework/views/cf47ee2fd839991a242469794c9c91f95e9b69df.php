<?php
?>

        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
<!--             <form class="searchform" action="index.html" method="post"> -->
<!--                 <input type="text" class="form-control" name="keyword" placeholder="Search here..." /> -->
<!--             </form> -->
            <!--search end-->

            <!--notification menu start -->
            <div class="menu-right">
                
                <ul class="notification-menu">
                    
                   <!-- <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">Notifications</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #1 overloaded.  </span>
                                        <em class="small">34 mins</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #3 overloaded.  </span>
                                        <em class="small">1 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #5 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">Server #31 overloaded.  </span>
                                        <em class="small">4 hrs</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">See All Notifications</a></li>
                            </ul>
                        </div>
                    </li> -->
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <img src="<?php echo e(asset('images/avatar-mini.jpg')); ?>" alt="" /> 
                           	
                           	<?php echo e(Auth::User()->email); ?>

                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <!-- <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li> -->
                            <li>
                                        <a href="<?php echo e(url('changePassword')); ?>">
                                           <i class="fa fa-lock"></i> Change Password
                                        </a>                                        
                                    </li>
                            <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                    
                                    
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>