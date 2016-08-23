<div id="body">
	<div class="content">
		<div class="col-md-12">
			<?php if($this->session->flashdata('error')){ ?>
			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>&nbsp;<?php echo $this->session->flashdata('error'); ?></div>
			<?php } else if($this->session->flashdata('sukses')){ ?>
			<div class="alert alert-success" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Success:</span>&nbsp;<?php echo $this->session->flashdata('sukses'); ?></div>
			<?php } ?>
			<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo site_url('Speaker/pupload');?>"> 
			<div class="col-md-8">
			 <div class="form-group" style="margin-top:15px;">
                <label class="control-label col-md-3" for="userfile">Upload Abstract</label>
                <div class="col-md-9">
                <input id="PDF" name="userfile" type="file" class="form-control" placeholder="Browse" />
                </div>
            </div>
            <div class="pull-right" style="margin: 10px 20px;">
            	<button type="submit" class="btn-primary btn">Submit</button>
            </div>
            </div>
			</form>
			<?php }else{ ?>
				<div class="col-md-12 col-xs-12 col-sm-12">
					<div class="pull-right"><a href="<?php echo site_url('Speaker/change') ?>" class="btn btn-primary">Change Abstract</a></div>
				</div><br><br>
                <embed src="<?php echo base_url('./assets/uploads/pdf/'.$abstract);?>" type="application/pdf" height="1000" width="900"></embed><br>
            
            <?php } ?>
		</div>
	</div>
</div>