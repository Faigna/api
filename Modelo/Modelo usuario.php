<?php
require_once PROJECT_ROOT_PATH . "/Modelo/base de datos.php";
 
class Modelo_usuario extends base_de_datos
{
    public function getUsers($limit)
    {
        return $this->select("SELECT * FROM users ORDER BY user_id ASC LIMIT ?", ["i", $limit]);
    }
}