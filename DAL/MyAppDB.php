<?php
    function DB() {
            // MySQLDataBase::getInstance($DBName, $host, $username, $password)
        return MySQLDataBase::getInstance('MyAppDB', 'localhost', 'root', ''); 
    }
?>