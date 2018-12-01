<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Model{
	
	public function __construct(){
        parent::__construct();
    }

    public function get_all(){
    	return $this->db->order_by('id', 'desc')
    		->get('members',10,0)->result_array();
    }

    public function get($id){
    	return $this->db->where('id', $id)
    		->get('members')->row_array();
    }

    public function add($post){
    	if($this->db->insert('members', $post)){
        	$msg = "Input data berhasil";
        	return array('msg'=>$msg, 'sts'=>true);
        }else{
        	$msg = $this->db->error();
        	return array('msg'=>$msg, 'sts'=>false);
        }	
    }

    public function del($id){
        $this->db->where('id', $id);
        if($this->db->delete('members')){
            $msg = "Delete data berhasil";
            return array('msg'=>$msg, 'sts'=>true);
        }else{
            $msg = $this->db->error();
            return array('msg'=>$msg, 'sts'=>false);
        }
    }

    public function update($id, $post){
        $this->db->where('id', $id);
        if($this->db->update('members', $post)){
            $msg = "Edit data berhasil";
            return array('msg'=>$msg, 'sts'=>true);
        }else{
            $msg = $this->db->error();
            return array('msg'=>$msg, 'sts'=>false);
        }   
    }

}