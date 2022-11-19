<?php

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'test';


    $conexao = new mysqli($db_host,$db_user,$db_pass,$db_name);

   // if($conexao->connect_errno){
    //    echo "Erro";
    
   // }else
  //  {
        
    //    echo "Conexão efetuada com sucesso";
    
   // }

?>