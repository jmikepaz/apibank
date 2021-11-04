<?php 
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
include "../conexion.php";
$postdata = file_get_contents("php://input");  

$sql_query = "SELECT  public.ft_create_user_account('".$postdata."')";

if (pg_send_query($con, $sql_query)) {
    $res=pg_get_result($con);
    if ($res) {
      $state = pg_result_error_field($res, PGSQL_DIAG_SQLSTATE);
      if ($state==0) {
            $datos = pg_fetch_all($res);
            $variable = $datos[0]["ft_create_user_account"]; 
            echo  $resultado ;    
            }
      else {
        // some error happened
        if ($state == 23505) { // unique_violation
            $resultado = array('estado' => $state);
            echo json_encode($resultado) ;    
        }
        else {
            $resultado = array('estado' => $state);
            echo json_encode($resultado) ;
         // process other errors
        }
      }
    }  
  }

?>