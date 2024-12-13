<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $endereco=$_POST['endereco'];
    $fone=$_POST['fone'];
    $nascimento=$_POST['nascimento'];
    $email=$_POST['email'];
    $cns=$_POST['cns'];
    $sexo=$_POST['sexo'];

    $sql="insert into tbcliente(cod_pac,nome,cpf,endereco,fone,nascimento,email,cns,sexo) values(null,'$nome','$cpf','$endereco','$fone','$nascimento','$email','$cns','$sexo')";
        
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:frmbusca.php?mess=ok');
    }else{
        header('location:frmbusca.php?mess=Wrong!');
    }

?>