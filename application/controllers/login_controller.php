<?php

class Login_controller extends CI_Controller{
	public function index(){
		$data['title']= "CodeIgniter Simple Login Form With Sessions";
		$this->load->view("login_view",$data);
	}
	
	public function login_validation(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->load->model('login_model');
			if($this->login_model->can_login($username,$password))
			{
					$session_data=array(
									'username' => $username
								);
								$this->session->set_userdata($session_data);
								redirect(base_url(). "controller1");
			}
			else{
				$this->session->set_flashdata('error','Invalid Username and Password');
				$this->index();
			}
		}
		else{
			$this->index();
		}
	}
	
	public function enter(){
		if($this->session->userdata('username') != ''){
			echo '<h2> Welcome - ' . $this->session->userdata("username"). '</h2>';
			echo '<label><a href="'.base_url().'login_controller/logout">Logout</a></label>';
		}
		else{
			$this->index();
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('username');
		$this->index();
	}
	
}

?>