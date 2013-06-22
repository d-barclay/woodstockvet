 <div class="sidebar1">
    <ul class="nav">
        
      
      <li><a href="<?php base_url();?>/">Home</a></li>
      <li><a href="<?php base_url();?>/staticPages/destination/aboutUsPage">About Us</a></li>
      <li><a href="<?php base_url();?>/staticPages/destination/servicesPage">Services</a></li>
      <li><a href="<?php base_url();?>/front_end/catalog">Catalog</a></li>
      <li><a href="<?php base_url();?>/staticPages/destination/staffPage">Meet the Staff</a></li>
      <li><a href="<?php base_url();?>/staticPages/destination/officeHoursPage">Locations/Hours</a></li>
     <!-- <li><a href="<?php base_url();?>Vetgroup_FAQ.dwt.php">FAQ</a></li> -->
      
      <?php if ($this->session->userdata('logged_in')) {?>
      <li><a href="<?php base_url();?>/front_end/login/account">Account</a></li>
      <li><a href="<?php base_url();?>/front_end/login/login0">Logout</a></li>
          <?php } else { ?>
      <li><a href="<?php base_url();?>/front_end/login/login1">Login</a></li>
      <?php } ?>
    </ul>
    <p><strong>Woodstock Veterinary Clinic</strong></p>
    <p>3800 Bells Ferry Road<p>
    <p>Woodstock, GA 30189<p>
    <p>(000)111-2222<p>
    <!-- end .sidebar1 --></div>
    <div class="sidebar2">
 
    <h4><strong> Schedule Your Appointment Today</strong></h4>
    <p> Click here to schedule <a href="<?php base_url();?>/front_end/appointment/schedule">online</a> .</p>
    <!-- end .sidebar2 --></div>
 