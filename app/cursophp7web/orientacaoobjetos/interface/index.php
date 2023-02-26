<?php

namespace cursophp7web\orientacaoobjetos\interface;

interface Database
{
    public function listProducts();

    public function addProducts();

    public function alterProducts();
}

class MysqlDB implements \Database
{
    public function listProducts()
    {
        echo "Lista produto no DB Mysql";
    }

    public function addProducts()
    {
        echo "Cria Produto no DB Mysql";
    }

    public function alterProducts()
    {
        echo "Altera produto no DB Mysql";
    }
}

class OracleDB implements Database
{
    public function listProducts()
    {
        echo "Lista produto no DB Oracle";
    }

    public function addProducts()
    {
        echo "Cria Produto no DB Oracle";
    }

    public function alterProducts()
    {
        echo "Altera produto no DB Oracle";
    }
}

$db = new MysqlDB();
$db->addProducts();