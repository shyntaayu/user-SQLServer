<?php
class User_model extends CI_Model{
 
    function user_list(){
        $hasil=$this->db->get('users');
        return $hasil->result();
    }
 
    function save_user(){
        $data = array(
                'id'  => $this->input->post('id'), 
                'name'  => $this->input->post('name'), 
                'address' => $this->input->post('address'), 
            );
        $result=$this->db->insert('users',$data);
        return $result;
    }
 
    function update_user(){
        $name=$this->input->post('name');
        $address=$this->input->post('address');
        $id=$this->input->post('id');
 
        $this->db->set('address', $address);
        $this->db->set('name', $name);
        $this->db->where('id', $id);
        $result=$this->db->update('users');
        return $result;
    }
 
    function delete_user(){
        $id=$this->input->post('id');
        $this->db->where('id', $id);
        $result=$this->db->delete('users');
        return $result;
    }
     
}