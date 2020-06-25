<?php
 class Users extends CI_Controller{






public function register3()
{
// this function takes care of the view and form validation

$this->load->view('templates/header');
$this->load->view('users/register3');

}

  
public function register()
// this function takes care of the view and form validation
{
$data['title'] ='Sign Up Event';
$this->form_validation->set_rules('fname1','FName', 'required' );
$this->form_validation->set_rules('lname1','LName', 'required' );
$this->form_validation->set_rules('email1','Email', 'required' );
$this->form_validation->set_rules('password1','Password', 'required' );

if($this->form_validation->run() === FALSE)
{
$this->load->view('templates/header');
$this->load->view('users/register', $data);

}
else
{

 // encrypt password
	$this->user_model->register();


$this->load->view('templates/header');
$this->load->view('users/register', $data);
//set message

  $this->session->set_flashdata('user_registered', 'You are now registered');

    
	
   }

   }


public function register1()
// this function takes care of the view and form validation
{
$data['title'] ='Sign Up Business';
$this->form_validation->set_rules('occupation','Occupation', 'required' );
$this->form_validation->set_rules('fname','FName', 'required' );
$this->form_validation->set_rules('lname','LName', 'required' );
$this->form_validation->set_rules('email','Email', 'required' );
$this->form_validation->set_rules('password','Password', 'required' );

if($this->form_validation->run() === FALSE)
{
$this->load->view('templates/header');
$this->load->view('users/register1', $data);

}
else
{

 // encrypt password
	$this->user_model->register1();
  $this->load->view('templates/header');
$this->load->view('users/register1', $data);

    echo "hello";
	
   }

   }


  public function register2()
// this function takes care of the view and form validation
{
$data['title'] ='Sign Up Individual';
$this->form_validation->set_rules('fname','FName', 'required' );
$this->form_validation->set_rules('lname','LName', 'required' );
$this->form_validation->set_rules('work','Work', 'required' );
$this->form_validation->set_rules('school','School', 'required' );

$this->form_validation->set_rules('email','Email', 'required' );
$this->form_validation->set_rules('password','Password', 'required' );

if($this->form_validation->run() === FALSE)
{
$this->load->view('templates/header');
$this->load->view('users/register2', $data);

}
else
{

 // encrypt password
	$this->user_model->register2();

  $this->load->view('templates/header');
  $this->load->view('users/register2', $data);
	
   }

   }



public function login_validation()
// this function takes care of the view and form validation
{
$data['title'] ='Login';
$this->load->library('form_validation');
$this->form_validation->set_rules('email','Email', 'required' );
$this->form_validation->set_rules('password','Password', 'required' );

if($this->form_validation->run() === FALSE)
{
$this->load->view('templates/header');
$this->load->view('users/login', $data);

}
else
{
  $email = $this->input->post('email');
  $password = $this->input->post('password');


 // login user
$user_id = $this->user_model->login($email, $password);
echo $user_id;

$status = $this->user_model->login1($email, $password);
echo $status;


// create session
$session_data = array(
           'user_id' => $user_id,
           'status' => $status

);
    $this->session->set_userdata($session_data);
// session

    if($status == 1)
    {
     $this->load->view('templates/header2');
      $this->load->view('home2');
     }
   else
     # code...
{


     $this->load->view('templates/header1');
     $this->load->view('home3');

}
   }
   }

public function login()
{

$this->load->view('templates/header');
$this->load->view('users/login');

   }



public function logout()
{

$this->session->unset_userdata('user_id');
$this->load->view('templates/header');
$this->load->view('users/login');


}

   

 }