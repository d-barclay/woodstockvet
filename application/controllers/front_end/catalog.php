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
	public function updateCart()
	{   
		$c=1; 
		 $data = array();
		foreach ($this->cart->contents() as $items)
		{
		if(isset($_POST[$c.'[rowid]']) && isset($_POST[$c.'[qty]']))
		{
		 array_push($data, array('rowid' => $_POST[$c.'[rowid]'],'qty' => $_POST[$c.'[qty]']) );
		}
		 $c++;
		}
       
 

		//$this->cart->update($data); 
		$this->viewCart();
	}
	
	public function addToCart()
	{
		$data = array(
               'id'      => $_POST['Prod_ID'],
               'qty'     => 1,
               'price'   => $_POST['Price'],
               'name'    => $_POST['Prod_Type'],
            );
		
		$this->cart->insert($data);
		$this->viewCart();	
	}
	public function viewCart()
	{
	    $this->load->view('defaultPageHeader');
        $this->load->view('defaultPageSidebar');
        $this->load->view('view_cart');
        $this->load->view('defaultPageFooter');	
	}
	
	
}
	
