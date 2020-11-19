<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foro_model extends CI_Model{
    public function insertarUsuario($foro_detalles){
        if(!$this->db->insert("foro",$foro_detalles))
             return false;
        else
            return true; 
    }
}

?>