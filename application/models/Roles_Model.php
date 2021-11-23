<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_Model extends CI_Model {

    public function guardar($datos){
        return $this->db->insert("roles",$datos);
    }//Final de Guardar

    public function ObtenerRoles(){
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }//Final Obtener roles

    public function ObtenerRolesActivas(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("roles");
        return $resultados->result();
    }//Final Obtener Roles

    public function ObtenerRolesxID($id){
        $this->db->where("id_rol",$id);
        $resultados = $this->db->get("roles");
        return $resultados->row();
    }//Final Obtener Roles

    public function Actualizar_Roles($id,$datos){
        $this->db->where("id_rol",$id);
        return $this->db->update("roles",$datos);
    }//Final Actualizar

}//Final del Modelo