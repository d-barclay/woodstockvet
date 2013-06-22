<div id="Catalog_Container" >
<?

$column_counter =1;
foreach ($contents as $item)
{
	if($column_counter == 4)
	{
		$column_counter = 1;
		// do something to go to new row
	}
	?>
    
    <div id="Box<? echo $column_counter;?>" align="center">
    <div id="cata_title"> <? echo $item->Prod_Type?></div>
    <div id="cata_img"><img src="../images/catalog/<? echo $item->Image?>" width="125" height="125"alt="<? echo $item->Prod_Type?>"></div>
        
    </div> <!--end Box<? echo $column_counter;?> -->
   <? $column_counter = $column_counter + 1; 
}

?>

</div> <!--end Container -->