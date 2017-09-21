<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
?>
      <div class="wrapper">
      <?php
      include 'inc/menu.inc';
      ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Anamnesis
        <small>Nuevo Anamnesis</small>
        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Panel de Control</a></li>
        <li>Anamnesis</li>
        <li class="active">Nuevo Anamnesis</li>
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
  <form method="post" action="php/guardarAnamnesis.php" id="miform">
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
          <label>Nombre</label>
          <input class="form-control" type="text" name="nombre" maxlength="30" required="required" readonly="readonly" value="<?php echo $Ficha['nombre']; ?>"/>
        </div>
        <div>
          <label>Dirección</label>
          <input type="text" name="direccion" maxlength="50" required="required" readonly="readonly" class="form-control" value="<?php echo $Ficha['direccion']; ?>">
        </div>
        <div class="col-lg-3">
          <label>Sexo</label>
          <select name="sexo" class="form-control">
            <option value="M">M</option>
            <option value="F">F</option>
          </select>
        </div>
        <div class="col-lg-4">
          <label>Estado Civil</label>
          <select name="estado" class="form-control">
            <option value="SOLTERO (A)">SOLTERO (A)</option>
            <option value="CASADO (A)">CASADO (A)</option>
          </select>
        </div>
        <div class="col-lg-3">
          <label>Edad</label>
          <input type="number" name="edad" readonly="readonly" class="form-control" value="<?php echo $Ficha['edad']; ?>">
        </div>
      </div>


    </div>

<!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Funciones Orgánicas</h3>
      </div>
      <div class="box-body">
        <div class="col-lg-6">
          <label>Apetito</label>
          <input class="form-control" type="text" name="apetito" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
          <label>Micción</label>
          <input class="form-control" type="text" name="miccion" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
          <label>Defecación</label>
          <input class="form-control" type="text" name="defecacion" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div class="col-lg-6">
        <label>Sueño</label>
          <input class="form-control" type="text" name="sueno" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
   <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes Personales</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Enfermedades Crónicas</label>
          <input class="form-control" type="text" name="enfe_cronicas" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div>
          <label>Medicamentos que actualmente</label>
          <input class="form-control" type="text" name="medicamentos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
        <div>
          <label>Antecedentes Alérgicos</label>
          <input class="form-control" type="text" name="ante_alergicos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
       <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Hábitos Tóxicos</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Hábitos Tóxicos</label>
          <input class="form-control" type="text" name="habitos_toxicos" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes quirúrgicos / hospitalarios</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Antecedentes quirúrgicos / hospitalarios</label>
          <input class="form-control" type="text" name="ant_hospitalarios" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--//////////////////////////////////////////////////////////////////-->

    <!--/////////////////////////////////////////////////////////////////-->
    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Historia de enfermedad actual</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Historia de enfermedad actual</label>
          <input class="form-control" type="text" name="historial_enfermedades" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>
    <!--//////////////////////////////////////////////////////////////////-->
    <div class="box  box-warning">
      <div class="box-header with-border">
      <h3 class="box-title"><i class="fa fa-folder-open"></i>Antecedentes patológicos familiares</h3>
      </div>
      <div class="box-body">
        <div>
          <label>Antecedentes patológicos familiares</label>
          <input class="form-control" type="text" name="antecedentes_familiares" maxlength="199" required="required" onBlur="javascript:this.value=this.value.toUpperCase();"/>
        </div>
      </div>
    </div>

    <input type="submit" class="btn btn-warning btn-flat pull-right" value="Guardar Ficha"/>
    <a href="javascript:limpiar();" class="btn btn-danger btn-flat pull-right">Limpiar Ficha</a>
  </form>
<!--INICIO-->
<?php
}
?>
        </div>
        </section><!-- Aqui es el fin -->
        </div>
      </div>
      <?php
      include 'inc/footer.inc';
      ?>
      </div><!-- ./wrapper -->

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
