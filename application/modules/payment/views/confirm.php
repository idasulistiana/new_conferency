<div id="body">
	<div class="content">
		<h2 align="center"><br>Payment Confirmation</h2>
	<?php if($this->session->flashdata('error')){ ?>
			<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>&nbsp;<?php echo $this->session->flashdata('error'); ?></div>
	<?php } ?>
	<?php if($this->session->flashdata('sukses')){ ?>
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<div class="alert alert-success" role="alert" align="center"><span class="sr-only">Success:</span>&nbsp;<?php echo $this->session->flashdata('sukses'); ?></div>
		</div>
		<div class="col-sm-1"></div>
		<div class="clearfix"></div>
	<?php } ?>
	<div style="margin:30px"> <b>
	<form action="<?php echo site_url('payment/confirm') ?>" method="POST">
			<div class="col-sm-12 ">
				<div class="mark_title">
					<span class="note">* </span> Marked field are required
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
				    	<label for="inputFirstName">Full Name</label>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="fName" id="fName" placeholder="First Name" required <?php if($this->session->flashdata('fName')) echo "value = '".$this->session->flashdata('fName')."'"; ?>>
				    </div>
				    <div class="col-sm-4">
				    	<input type="text" class="form-control" name="lName" id="lName" placeholder="Last Name" required <?php if($this->session->flashdata('lName')) echo "value = '".$this->session->flashdata('lName')."'"; ?>>
				    </div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputLastName">Company Name</label>
				    </div>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" name="company" id="company" placeholder="Company/University Name" required <?php if($this->session->flashdata('company')) echo "value = '".$this->session->flashdata('company')."'"; ?>>
				    </div>
				 </div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputEmail" >Email <span class="note">*</span></label>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="email" class="form-control" name="email" id="email" placeholder="Your email" required <?php if($this->session->flashdata('email')) echo "value = '".$this->session->flashdata('email')."'"; ?>>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="category" >Registration Type  <span class="note">*</span></label>
					</div>
					<div class="col-sm-8">
						<select class="form-control" name="category" id="category" required>
							<option value="0" selected="">==Select one==</option>
							<option value="1" <?php if($this->session->flashdata('category') == '1') echo "selected"; ?>>Participant</option>
							<option value="2" <?php if($this->session->flashdata('category') == '2') echo "selected"; ?>>Presenter (Submit Abstract)</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract paper_id">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="inputLastName">Paper ID</label>
				    </div>
				    <div class="col-sm-8">
				    	<input type="text" class="form-control" name="paperid" id="paperid" placeholder="Paper ID" required <?php if($this->session->flashdata('paperid')) echo "value = '".$this->session->flashdata('paperid')."'"; ?>>
				    </div>
				 </div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="bank" >From Bank  <span class="note">*</span></label>
					</div>
					<div class="col-sm-8">
						<select class="form-control" name="bank" id="bank" required>
							<option value="BNI" <?php if($this->session->flashdata('bank') == 'BNI') echo "selected"; ?>>BNI</option>
							<option value="BCA" <?php if($this->session->flashdata('bank') == 'BCA') echo "selected"; ?>>BCA</option>
							<option value="Mandiri" <?php if($this->session->flashdata('bank') == 'Mandiri') echo "selected"; ?>>Mandiri</option>
							<option value="Other" <?php if($this->session->flashdata('bank') == 'Other') echo "selected"; ?>>Other</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="anumber" >Account Name <span class="note">*</span></label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="aname" id="aname" <?php if($this->session->flashdata('aname')) echo "value = '".$this->session->flashdata('aname')."'"; ?> placeholder="Your Account Name" required>
					</div>
				</div>
			</div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="anumber" >Transaction Number <span class="note">*</span></label>
					</div>
					<div class="col-sm-8">
						<input type="text" class="form-control" name="anum" id="anum" <?php if($this->session->flashdata('anum')) echo "value = '".$this->session->flashdata('anum')."'"; ?> placeholder="Your Account Number" required>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div  class="col-sm-4">
						<label for="inputPhoneNumber">Amount <span class="note">*</span></label>
					</div>
					<div class="col-sm-2 col-md-2 col-xs-2">
						<select name="satuan" id="satuan" class="form-control">
							<option value="$" <?php if($this->session->flashdata('satuan') == '$') echo "selected"; ?>>$</option>
							<option value="Rp" <?php if($this->session->flashdata('satuan') == 'Rp') echo "selected"; ?>>Rp</option>
						</select>
					</div>
					<div class="col-sm-3 col-md-3 col-xs-3">
						<input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" maxlength="20" required <?php if($this->session->flashdata('phone')) echo "value = '".$this->session->flashdata('phone')."'"; ?>>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4">
						<label for="address" >Message</label>
					</div>
					<div class="col-sm-8">
						<textarea name="message" rows="3" class="form-control" id="message" maxlength="150"> <?php if($this->session->flashdata('message')) echo $this->session->flashdata('message'); ?></textarea>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-sm-12 form_abstract">
				<div class="form-group">
					<div class="col-sm-4"></div>
					<div class="col-sm-5">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>