<? php
include("conexion.php");

if($_POST["busqueda"]<>''){
  //cuenta el numero de palabras
  $trozos = explode(" ",$_POST["busqueda"]);
  $numero = count($trozos);
       if ($numero==1) {
          $cadbusca="SELECT inmueble, costo, IDestado, estado, municipio FROM busqueda WHERE VISIBLE =1 
        AND inmueble LIKE  '%$busqueda%' AND estado LIKE  '%$busqueda%' OR municipio LIKE  '%$busqueda%' LIMIT 50";
     
    } elseif ($numero>1) {
          $cadbusca="SELECT  inmueble, costo, IDestado, estado, municipio MATCH (inmueble,estado,municipio) 
          AGAINST (  '$busqueda' ) AS Score FROM busqueda
           WHERE MATCH (inmueble,estado,municipio) AGAINST (  '$busqueda' ) ORDER  BY Score DESC LIMIT 50";


    }
        $result=mysql("teleformacion", $cadbusca);
        While($row=mysqli_fetch_object($result))
        {
          $inmueble=$row->inmueble;
          $costo=$row->costo;
          $IDestado=$row->IDestado;
          $estado=$row->estado;
          $municipio=$row->municipio;
          echo $inmueble." - ".
          $costo." - ".
          $IDestado." - ".
          $estado." - ".
          $municipio."<br>";
        }
      }
      ?>