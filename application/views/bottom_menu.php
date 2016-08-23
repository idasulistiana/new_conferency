	<div id="footer">
		<div>
			<p>
				Copyright &copy; <a href="index.html">SBRC</a> CP : (+62 81381709617)
			</p>
			<ul>
				<li <?php if ($this->uri->segment(1)=='home') echo 'class="active"'?>>
					<a href="<?php echo site_url('home') ?>">Home</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='about_us') echo 'class="active"'?>>
					<a href="<?php echo site_url('about_us') ?>">About Us</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='venue_hospitally') echo 'class="active"'?>>
					<a href="<?php echo site_url() ?>venue_hospitally">Venue & Hospitality</a>
				</li>
				<li <?php if ($this->uri->segment(1)=='abstract_web') echo 'class="active"'?>>
					<a href="<?php echo site_url('abstract_web') ?>">Abstract</a>
				</li>
				<li class="<?php if ($this->uri->segment(1)=='registration') echo ' active'?>">
					<a  href="<?php echo site_url('registration') ?>">Registration</a>

			</ul>
			<p class="pull-right">
				Under Construction 
			</p>
		</div>
	</div>