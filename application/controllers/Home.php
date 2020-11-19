<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('Foro_model');
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
		echo 'asdasdas';
		echo "$u_nombre <br> data $u_email <br> aqui $u_comentario";
	}
}
