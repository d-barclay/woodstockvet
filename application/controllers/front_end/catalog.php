<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Catalog extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
	{
		

		$this->display();
		
	}
	
	public function display()
	{
		$this->load->model('catalog_model');
		$data['contents']=$this->catalog_model->loadData();
		
		
		
		$this->load->view('defaultPageHeader');
        $this->load->view('defaultPageSidebar');
        $this->load->view('view_catalog',$data);
        $this->load->view('defaultPageFooter');
			
		
	}
	
	
}
	
