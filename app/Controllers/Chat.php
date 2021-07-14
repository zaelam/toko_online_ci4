<?php
namespace App\Controllers;

class Chat extends BaseController
{
    public function index()
	{
		// panggil helper nohp
		// $this->load->helper('nohp');
		// // panggil library text
		// $this->load->helper('text');	
		// // panggil library text
		// $this->load->library('user_agent');	
        helper(['nohp_helper']);

		$data['page_title']       = 'Chat';

		// $this->load->view('chat/index', $data);
        return view('chat/index', $data);
	} 
}