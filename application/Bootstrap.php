<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected  function _initDataBase(){
        $config = new Zend_Config(
            array(
                'database' => array(
                    'adapter' => 'Pdo_Mysql',
                    'params' => array(
                        'host'     => '127.0.0.1',
                        'dbname'   => 'courszf',
                        'username' => 'root',
                        'password' => 'root',
                    )
                )
            )
        );

        $db = Zend_Db::factory($config->database);
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
    }
}

