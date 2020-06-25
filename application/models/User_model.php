<?php
 class User_model extends CI_Model{
 

public function register()
{ 
	
 $data = array(
	   
       'fname' => $this->input->post('fname1'),
       'lname' => $this->input->post('lname1'),
       'email' => $this->input->post('email1'),
       'password' => $this->input->post('password1'),
       'status' => '1'
	);

 // Insert 
	return $this->db->insert('user', $data);

    
         }

public function register1()
{ 

// create our data array
	$data = array(
	   'occupation' => $this->input->post('occupation'),
       'fname' => $this->input->post('fname'),
       'lname' => $this->input->post('lname'),
       'email' => $this->input->post('email'),
       'password' => $this->input->post('password'),
       'status' => '1'
	);

 // Insert 
	return $this->db->insert('user', $data);

         }



public function register2()
{ 

// create our data array
	$data = array(
	   
       'fname' => $this->input->post('fname'),
       'lname' => $this->input->post('lname'),
       'work' => $this->input->post('work'),
       'school' => $this->input->post('school'),
       'email' => $this->input->post('email'),
       'password' => $this->input->post('password'),

	);

 // Insert 
	return $this->db->insert('user', $data);

         }




public function login($email, $password)
{ 
    $this->db->where('email', $email);
    $this->db->where('password', $password);

    $result = $this->db->get('user');


    if($result->num_rows() == 1)
    {
      
      return $result->row(0)->user_id;
    }
    else
    {
      return false;
    }


 }


public function login1($email, $password)
{ 
    $this->db->where('email', $email);
    $this->db->where('password', $password);

    $result = $this->db->get('user');


    if($result->num_rows() == 1)
    {
      
      return $result->row(0)->status;
    }
    else
    {
      return false;
    }


 }


public function edit4($id = FALSE)
{

           if($id === FALSE)
           {
             $query = $this->db->get('user');
             return $query->result_array();

           }
           $query = $this->db->get_where('user',array('user_id'=> $id));
               return $query->result_row();


}

 

}
     