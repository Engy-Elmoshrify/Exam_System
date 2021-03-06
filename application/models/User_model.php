<?php
class User_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('User');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('User', array('User_Id' => $id));
        return $query->row_array();
    }
    
    public function get_users_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('User');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('User', array('User_Id' => $id));
        return $query->row_array();
    }
    
    public function set_users($id = 0)
    {
        $this->load->helper('url');

        $data = array(
            'User_Name' => $this->input->post('User_Name'),
            'User_Password' => $this->input->post('User_Password'),
            'User_Mail' => $this->input->post('User_Mail'),
        );
        
        if ($id == 0) {
            return $this->db->insert('User', $data);
        } else {
            $this->db->where('User_Id', $id);
            return $this->db->update('User', $data);
        }
    }
    
    public function delete_users($id)
    {
        $this->db->where('User_Id', $id);
        return $this->db->delete('User');
    }

    function login($username, $password)
    {
       $this->db->select('User_Id, User_Name, User_Password');
       $this->db->from('User');
       $this->db->where('User_Name', $username);
       $this->db->where('User_Password', MD5($password));
       $this->db->limit(1);

       $query = $this->db->get();

       if($query->num_rows() == 1)
       {
         return $query->result();
       }
       else
       {
         return false;
       }
    }

    function get_user_exam_id($code){
   
        $query = $this->db->get_where('Verify', array('Code' => $code));
        return $query->row_array();
    }

    function get_exam_by_userId($userId){

        $query = $this->db->select('*')
                  ->from('Verify')
                  ->join('Exam', 'Verify.Exam_Id = Exam.Exam_Id')
                  ->join('User', 'User.User_Id = Verify.User_Id')
                  ->where('User.User_Id', $userId)
                  ->get();

        return $query->result();
   
    }

   
}