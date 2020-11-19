<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Foro_model');
		$this->load->helper('download');
	} 
	public function index()
	{
		$this->load->view('home');
	}
	public function galeriaPersonajes()
	{
		$this->load->view('galeriaPersonajes');
	}
	public function comoJugar()
	{
		$this->load->view('comoJugar');
	}
	//muestra todos los comentarios
	public function foroData(){
		$dataForo=$this->Foro_model->obtenerComentarios();
		if($dataForo==null){
			$this->output->set_status_header(500);
            echo json_encode(array('msg' => 'Error en la consulta'));
            exit;
		} 
		$this->session->set_userdata('dataForo',$dataForo);
		redirect('home/foros','refresh');
	}
	//formulario
	public function foros()
	{	
		//llevar data a la vista
		$this->load->view('foro');
	}
	//guarda y muestra todos los comentarios
	public function foroProcessForm()
	{	
		$u_nombre=$this->input->post('u_nombre');
		$u_email=$this->input->post('u_email');
		$u_comentario=$this->input->post('u_comentario');
		$foro_detalles = array(
			'u_nombre' => $u_nombre,
			'u_email' => $u_email,
			'u_comentario' => $u_comentario
		);
		if(!$this->Foro_model->insertarUsuario($foro_detalles)){
			$this->output->set_status_header(500);
            echo json_encode(array('msg' => 'Error al crear comentario'));
            exit;
		}
		redirect('home/foroData','refresh');
	}

	public function download(){
		$data = file_get_contents(base_url().'download/evitandocovidxes.zip');
		$name='EvitandoCovidxes.zip';
		force_download($name,$data);
	}
}
//http://alejandrophp.000webhostapp.com/EvitandoCovidxesPage/