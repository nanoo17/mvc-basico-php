<?php
class connection
{
    private $con;
    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'facebookPeroRojo');
    }

    public function getUsers()
    {
        $query = $this->con->query('select * from usuarios');
        $retorno = [];
        $i = 0;
        while ($fila = $query->fetch_assoc()) {
            $retorno[$i] = $fila;
            $i++;
        }
        return $retorno;
    }
}
