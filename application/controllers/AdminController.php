<?php
class AdminController extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
    public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	$this->load->database();
    $this->load->helper('url');
	
	/*load Model*/
	$this->load->model('Admin_model');
	}
    public function signup()
    {
        $this->load->view('signup');
    }
    public function register()
    {
        if($this->input->post('save'))
		{
		    $data['f_name']=$this->input->post('firstname');
			$data['l_name']=$this->input->post('LastName');
			$data['email']=$this->input->post('Email');
            $data['gender']=$this->input->post('Gender');
            $data['password']=$this->input->post('Password');
            $data['cpassword']=$this->input->post('CPassword');
			$response=$this->Admin_model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
                    $this->load->view('signup');
			}
			else{
					echo "Insert error !";
			}
		}

    }
    public function login()
    {
        $this->load->view('home');

    }
    public function signin()
    {
        if($this->input->post('login'))
        {
            $data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
           // $que=$this->db->query("select * from admin where email='$email' and password='$password'");
           // $row = $que->num_rows();
           $b=$this->Admin_model->login($data);

    		if ($b->num_rows()==1) 
    		{
    			$this->session->set_userdata("id",$b->row()->a_id);
    			$this->session->set_userdata("name",$b->row()->f_name);
    			$this->load->view('adminhome');
    			
    		}
            else
            {
                ?>
                <script>
                    alert("invalid user name or password");
           <?php
            }
        }
    }

    // insert item forms
    public function computer()
    {
        $this->load->view('computer');
    }
    public function monitor()
    {
        $this->load->view('monitor');
    }
    public function mouse()
    {
     $this->load->view('mouse');

    }
    public function printer()
    {
        $this->load->view('printer');

    }
    public function keyboard()
    {
        $this->load->view('keyboard');

    }
    public function userinformation()
    {
        $this->load->view('userinformation');
    }
    public function dashboard()
    {
        $this->load->view('adminhome');
    }
    public function software()
    {
        $this->load->view('software');
    }



    // insert item functions
    public function add_computer()
    {
        if($this->input->post('save'))
        {
            $data['devicename']=$this->input->post('devicename');
            $data['version']=$this->input->post('version');
            $data['model']=$this->input->post('model');
            $data['processor']=$this->input->post('processor');
            $data['ram']=$this->input->post('ram');
            $data['drive']=$this->input->post('drive');
            $data['location']=$this->input->post('location');
            $data['description']=$this->input->post('description');
            $data['gst']=$this->input->post('gst');
            $data['price']=$this->input->post('price');
            $data['warranty']=$this->input->post('warranty');

            $response=$this->Admin_model->save_computer($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('computer');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }
   
    public function add_monitor()
    {
        if($this->input->post('save'))
        {
            $data['manufacture']=$this->input->post('manufacture');
            $data['model']=$this->input->post('model');
            $data['categories']=$this->input->post('categories');
            $data['location']=$this->input->post('location');
            $data['description']=$this->input->post('description');
            $data['gst']=$this->input->post('gst');
            $data['price']=$this->input->post('price');
            $data['warranty']=$this->input->post('warranty');

            $response=$this->Admin_model->save_monitor($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('monitor');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }

    public function add_printer()
    {
        if($this->input->post('save'))
        {
            $data['version']=$this->input->post('version');
            $data['model']=$this->input->post('model');
            $data['modelnumber']=$this->input->post('modelnumber');
            $data['categories']=$this->input->post('categories');
            $data['location']=$this->input->post('location');
            $data['description']=$this->input->post('description');
            $data['gst']=$this->input->post('gst');
            $data['price']=$this->input->post('price');
            $data['warranty']=$this->input->post('warranty');

            $response=$this->Admin_model->save_printer($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('printer');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }

    public function add_mouse()
    {
        if($this->input->post('save'))
        {
            $data['version']=$this->input->post('version');
            $data['model']=$this->input->post('model');
            $data['categories']=$this->input->post('categories');
            $data['location']=$this->input->post('location');
            $data['description']=$this->input->post('description');
            $data['gst']=$this->input->post('gst');
            $data['price']=$this->input->post('price');
            $data['warranty']=$this->input->post('warranty');

            $response=$this->Admin_model->save_mouse($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('mouse');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }

    public function add_keyboard()
    {
        if($this->input->post('save'))
        {
            $data['version']=$this->input->post('version');
            $data['model']=$this->input->post('model');
            $data['categories']=$this->input->post('categories');
            $data['location']=$this->input->post('location');
            $data['description']=$this->input->post('description');
            $data['gst']=$this->input->post('gst');
            $data['price']=$this->input->post('price');
            $data['warranty']=$this->input->post('warranty');

            $response=$this->Admin_model->save_keyboard($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('keyboard');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }

    public function add_software()
    {
        if($this->input->post('save'))
        {
            $data['name']=$this->input->post('name');
            $data['version']=$this->input->post('version');
            $data['systemid']=$this->input->post('systemid');
            $data['installdate']=$this->input->post('installdate');
            $data['type']=$this->input->post('type');
            $data['description']=$this->input->post('description');
            $data['price']=$this->input->post('price');

            $response=$this->Admin_model->save_software($data);
            if($response==true)
            {
                echo "Records Saved Successfully";
                $this->load->view('software');
            }
            else
            {
                echo "Insert error !";
            }
        }
    }

    //getting all data for viewitems page
    public function viewitems()
    {
        $result['computer'] = $this->Admin_model->getcomputer();
        $result['keyboard'] = $this->Admin_model->getkeyboard();
        $result['mouse'] = $this->Admin_model->getmouse();
        $result['printer'] = $this->Admin_model->getprinter();
        $result['monitor'] = $this->Admin_model->getmonitor();
        $result['software'] = $this->Admin_model->getsoftware();
        $this->load->view('viewitems',$result);
    }
}
?>