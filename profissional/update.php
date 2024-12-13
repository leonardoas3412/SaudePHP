<?php
    include('../banco.php');

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $crm = $_POST['crm'];
    $area = $_POST['area'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    
    $sql = "update tbprofissional set nome = '$nome',crm='$crm', area='$area', fone='$fone', email = '$email'
            where cod_prof = $cod";


    $update = $conexao->query($sql);
    
    if($update){
        header('Location: frmbusca.php?update=ok');
    }else{
        header('Location: frmbusca.php?update=erro');
    }
?>