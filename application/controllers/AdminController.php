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
        $this->load->view('adminregister');
    }
    public function register()
    {
        if($this->input->post('save'))
		{
		    $data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
            $data['password']=$this->input->post('password');
            $data['type'] = "admin";
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
        $this->load->view('adminlogin');

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
    			$this->session->set_userdata("id",$b->row()->id);
    			$this->session->set_userdata("name",$b->row()->name);
    			
                if($b->row()->type=="admin")
                {   
                    //$data['name'] = $b->row()->name;
                    //$this->load->view('adminhome',$data);
                    $this->load->view('adminhome');
                }
                elseif($b->row()->type=="assistant")
                {
                    $this->load->view('assistanthome');
                }
                elseif($b->row()->type=="head"){
                    $this->load->view('headview');
                }
                else
                {
                    ?>
                    <script>
                        alert("user type did not match");
                    </script>
                    <?php
                }
                /////////////////////////////////////////////////////////////////////
                //make a new if condition here for checking usertype               //
                //after checking the usertype give apropriate response             //
                //add a new usertype field to admin and use its table for all users//
                /////////////////////////////////////////////////////////////////////
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
            $data['manufacture']=$this->input->post('manufacture');
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
            $data['type']=$this->input->post('type');
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
            $data['manufacture']=$this->input->post('manufacture');
            $data['model']=$this->input->post('model');
            $data['type']=$this->input->post('type');
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
            $data['manufacture']=$this->input->post('manufacture');
            $data['model']=$this->input->post('model');
            $data['type']=$this->input->post('type');
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
            $data['manufacture']=$this->input->post('manufacture');
            $data['model']=$this->input->post('model');
            $data['type']=$this->input->post('type');
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

    public function viewreport()
    {
        $result['report'] = $this->Admin_model->getreport();
    }
}
?>