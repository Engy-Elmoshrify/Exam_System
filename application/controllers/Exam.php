<?php
class Exam extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('exam_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['exams'] = $this->exam_model->get_exams();
        $data['title'] = 'Exams archive';
 
       // $this->load->view('templates/header', $data);
        $this->load->view('exam/index', $data);
       // $this->load->view('templates/footer');
    }
 
    public function view($id = NULL)
    {
        $data['exams_item'] = $this->exam_model->get_exams($id);
        
        if (empty($data['exams_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['exams_item']['Exam_Name'];
        $this->load->model('question_model');
        //$data['questions']  = $this->question_model->get_all_questions_by_exam($id);
        $data['questions'] = $this->question_model->get_questions();
      //  $this->load->view('templates/header', $data);
        $this->load->view('exam/view', $data);
        //$this->load->view('templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Create a new Exam';
 
        $this->form_validation->set_rules('Exam_Name', 'Exam_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
           // $this->load->view('templates/header', $data);
            $this->load->view('exam/create');
            //$this->load->view('templates/footer');
 
        }
        else
        {
            $this->exam_model->set_exams();
            //$this->load->view('templates/header', $data);
            $this->load->view('exam/success');
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
        
        $data['title'] = 'Edit The Exam';        
        $data['exams_item'] = $this->exam_model->get_exams_by_id($id);
        
        $this->form_validation->set_rules('Exam_Name', 'Exam_Name', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('exam/edit', $data);
           // $this->load->view('templates/footer');
 
        }
        else
        {
            $this->exam_model->set_exams($id);
            $this->load->view('exam/success');
            redirect( base_url() . 'index.php/exam');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $exams_item = $this->exam_model->get_exams_by_id($id);
        
        $this->exam_model->delete_exams($id);        
        redirect( base_url() . 'index.php/exam');        
    }

    public function viewExamQusetions($Eid)
    {
        $data['q_count'] = $this->exam_model->count_qustion_of_exam($Eid);
        //print_r($data['q_count'] ); 
        //echo $data['q_count']['counter']; exit;
        $data['exams_item'] = $this->exam_model->get_exams($Eid);
        
        if (empty($data['exams_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['exams_item']['Exam_Name'];
        $this->load->model('question_model');
        $data['question_item'] =  $this->question_model->get_questions_by_question_id_and_exam_id($Eid);
        $this->load->model('answer_model');
        $data['answers_item'] = $this->answer_model->get_answers_by_question_id($data['question_item']['Q_Id']);//get_answers();//get_answers_by_question_id($Eid);
        // $this->load->view('templates/header', $data);
        $this->load->view('exam/viewExamQusetions', $data);
        // $this->load->view('templates/footer');
    }

    public function nextQuestion($Eid,$Qid,$Aid){

        $data['q_count'] = $this->exam_model->count_qustion_of_exam($Eid);
        $data['exams_item'] = $this->exam_model->get_exams($Eid);
        
        if (empty($data['exams_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['exams_item']['Exam_Name'];
        $this->load->model('question_model');
        $data['question_item'] =  $this->question_model->get_next_question($Qid,$Eid);
         $this->load->model('Score_model');
        $data['scores_item'] =$this->Score_model->set_scores('1',$Qid,$Aid);
        // get selected value :
        $data['CHOOSEN_ANSWER_ID'] =$this->Score_model->get_scores_by_question('1',$data['question_item']['Q_Id']);
        $this->load->model('answer_model');
        $data['answers_item'] = $this->answer_model->get_answers_by_question_id($data['question_item']['Q_Id']);
       // $this->load->view('templates/header', $data);
        $this->load->view('exam/viewExamQusetions', $data);
        // $this->load->view('templates/footer');
    }

    public function previousQuestion($Eid,$Qid,$Aid){
        $data['q_count'] = $this->exam_model->count_qustion_of_exam($Eid);
        $data['exams_item'] = $this->exam_model->get_exams($Eid);
        
        if (empty($data['exams_item']))
        {
            show_404();
        }
        $data['title'] = $data['exams_item']['Exam_Name'];
        $this->load->model('question_model');
        $data['question_item'] =  $this->question_model->get_previous_question($Qid,$Eid);
        // get selected value :
        
        $this->load->model('Score_model');
        $data['scores_item'] =$this->Score_model->set_scores('1',$Qid,$Aid);
        $data['CHOOSEN_ANSWER_ID'] =$this->Score_model->get_scores_by_question('1',$data['question_item']['Q_Id']);
        $this->load->model('answer_model');
        $data['answers_item'] = $this->answer_model->get_answers_by_question_id($data['question_item']['Q_Id']);
       // $this->load->view('templates/header', $data);
        $this->load->view('exam/viewExamQusetions', $data);
       // $this->load->view('templates/footer');
    }

     public function addExamQusetions($Eid){
        //$Eid=1;
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['success_msg']='';
 
        $data['title'] = 'Create a new question';
 
        $this->form_validation->set_rules('Q_Name', 'Q_Name', 'required');
        $this->form_validation->set_rules('A1_Name', 'A1_Name', 'required');
        $this->form_validation->set_rules('A2_Name', 'A2_Name', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            //$this->load->view('templates/header', $data);
            $this->load->view('exam/addExamQusetions',$data);
            //$this->load->view('templates/footer');
 
        }
        else
        {

           /* if(!isset($_POST['correct_1']))  $_POST['correct_1'] = 'false';
            if(!isset($_POST['correct_2']))  $_POST['correct_2'] = 'false';
            if(!isset($_POST['correct_3']))  $_POST['correct_3'] = 'false';
            if(!isset($_POST['correct_4']))  $_POST['correct_4'] = 'false';*/

            $this->load->model('question_model');
            $Qid = $this->question_model->set_question_for_exam($Eid);
            $this->load->model('answer_model');
            $posts = $this->input->post();
            $Aname1=$posts['A1_Name'];
            if(isset($_POST['correct_1'])) {$correctAname1=$posts['correct_1'];
            //$posts['correct_1'] = 'false';
            //echo $correctAname1; exit;
        }
            $Aname2=$posts['A2_Name'];
            if(isset($_POST['correct_2'])) $correctAname2=$posts['correct_2'];
            $Aname3=$posts['A3_Name'];
            if(isset($_POST['correct_3'])) $correctAname3=$posts['correct_3'];
            $Aname4=$posts['A4_Name'];
            if(isset($_POST['correct_4'])) $correctAname4=$posts['correct_4'];
            if (! empty($Aname1)){
                if(isset($_POST['correct_1'])) 
                    $this->answer_model->set_answers_for_question($Qid,$Aname1,$correctAname1);
                else 
                    $this->answer_model->set_answers_for_question($Qid,$Aname1,'false');
            }
            if (! empty($Aname2)){
                if(isset($_POST['correct_2']))
                    $this->answer_model->set_answers_for_question($Qid,$Aname2,$correctAname2);
                else
                    $this->answer_model->set_answers_for_question($Qid,$Aname2,'false');
   
            }
            if (! empty($Aname3)){
                if(!isset($_POST['correct_3']))
                    $this->answer_model->set_answers_for_question($Qid,$Aname3,$correctAname3);
                else
                    $this->answer_model->set_answers_for_question($Qid,$Aname3,'false');
            }
            if (! empty($Aname4)){
                if(!isset($_POST['correct_4']))
                    $this->answer_model->set_answers_for_question($Qid,$Aname4,$correctAname4);
                else
                    $this->answer_model->set_answers_for_question($Qid,$Aname4,'false');
            }
           // $this->load->view('templates/header', $data);
            //$this->load->view('question/success');
            $data['success_msg']='<p>Question has been added successfully!</p>';
            $this->load->view('exam/addExamQusetions',$data);
           // $this->load->view('templates/footer');
        }
    }


    public function getQuestionofExam($Eid,$countQid,$currentQid){


        $data['q_count'] = $this->exam_model->count_qustion_of_exam($Eid);
        $data['exams_item'] = $this->exam_model->get_exams($Eid);
        
        if (empty($data['exams_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['exams_item']['Exam_Name'];
        $this->load->model('question_model');
        $data['question_item'] =  $this->question_model->get_specific_question($countQid,$Eid);
       // $this->load->model('Score_model');
        //$data['scores_item'] =$this->Score_model->set_scores('1',$currentQid,$Aid);
        // get selected value :
       // $data['CHOOSEN_ANSWER_ID'] =$this->Score_model->get_scores_by_question('1',$data['question_item']['Q_Id']);
        $this->load->model('answer_model');
        $data['answers_item'] = $this->answer_model->get_answers_by_question_id($data['question_item']['Q_Id']);
       // $this->load->view('templates/header', $data);
        $this->load->view('exam/viewExamQusetions', $data);
        // $this->load->view('templates/footer');
    }

}