<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class C_gender extends CI_Controller {
public function index()
{
	$data = array ();
	$data["controller"] = $this->router->class;
	$data["method"] = $this->router->method;
	$this->load->view('v_temp', $data);
}
	public function form2add(){
		$data=array();
		$this->load->model("m_gender");
		$data=$this->m_gender->initdata();
		$data["myview"]="v_frmgender";
		$this->load->view('v_main', $data);
}	
public function save4add()
{
	$data=array();
	$this->load->model("m_gender");
	$data=$this->m_gender->initdata();
	$data["saveresult"]=$this->m_gender->insertdata($data);
	$data["myview"]="v_frmgendersaved";
	$this->load->view('v_main', $data);	
}
}
?>