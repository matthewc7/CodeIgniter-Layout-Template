<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{

		$data['title'] = 'Template';
		$data['content'] = 'home';

		$this->layout->render($data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */