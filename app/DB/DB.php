<?php

namespace App\DB;

class DB
{
    /**
     * @var \PDO
     */
    private $pdo;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $config = include 'app/Config/db.php';
        $this->pdo = new \PDO(
            'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
            $config['user'],
            $config['password']
        );
    }

    /**
     * @param string $sql
     * @return bool|\PDOStatement
     */
    protected function prepareQuery(string $sql)
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();
        return $sth;
    }

    /**
     * @param string $sql
     * @return array
     */
    public function first(string $sql)
    {
        return $this->prepareQuery($sql)->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @param string $sql
     * @return array
     */
    public function getColumn(string $sql) {
        return $this->prepareQuery($sql)->fetchAll(\PDO::FETCH_COLUMN);
    }

    /**
     * @param $param
     * @return false|string
     */
    public function quote($param)
    {
        return $this->pdo->quote($param);
    }
}