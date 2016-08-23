<div class="col-sm-12 benner">
		<div class="top_benner">
			<div class="text_title"> INTERNATIONAL CONFERENCE ON BIOMASS: <br>
				Technology, Application, and Sustainable Development
			</div>
	</div>
</div>

<div id="header">
	<div class="	header_body">
		<div class="clearfix"></div>
		<div class="col-sm-12 ">
			<div class="clearfix"></div>
			<ul class="line_top_menu">
				<li <?php if ($this->uri->segment(1)=='home' || $this->uri->segment(1)=='') echo 'class="active selected"'?>>
					<a href="<?php echo site_url('home') ?>">Home</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='about_us') echo 'class="active"'?>>
					<a href="<?php echo site_url('about_us') ?>">About Us</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='abstract_web') echo 'class="active"'?>>
					<a href="<?php echo site_url('abstract_web') ?>">Abstract</a>
				</li>
				<li class="<?php if ($this->uri->segment(1)=='registration') echo ' active'?>">
					<a  href="<?php echo site_url('registration') ?>">Registration</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='technical_program') echo 'class="active"'?> class="dropdown">
					<a  href="<?php echo site_url('technical_program') ?>" data-toggle="dropdown">Technical Program</a>
						<ul class="dropdown-menu">
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/call_paper">Full Paper Guidelines</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/speaker_guidelines"> Speaker Guidelines</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/rundown"> Run Down</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/proceeding"> Proceeding</a>
							</li>
							<li class="col-sm-12">
								<a href="<?php echo site_url() ?>technical_program/poster"> Poster</a>
							</li>
						</ul>
				</li>
				<li <?php if ($this->uri->segment(1)=='venue_hospitally') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>venue_hospitally">Venue</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='payment') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>payment">Payment Confirmation</a>
				</li>
			</ul>
		</div>
	</div>
</div>