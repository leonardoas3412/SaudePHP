<?php
    include('../banco.php');

    $cod= $_GET['cod'];

    $sql="delete from tbprocedimento where cod_proced=$cod";

    $consulta = $conexao->query($sql);

    if ($consulta) {
        header('Location:frmbusca.php?del=ok'); 
    } else {
        header('Location:frmbusca.php?del=erro'); 
    }
    
?>