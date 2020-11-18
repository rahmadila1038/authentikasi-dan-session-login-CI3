<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Pendaftaran Akun 
   </title>
 </head>
 <body>
     <h2>Pendaftaran Akun</h2>
 
     <?php echo form_open('register');?>
     <p>Nama:</p>
     <p>
     <input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
     </p>
     <p> <?php echo form_error('name'); ?> </p>
 
     <p>Username:</p>
     <p>
     <input type="text" name="username" value="<?php echo set_value('username'); ?>"/> 
     </p>
     <p> <?php echo form_error('username'); ?> </p>
 
     <p>Email:</p>
     <p>
     <input type="text" name="email" value="<?php echo set_value('email'); ?>"/>
     </p>
     <p> <?php echo form_error('email'); ?> </p>
     
     <p>No_Hp:</p>
     <p>
     <input type="text" name="no_hp" value="<?php echo set_value('no_hp'); ?>"/>
     </p>
     <p> <?php echo form_error('no_hp'); ?> </p>
 
     <p>Password:</p>
     <p>
     <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
     </p>
     <p> <?php echo form_error('password'); ?> </p>
 
     <p>Password Confirm:</p>
     <p>
     <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>"/>
     </p>
     <p> <?php echo form_error('password_conf'); ?> </p>
 
     <p>
     <input type="submit" name="btnSubmit" value="Daftar" />
     </p>
 
     <?php echo form_close();?>
 
 </body>
 </html>
