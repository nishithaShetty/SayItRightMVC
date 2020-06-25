<?php 
class Homes extends CI_Controller
{

public function show()
{
// login page for admin
$this->load->view('templates/header2');
$this->load->view('home2');


}


public function show1()
{

$this->load->view('templates/header1');
$this->load->view('home3');

	
}
}