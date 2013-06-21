   <p> <div class="fltrt" >   
           <?php if ($this->session->userdata('logged_in')){echo "<img src=".base_url()."images/cart.jpg  width=\"20\" height=\"20\" />"; echo $this->cart->total();}?>
     </div></p>
  <div class="footer">
    <p><center> E-Commerce 4123 Summer 2013 Vet Group 1</center></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>