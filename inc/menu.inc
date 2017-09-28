<header class="main-header">
  <a href="menu.php" class="logo">
    <!-- LOGO -->
    <i class="fa fa-cogs"></i>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!--Boton Menu -->
    <a class="sidebar-toggle" role="button" data-toggle="offcanvas" href="#">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <!-- Navbar Right Menu -->

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown user user-menu">
<a href="php/cerrar-sesion.php">Salir</a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li

            </li>
            <!-- Menu Footer-->
            <li class="user-footer">

          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
             <!-- imagen del usuario -->
            </div>
<!--Boton cerrrar-->
          </div>
          <!-- AQUI COMIENZA EL MENU -->
          <ul class="sidebar-menu">
              <li class="header">PANEL DE NAVEGACION</li>
                <!--TIEMPO EXTRA-->
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-file-text"></i>
                    <span>Ficha de Salud</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="nuevaFicha.php"><i class="fa fa-circle-o text-orange"></i> Registrar niño(a)</a></li>
                    <li><a href="consultaFicha.php"><i class="fa fa-circle-o text-orange"></i> Control Ficha</a></li>
                  </ul>
                </li>
                <!--Busqueda-->
                <li class="treeview">
                  <a href="busqueda.php">
                    <i class="fa fa-search"></i>
                    <span>Busqueda</span>
                    <!-- <i class="fa fa-angle-left pull-right"></i> -->
                  </a>
                  <!-- <ul class="treeview-menu">
                    <li><a href="consultaExamen.php"><i class="fa fa-circle-o text-orange"></i> Consultar Examen Físico</a></li>
                  </ul> -->
                </li>
                <!--Examen Físico-->
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-archive"></i>
                    <span>Examen Físico</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="consultaExamen.php"><i class="fa fa-circle-o text-orange"></i> Consultar Examen Físico</a></li>
                  </ul>
                </li>
                <!--Evaluacion medica-->
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-heartbeat"></i>
                    <span>Evaluación medica</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="consultaEvaluacion.php"><i class="fa fa-circle-o text-orange"></i> Consultar Evaluación medica</a></li>
                  </ul>
                </li>
                <!--Examen Físico -->
               <li class="treeview">
                  <a href="#">
                    <i class="fa  fa-plus-square"></i>
                    <span>Anamnesis</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="consultaAnamnesis.php"><i class="fa fa-circle-o text-orange"></i> Consultar Anamnesis</a></li>
                  </ul>
                </li>
                <!--Diagnosticos-->
                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-gittip"></i>
                    <span>Diagnostico</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    <ul class="treeview-menu">
                    <li><a href="consultaDiagnostico.php"><i class="fa fa-circle-o text-orange"></i> Consultar Diagnostico</a></li>
                    </ul>
                  </a>
                </li>
                <!--fin dignostico-->
                <!--Tratamiento-->
                <li class="treeview">
                  <a href="#">
                    <i class="glyphicon glyphicon-inbox"></i>
                    <span>Tratamiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                    <ul class="treeview-menu">
                    <li><a href="consultaTratamiento.php"><i class="fa fa-circle-o text-orange"></i> Consultar Diagnostico</a></li>
                    </ul>
                  </a>
                </li>
                <!--fin Tratamiento-->
                <!--MI INSTITUCION -->

          </ul>

        </section>
        <!-- /.sidebar -->
      </aside>
