<?php
    include('../banco.php');

    $cod = $_POST['cod'];     
    $cod_pac = $_POST['cod_pac'];     
    $cod_prof = $_POST['cod_prof']; 
    $cod_proce = $_POST['cod_proce']; 
    $cod_usu = $_POST['cod_usu'];                            
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $local = $_POST['local'];
    
    $sql = "update tbatendimento set cod_pac='$cod_pac',cod_prof='$cod_prof',cod_proce='$cod_proce',cod_usu='$cod_usu',data = '$data', hora = '$hora', local = '$local'
            where cod_atendimento = $cod";


    $update = $conexao->query($sql);
    
    if($update){
        header('Location: frmbusca.php?update=ok');
    }else{
        header('Location: frmbusca.php?update=erro');
    }
?>