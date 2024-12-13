<?php
    include('../banco.php');

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];

    
    $sql = "update tbprocedimento set nome = '$nome'
            where cod_proced = $cod";


    $update = $conexao->query($sql);
    
    if($update){
        header('Location: frmbusca.php?update=ok');
    }else{
        header('Location: frmbusca.php?update=erro');
    }
?>