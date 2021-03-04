<?php $this->load->view('users/component/header'); ?>

<?php
//  $this->load->view('users/component/sidebar');
 ?>
<!--  ####################### load page ##########################   -->
<?php $this->load->view('users/'.$subview);?>
<!--  ####################### load page ##########################   -->
<?php $this->load->view('users/component/footer'); ?>
