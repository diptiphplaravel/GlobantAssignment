<?php
?>

        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                
                <ul class="notification-menu">                
                    
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                          <img src="{{asset('images/avatar-mini.jpg')}}" alt="" /> 
                           	
                           	{{Auth::User()->email}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <!-- <li><a href="#"><i class="fa fa-user"></i>  Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i>  Settings</a></li> -->
                            <!-- <li><a href="#"><i class="fa fa-sign-out"></i> Log Out</a></li> -->
                            <li>
                                        <a href="{{ url('changePassword') }}">
                                           <i class="fa fa-lock"></i> Change Password
                                        </a>                                        
                                    </li>
                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="fa fa-sign-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>