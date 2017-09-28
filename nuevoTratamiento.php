<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
include 'inc/menu.inc';
?>
      <div class="wrapper">
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Tratamiento
        <small>Nuevo Tratamiento</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Tratamiento</li>
        <li class="active">Nuevo Tratamiento</li>
        </ol>
        </section>
          <?php
            if(isset($_GET['id']))
            {
            require 'php/conexion.php';
            $buscar = $_GET['id'];
            //BUSCA FICHA
            $registro = mysql_query("select * from ficha where identidad='".$buscar."'");
            $Ficha = mysql_fetch_array($registro);
            ?>
          <div class="col-lg-12">
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">

            <div class="box box-warning widget-user-2">

            <div class="widget-user-header bg-black" style="background: url('../dist/img/photo1.png') center center;">
              <div class="widget-user-image">
              <br>
              <!-- <center><img class="img-circle" src="<?php echo "img/".$Ficha['foto']; ?>" alt="<?php echo "img/".$Ficha['foto']; ?>" id="fotoGrande" /></center> -->
              </div>
              <!-- /.widget-user-image -->
              <center>
                <h3 class="widget-user-username"><?php echo $Ficha['nombre']; ?></h3>
                <h5 class="widget-user-desc"><?php echo $Ficha['grado'],"-",$Ficha['seccion']," (",$Ficha[edad]," años)"?></h5>
              </center>
              <br>
            </div>
          </div>

<!--FIN del la ficha de consulta-->
  <form method="post" action="php/guardar/guardarTratamiento.php" id="miform">



    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Datos personales</h3>
      </div>
      <div class="box-body">
          <div>
          <label>Identidad</label>
              <input class="form-control" readonly="readonly" name="identidad" required="required" value="<?php echo $Ficha['identidad']; ?>" />
          </div>

          <div>
            <label>* Tratamiento</label>
            <textarea name="tratamiento" maxlength="199" class="form-control" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"></textarea>
          </div>

</div>
          <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Tratamiento"/>
          <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Tratamiento</a>
        </form>
      <!--INICIO-->
      <?php
      }
      ?>
              </div>
              </div>
              </div>
              </div>

              </section><!-- Aqui es el fin -->
              </div>
            </div>
          </div><!-- ./wrapper -->
            <?php
            include 'inc/footer.inc';
            ?>

      <?php
      include 'inc/scripts.inc';
      ?>
      <script type="text/javascript">
        function limpiar() {
          document.getElementById("miForm").reset();
        }
      </script>
      <?php
      include 'inc/plugins.inc';
      include 'inc/fin.inc';
      ?>
