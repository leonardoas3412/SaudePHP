<?php
    include('../banco.php');

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $sql = "update tbusu set nome = '$nome', email = '$email', senha = '$senha'
            where cod_usu = $cod";


    $update = $conexao->query($sql);
    
    if($update){
        header('Location: frmbusca.php?update=ok');
    }else{
        header('Location: frmbusca.php?update=erro');
    }
?>