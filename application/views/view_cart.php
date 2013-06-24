<div id="Catalog_Container" >
<?php 
$this->load->helper('form');

echo form_open('../updateCart', array('id'=> "cart")); ?>
<div id="cart_line">
<div id="cart_qty">QTY</div>
<div id="cart_desc">Item Description</div>
<div id="cart_price">Item Price</div>
<div id="cart_price">Sub-Total</div>
</div>

<?php $i = 1; 
?>

<?php foreach ($this->cart->contents() as $items)
{ ?>

	<?php echo form_hidden($i.'rowid', $items['rowid']); ?>
		<div id="cart_line">
        <div id="cart_qty"><?php echo form_input(array('name' => $i.'qty', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '3')); ?></div>
		<div id="cart_desc"><?php echo $items['name']; ?></div>
		<div id="cart_price">$<?php echo $this->cart->format_number($items['price']); ?></div>
	  	<div id="cart_price">$<?php echo $this->cart->format_number($items['subtotal']); ?></div>
		</div>
<?php $i++; 

}
?>
<div id="cart_line"><?php echo form_submit('cart', 'Update your Cart'); ?></div>
<div id="cart_total"><strong>Total:       </strong>$<?php echo $this->cart->format_number($this->cart->total()); ?></div>


</div>