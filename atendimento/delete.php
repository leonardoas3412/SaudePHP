<?php
    include('../banco.php');

    $cod= $_GET['cod'];

    $sql="delete from tbatendimento where cod_atendimento=$cod";

    $consulta = $conexao->query($sql);

    if ($consulta) {
        header('Location:frmbusca.php?del=ok'); 
    } else {
        header('Location:frmbusca.php?del=erro'); 
    }
    
?>