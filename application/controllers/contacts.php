<?php

class contacts extends CI_Controller{


public function create()
{
$data['title'] = 'Contact US';

$this->form_validation->set_rules('fname','Fname', 'required');
$this->form_validation->set_rules('lname','lname', 'required');
$this->form_validation->set_rules('email','email', 'required');
$this->form_validation->set_rules('telephone','Telephone', 'required');
$this->form_validation->set_rules('message','Message', 'required');

if($this->form_validation->run() === true)
{
$this->contact_model->create();

// email Data
$subject ='Email';

$mailData =array(
  'name' => $this->input->post('fname'),
  'email' => $this->input->post('email'),
  'subject' => $subject,
  'message' => $this->input->post('message')


);

$send = $this->sendEmail($mailData);
if($send)
{
$data['title'] = 'Contact Us';
$data['status'] =array(
            'type' => 'success',
             'msg' => 'Ypur contact request has been submitted'    
            );
$this->load->view('templates/header');
$this->load->view('contacts',$data);
}


else
{
$data['title'] = 'Contact Us';
$data['status'] =array(
            'type' => 'Failure',
             'msg' => 'Ypur contact request has been cancelled'    
            );
$this->load->view('templates/header');
$this->load->view('contacts',$data);
}

}


else
{


$this->load->view('templates/header');
$this->load->view('contacts',$data);


	
}
}


function sendEmail($mailData){
$this->load->library('email');

//mail configuration

$to = 'nishetty1495@gmail.com';
$from = $mailData['email'];
$fromName = 'Say it Right';
$mailSubject = 'contact request submitted by '.$mailData['name'];

//mail content

$mailContent = '
<h2>Contact request submitted</h2>
<p><b>Name: </b>'.$mailData['name'].'</p>
<p><b>Email: </b>'.$mailData['email'].'</p>
<p><b>subject: </b>'.$mailData['subject'].'</p>
<p><b>Message: </b>'.$mailData['message'].'</p>


';

$config['mailtype'] ='html';
$this->email->initialize($config);
$this->email->to($to);
$this->email->from($from, $fromName);
$this->email->subject($mailSubject);
$this->email->message($mailContent);



return $this->email->send()?true:false;


}

}

