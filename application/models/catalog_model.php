<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Catalog_model extends CI_Model {
	
	public function loadData()
	{
		$query = $this->db->query('SELECT Prod_ID, Prod_Type, Description, Price, Stock_Qty, Image FROM Product_T WHERE Stock_Qty > 0');
		return($query->result());
	}


	
	
	
}