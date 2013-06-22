<div id="Catalog_Container" >
<?


foreach ($contents as $item)
{
	
	?>
    
    <div id="Box" align="center">
    <div id="cata_title"> <? echo $item->Prod_Type?></div>
    <div id="cata_img"><img src="../images/catalog/<? echo $item->Image?>" width="125" height="125"alt="<? echo $item->Prod_Type?>"></div>
    <div id="cata_botline">
	<div id="cata_price"><? echo $item->Price?></div>
    <div id="cata_addto_button" >Add to Cart</div>
    </div>
    
        
    </div> <!--end Box -->
   <?
}

?>

</div> <!--end Container -->