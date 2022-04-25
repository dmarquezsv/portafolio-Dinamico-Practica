<body class="fixed-nav top-nav">

    <!--navigation : sidebar & header-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" id="mainNav">
        <div class="box-container">
           <!--brand name for responsive-->
           <a class="navbar-brand navbar-brand-responsive" href="#">
               <img class="pr-3 float-left" src="../img/logos/logo_menu.png" srcset="assets/img/logo-icon@2x.png 2x"  alt=""/>
               <div class="float-left">
                   <div>DashLab</div>
                <span class="page-direction f12 weight300">
                    <span>home</span>
                    <i class="fa fa-angle-right"></i>
                    <span>UI element</span>
                </span>
               </div>
           </a>
           <!--/brand name for responsive-->

            <!--responsive navigation list toggle-->
            <button class="navbar-toggler navigation-list-toggler" type="button" data-toggle="collapse" data-target="#navbarListResponsive" aria-controls="navbarListResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--/responsive navigation list toggle-->

            <!--responsive nav notification toggle-->
            <button class="navbar-toggler nav-notification-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span> <i class="vl_ellipsis-fill-v f16"></i></span>
            </button>
            <!--/responsive nav notification toggle-->

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <!--brand name-->
                <a class="navbar-brand navbar-hide-responsive" href="#">
                    <img class="pr-3 float-left" src="../img/logos/logo_menu.png" srcset="assets/img/logo-icon@2x.png 2x"  alt="" style="width: 60px; height: 40px;" />
                    <div class="float-left">
                        <div>Dashboard</div>
                        <span class="page-direction f12 weight300">
                            <span>home</span>
                            <i class="fa fa-angle-right"></i>
                            <span>UI element</span>
                        </span>
                    </div>
                </a>
                <!--/brand name-->

                <!--header rightside links-->
                <ul class="navbar-nav header-links ml-auto hide-arrow">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="messagesDropdown" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="vl_chat-bubble"></i>
                            <span class="d-lg-none">Messages
                                <span class="badge badge-pill badge-primary">9 New</span>
                            </span>
                            <div class="notification-alarm">
                                <span class="wave wave-danger"></span>
                                <span class="dot"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="messagesDropdown">
                            <h6 class="dropdown-header weight500 ">Messages</h6>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item border-bottom msg-unread" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar4.jpg" alt=""/>
                                </div>
                                <span class="weight500">Andrew Flinton</span>
                                <span class="small float-right text-muted">08:30 AM</span>

                                <div class="dropdown-message">
                                    I hope that you will be there in time. See you then
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom msg-unread" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar2.jpg" alt=""/>
                                </div>
                                <span class="weight500">John Doe</span>
                                <span class="small float-right text-muted">10:28 AM</span>

                                <div class="dropdown-message">
                                    Hello this is an example message. Just want to show how it looks
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar3.jpg" alt=""/>
                                </div>
                                <span class="weight500">Dash Don</span>
                                <span class="small float-right text-muted">07:12 PM</span>

                                <div class="dropdown-message">
                                    Hi, This is Dash Don form usa. I'm looking for someone who really good at design and frontend like mosaddek
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <div class="float-left notificaton-thumb">
                                    <img class="rounded-circle" src="assets/img/avatar/avatar1.jpg" alt=""/>
                                </div>
                                <span class="weight500">dkmosa</span>
                                <span class="small float-right text-muted">12:10 PM</span>

                                <div class="dropdown-message">
                                    We build a beautiful dashboard admin panel for professional
                                </div>
                            </a>
                            <a class="dropdown-item small" href="#">View all messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="alertsDropdown" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="vl_bell"></i>
                            <span class="d-lg-none">Notification
                                <span class="badge badge-pill badge-warning">5 New</span>
                            </span>
                            <div class="notification-alarm">
                                <span class="wave wave-warning"></span>
                                <span class="dot bg-warning"></span>
                            </div>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right header-right-dropdown-width pb-0" aria-labelledby="alertsDropdown">
                            <h6 class="dropdown-header weight500">Notification</h6>

                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-primary">
                                <span class="weight500">
                                    <i class="vl_bell weight600 pr-2"></i>Weekly Update</span>
                                </span>
                                <span class="small float-right text-muted">03:14 AM</span>

                                <div class="dropdown-message f12">
                                    This week project update report generated. All team members are requested to check the updates
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-danger">
                                <span class="weight500">
                                    <i class="vl_Download-circle weight600 pr-2"></i>Server Error</span>
                                </span>
                                <span class="small float-right text-muted">10:34 AM</span>

                                <div class="dropdown-message f12">
                                    Unexpectedly server response stop. Responsible members are requested to fix it soon
                                </div>
                            </a>

                            <a class="dropdown-item border-bottom" href="#">
                                <span class="text-success">
                                <span class="weight500">
                                    <i class="vl_screen weight600 pr-2"></i>Monthly Meeting</span>
                                </span>
                                <span class="small float-right text-muted">12:30 AM</span>

                                <div class="dropdown-message f12">
                                    Our monthly meeting will be held on tomorrow sharp 12:30. All members are requested to attend this meeting.
                                </div>
                            </a>

                            <a class="dropdown-item small" href="#">View all notification</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb">
                                <img class="rounded-circle" src="../img/user/<?php echo $img ?>" alt=""/>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                            <a class="dropdown-item" href="#"><?php echo $name; ?></a>
                            <a class="dropdown-item" href="#">Account Settings</a>
                            <a class="dropdown-item" href="#">Inbox <span class="badge badge-primary">3</span></a>
                            <a class="dropdown-item" href="#">Message <span class="badge badge-success">5</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="salir-view.php">Salir</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link right_side_toggle">
                            <i class="icon-options-vertical"> </i>
                        </a>
                    </li>
                </ul>
                <!--/header rightside links-->
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="box-container">
            <div class="collapse navbar-collapse" id="navbarListResponsive">
                <!--header nav links-->
                <ul class="navbar-nav header-links">
                    <li class="nav-item active">
                        <a class="nav-link mr-lg-3" href="../index.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="actionNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Portafolio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="actionNav">
                            <a class="dropdown-item" href="Proyectos.php">Nuevo Proyectos</a>
                            <a class="dropdown-item" href="#">Nuevo Certificaciones</a>
                            <a class="dropdown-item" href="#">Nueva Activadades</a>
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="reportNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Personal 
                        </a>
                        <div class="dropdown-menu" aria-labelledby="reportNav">
                            <a class="dropdown-item" href="#">Datos Personal</a>
                            <a class="dropdown-item" href="#">Nuevo habilidades</a>
                            <a class="dropdown-item" href="#">Nuevo Experiencia</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mr-lg-3" id="orderNav" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrador
                        </a>
                        <div class="dropdown-menu" aria-labelledby="orderNav">
                            <a class="dropdown-item" href="usuarios.php">Nuevos Usuarios</a>
                            <a class="dropdown-item" href="#">Notificaciones</a>
                        </div>
                    </li>
                </ul>
                <!--/header nav links-->
                <!--header search-->
                <ul class="navbar-nav header-links ml-auto">
                    <li class="nav-item">
                        <form class="search-wrap">
                            <input type="text" class="form-control form-pill search-input" placeholder="Search"/>
                            <i class="fa fa-search"></i>
                        </form>
                    </li>
                </ul>
                <!--/header search-->
            </div>
        </div>
    </nav>
    <!--/navigation : sidebar & header-->

     <div class="box-container">
        <!--main content wrapper-->
        <div class="content-wrapper">
            <div class="container-fluid">