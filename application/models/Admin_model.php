<?php 
class Admin_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('admin',$data);
        return true;
	}
    public function login($data)
	{
		$a=$this->db->query("select * from admin where email='$data[email]'and password='$data[password]'");
		return $a;
	}


	// insert functions
	function save_computer($data)
	{
        $this->db->insert('computer',$data);
        return true;
	}
    function save_monitor($data)
	{
        $this->db->insert('monitor',$data);
        return true;
	}
	function save_printer($data)
	{
        $this->db->insert('printer',$data);
        return true;
	}
	function save_mouse($data)
	{
        $this->db->insert('mouse',$data);
        return true;
	}
	function save_keyboard($data)
	{
        $this->db->insert('keyboard',$data);
        return true;
	}
	function save_software($data)
	{
        $this->db->insert('software',$data);
        return true;
	}


	//view items functions
	function getcomputer()
	{
		$query=$this->db->query("select * from computer");
		return $query->result();
	}
	function getmonitor()
	{
		$query=$this->db->query("select * from monitor");
		return $query->result();
	}
	function getprinter()
	{
		$query=$this->db->query("select * from printer");
		return $query->result();
	}
	function getmouse()
	{
		$query=$this->db->query("select * from mouse");
		return $query->result();
	}
	function getkeyboard()
	{
		$query=$this->db->query("select * from keyboard");
		return $query->result();
	}
	function getsoftware()
	{
		$query=$this->db->query("select * from software");
		return $query->result();
	}

}
?>