

<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4" style="margin-bottom: 70%">
  
  <h2><?php echo lang('login_heading');?></h2>
  <p><?php echo lang('login_subheading');?></p>

  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/login");?>

    <p>
      <?php echo lang('login_identity_label', 'identity');?>
      <?php echo form_input($identity);?>
    </p>

    <p>
      <?php echo lang('login_password_label', 'password');?>
      <?php echo form_input($password);?>
    </p>

    <p>
      <?php echo lang('login_remember_label', 'remember');?>
      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
    </p>


    <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>

  <?php echo form_close();?>

  <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

</div>
