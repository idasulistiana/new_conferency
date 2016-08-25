<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin_icbbogor') ?>">Dashboard</a></li>
            <li class="active">Rundown</li>
            <li class="active">Day-1 (October 10<sup>th</sup>, 2016)</li>
          </ol>
          
          <div class="row">            
              <div class="table-responsive">
                <h3>Day-1: Monday, October 10<sup>th</sup>, 2016</h3>
                <div class="pull-right"><button class="btn btn-primary" data-target="#add" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Add</button></div>
                <div class="clearfix"></div><br>
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th style ="text-align:center" width="115px">Time</th>
                      <th style ="text-align:center">Activities</th>
                      <th style ="text-align:center">Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x = 1; foreach ($rundown1 as $data) { ?>
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
                        <?php $stime = substr($data->etime,0,5) ?>
                        <input type="hidden" id="<?php echo "event_".$data->id_ev ?>" value="<?php echo $data->event ?>">
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#edit" onclick="ubah(<?php echo $data->id_ev ?>)">Edit</button></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <i>Note: *) to be confirm</i><br><br>
              </div>
          </div>
        </div>
      </div>
      <!-- MODAL -->
    <div class="modal fade" id="edit" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
                    <label><h4 class="modal-title" id="myModalLabel">Rundown</font></h4></label>
                </div>
                <form id="frm" method="POST" action="<?php echo site_url('admin_icbbogor/ubah') ?>">
                <div class="modal-body">
                    <div class="form-group">
                      <label>Activity</label>
                      <textarea name="activity" id="activity" class="form-control" style="height: 115px;"></textarea>
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="r" id="r" value="1">
                    </div><!-- 
                    <div class="form-group">
                      <label>Presenter</label>
                      <div id="pres"></div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
                    <label><h4 class="modal-title" id="myModalLabel">Rundown</font></h4></label>
                </div>
                <form id="frm" method="POST" action="<?php echo site_url('admin_icbbogor/tambah') ?>">
                <div class="modal-body">
                    <div class="form-group">
                      <label>Time</label>
                      <input type="hidden" name="tgl" value="2016-10-10"><br>
                      <input type="number" name="stime" min="0" max="23" value="00" class="fc">
                      <label> : </label>
                      <input type="number" name="stime1" min="0" max="59" value="00" class="fc">
                      <label>&emsp;-&emsp;</label>
                      <input type="number" name="etime" min="0" max="23" value="00" class="fc">
                      <label> : </label>
                      <input type="number" name="etime1" min="0" max="59" value="00" class="fc">
                    </div>
                    <div class="form-group">
                      <label>Activity</label>
                      <textarea name="activity" id="activity" class="form-control" style="height: 115px;"></textarea>
                      <input type="hidden" name="id" id="id">
                      <input type="hidden" name="r" id="r" value="1">
                    </div><!-- 
                    <div class="form-group">
                      <label>Presenter</label>
                      <div id="pres"></div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>