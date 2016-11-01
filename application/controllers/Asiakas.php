<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Asiakas extends CI_Controller 
{
	public function listaa()
	{
		$this->load->model('Asikas_model');
		$data['asiakkaat']=$this->Asikas_model->getAsiakas();
		$this->load->view('asiakas/listaa', $data);
	}
}
?>