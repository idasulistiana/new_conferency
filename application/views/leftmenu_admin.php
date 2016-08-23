<div class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <div class="logo" style="color:white"><h1>Administrator Internation Conference on Biomass</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> 
      </div>   
    </div>
    <div class="template-page-wrapper">
      <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
          <li <?php if ($this->uri->segment(2) == 'participant' || $this->uri->segment(2) == ""): ?>
            class="active"
          <?php endif ?>><a href="<?php echo site_url('admin_icbbogor/participant') ?>"><i class="glyphicon glyphicon-user"></i><span class="badge pull-right"><?php echo $this->Speaker_m->hitung('tbl_participant') ?></span>Participants</a></li>
          <li <?php if ($this->uri->segment(2) == 'presenter'): ?>
            class="active"
          <?php endif ?>><a href="<?php echo site_url('admin_icbbogor/presenter') ?>"><i class="glyphicon glyphicon-user"></i><span class="badge pull-right"><?php echo $this->Speaker_m->hitung() ?></span>Presenters</a></li>
          <li class="<?php if ($this->uri->segment(2) == 'payment' || $this->uri->segment(2) == 'data_payment' ): ?>
            active open
          <?php endif ?> sub">
          <a href="javascript:;">
              <i class="glyphicon glyphicon-credit-card"></i> Payment <div class="pull-right"><span class="badge" style="margin-right:0px"><?php echo $this->Payment_m->hitung() ?></span><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li><a href="<?php echo site_url('admin_icbbogor/payment') ?>"><span class="badge pull-right"><?php echo $this->Payment_m->hitung() ?></span> Payment Confirmation</a></li>
              <li><a href="<?php echo site_url('admin_icbbogor/payment/data') ?>">Data</a></li>
            </ul>
          </li>
          <li class="<?php if ($this->uri->segment(2) == 'rundown'): ?>
                active open
              <?php endif ?> sub ">
          <a href="javascript:;">
              <i class="glyphicon glyphicon-calendar"></i> Rundown <div class="pull-right"><span class="caret"></span></div>
            </a>
            <ul class="templatemo-submenu">
              <li <?php if ($this->uri->segment(2) == 'rundown' && $this->uri->segment(3) == 1): ?>
                class="active"
              <?php endif ?>><a href="<?php echo site_url('admin_icbbogor/rundown/1') ?>">Day-1 (October 10<sup>th</sup>, 2016)</a></li>
              <li ><a href="<?php echo site_url('admin_icbbogor/rundown/2') ?>">Day-2 (October 11<sup>th</sup>, 2016)</a></li>
            </ul>
          </li>
          <li><a href="" data-toggle="modal" data-target="#confirmModal"><i class="glyphicon glyphicon-log-out"></i>Sign Out</a></li>
        </ul>
      </div><!--/.navbar-collapse -->

       <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
            </div>
            <div class="modal-footer">
              <a href="<?php echo site_url('admin_icbbogor/logout') ?>" class="btn btn-primary">Yes</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
          </div>
        </div>
      </div>