<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
	public function foros()
	{
		echo 'vista Foros';	
		//$this->load->view('comoJugar');
	}
}
