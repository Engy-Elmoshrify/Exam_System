<?php
class User extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['users'] = $this->user_model->get_users();
        $data['title'] = 'Users archive';
 
        //$this->load->view('templates/header', $data);
        $this->load->view('user/index', $data);
        //$this->load->view('templates/footer');
    }
 
    public function view($id = NULL)
    {
        $data['users_item'] = $this->user_model->get_users($id);
        
        if (empty($data['users_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['users_item']['User_Name'];
 
        //$this->load->view('templates/header', $data);
        $this->load->view('user/view', $data);
        //$this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new User';
 
        $this->form_validation->set_rules('User_Name', 'User_Name', 'required');
        $this->form_validation->set_rules('User_Mail', 'User_Mail', 'required');
        $this->form_validation->set_rules('User_Password', 'User_Password', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('user/create');
            //$this->load->view('templates/footer');
 
        }
        else
        {
            $this->user_model->set_users();
            //$this->load->view('templates/header', $data);
            $this->load->view('user/success');
            //$this->load->view('templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit The User';        
        $data['users_item'] = $this->user_model->get_users_by_id($id);
        
        $this->form_validation->set_rules('User_Name', 'User_Name', 'required');
        $this->form_validation->set_rules('User_Mail', 'User_Mail', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('user/edit', $data);
            //$this->load->view('templates/footer');
 
        }
        else
        {
            $this->user_model->set_users($id);
            $this->load->view('user/success');
            redirect( base_url() . 'index.php/user');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $users_item = $this->user_model->get_users_by_id($id);
        
        $this->user_model->delete_users($id);        
        redirect( base_url() . 'index.php/user');        
    }

    public function signup()
    {
        //echo "yarab"; exit;
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new User';
 
        $this->form_validation->set_rules('User_Name', 'User_Name', 'required');
        $this->form_validation->set_rules('User_Mail', 'User_Mail', 'required');
        $this->form_validation->set_rules('User_Password', 'User_Password', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('user/signup');
            //$this->load->view('templates/footer');
 
        }
        else
        {
            $this->user_model->set_users();
            //$this->load->view('templates/header', $data);
            $this->load->view('user/success');
            //$this->load->view('templates/footer');
        }
    }


    public function verify(){
        $this->load->helper('form');
        $this->load->helper('url');
        $code=$this->input->post('User_Code');
        $examId=$this->user_model->get_user_exam_id($code);
        $data['score'] = $examId['Score'];
        $this->load->model('exam_model');
        $data['exams']=$this->exam_model->get_exams_by_id($examId['Exam_Id']);
        
        if (empty($playerlist)) {
            $this->load->view('user/verifyError');
        }else{
            $this->load->view('user/verify',$data);
        }
    }

    public function profile(){
        $userId=1;
        $data['userInfo']=$this->user_model->get_users_by_id($userId);
        $data['userExams']=$this->user_model->get_exam_by_userId($userId);
        $this->load->view('user/profile',$data);



    }
    
}