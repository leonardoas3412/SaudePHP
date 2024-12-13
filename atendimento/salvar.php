<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
                                   
    //$cod = $_POST['cod'];     
    $cod_pac = $_POST['cod_pac'];     
    $cod_prof = $_POST['cod_prof']; 
    $cod_proced = $_POST['cod_proced'];                            
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $local = $_POST['local'];

    $sql="insert into tbatendimento(cod_atendimento,cod_pac,cod_prof,cod_proced,data,hora,local) values(null,'$cod_pac','$cod_prof','$cod_proced','$data','$hora','$local')";
  

    //echo $sql;
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:frmbusca.php?mess=ok');
    }else{
        header('location:frmbusca.php?mess=Wrong!');
    }

?>