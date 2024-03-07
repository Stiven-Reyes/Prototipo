<?php
class core
{
    private $server;
    private $user;
    private $password;
    private $database;
    private $conexion;

    public function __construct()
    {
        $this->setConect();
        $this->Conect();
    }

    private function setConect()
    {
        require __DIR__ . "/configuracion.php";

        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;
    }

    private function Conect()
    {
        $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->database);
        if ($this->conexion->connect_errno) {
            echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>", $this->conexion->connect_error;
            exit();
        } else {
            $this->conexion->set_charset("utf8");
        }
    }

    public function execute($sql)
    {
        $result = $this->conexion->query($sql);
        return $result;
    }

    public function closeConect()
    {
        $this->conexion->close();
    }
}
?>
