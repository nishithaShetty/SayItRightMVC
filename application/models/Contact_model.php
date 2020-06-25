<?php
class Contact_model extends CI_Model{

	 public function __construct()
       {
       $this->load->database();

       }
public function create()
{ 

// create our data array
	$data = array(
       'fname' => $this->input->post('fname'),
       'lname' => $this->input->post('lname'),
       'email' => $this->input->post('email'),
       'telephone' => $this->input->post('telephone'),
       'message' => $this->input->post('message')
	);

 // Insert 
	return $this->db->insert('contact', $data);

         }
 }