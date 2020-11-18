<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Dashboard
   </title>
 </head>
 <body>
      <h3>Dashboard</h3>
            <p>
             Selamat datang di website kami <?php echo ucfirst($this->session->userdata('username')); ?>!
             <br> untuk keluar dari sistem klik <?php echo anchor('login/logout','logout'); ?>
            </p>
 </body>
 </html>