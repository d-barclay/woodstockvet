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
		
		 array_push($data, array('rowid' => $_POST[$c.'rowid'],'qty' => $_POST[$c.'qty']) );

		 $c++;
		}
       
 

		$this->cart->update($data); 
		$this->viewCart();
	}
	public function increaseQty($data)
	{
		$this->cart->update($data); 
		$this->viewCart();
	}
	
	public function addToCart()
	{
		 $increase = array();
		 
		 $Prod_ID = $_POST['Prod_ID'];
		 $Price = $_POST['Price'];
		 $Prod_Type = $_POST['Prod_Type'];
		 
		 $flag = false;
		foreach ($this->cart->contents() as $items)
		{
			if (strcmp($items['name'],$Prod_Type) == 0)
			{
				$qty = $items['qty'] + 1;
				$flag = true;
				$this->cart->update(array('rowid' => $items['rowid'],'qty' => $qty ) );
			}
			
		}
		if(!$flag)
		{
			$data = array(
				   'id'      => $Prod_ID,
				   'qty'     => 1,
				   'price'   => $Price,
				   'name'    => $Prod_Type,
				);
			
			$this->cart->insert($data);
		}
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
	
