<div id="Catalog_Container" >
<?
$this->load->helper('form');

foreach ($contents as $item)
{
	$Prod_ID= $item->Prod_ID;
	$Prod_Type = $item->Prod_Type;
	$Description = $item->Description;
	$Price = $item->Price;
	$Image = $item->Image;
	$hidden = array(
              'Prod_ID'  => $Prod_ID,
              'Prod_Type' => $Prod_Type,
              'Description'   => $Description,
			  'Price' => $Price
            );

	?>
    
    <div id="Box" align="center">
    <?php
	 echo form_open( '../catalog/addToCart', array('id'=> "form".$Prod_ID));
	 echo form_hidden($hidden);
	?>
    <div id="cata_title"> <? echo $Prod_Type?></div>
    <div id="cata_img"><img src="../images/catalog/<? echo $Image?>" width="125" height="125"alt="<? echo $Prod_Type?>"></div>
    <div id="cata_botline">
	<div id="cata_price"><? echo $Price?></div>
    <?php /* <a href=""><div id="cata_addto_button" onclick="document.<?php echo "form".$Prod_ID?>.submit()" >Add to Cart</div></a>*/?>
   <div id="cata_addto_button" "><? echo form_submit('mysubmit', 'Submit Post!');?></div>
	
    </form>
    </div>
 	   
        
    </div> <!--end Box -->
   <?
}

?>

</div> <!--end Container -->