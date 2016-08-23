<html>
	<head>
		<?php $this->load->view('header'); ?>
		<title>International Conference on Biomass</title>
	</head>
	<body>
		<?php $this->load->view('top_menu') ;?>
			<?php 
				if($content_view == 'home'){
					$this->load->view('home');
				}else if ($content_view=='about_us'){
					$this->load->view('about_us');
				}else if ($content_view=='abstract_web'){
					$this->load->view('abstract_web');
				}else if ($content_view=='venue_hospitally'){
					$this->load->view('venue_hospitally');
				}else if ($content_view=='awards'){
					$this->load->view('awards');
				}else if ($content_view=='sponsor'){
					$this->load->view('sponsor');
				}else if ($content_view=='technical_program'){
					$this->load->view('technical_program');
				}else if ($content_view=='registration_participant'){
					$this->load->view('registration_participant');
				}else if ($content_view=='registration_presenter'){
					$this->load->view('registration_presenter');	
				}else if ($content_view=='home_speaker'){
					$this->load->view('home_speaker');
				}else if ($content_view=='abstract_speaker'){
					$data['abstract'] = $abstract;
					$this->load->view('abstract_speaker', $data);
				}else if ($content_view=='cabs_speaker'){
					$this->load->view('cabs_speaker');
				}else if ($content_view=='home_audience'){
					$this->load->view('home_audience');
				}else if ($content_view=='organization'){
					$this->load->view('organization');
				}else if ($content_view=='confirm'){
					$this->load->view('confirm');
				}else if ($content_view=='call_paper'){
					$this->load->view('call_paper');
				}else if ($content_view=='speaker_guidelines'){
					$this->load->view('speaker_guidelines');
				}else if ($content_view=='proceeding'){
					$this->load->view('proceeding');
				}else if ($content_view=='poster'){
					$this->load->view('poster');
				}else if ($content_view=='rundown'){
					$this->load->view('rundown');
				}else if ($content_view=='abstract_guidelines'){
					$this->load->view('abstract_guidelines');
				}else if ($content_view=='rundown2'){
					$this->load->view('rundown2');
				}
			?>
			
		<?php $this->load->view('bottom_menu') ;?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>
