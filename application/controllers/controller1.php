<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {

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
	{	//	echo "Welcome to Code Igniter";
		$this->load->model("model1");
		$data["fetch_data"]= $this->model1->fetch_data();
		//$this->load->view("view1");
		$this->load->view("view1",$data);
	
	}
	
	
	
	public function form_validation()
	{
		//echo "OK!";
		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name","First Name",'required');
		$this->form_validation->set_rules("last_name","Last Name",'required|alpha');
		if($this->form_validation->run()){
			//true
			$this->load->model("model1");
			$data = array(
						"first_name" =>$this->input->post("first_name"),
						"last_name" =>$this->input->post("last_name"),
					);
			if($this->input->post("update")){
				$this->model1->update_data($data, $this->input->post("hidden_id"));
				redirect(base_url() . "controller1/updated");
			}
			if($this->input->post("insert")){
				$this->model1->insert_data($data);
				redirect(base_url()."controller1/inserted");
			}
				
		}else{
			//false
			$this->index();
		}
	}
	
	
	public function inserted()
	{
		$this->index();
	}
	
	public function delete_data(){
		$id = $this->uri->segment(3);
		$this->load->model("model1");
		$this->model1->delete_data($id);
		redirect(base_url(). "controller1/deleted");
	}
	
	public function deleted(){
		$this->index();
	}
	public function update_data(){
		$user_id = $this->uri->segment(3);
		$this->load->model("model1");
		$data["user_data"] = $this->model1->fetch_single_data($user_id);
		$data["fetch_data"] = $this->model1->fetch_data();
		$this->load->view("view1",$data);
	}
	
	public function updated(){
			$this->index();
	}
	
	
	
}
