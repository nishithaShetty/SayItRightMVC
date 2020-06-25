a<?php


class Conferences extends CI_Controller{


public function conference ()
{
$this->load->model('conference_model');
$data['userArray'] = $this->conference_model->conference();
$this->load->view('templates/header1');
$this->load->view('conferences',$data);

}



public function myconference ()
{
$id = $this->session->userdata('user_id');
echo $id;
$this->load->model('conference_model');
$data['userArray'] = $this->conference_model->myconference($id);
$status = $this->session->userdata('status');
if( $status == 1)
{$this->load->view('templates/header2');
}
else
{
	$this->load->view('templates/header1');
}
$this->load->view('myconferences',$data);

}

public function conference_admin ()
{
$this->load->model('conference_model');
$id = $this->session->userdata('user_id');
echo $id;
$data['userArray'] = $this->conference_model->myconference($id);
$this->load->view('templates/header2');
$this->load->view('conference_admin',$data);

}




public function add($id){

echo $id;
$id1 = $this->session->userdata('user_id');
echo $id1;
$this->conference_model->add1($id,$id1);
$data['userArray'] = $this->conference_model->conference();
$this->load->view('templates/header1');
$this->load->view('conferences',$data);


}


public function delete($id){

echo $id;
$this->conference_model->delete1($id);
$id1 = $this->session->userdata('user_id');
echo $id1;
$data['userArray'] = $this->conference_model->myconference($id1);
$this->load->view('templates/header1');
$this->load->view('myconferences',$data);

}



public function edit($id)
{
echo $id;
$data['userArray'] = $this->conference_model->edit1($id);
print_r($data);
$this->load->view('editconferenceform',$data);
}

public function update()
{
	$this->conference_model->update_conference();
	$id = $this->session->userdata('user_id');
echo $id;
	$data['userArray'] = $this->conference_model->myconference($id);
    $this->load->view('templates/header2');
$this->load->view('conference_admin',$data);	
}


public function a()
{

$this->load->view('addconferenceform');
}

public function a1()
{

$this->form_validation->set_rules('name','Name', 'required' );
$this->form_validation->set_rules('date','Date', 'required' );
$this->form_validation->set_rules('sede','Sede', 'required' );
if($this->form_validation->run() === FALSE)
{
$this->load->view('addconferenceform');
}
else
{
$this->conference_model->a2();
$id1 = $this->conference_model->a3();
$id = $this->session->userdata('user_id');
$this->conference_model->a4($id,$id1);


$data['userArray'] = $this->conference_model->myconference($id);
$this->load->view('templates/header2');
$this->load->view('conference_admin',$data);

}
}


public function del($id)
{
echo $id;
$this->conference_model->del1($id);

$id1 = $this->session->userdata('user_id');
echo $id1;
$data['userArray'] = $this->conference_model->myconference($id1);
$this->load->view('templates/header2');
$this->load->view('myconferences',$data);



}



}