<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Roles_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Roles_Model');

    }//Final Construct

	public function index(){
        
        $datos = array(
            'roles'=> $this->Roles_Model->ObtenerRoles(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Roles/listar_roles',$datos);
		$this->load->view('layouts/footer');

	}//final index

    public function agregar_roles(){
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Roles/agregar_roles');
		$this->load->view('layouts/footer');

	}//final Vista Agregar Categoria

    public function editar_roles($id){
        $datos['roles'] = $this->Roles_Model->ObtenerRolesxID($id);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Roles/editar_roles',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Editar rol

    public function registrar_roles(){
        
      $nombre = $this->input->post("nombreN");
      $descripcion = $this->input->post("descripcionN");
     

      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]|is_unique[categorias.Nombre]");
      $this->form_validation->set_rules("descripcionN","Descripcion",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
     
      if($this->form_validation->run()){
          $datos = array(
          'nombre'=>$nombre,
          'descripcion'=>$descripcion,
   
          );
          if($this->Roles_Model->guardar($datos)){
              redirect(base_url()."Administrar/Roles_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Roles_Controller/agregar_roles");
          }
      }
      else{
        $this->agregar_roles();
      }

    }
//Final registrar rol

    public function actualizar_roles(){
      $id = $this->input->post("idN");
      $nombre = $this->input->post("nombreN");
      $descripcion = $this->input->post("descripcionN");

      
     
      $this->form_validation->set_rules("descripcionN","Descripcion",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
     

      if($this->form_validation->run()){
          $datos = array(
          'nombre'=>$nombre,
          'descripcion'=>$descripcion,
      
          );
          if($this->Roles_Model->Actualizar_Roles($id,$datos)){
              redirect(base_url()."Administrar/Roles_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Roles_Controller/editar_roles".$id);
          }
      }
      else{
        $this->editar_roles($id);
      }
    //Final actualizar rol
    }
    public function eliminar_rol($id){
        $datos = array (
            'id_rol' => 0,
            'nombre'=>'null', //acá está el error de eliminar
            'descripcion'=>'null'
        );
        $this->Roles_Model->Actualizar_Roles($id,$datos);
        redirect(base_url()."Administrar/Roles_Controller");

    }//Eliminar rol

}//Final del Controlador