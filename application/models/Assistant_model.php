<?php
class Assistant_model extends CI_Model
{	
	function save_assistant($data)
	{
        $this->db->insert('user',$data);
        return true;
	}
    public function login($data)
	{
		$a=$this->db->query("select * from user where email='$data[email]'and password='$data[password]'");
		return $a;
	}
	function save_report($data)
	{
        $this->db->insert('report',$data);
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