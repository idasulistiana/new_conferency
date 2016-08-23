	<div id="body">
		<div id="content">
			<div id="sidebar">
				<h3>Rundown</h3>
				<div class="panel-group">
				<!-- <div class="panel-hospitality"> -->
				  <div class="panel panel-default">
				    <div class="panel-heading">
				      <h4 class="panel-title">
				        <a data-toggle="collapse" href="#collapse1">Rundown</a>
				      </h4>
				    </div>
				    <div id="collapse1" class="panel-collapse collapse">
				      <div class="panel-body"><a href="<?php echo site_url('technical_program/rundown/1') ?>">Day-1 (October 10<sup>th</sup>, 2016)</a></div>
				      <div class="panel-body"><a href="<?php echo site_url('technical_program/rundown/2') ?>">Day-2 (October 11<sup>th</sup>, 2016)</a></div>
				    </div>
				  </div>
				<!-- </div> -->
				</div>
			</div>
			<div id="section">
				<h2>Day-1 (October 10<sup>th</sup>, 2016)</a></h2>
					<table class="table table-striped table-hover table-bordered">
	                  <thead>
	                    <tr>
	                      <th>No</th>
	                      <th style ="text-align:center" width="115px">Time</th>
	                      <th style ="text-align:center">Activities</th>
	                    </tr>
	                  </thead>
	                  <tbody>
	                    <?php $x = 1; 
	                    foreach ($rundown1 as $data) { ?>
	                    <?php
	                      $row_data = explode(' ', $data->category);
	                      $a = $row_data[0];
	                      $b = $row_data[2];
	                    ?>
	                   
	                      <tr>
	                        <?php if(substr($data->etime,0,5) != '00:00'){ ?>
	                        <td style="text-align:center"><?php if(substr($data->etime,0,5) != $stime) echo $x; ?></td>
	                        <td><?php if(substr($data->etime,0,5) != $stime){ echo substr($data->stime,0,5)." - ".substr($data->etime,0,5); $x++; } ?></td>
	                        <td><?php echo $data->event ?></td>
	                        <?php }else{ ?>
	                        <?php
	                            $row_data = explode('Moderator', $data->event);
	                            $c = $row_data[0];
	                            $d = $row_data[1];
	                          ?>
	                        <td></td>
	                        <td colspan="2"><b><?php echo $c."<br>Moderator".$d ?></b></td>
	                        <?php } ?>
	                      </tr>
	                    <?php } ?>
	                  </tbody>
	                </table>
	                <i>Note: *) to be confirm</i>
			</div>
		</div>
	</div>
