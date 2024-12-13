<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST

    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $area = $_POST['area'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    $sql="insert into tbprofissional(cod_prof,nome,crm,area,fone,email) values(null,'$nome','$crm','$area','$fone','$email')";
  
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:frmbusca.php?mess=ok');
    }else{
        //header('location:frmbusca.php?mess=Wrong!');
    }

?>