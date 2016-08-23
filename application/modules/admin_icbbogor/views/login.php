<html>
  <head>
  <?php
      $this->load->view('header');
  ?>
  </head>
  <body class="login_body">
  <!-- <div class="body_login"> -->
    <!-- <div id="body"> -->
      	<!-- <div class="content"> -->
        <!-- <div class="col-sm-12"> -->
        	<div class="col-md-3 col-sm-5 col-xs-5 login_conference">
          	<h3>Login</h3>
            <?php if($this->session->flashdata('error')){ ?>
                <div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>&nbsp;<?php echo $this->session->flashdata('error'); ?></div>
            <?php } ?>
            	<form method="POST" action="<?php echo site_url('admin_icbbogor/plogin') ?>">
            		<div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                          </div>
                          <input id="user" type="text" name="user" class="form-control" placeholder="Username" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="glyphicon glyphicon-lock"></i>
                          </div>
                          <input id="psw" type="password" name="psw" class="form-control" placeholder="Password" required>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary pull-right">Login</button>
                      <br><br>
            	</form>
              <!-- </div> -->
        	<!-- </div> -->
      	<!-- </div> -->
    <!-- </div> -->
</div>
</body>
  <?php
    $this->load->view('footer');
  ?>
</html>