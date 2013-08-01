<?php
    
     include_once 'Session.php';
     include_once 'MysqlDBC.php';

        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];

        $sql = "INSERT INTO `user` (`id_user`, `user`, `password`) VALUES (NULL, '" . $user . "', '" . $pass . "') ";

        $mysqlDBC = new MysqlDBC();
        $result = $mysqlDBC->insert($sql);
        if ($result != null) {
            createSession($user);
            echo json_encode(array('result' => true));
        } else {
            echo json_encode(array('result' => false));
        }
?>
