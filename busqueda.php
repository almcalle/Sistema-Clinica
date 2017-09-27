<?php
require 'php/requerirUsuario.php';
include 'inc/inicio.inc';
?>
      <div class="wrapper">
      <?php
      include 'inc/menu.inc';
      ?>
      <?php
        if (isset($_GET['busqueda']) && isset($_GET['campo'])) {
            require 'php/conexion.php';
            $busqueda = $_GET['busqueda'];
            $campo= $_GET['campo'];
        }
        ?>
      <div class="content-wrapper">
        <section class="content-header">
        <h1>
        Búsqueda

        </h1>
        <ol class="breadcrumb">
        <li><a href="menu.php"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Búsqueda</li>
        </ol>
        </section>
        <section class="content"><!--AQUI COMIENZA EL CONTENIDO -->
        <div class="row">
         <div class="col-lg-12">
         	<div class="panel panel-warning">
         <div class="panel-heading">
         	<h4></h4>
         </div>
         <div class="panel-body">
         		 <form  id="Busqueda">
          	<!--MENU DE OPCIONES-->
          	<div class="col-lg-12">
          <div class="box box-solid">

            <!-- /.box-header -->


          </div>
          <!-- /.box -->
        </div>
          	<!--FIN DEL MENU OPCIONES-->
          	  <div class="col-lg-12"><!--informacion personal-->
          		<div class="box box-warning">
          			<div class="box-header with-border">
	    			<i class="fa fa-search"></i>
	    			<h3 class="box-title">BÚSQUEDA</h3>
	    			</div>
	    			<div class="box-body">

              <div class="col-lg-6">
              <div class="form-group">
                <!--Numero de identidad-->
                <label for="campo">Campo en el que buscar</label>
                <select  id="campo" name="campo" class="form-control">

                  <!-- <option value="">Examen Físico</option> -->

                  <option
<?php if ($campo=="pa") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="pa">PA</option>
                  <option
<?php if ($campo=="fr") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="fr">FR</option>
                  <option
<?php if ($campo=="temperatura") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="temperatura">Temperatura</option>
<?php if ($campo=="peso") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                            value="peso">Peso</option>
                            <option
<?php if ($campo=="talla") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
value="talla">Talla</option>
<option
<?php if ($campo=="imc") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
value="imc">IMC</option>

<option
<?php if ($campo=="cabeza") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
value="cabeza">Cabeza</option>

                  <option
<?php if ($campo=="ojo_izquierdo") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="ojo_izquierdo">Ojo Izquierdo</option>
                  <option
                  <?php if ($campo=="ojo_derecho") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="ojo_derecho">Ojo Derecho</option>
                  <option
                  <?php if ($campo=="observaciones_visual") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="observaciones_visual">Observaciones Visual</option>
                  <option
                  <?php if ($campo=="oidos") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="oidos">Oidos</option>
                  <option
                  <?php if ($campo=="nariz") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="nariz">Nariz</option>
                  <option
                  <?php if ($campo=="coello") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="coello">Cuello</option>
                  <option
                  <?php if ($campo=="torax") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="torax">Tórax</option>
                  <option
                  <?php if ($campo=="corazon") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="corazon">Corazón</option>
                  <option
                  <?php if ($campo=="abdomen") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="abdomen">Abdomen</option>
                  <option
                  <?php if ($campo=="genitales") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="genitales">Genitales</option>
                  <option
                  <?php if ($campo=="extremidades") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="extremidades">Extremidades</option>
                  <option
                  <?php if ($campo=="piel") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="piel">Piel</option>
                  <option
                  <?php if ($campo=="observaciones") {
    echo "selected=\"selected\"";
    $tabla="examen";
} ?>
                  value="observaciones">Observaciones</option>
                  <option
                  <?php if ($campo=="estrabismo") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="estrabismo">Estrabismo</option>
                  <option
                  <?php if ($campo=="perdida_auditiva") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="perdida_auditiva">Perdida Auditiva</option>
                  <option
                  <?php if ($campo=="transtorno_fonacion") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="transtorno_fonacion">Transtorno de fonación</option>
                  <option
                  <?php if ($campo=="pediculosis") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="pediculosis">Pediculosis</option>
                  <option
                  <?php if ($campo=="sarna") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="sarna">Sarna</option>
                  <option
                  <?php if ($campo=="anemia") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="anemia">Anemia</option>
                  <option               <?php if ($campo=="violencia") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>
                  value="violencia">Violencia</option>

<option <?php if ($campo=="problemas_personalidad") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>  value="problemas_personalidad">Problemas de Personalidad</option>

