<html>
	<head>
    <meta http-equiv="refresh" content="300">
    <title>Administrator Internation Conference on Biomass</title>
		<?php $this->load->view('header'); ?>
	</head>
	<body>
	<?php $this->load->view('leftmenu_admin'); ?>
	<?php
		if($content_view == 'admin_icbbogor'){
			$this->load->view('admin_icbbogor');
		}else if($content_view == 'participant'){
			$data['presenter'] = $presenter;
			$this->load->view('participant', $data);
		}else if($content_view == 'presenter'){
			$data['presenter'] = $presenter;
			$this->load->view('presenter', $data);
		}else if ($content_view == 'padmin'){
      $data['payment'] = $presenter;
      $this->load->view('payment_admin', $data);
    }else if ($content_view == 'payment1'){
      $data['payment'] = $presenter;
      $this->load->view('datap', $data);
    }else if ($content_view == 'abstract'){
      $data['abstract'] = $abstract;
      $this->load->view('abstract', $data);
    }else if ($content_view == 'rundown1'){
			$data['rundown1'] = $rundown1;
			$this->load->view('rundown', $data);
		}else if ($content_view == 'rundown2'){
      $data['rundown2'] = $rundown2;
      $this->load->view('rundown1', $data);
    }
	?>
	</body>
	<footer>
		<?php $this->load->view('footer'); ?>
	</footer>
</html>
    <script type="text/javascript">
    $(document).ready(function () {
      <?php if($content_view != 'rundown1' && $content_view != 'rundown2'){ ?>
      $('.table').dataTable(
        <?php if($content_view == 'abstract'){ ?>
        {
              "aoColumnDefs": [
                { "bSortable": false, "aTargets": [2,3] }],
                "aaSorting": [[ 0, "asc" ]]
            }
        <?php } else if($content_view == 'participant' || $content_view == 'presenter'){ ?>
        {
              "aoColumnDefs": [
                { "bSortable": false, "aTargets": [8] }],
                "aaSorting": [[ 0, "asc" ]]
            }
        <?php } else if($content_view == 'padmin'){ ?>
        {
              "aoColumnDefs": [
                { "bSortable": false, "aTargets": [11] }],
                "aaSorting": [[ 0, "asc" ]]
            }
        <?php } ?>
      );
      <?php } ?>
    });    
    function confirm(x, y,z){
    	$('#yes').attr('href', '<?php echo site_url() ?>admin_icbbogor/confirm_payment/'+x+'/'+y+'/'+z);
    }
    $('#myTab a').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });

    $('#loading-example-btn').click(function () {
      var btn = $(this);
      btn.button('loading');
  });
    <?php if($content_view== 'rundown1' || $content_view == 'rundown2'){ ?>
    	function ubah(x){
        $('#id').val(x);
        $('#activity').val($('#event_'+x).val());
    		/*var xhttp;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (xhttp.readyState == 4 && xhttp.status == 200) {
                    $("#pres").html(xhttp.responseText);
                    $('#id').val(x);
                }
            };
            var c1 = $('#c1_'+x).val();
            var c2 = $('#c2_'+x).val();
            xhttp.open("GET", "<?php echo site_url() ?>admin_icbbogor/list_speaker/"+$('#c1_'+x).val()+";"+$('#c2_'+x).val(), true);
            xhttp.send();*/
    	}
    <?php } ?>
  </script>