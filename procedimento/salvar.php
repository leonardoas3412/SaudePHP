<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
    $nome = $_POST['nome'];


    $sql="insert into tbprocedimento(cod_proced,nome) values(null,'$nome')";
  
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:frmbusca.php?mess=ok');
    }else{
        header('location:frmbusca.php?mess=Wrong!');
    }

?>