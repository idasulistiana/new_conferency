<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin_icbbogor') ?>">Dashboard</a></li>
            <li class="active">Payment</li>
            <li class="active">Payment Confirmation</li>
          </ol>
          
          <div class="row">            
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Registration</th>
                      <th>Name</th>
                      <th>Company</th>
                      <th>Email</th>
                      <th>Amount</th>
                      <th>Bank</th>
                      <th>Account Name</th>
                      <th>Account Number</th>
                      <th>ID Paper</th>
                      <th>Message</th>
                      <th>Confirm</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $bln = array('01'=>'Jan', '02' => 'Feb', '03' => 'Mar', '04' => 'Apr', '05' => 'May', '06' => 'Jun', '07' => 'Jul', '08' => 'August', '09' => 'September', '10' => 'October', '11' => 'Nov', '12' => 'Dec'); ?>
                    <?php foreach ($payment as $data) { ?>
                      <tr>
                        <td><?php echo $bln[substr($data->tgl, 5, 2)]." ";
                        switch (substr($data->tgl, 8, 2)) {
                          case '01':
                            $x = 'st';
                            break;
                          case '02':
                            $x = 'nd';
                            break;
                          case '03':
                            $x = 'rd';
                            break;
                          default:
                            $x = 'th';
                            break;
                        }
                        echo substr($data->tgl, 8, 2)."<sup>".$x."</sup>";
                        echo ", ".substr($data->tgl, 0, 4) ?></td>
                        <td><?php echo ($data->id_status == 1) ? 'Participant' : 'Presenter'; ?></td>
                        <td><?php echo $data->fname." ".$data->lname ?></td>
                        <td><?php echo $data->company ?></td>
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->satuan ?> <?php echo $data->jml ?></td>
                        <td><?php echo $data->bank ?></td>
                        <td><?php echo $data->a_name ?></td>
                        <td><?php echo $data->a_number ?></td>
                        <td><?php echo $data->paper_id ?></td>
                        <td><?php echo $data->message ?></td>
                        <td><button class="btn btn-danger" onclick="confirm(<?php echo $data->id_status.",".$data->id.",". $data->id_regis ?>)" data-toggle="modal" data-target="#conf">Confirm</button></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="conf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel">Payment Confirmation</h4>
            </div>
            <div class="modal-footer">
              <a href="" id="yes" class="btn btn-primary">Confirm</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>