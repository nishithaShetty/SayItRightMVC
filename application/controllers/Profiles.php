<?php 
class Profiles extends CI_Controller
{

public function profile()
{
// login page for admin


$id = $this->session->userdata('user_id');
echo $id;
$data['userArray'] = $this->event_model->edit4($id);

$this->load->view('templates/header2');
$this->load->view('profile',$data);



}

public function profile_update()
{
// login page for admin


$id = $this->session->userdata('user_id');
echo $id;
$data['userArray'] = $this->event_model->profile_update($id);
print_r($data);
$data['userArray'] = $this->event_model->edit4($id);
$this->load->view('templates/header2');
$this->load->view('profile',$data);



}




}