<option <?php if ($campo=="problemas_aprendizaje") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>  value="problemas_aprendizaje">Problemas de Aprendizaje</option>
<option <?php if ($campo=="uso_drogas") {
    echo "selected=\"selected\"";
    $tabla="evaluaciones";
} ?>  value="uso_drogas">Uso de Drogas</option>
<option <?php if ($campo=="apetito") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="apetito">Apetito</option>
<option <?php if ($campo=="miccion") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="miccion">Micción</option>
<option <?php if ($campo=="defecacion") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="defecacion">Defecación</option>
<option <?php if ($campo=="sueno") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="sueno">Sueño</option>
<option <?php if ($campo=="enfe_cronicas") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="enfe_cronicas">Enfermedades Crónicas</option>
<option <?php if ($campo=="medicamentos") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="medicamentos">Medicamentos</option>
<option <?php if ($campo=="ante_alergicos") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="ante_alergicos">Antecedentes Alérgicos</option>
<option <?php if ($campo=="habitos_toxicos") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="habitos_toxicos">Hábitos Tóxicos</option>
<option <?php if ($campo=="ant_hospitalarios") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="ant_hospitalarios">Antecedentes Hospitalarios</option>
<option <?php if ($campo=="historial_enfermedades") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="historial_enfermedades">Historial de Enfermedades</option>
<option <?php if ($campo=="antecedentes_familiares") {
    echo "selected=\"selected\"";
    $tabla="anamnesis";
} ?>  value="antecedentes_familiares">Antecedentes Familiares</option>
<option <?php if ($campo=="patologico") {
    echo "selected=\"selected\"";
    $tabla="diagnosticos";
} ?>  value="patologico">Diagnostico Patológico</option>
<option <?php if ($campo=="nutricional") {
    echo "selected=\"selected\"";
    $tabla="diagnosticos";
} ?>  value="nutricional">Diagnostico Nutricional</option>
<option <?php if ($campo=="socieconomico") {
    echo "selected=\"selected\"";
    $tabla="diagnosticos";
} ?>  value="socieconomico">Diagnostico Socieconómico</option>
<option <?php if ($campo=="inmunologico") {
    echo "selected=\"selected\"";
    $tabla="diagnosticos";
} ?>  value="inmunologico">Diagnostico Inmunológico</option>
<option <?php if ($campo=="etario") {
    echo "selected=\"selected\"";
    $tabla="diagnosticos";
} ?>  value="etario">Diagnostico Etario</option>

                </select>
              </div>
            </div>

            <div class="col-lg-6">
	    				<div class="form-group">
                <!--Numero de identidad-->
	    					<label for="busqueda">Búsqueda en ese campo</label>
							<input value="<?php echo $busqueda; ?>" class="form-control"  type="text" name="busqueda" placeholder=""/>
	    				</div>
              </div>
              <div class="box-body">
            <button id="buscar_boton" class="btn btn-warning btn-flat pull-right">Búsqueda
            </button>

              </div>
	    			</div>
	    		</div>
          	</div>

          </form>
            <!-- /.box-body -->

            <?php
if (isset($_GET['busqueda']) && isset($_GET['campo'])) {



            // $count ="SELECT COUNT (*) AS 'CUENTA' FROM ".$tabla." WHERE ".$campo." LIKE '%".$busqueda."%'";
    // $result  = mysql_query($count);

    // $row = mysql_result($result,true);
    // $row=mysql_fetch_assoc($result);


    $query="SELECT * FROM ".$tabla." WHERE ".$campo." LIKE '%".$busqueda."%'";
    $resultados  = mysql_query($query);
    $cuenta= mysql_num_rows($resultados);

    // $filas = mysql_fetch_array($resultados);

    $consulta1 = mysql_query("select COUNT(*) from ".$tabla."");
    $registros=mysql_result($consulta1, 0);

    //  echo "Query: ".$query;
    // echo " Resultado: ".$filas[$campo];
    echo " Cuenta: ".$cuenta." de ".$registros." registros";
    $porcentaje=$cuenta/$registros*100;
    echo "<br> Porcentaje: ".$porcentaje."%" ?>

  <div class="box box-warning">
    <div class="box-header with-border">
  <i class="fa fa-search"></i>
  <h3 class="box-title">Resultados</h3>
  </div>
  <div class="box-body">

  <div class="col-lg-12">
<?php
  echo '<table id="example" class="display" cellspacing="0" width="100%">
    <thead>
                  <tr>

                     <th width="100">IDENTIDAD</th>
                     <th width="200">NOMBRE</th>
                      <th width="200">FECHA</th>
                      <th width="200">RESULTADO</th>
                <th width="100">ACCIONES</th>
                  </tr>
    </thead>
     <tbody>';

    while ($fila = mysql_fetch_array($resultados)) {
        $consulta = mysql_query("select nombre from ficha where identidad='".$fila['identidad']."'") or die(mysql_error());
        $nombre = mysql_fetch_array($consulta);
        echo'<tr>
              <td>'.$fila['identidad'].'</td>
              <td>'.$nombre['nombre'].'</td>
               <td>'.$fila['fecha'].'</td>
               <td>'.$fila[$campo].'</td>
                    <td><a href="detalleFicha.php?id='.$fila['identidad'].'" class="glyphicon glyphicon-search" data-toggle="tooltip" title="Ver Ficha"></a>&nbsp;&nbsp;&nbsp;
                    <!-- <a href="javascript:borrarDiagnostico('.$registro2['id'].');" class="fa fa-trash" data-toggle="tooltip" title="Borrar"></a> -->
                    </td>
               </tr>';
    }
    echo '</tbody></table>';
}
            ?>

           </div>

          </div>
          </div>

           	</div>
           </div>
           </div>
          </div>
          </section><!-- right col -->
          </div>
        <?php
        include 'inc/footer.inc';
        ?>
        </div><!-- ./wrapper -->

  <?php
  include 'inc/scripts.inc';
  ?>
  <script src = "js/jquery.dataTables.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).ready(function() {
      $('#example').DataTable();
  } );
  </script>


  <?php
  include 'inc/plugins.inc';
  include 'inc/fin.inc';
  ?>
