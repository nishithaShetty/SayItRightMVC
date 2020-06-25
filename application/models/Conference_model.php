a<?php
class Conference_model extends CI_Model 
{

public function conference()

{
$this->load->database();
 $query = $this->db->get('conference');
$query->result_array();

return $query->result_array();


}



public function myconference($id)

{
  $id = $id;
$this->load->database();
$this->db->select('*');
$this->db->from('conference');
$this->db->join('conferences', 'conferences.conference_id = conference.id');
$this->db->where(array('conferences.uid' => $id));
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
       'conference_id' => $id
  );

return $this->db->insert('conferences', $data);

}


public function delete1( $id)
{
	$id = $id;
	echo $id;

  $this->db->where('conference_id',$id);
  $this->db->delete('conferences');
  return true;

}




public function del1( $id)
{
	$id = $id;
	echo $id;

  $this->db->where('conference_id',$id);
  $this->db->delete('conferences');

$this->db->where('id',$id);
  $this->db->delete('conference');

  return true;

}

public function a2()
{
 	$data = array(
       'conference_name' => $this->input->post('name'),
       'description' => $this->input->post('description'),
       'date' => $this->input->post('date'),
       'sede' => $this->input->post('sede'),
       'confirmation' => $this->input->post('confirmation')
	);


return  $this->db->insert('conference', $data);


}

public function a3()
{
 	$query = $this->db->query('Select id from conference ORDER BY id DESC LIMIT 1 ');
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
       'conference_id' => $id1
	);


return  $this->db->insert('conferences', $data);
}




public function edit1($id = FALSE)
       {

           if($id === FALSE)
           {
             $query = $this->db->get('conference');
             return $query->result_array();

           }
           $query = $this->db->get_where('conference',array('id'=> $id));
               return $query->row_array();

       }

       public function update_conference()
       {
          $data = array(
       'conference_name' => $this->input->post('name'),
       'description' => $this->input->post('description'),
       'date' => $this->input->post('date'),
       'sede' => $this->input->post('sede'),
       'confirmation' => $this->input->post('confirmation')
  );

$this->db->where('id', $this->input->post('id'));
return  $this->db->update('conference', $data);


       }






}