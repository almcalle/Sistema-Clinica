<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
include 'inc/menu.inc';
?>
      <div class="wrapper">
      <div class="content-wrapper">
      	<section class="content-header">
	          <h1>
	            Clinica medica
	            <small>Bienvenido</small>
	          </h1>
	          <ol class="breadcrumb">
	            <li><a href="#"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
	            <li class="active">Inicio</li>
	          </ol>
	    </section>

      <section class="content">
          <div class="row">
            <!-- Page Heading -->
			<!-- ./col Fichas-->
        		<div class="col-xs-6">
        		  <!-- small box -->
         		 	<div class="small-box bg-green">
            		<div class="inner">
                <?php
                require 'php/conexion.php';
                //BUSCA NUMERO DE FICHAS
                $consulta1 = mysql_query("select COUNT(*) from ficha");
                $fichas=mysql_result($consulta1,0);
                mysql_close($conexion);
                ?>
              		<h3><?php echo $fichas; ?></h3>

              		<p>Niños (a) registrados</p>
            		</div>
            		<div class="icon">
              			<i class="fa fa-users"></i>
            		</div>
            		<a href="nuevaFicha.php" class="small-box-footer">Nueva <i class="fa fa-arrow-circle-right"></i></a>
          			</div>
        		</div>
        <!-- ./col -->
        <!-- ./col Fichas-->
        		<div class="col-xs-6">
        		  <!-- small box -->
         		 	<div class="small-box bg-red">
            		<div class="inner">
                <?php
                require 'php/conexion.php';
                //BUSCA NUMERO DE DIAGNOSTICOS
                $consulta2 = mysql_query("select COUNT(*) from diagnosticos");
                $diag=mysql_result($consulta2,0);
                mysql_close($conexion);
                ?>
              		<h3><?php echo $diag; ?></h3>

              		<p>Diagnosticos</p>
            		</div>
            		<div class="icon">
              			<i class="fa  fa-gittip"></i>
            		</div>
            		<a href="nuevoDiagnostico.php" class="small-box-footer">Nuevo <i class="fa fa-arrow-circle-right"></i></a>
          			</div>
        		</div>
          <!--/////////////////////////////////////-->

                  <!-- ./col Fichas-->
        		<div class="col-xs-6">
        		  <!-- small box -->
         		 	<div class="small-box bg-aqua">
            		<div class="inner">
                <?php
                require 'php/conexion.php';
                //BUSCA NUMERO DE EXAMENES
                $consulta2 = mysql_query("select COUNT(*) from examen");
                $diag=mysql_result($consulta2,0);
                mysql_close($conexion);
                ?>
              		<h3><?php echo $diag; ?></h3>

              		<p>Examenes Fisicos</p>
            		</div>
            		<div class="icon">
              			<i class="fa  fa-archive"></i>
            		</div>
            		<a href="nuevoExamen.php" class="small-box-footer">Nuevo <i class="fa fa-arrow-circle-right"></i></a>
          			</div>
        		</div>
        <!-- ./col -->
                  <!-- ./col Fichas-->
        		<div class="col-xs-6">
        		  <!-- small box -->
         		 	<div class="small-box bg-yellow">
            		<div class="inner">
                <?php
                require 'php/conexion.php';
                //BUSCA NUMERO DE ANAMNESIS
                $consulta2 = mysql_query("select COUNT(*) from anamnesis");
                $diag=mysql_result($consulta2,0);
                mysql_close($conexion);
                ?>
              		<h3><?php echo $diag; ?></h3>

              		<p>Anamnesis</p>
            		</div>
            		<div class="icon">
              			<i class="fa fa-file-text"></i>
            		</div>
            		<a href="nuevoAnamnesis.php" class="small-box-footer">Nuevo <i class="fa fa-arrow-circle-right"></i></a>
          			</div>
        		</div>

        <!-- ./col -->
                <!-- ./col -->
                  <!-- ./col Fichas-->
        		<div class="col-xs-6">
        		  <!-- small box -->
         		 	<div class="small-box bg-info">
            		<div class="inner">
                <?php
                require 'php/conexion.php';
                //BUSCA NUMERO DE ANAMNESIS
                $consulta2 = mysql_query("select COUNT(*) from evaluaciones");
                $diag=mysql_result($consulta2,0);
                mysql_close($conexion);
                ?>
              		<h3><?php echo $diag; ?></h3>

              		<p>Evaluaciones</p>
            		</div>
            		<div class="icon">
              			<i class="fa fa-heartbeat"></i>
            		</div>
            		<a href="nuevaEvaluacion.php" class="small-box-footer">Nuevo <i class="fa fa-arrow-circle-right"></i></a>
          			</div>
        		</div>

        <!-- ./col -->

        <!-- ./col Fichas-->
  <div class="col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
      <?php
      require 'php/conexion.php';
      //BUSCA NUMERO DE VACUNAS
      $consulta2 = mysql_query("select COUNT(*) from vacunas");
      $diag=mysql_result($consulta2,0);
      mysql_close($conexion);
      ?>
        <h3><?php echo $diag; ?></h3>

        <p>Registros de vacunas</p>
      </div>
      <div class="icon">
          <i class="fa fa-rotate-90 fa-fighter-jet"></i>
      </div>
      <a href="nuevaVacuna.php" class="small-box-footer">Nuevo <i class="fa fa-arrow-circle-right"></i></a>
      </div>
  </div>
  <!-- ./col -->

</div>
        </section><!-- right col -->
      </div>
      </div><!-- ./wrapper -->
<?php
include 'inc/footer.inc';
include 'inc/scripts.inc';
include 'inc/plugins.inc';
?>
