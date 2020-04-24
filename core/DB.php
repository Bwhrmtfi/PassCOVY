<?php

class DB
{

    public $connection;
    protected $config = array(
        'HOST_NAME'     => 'localhost',
        'DATABASE_NAME' => 'pass_covy',
        'USERNAME'      => 'root',
        'PASSWORD'      => ''
    );
    function __construct()
    {

        $this->connection = new Mysqli(
            $this->config['HOST_NAME'],
            $this->config['USERNAME'],
            $this->config['PASSWORD'],
            $this->config['DATABASE_NAME']
        );

        if (mysqli_connect_errno()) {
            printf("MySQLi connection failed: ", mysqli_connect_error());
            exit();
        }

        if (!$this->connection->set_charset('utf8mb4')) {
            printf('Error loading character set utf8: %s\n', $this->connection->error);
        }
    }
}
