<?php


class Events extends CI_Controller{


public function event ()
{
$this->load->model('event_model');
$data['userArray'] = $this->event_model->event();
$this->load->view('templates/header1');
$this->load->view('events',$data);

}


public function myevent ()
{
$id = $this->session->userdata('user_id');
echo $id;
$this->load->model('event_model');
$data['userArray'] = $this->event_model->myevent($id);
$status = $this->session->userdata('status');
if( $status == 1)
{$this->load->view('templates/header2');
}
else
{
	$this->load->view('templates/header1');
}
$this->load->view('myevents',$data);

}

public function event_admin ()
{
$id = $this->session->userdata('user_id');
echo $id;
$this->load->model('event_model');
$data['userArray'] = $this->event_model->myevent($id);
$this->load->view('templates/header2');
$this->load->view('event_admin',$data);

}




public function add($id){

echo $id;
$id1 = $this->session->userdata('user_id');
echo $id1;
$this->event_model->add1($id,$id1);
$data['userArray'] = $this->event_model->event();
$this->load->view('templates/header1');
$this->load->view('events',$data);


}


public function delete($id){

 $id1 =$id;
$this->event_model->delete1($id1);
$id = $this->session->userdata('user_id');
echo $id;
$data['userArray'] = $this->event_model->myevent($id);
$this->load->view('templates/header1');
$this->load->view('myevents',$data);


}



public function edit($id)
{
echo $id;
$data['userArray'] = $this->event_model->edit1($id);
print_r($data);
$this->load->view('editeventform',$data);
}

public function update()
{
	$this->event_model->update_event();
	$id = $this->session->userdata('user_id');
echo $id;
	$data['userArray'] = $this->event_model->myevent($id);
    $this->load->view('templates/header2');
$this->load->view('event_admin',$data);	
}



public function a()
{

$this->load->view('addeventform');
}

public function a1()
{
$this->form_validation->set_rules('name','Name', 'required' );
$this->form_validation->set_rules('date','Date', 'required' );
$this->form_validation->set_rules('sede','Sede', 'required' );
if($this->form_validation->run() === FALSE)
{
$this->load->view('addeventform');
}
else
{
$this->event_model->a2();
$id1 = $this->event_model->a3();
$id = $this->session->userdata('user_id');

$this->event_model->a4($id,$id1);

$data['userArray'] = $this->event_model->myevent($id);
print_r($data);
$this->load->view('templates/header2');
$this->load->view('event_admin',$data);
}
}



public function del($id)
{
echo $id;
$this->event_model->del1($id);
$id1 = $this->session->userdata('user_id');
echo $id1;
$data['userArray'] = $this->event_model->myevent($id1);
$this->load->view('templates/header2');
$this->load->view('event_admin',$data);



}



}