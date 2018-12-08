<aside class="aside-container">
    <!-- START Sidebar (left)-->
    <div class="aside-inner">
        <nav class="sidebar" data-sidebar-anyclick-close="">
            <!-- START sidebar nav-->
            <ul class="sidebar-nav">
                <!-- START user info-->
                <li class="has-user-block">
                    <div class="collapse" id="user-block">
                        <div class="item user-block">
                            <!-- User picture-->
                            <div class="user-block-picture">
                                <div class="user-block-status">
                                    <img class="img-thumbnail rounded-circle" src="{{asset('dashboard_assets/img/user/02.jpg')}}" alt="Avatar" width="60" height="60">
                                    <div class="circle bg-success circle-lg"></div>
                                </div>
                            </div>
                            <!-- Name and Job-->
                            <div class="user-block-info">
                                <span class="user-block-name">Myint Myat Kaung</span>
                                <span class="user-block-role">Admin</span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- END user info-->
                <!-- Iterates over all sidebar items-->
                <li class="nav-heading ">
                    <span data-localize="sidebar.heading.HEADER">Admin Dashboard</span>
                </li>
                {{--Dashboard--}}
                <li class=" ">
                    <a href="{{route('admin.dashboard')}}" title="Dashboard">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.DASHBOARD">Dashboard</span>
                    </a>
                </li>
                {{--Dashboard End--}}
                {{--Manage Student--}}
                <li class=" ">
                    <a href="#student" title="Manage Student" data-toggle="collapse">
                        <em class="far fa-address-card"></em>
                        <span>Manage Student</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="student">
                        <li class="sidebar-subnav-header">Manage Student</li>
                        <li class=" ">
                            <a href="{{route('student.index')}}" title="All Students">
                                <span>All Students</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{route('student.create')}}" title="Add Student">
                                <span>Student Registration</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Student End--}}
                {{--Manage Teacher--}}
                <li class=" ">
                    <a href="#teacher" title="Manage Teacher" data-toggle="collapse">
                        <em class="fas fa-chalkboard-teacher"></em>
                        <span>Manage Teacher</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="teacher">
                        <li class="sidebar-subnav-header">Manage Teacher</li>
                        <li class=" ">
                            <a href="" title="All Teachers">
                                <span>All Teachers</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Add Teacher">
                                <span>Add Teacher</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Teacher End--}}
                {{--Manage Class--}}
                <li class=" ">
                    <a href="#class" title="Manage Class" data-toggle="collapse">
                        <em class="fas fa-door-open"></em>
                        <span>Manage Class</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="class">
                        <li class="sidebar-subnav-header">Manage Class</li>
                        <li class=" ">
                            <a href="" title="All Classes">
                                <span>All Classes</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Add Class">
                                <span>Add Class</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Class End--}}
                {{--Manage Attendance--}}
                <li class=" ">
                    <a href="#att" title="Attendance" data-toggle="collapse">
                        <em class="far fa-calendar-check"></em>
                        <span data-localize="sidebar.nav.Attendance">Student Attendance</span>
                    </a>
                </li>
                {{--Manage Attendance End--}}
                {{--Manage Subject--}}
                <li class=" ">
                    <a href="#subject" title="Manage Subject" data-toggle="collapse">
                        <em class="fas fa-book"></em>
                        <span>Manage Subject</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="subject">
                        <li class="sidebar-subnav-header">Manage Subject</li>
                        <li class=" ">
                            <a href="" title="All Subjects">
                                <span>All Subjects</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Add Subject">
                                <span>Add Subject</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Subject End--}}
                {{--Manage Exam Result--}}
                <li class=" ">
                    <a href="#result" title="Exam Result" data-toggle="collapse">
                        <em class="fas fa-check"></em>
                        <span data-localize="sidebar.nav.Attendance">Exam Results</span>
                    </a>
                </li>
                {{--Manage Exam Result End--}}
                {{--Manage Exam--}}
                <li class=" ">
                    <a href="#exam" title="Manage Exam" data-toggle="collapse">
                        <em class="fas fa-edit"></em>
                        <span>Manage Exam</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="exam">
                        <li class="sidebar-subnav-header">Manage Exam</li>
                        <li class=" ">
                            <a href="" title="All Exams">
                                <span>All Exams</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Add Exam">
                                <span>Add Exam</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Exam End--}}
                {{--Manage Event--}}
                <li class=" ">
                    <a href="#event" title="Manage Event" data-toggle="collapse">
                        <em class="icon-badge"></em>
                        <span>Manage Event</span>
                    </a>
                    <ul class="sidebar-nav sidebar-subnav collapse" id="event">
                        <li class="sidebar-subnav-header">Manage Event</li>
                        <li class=" ">
                            <a href="" title="All Events">
                                <span>All Events</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="" title="Add Event">
                                <span>Add Event</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Manage Event End--}}
                {{--Manage Exam Result--}}
                <li class=" ">
                    <a href="#timetable" title="Exam Result" data-toggle="collapse">
                        <em class="far fa-calendar-alt"></em>
                        <span data-localize="sidebar.nav.TimeTable">Timetable</span>
                    </a>
                </li>
                {{--Manage Exam Result End--}}

            </ul>

            <!-- END sidebar nav-->
        </nav>
    </div>
    <!-- END Sidebar (left)-->
</aside>
