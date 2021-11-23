<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('Usuario_Model');

    }//Final Construct

	public function index(){
        
        $datos = array(
            'usuarios'=> $this->Usuario_Model->ObtenerUsuarios(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Usuario/listar_usuario',$datos);
		$this->load->view('layouts/footer');

	}//final index

    public function agregar_usuario(){
        $datos = array(
            'usuarios'=> $this->Usuario_Model->ObtenerUsuarios(),
        );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Usuario/agregar_usuario',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Agregar Usuario

    public function editar_usuario($id){
        $datos['usuarios'] = $this->Usuario_Model->ObtenerUsuariosxID($id);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('admin/Usuario/editar_usuario',$datos);
		$this->load->view('layouts/footer');

	}//final Vista Editar Usuario

    public function registrar_usuario(){
        
      $nombre = $this->input->post("nombreN");
      $apellidos = $this->input->post("apellidosN");
      $telefono = $this->input->post("telefonoN");
      $email = $this->input->post("emailN");
      $usuario = $this->input->post("usuarioN");
      $password = $this->input->post("passwordN");
      $estado = $this->input->post("estadoN");
      $id_rol = 1;

      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("apellidosN","Apellidos",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("telefonoN","Telefono",
      "required");
      $this->form_validation->set_rules("emailN","Email",
      "required|regex_match[/^[a-zA-ZñÑáéíóú@. ]*$/]");
      $this->form_validation->set_rules("passwordN","Password",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("usuarioN","Usuario","required");
      $this->form_validation->set_rules("estadoN","Estado","required");

      if($this->form_validation->run()){
          $datos = array(  
          'id_rol' => $id_rol,
          'Nombre'=>$nombre,
          'Apellidos'=>$apellidos,
          'Telefono'=>$telefono,
          'Email'=>$email,
          'Usuario'=>$usuario,
          'Password'=>$password,
          'estado'=>$estado,
          );
          if($this->Usuario_Model->guardar($datos)){
              redirect(base_url()."Administrar/Usuario_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Usuario_Controller/agregar_usuario");
          }
      }
      else{
        $this->agregar_usuario();
      }

    }
//Final registrar usuario

    public function actualizar_usuario(){
        $id = $this->input->post("id_usuarios");
        $nombre = $this->input->post("nombreN");
        $apellidos = $this->input->post("apellidosN");
        $telefono = $this->input->post("telefonoN");
        $email = $this->input->post("emailN");
        $usuario = $this->input->post("usuarioN");
        $password = $this->input->post("passwordN");
        $estado = $this->input->post("estadoN");
      
      if($nombre==$usuario){
        $this->form_validation->set_rules("UsuarioN","Usuario",
      "required");
      }else{
        $this->form_validation->set_rules("UsuarioN","Usuario",
        "required");
      }
      $this->form_validation->set_rules("nombreN","Nombre",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("apellidosN","Apellidos",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("telefonoN","Telefono",
      "required");
      $this->form_validation->set_rules("emailN","Email",
      "required|regex_match[/^[a-zA-ZñÑáéíóú@. ]*$/]");
      $this->form_validation->set_rules("passwordN","Password",
      "required|regex_match[/^[a-zA-ZñÑáéíóú ]*$/]");
      $this->form_validation->set_rules("usuarioN","Usuario","required");
      $this->form_validation->set_rules("estadoN","estado","required");

      if($this->form_validation->run()){
          $datos = array(
            'Nombre'=>$nombre,
            'Apellidos'=>$apellidos,
            'Telefono'=>$telefono,
            'Email'=>$email,
            'Usuario'=>$usuario,
            'Password'=>$password,
            'estado'=>$estado,
          );
          if($this->Usuario_Model->actualizar_usuario($id,$datos)){
              redirect(base_url()."Administrar/Usuario_Controller");
          }else{
              $this->session->set_flashdata("Error","No se pudo guardar la informacion");
              redirect(base_url()."Administrar/Usuario_Controller/editar_usuario".$id);
          }
      }
      else{
        $this->editar_usuario($id);
      }
    //Final actualizar usuario
    }
    public function eliminar_usuario($id){
        $datos = array (
            'estado'=>'0',
        );
        $this->Usuario_Model->actualizar_usuario($id,$datos);
        redirect(base_url()."Administrar/Usuario_Controller");

    }//Eliminar Cliente

}//Final del Controlador