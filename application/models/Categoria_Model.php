<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Model extends CI_Model {

    public function guardar($datos){
        return $this->db->insert("categorias",$datos);
    }//Final de Guardar

    public function ObtenerCategoria(){
        $resultados = $this->db->get("categorias");
        return $resultados->result();
    }//Final Obtener Categoria

    public function ObtenerCategoriaActivas(){
        $this->db->where("estado","1");
        $resultados = $this->db->get("categorias");
        return $resultados->result();
    }//Final Obtener Categoria Activas

    public function ObtenerCategoriaxID($id){
        $this->db->where("id_categorias",$id);
        $resultados = $this->db->get("categorias");
        return $resultados->row();
    }//Final Obtener Categoria

    public function Actualizar_Categoria($id,$datos){
        $this->db->where("id_categorias",$id);
        return $this->db->update("categorias",$datos);
    }//Final Actualizar

}//Final del Modelo