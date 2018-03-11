<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('datas_model');
		$data['scheds']=$this->datas_model->sched();
		$this->load->view('landingpage_view',$data);
	}
	public function schedthis(){
		$this->load->model('datas_model');
		$data['scheds']=$this->datas_model->sched();
		foreach($data['scheds']->result() as $row){
			$current = $row->date;
		}
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$from = $this->input->post('fromtime');
		$to = $this->input->post('totime');

    $user = array(
			'full_name' => $name,
			'address' => $address,
			'contact' => $contact,
			'email' => $email
		);
		$schedss = array(
			'time_from' => $from,
			'time_to' => $to,
			'date' => $current,
			'name' => $name
		);
		$this->datas_model->insert_data($schedss,$user);
		print_r($user);
		print_r($schedss);
		print_r($_POST);
	}
}
