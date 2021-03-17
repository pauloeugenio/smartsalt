<?php
include "conn.php";

       
        $temperatura = $_GET["temperatura"];
        $humidade = $_GET["humidade"];
     
        
        
if($temperatura == null || $humidade == null ){
    echo "Valor Nulo";
}else{
    $sql = mysqli_query($conn, "INSERT INTO temperatura (temperatura, humidade) VALUES ($temperatura, $humidade)");
  
    if($sql){
        echo "cadastro realizado com sucesso!";
    }else{
        echo "Não cadastrou";
    }
}

?>
