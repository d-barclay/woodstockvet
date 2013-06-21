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
        <? echo $item->Prod_Type?>
        <p><img src="../images/catalog/<? echo $item->Image?>" width="75" height="75"alt="<? echo $item->Prod_Type?>"></p>
    </div> <!--end Box<? echo $column_counter;?> -->
   <? $column_counter = $column_counter + 1; 
}

?>

</div> <!--end Container -->