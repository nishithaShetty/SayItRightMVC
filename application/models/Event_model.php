<?php
class Event_model extends CI_Model 
{

public function event()

{
$this->load->database();
 $query = $this->db->get('events');
$query->result_array();

return $query->result_array();


}


public function myevent($id)

{
  $id = $id;
$this->load->database();
$this->db->select('*');
$this->db->from('events');
$this->db->join('event1', 'event1.event_id = events.id');
$this->db->where(array('event1.uid' => $id));

 $query = $this->db->get();
$query->result_array();

return $query->result_array();


}


public function add1( $id, $id1)
{
	$id = $id;
  $id1 = $id1;
	echo $id1;

 $data = array(
	   
       'uid' => $id1,
       'event_id' => $id
	);

return $this->db->insert('event1', $data);

}

public function delete1( $id)
{
	$id = $id;
	echo $id;

  $this->db->where('event_id',$id);
  $this->db->delete('event1');
  return true;

}





public function del1( $id)
{
	$id = $id;
	echo $id;

  $this->db->where('event_id',$id);
  $this->db->delete('event1');

$this->db->where('id',$id);
  $this->db->delete('events');

  return true;

}

public function a2()
{
 	$data = array(
       'events_name' => $this->input->post('name'),
       'description' => $this->input->post('description'),
       'date' => $this->input->post('date'),
       'sede' => $this->input->post('sede'),
       'confirmation' => $this->input->post('confirmation')
	);


return  $this->db->insert('events', $data);


}

public function a3()
{
 	$query = $this->db->query('Select id from events ORDER BY id DESC LIMIT 1 ');
    $row = $query->row();
    echo $row->id;

 return $row->id;


}



public function a4($id, $id1)
{
	$id = $id;
  $id1 = $id1;

 	$data = array(
       'uid' => $id,
       'event_id' => $id1
	);


return  $this->db->insert('event1', $data);
}




public function edit1($id = FALSE)
       {

           if($id === FALSE)
           {
             $query = $this->db->get('events');
             return $query->result_array();

           }
           $query = $this->db->get_where('events',array('id'=> $id));
               return $query->row_array();

       }





public function update_event()
       {
          $data = array(
       'events_name' => $this->input->post('name'),
       'description' => $this->input->post('description'),
       'date' => $this->input->post('date'),
       'sede' => $this->input->post('sede'),
       'confirmation' => $this->input->post('confirmation')
  );

$this->db->where('id', $this->input->post('id'));
return  $this->db->update('events', $data);


       }


public function edit4($id = FALSE)
       {

           if($id === FALSE)
           {
             $query = $this->db->get('user');
             return $query->result_array();

           }
           $query = $this->db->get_where('user',array('user_id'=> $id));
               return $query->row_array();

       }




public function profile_update($id)
       {
          $data = array(
       'fname' => $this->input->post('fname'),
       'lname' => $this->input->post('lname'),
       'email' => $this->input->post('email'),
       'password' => $this->input->post('password'),
       'school' => $this->input->post('school'),
       'work' => $this->input->post('work')
  );

$this->db->where('user_id', $id);
return  $this->db->update('user', $data);


       }




}