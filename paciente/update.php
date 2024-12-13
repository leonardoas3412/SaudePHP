<?php
    include('../banco.php');

    $cod =$_POST['cod'];
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $endereco=$_POST['endereco'];
    $fone=$_POST['fone'];
    $nascimento=$_POST['nascimento'];
    $email=$_POST['email'];
    $cns=$_POST['cns'];
    $sexo=$_POST['sexo'];
    
    $sql = "update tbcliente set nome = '$nome',cpf='$cpf' ,endereco='$endereco' ,fone='$fone',nascimento=' $nascimento' ,email='$email', cns='$cns' ,sexo='$sexo'
            where cod_pac = $cod";


    $update = $conexao->query($sql);
    
    if($update){
        header('Location: frmbusca.php?update=ok');
    }else{
        //header('Location: frmbusca.php?update=erro');
    }
?>