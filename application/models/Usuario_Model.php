<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {

    public function guardar($datos){
        return $this->db->insert("usuarios",$datos);
    }//Final de Guardar

    public function ObtenerUsuarios(){
        $resultados = $this->db->get("usuarios");
        return $resultados->result();
    }//Final Obtener Usuarios

    public function ObtenerUsuariosActivas(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("usuarios");
        return $resultados->result();
    }//Final Obtener Usuarios Activas

    public function ObtenerUsuariosxID($id){
        $this->db->where("id_usuarios",$id);
        $resultados = $this->db->get("usuarios");
        return $resultados->row();
    }//Final Obtener Usuarios

    public function actualizar_usuario($id,$datos){
        $this->db->where("id_usuarios",$id);
        return $this->db->update("usuarios",$datos);
    }//Final Actualizar

}//Final del Modelo