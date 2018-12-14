<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$this->load->model('members');
		
		$data['view'] = 'table';
		$data['title'] = 'Data Members';
		$data['members'] = $this->members->get_all();

		$this->load->view('main', $data);
	}

	public function detail($id){
		$this->load->model('members');

		$data['view'] = 'detail';		
		$data['member'] = $this->members->get($id);
		$data['title'] = $data['member']['fullname'];

		$this->load->view('main', $data);
	}

	public function del($id){
		$this->load->model('members');
		
		$data['view'] = 'delete';		
		$data['title'] = 'Hapus Member';
		$data['member'] = $this->members->get($id);

		if($this->input->post()){
			$add = $this->members->del($id);
			if($add['sts']){
				$data['ok'] = $add['msg']; 
			}else{
				$data['error'] = $add['msg'];
			}
		}

		$this->load->view('main', $data);
	}

	public function add(){
		$this->load->model('members');
		
		$data['view'] = 'form';		
		$data['title'] = 'Add Member';
		$data['member'] = null;

		if($this->input->post()){
			$add = $this->members->add($this->input->post());
			if($add['sts']){
				$data['ok'] = $add['msg']; 
			}else{
				$data['error'] = $add['msg'];
			}
		}

		$this->load->view('main', $data);
	}

	public function edit($id){
		$this->load->model('members');

		$data['view'] = 'form';		
		$data['title'] = 'Edit Member';

		if($this->input->post()){

			$config['upload_path']          = './uploads/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            if ( !$this->upload->do_upload('foto')){
            	$data['error'] = $this->upload->display_errors();	
            }else{
            	$newfile = $this->upload->data();
            	$post = $this->input->post();
            	$post['foto'] = $newfile['file_name'];

            	$add = $this->members->update($id, $post);
				if($add['sts']){
					$data['ok'] = $add['msg']; 
				}else{
					$data['error'] = $add['msg'];
				}	
            }	
			
		}

		$data['member'] = $this->members->get($id);

		$this->load->view('main', $data);
	}
}