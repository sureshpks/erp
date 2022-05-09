<?php 
$this->load->view('backend/layouts/header');
$this->load->view('backend/layouts/sidebar');
$this->load->view($content);
$this->load->view('backend/layouts/footer');
?>