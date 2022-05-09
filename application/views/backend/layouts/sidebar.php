<!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">
            
            <nav id="compactSidebar">

                <div class="theme-logo">
                    <a href="index.html">
                        <img src="<?php echo base_url();?>assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                    </a>
                </div>

                <ul class="menu-categories">
                    <li class="menu menu-single">
                        <a href="<?php echo base_url();?>index.php/backend/dashboard" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <i class="fa fa-tachometer" aria-hidden="true" style="font-size: 25px;color: white;"></i>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Dashboard</span></div>
                    </li>

                    <li class="menu">
                        <a href="#common_master" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 25px;color: white;"></i>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>Common Master</span></div>
                    </li>

                    <li class="menu">
                        <a href="#people" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <i class="fa fa-users" aria-hidden="true" style="font-size: 25px;color: white;"></i>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>People</span></div>
                    </li>

                    <li class="menu">
                        <a href="javascript:void(0);" data-active="false" class="menu-toggle">
                            <div class="base-menu">
                                <div class="base-icons">
                                    <i class="fa fa-cogs" aria-hidden="true" style="font-size: 25px;color: white;"></i>
                                </div>
                            </div>
                        </a>
                        <div class="tooltip"><span>System Settings</span></div>
                    </li>
                </ul>              
            </nav>

            <div id="compact_submenuSidebar" class="submenu-sidebar">
                <div class="submenu" id="common_master">
                    <div class="menu-title">
                        <h3>Common Masters</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#common_master"> 
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/campus">Campus</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/academic">Academic</a>
                        </li>   
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/classes">Class & Section</a>
                        </li>
                                                 
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/reference">Reference </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/source">Source</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/subject">Subject</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/subject_assign">Subject Assign</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/student_assign">Student Assign</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/department">Department</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/master/designation">Designation</a>
                        </li>
                    </ul>
                </div>
                <div class="submenu" id="people">
                    <div class="menu-title">
                        <h3>People</h3>
                    </div>
                    <ul class="submenu-list" data-parent-element="#people"> 
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/people/student">Student</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/backend/people/employee">Employee</a>
                        </li> 
                    </ul>
                </div>
            </div>


        </div>
        <!--  END SIDEBAR  --> 