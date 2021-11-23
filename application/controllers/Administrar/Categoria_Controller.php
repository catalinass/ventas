<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Categoria_Model');

    }//Final Construct

	public function index(){
        
        $datos = array(
            'categorias'=> $this->Categoria_Model->ObtenerCategoria(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Categoria/Listar_Categoria',$datos);
		$this->load->view('layouts/footer');

	}//final index

    public function agregar_categoria(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Categoria/agregar_categoria');
		$this->load->view('layouts/footer');

	}//final Vista Agregar Categoria

    public function editar_categoria($id){
        $datos['categoria'] = $this->Categoria_Model->ObtenerCategoriaxID($id);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Categoria/editar_categoria',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Editar Categoria

    public function registrar_categoria(){
        
      $nombre = $this->input->post("nombreN");
      $descripcion = $this->input->post("descripcionN");
      $estado = $this->input->post("estadoN");

      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]|is_unique[categorias.Nombre]");
      $this->form_validation->set_rules("descripcionN","Descripcion",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("estadoN","Estado","required");

      if($this->form_validation->run()){
          $datos = array(
          'nombre'=>$nombre,
          'descripcion'=>$descripcion,
          'estado'=>$estado,
          );
          if($this->Categoria_Model->guardar($datos)){
              redirect(base_url()."Administrar/Categoria_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Categoria_Controller/agregar_categoria");
          }
      }
      else{
        $this->agregar_categoria();
      }

    }
//Final registrar categoria

    public function actualizar_categoria(){
      $id = $this->input->post("idN");
      $nombreAnt = $this->input->post("nombreAnt");
      $nombre = $this->input->post("nombreN");
      $descripcion = $this->input->post("descripcionN");
      $estado = $this->input->post("estadoN");
      
      if($nombre==$nombreAnt){
        $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      }else{
        $this->form_validation->set_rules("nombreN","Nombre",
        "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]|is_unique[categorias.Nombre]");
      }
      
      $this->form_validation->set_rules("descripcionN","Descripcion",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("estadoN","estado","required");

      if($this->form_validation->run()){
          $datos = array(
          'nombre'=>$nombre,
          'descripcion'=>$descripcion,
          'estado'=>$estado,
          );
          if($this->Categoria_Model->Actualizar_Categoria($id,$datos)){
              redirect(base_url()."Administrar/Categoria_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Categoria_Controller/editar_categoria".$id);
          }
      }
      else{
        $this->editar_categoria($id);
      }
    //Final actualizar categoria
    }
    public function eliminar_categoria($id){
        $datos = array (
            'estado'=>'0',
        );
        $this->Categoria_Model->Actualizar_Categoria($id,$datos);
        redirect(base_url()."Administrar/Categoria_Controller");

    }//Eliminar Categoria

}//Final del Controlador