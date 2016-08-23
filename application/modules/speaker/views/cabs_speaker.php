<div id="body">
	<div class="content">
		<div class="col-md-12">
			<?php if($this->session->flashdata('error')){ ?>
			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>&nbsp;<?php echo $this->session->flashdata('error'); ?></div>
			<?php } ?>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('Speaker/pupload');?>"> 
			<div class="col-md-8">
			 <div class="form-group" style="margin-top:15px;">
                <label class="control-label col-md-3" for="userfile">Change Abstract</label>
                <div class="col-md-9">
                <input id="PDF" name="userfile" type="file" class="form-control" placeholder="Browse" />
                </div>
            </div>
            <div class="pull-right" style="margin: 10px 20px;">
            	<button type="submit" class="btn-primary btn">Submit</button>
            </div>
            </div>
			</form>
		</div>
	</div>
</div>