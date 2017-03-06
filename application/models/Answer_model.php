<?php
class Answer_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_answers($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Answer');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Answer', array('A_Id' => $id));
        return $query->row_array();
    }
    
    public function get_answers_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('Answer');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Answer', array('A_Id' => $id));
        return $query->row_array();
    }
    
    public function set_answers($id = 0)
    {
        $this->load->helper('url');
 
       // $slug = url_title($this->input->post('Exam_Name'), 'dash', TRUE);
 
        $data = array(
            'A_Name' => $this->input->post('A_Name'),
            'A_Correct' => $this->input->post('A_Correct'),
        );
        
        if ($id == 0) {
            return $this->db->insert('Answer', $data);
        } else {
            $this->db->where('A_Id', $id);
            return $this->db->update('Answer', $data);
        }
    }
    
    public function delete_answers($id)
    {
        $this->db->where('A_Id', $id);
        return $this->db->delete('Answer');
    }

    public function get_answers_by_question_id($Qid)
    {

        $query = $this->db->get_where('Answer', array('Q_Id' => $Qid));
        return $query->result_array();
    }

     public function set_answers_for_question($Qid,$Aname,$correctAname,$Aid = 0)
    {
        $this->load->helper('url');

        $data = array(
            'Q_id' => $Qid,
            'A_Name' => $Aname,
            "A_Correct" =>$correctAname,
        );
 
        
        if ($Aid == 0) {
            return $this->db->insert('Answer', $data);
        } else {
            $this->db->where('A_Id', $Aid);
            return $this->db->update('Answer', $data);
        }
    }

        public function get_answers_by_Qid($id = FALSE)
    {
        if ($id === FALSE)
        {
            $query = $this->db->get('Answer');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('Answer', array('Q_Id' => $id));
        return $query->result_array();
    }
}