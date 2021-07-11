<?php
class AssistantController extends CI_Controller{

    public function __construct()
    {
    /*call CodeIgniter's default Constructor*/
    parent::__construct();
    $this->load->database();
    $this->load->helper('url');
    
    /*load Model*/
    $this->load->model('Assistant_model');
    }

     public function register_page()
    {
        $this->load->view('assistantregister');
    }


    public function register_request()
    {
        if($this->input->post('save'))
        {
            $data['name']=$this->input->post('name');
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['type'] = "assistant";
            $response=$this->Assistant_model->save_assistant($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('assistantlogin');
            }
            else
            {
                echo "Insert error !";
            }
        }

    }


    //login page foe assistant
    public function login_page()
    {
        $this->load->view('assistantlogin');
    }

    // login request function
    public function assistant_login(){
        if($this->input->post('login'))
        {
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $b=$this->Assistant_model->login($data);

            if ($b->num_rows()==1) 
            {
                $this->session->set_userdata("id",$b->row()->id);
                $this->session->set_userdata("name",$b->row()->name);
                $this->load->view('viewitems');
                
            }
            else
            {
                ?>
                <script>
                    alert("invalid user name or password");
                </script>
           <?php
            }
        }
    }


    public function add_report()
    {
        $this->load->view('addreport');
    }

    //function sending reports to admin
    public function report()
    {
        if($this->input->post('save'))
        {
            $data["type"] = $this->input->post('type');
            $data["itemid"] = $this->input->post('itemid');
            $data["description"] = $this->input->post('description');
        }
        $response=$this->Assistant_model->save_report($data);
        if($response==true)
        {
            echo "Report Saved Successfully";
            $this->load->view('addreport');
        }
        else
        {
            echo "Insert error !";
        }
    }
    public function viewitems()
    {
        $result['computer'] = $this->Assistant_model->getcomputer();
        $result['keyboard'] = $this->Assistant_model->getkeyboard();
        $result['mouse'] = $this->Assistant_model->getmouse();
        $result['printer'] = $this->Assistant_model->getprinter();
        $result['monitor'] = $this->Assistant_model->getmonitor();
        $result['software'] = $this->Assistant_model->getsoftware();
        $this->load->view('viewitems',$result);
    }

}