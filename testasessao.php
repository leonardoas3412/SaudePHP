<?php
     session_start();//Cria uma sessão
     if(!isset($_SESSION['login'])){//verifica se essa variavel tem alguma informação
        header('Location: index.php?mess=session');//Se não estiver recebido é pq alguem tentou burlar, então volta pro login 
     }
?>