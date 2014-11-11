@extends('layouts.admi')

    @section('title') 
        @parent
    @stop
    @section('header')
	   @parent
    @stop
    @section('menusup')
        <!--logo start-->
        <div class="brand">
        <a href="index.html" class="logo">
          <img src="assets/fe/img/logo/banner1.png" alt="">
        </a>
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars"></div>
        </div>
        </div>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
               <i class="fa fa-tasks"></i>
               <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                     <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                <a href="#">
                    <div class="task-info clearfix">
                        <div class="desc pull-left">
                            <h5>Target Sell</h5>
                            <p>25% , Deadline  12 June’13</p>
                        </div>
                            <span class="notification-pie-chart pull-right" data-percent="45">
                        <span class="percent"></span>
                        </span>
                    </div>
                </a>
                </li>
                <li>
                <a href="#">
                    <div class="task-info clearfix">
                        <div class="desc pull-left">
                            <h5>Target Sell</h5>
                            <p>33% , Deadline  12 June’13</p>
                        </div>
                            <span class="notification-pie-chart pull-right" data-percent="90">
                        <span class="percent"></span>
                        </span>
                    </div>
                </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini.jpg"></span>
                            <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                 <span class="time">Just now</span>
                            </span>
                            <span class="message">
                                Hello, this is an example msg.
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini-2.jpg"></span>
                            <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                            </span>
                            <span class="message">
                                Nice admin template
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                            <span class="photo"><img alt="avatar" src="images/avatar-mini-3.jpg"></span>
                            <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                            </span>
                            <span class="message">
                                This is an example msg.
                            </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notificaciones</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                       <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                       <div class="noti-info">
                        <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                    <div class="noti-info">
                        <a href="#"> Server #2 overloaded.</a>
                    </div>
                     </div>
                </li>
            </ul>
        </li>
        <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
        </div>
        <!--  PERFIL -->
        <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder="Buscar2">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/avatar1_small.jpg">
                <span class="username">{{Auth::user()->username}}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="<?=URL::to('admi/perfil');?>"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?=URL::to('logout');?>"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
        <li>
            <div class="toggle-right-box">
                <div class="fa fa-bars"></div>
            </div>
        </li>
        </ul>
        <!--search & user info end-->
        </div>
    @stop
    @section('menuizq')
        <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->            <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a href="<?=URL::to('admi/index')?>">
                    <i class="fa fa-dashboard"></i>
                    <span>MENU ADMINISTRADOR</span>
                </a>
            </li>
            <li class="sub-menu">
                <a class="dcjq-parent" href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>PROGRAMAS</span>
                    <span class="dcjq-icon"></span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/programnew')?>">Nuevo Programa</a></li>
                    <li><a href="<?=URL::to('admi/programshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/programver')?>">mostrar</a></li>
                    <li><a href="<?=URL::to('admi/programver')?>">ver prueba materias</a></li>
                    <li><a href="<?=URL::to('admi/offernew')?>">regofertas</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-laptop"></i>
                    <span>CONTROL PORTAL WEB</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/offernew')?>">Nueva Oferta</a></li>
                    <li><a href="<?=URL::to('admi/offershow')?>">Ver Ofertas</a></li>
                    <li><a href="<?=URL::to('admi/eventnew')?>">Nuevo Evento</a></li>
                    <li><a href="<?=URL::to('admi/eventshow')?>">Ver Eventos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-graduation-cap"></i>
                    <span>GRADOS ACADEMICOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/degreeshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/degreenew')?>">Nuevo</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>ESTUDIANTES</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/inscritosshow')?>">Listar Postulantes</a></li>
                    <li><a href="<?=URL::to('admi/inscritosupdate')?>">Actualizar Datos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span>DOCENTES</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/docentenew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/docenteshow')?>">Ver Todos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-money"></i>
                    <span>PAGOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/pagonew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/pagoshow')?>">Ver Todos</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>REPORTES</span>
                </a>
                <ul class="sub">
                    <li><a href=" ">Programas</a></li>
                    <li><a href=" ">Estudiantes</a></li>
                    <li><a href=" ">Docentes</a></li>
                    <li><a href=" ">Pagos</a></li>
                    <li><a href=" ">Usuarios</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-users"></i>
                    <span>USUARIOS</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/usersnew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/usersshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/userssearch')?>">Busqueda</a></li>
                    <li><a href="<?=URL::to('admi/usersreport')?>">Reportes</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span>PERSONAL</span>
                </a>
                <ul class="sub">
                    <li><a href="<?=URL::to('admi/personalnew')?>">Nuevo</a></li>
                    <li><a href="<?=URL::to('admi/personalshow')?>">Ver Todos</a></li>
                    <li><a href="<?=URL::to('admi/personalbuscar')?>">Busqueda</a></li>
                    <li><a href="<?=URL::to('admi/personalrep')?>">Reportes</a></li>
                </ul>
            </li>
            <li>
                <a href="login.html">
                    <i class="fa fa-user"></i>
                    <span>Login Page</span>
                </a>
            </li>
        </ul></div>        
        <!-- sidebar menu end-->
        </div>   
    @stop
    @section('content')
        <div class="row">
                <div class="col-md-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="<?=URL::to('admi/index')?>"><i class="fa fa-home"></i>INICIO</a></li>
                        <li><a>REGISTRAR NUEVO USUARIO</a></li>
                        <li class="active">DATOS PERSONALES</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
        </div>
        <div class="row"> 
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <header class="panel-heading">
                            Registrar Datos Personales
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="post" action="<?=URL::to('admi/datossave');?>">                                                                  
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="nombre" class="control-label col-md-3">Nombre</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control" id="focusedInput" name="nombre" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="apellidop" class="control-label col-lg-3">Apellido Paterno</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="apellidop"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="apellidom" class="control-label col-lg-3">Apellido Materno</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="apellidom"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="ci" class="control-label col-lg-3">Cedula de Identidad</label>
                                        </div>
                                        <div class="col-md-2">
                                         <div class="input-group">
                                           <input class="form-control" id="focusedInput" name="ci"  type="text" required /> 
                                         </div>
                                       </div>
                                       <div class="col-md-3">
                                       <label for="exp" class="control-label col-lg-3">Expedido en:</label>
                                        </div>
                                        <div class="col-md-3">
                                         <div class="input-group">
                                           <span class="input-group-input">
                                                    <select name="exp" class="form-control input-md" id="focusedInput" required> 
                                                    <option value="Pt">Potosí</option>
                                                    <option value="LPZ">La Paz</option>
                                                    <option value="Chq">Chuquisaca</option>
                                                    <option value="Tja">Tarija</option>
                                                    <option value="Scz">Santa Cruz</option>
                                                    <option value="Pt">La Paz</option>
                                                    <option value="Pnd">Pando</option>
                                                    <option value="Oru">Oruro</option>
                                                    <option value="Bni">Beni</option>
                                                    </select>
                                            </span>
                                         </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="fn" class="control-label col-lg-3">Fecha de Nacimiento</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="fn"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="pais" class="control-label col-lg-3">Pais</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="pais"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="dep" class="control-label col-lg-3">Departamento</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="dep"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="prov" class="control-label col-lg-3">Provincia</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="prov"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="ecivil" class="control-label col-lg-3">Estado civil</label>
                                        </div>
                                        <div class="col-md-7">
                                               <select name="ecivil" id="focusedInput" class="form-control input-sm m-bot15" required> 
                                               <option>Seleccione una opcion...</option>
                                               <option value="0">Soltero(a)</option>
                                               <option value="1">Casado(a)</option>
                                               <option value="3">Divorciado(a)</option>
                                               <option value="4">Viudo(a)</option>
                                               </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="direccion" class="control-label col-lg-3">Dirección</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class=" form-control" id="focusedInput" name="direccion"  type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                           <label for="telefono" class="control-label col-lg-3">Telefono</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control " id="focusedInput" type="comment" name="telefono" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                        <label for="correo" class="control-label col-lg-3">Correo Electronico</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input class="form-control " id="focusedInput" type="comment" name="correo" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-3 col-lg-6">
                                            <button class="btn btn-info" type="submit"><i class="fa fa-floppy-o"></i>Guardar</button>
                                            <button class="btn btn-warning" type="button"><i class="fa fa-times"></i>Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    @stop 
    @section('menuder')
        <div class="search-row">
            <input type="text" placeholder="Search" class="form-control">
        </div>
        <div class="right-stat-bar">
            <ul class="right-side-accordion">
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head red-bg active clearfix">
                    <span class="pull-left">MENU 1</span>
                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                <ul class="widget-container">
                    <li>
                        <div class="prog-row side-mini-stat clearfix">
                                <div class="side-graph-info">
                                    <h4>Target sell</h4>
                                        <p>
                                            25%, Deadline 12 june 13
                                        </p>
                                </div>
                                <div class="side-mini-graph">
                                    <div class="target-sell">
                                    </div>
                                </div>
                        </div>
                
                        <div class="prog-row side-mini-stat">
                            <div class="col-md-12">
                                <h4>total progress</h4>
                                    <p>
                                         50%, Deadline 12 june 13
                                    </p>
                                <div class="progress progress-xs mtop10">
                                    <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                                    <span class="sr-only">50% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </li>
                </ul>
                </li>
                <li class="widget-collapsible">
                <a href="#" class="head widget-head terques-bg active clearfix">
                    <span class="pull-left">MENU 2</span>
                    <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                </a>
                <ul class="widget-container">
                <li>
                    <div class="prog-row">
                        <div class="user-thumb">
                            <a href="#"><img src="images/avatar1_small.jpg" alt=""></a>
                        </div>
                        <div class="user-details">
                            <h4><a href="#">Jonathan Smith</a></h4>
                            <p>
                                Work for fun
                            </p>
                        </div>
                        <div class="user-status text-danger">
                            <i class="fa fa-comments-o"></i>
                        </div>
                    </div>
                    <div class="prog-row">
                        <div class="user-thumb">
                            <a href="#"><img src="images/chat-avatar2.jpg" alt=""></a>
                        </div>
                        <div class="user-details">
                            <h4><a href="#">John Doe</a></h4>
                            <p>
                            Away from Desk
                            </p>
                        </div>
                            <div class="user-status text-warning">
                             <i class="fa fa-comments-o"></i>
                            </div>
                    </div>
                                          
                    <p class="text-center">
                        <a href="#" class="view-btn">View all Contacts</a>
                    </p>
                    </li>
                    </ul>
                </li>
                <li class="widget-collapsible">
                    <a href="#" class="head widget-head purple-bg active">
                        <span class="pull-left">OPCION 3</span>
                        <span class="pull-right widget-collapse"><i class="ico-minus"></i></span>
                    </a>
                    <ul class="widget-container">
                    <li>
                    <div class="prog-row">
                         <div class="user-thumb rsn-activity">
                             <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="rsn-details ">
                            <p class="text-muted">
                                just now
                            </p>
                            <p>
                                <a href="#">Jim Doe </a>Purchased new equipments for zonal office setup
                             </p>
                        </div>
                    </div>
                </li>
                </ul>
                </li>
            </ul>
        </div>
    @stop
    @section('footer')
	   @parent
    @stop