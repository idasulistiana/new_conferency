<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin_icbbogor') ?>">Dashboard</a></li>
            <li class="active">Payment</li>
            <li class="active">Data</li>
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
                        echo ",".substr($data->tgl, 0, 4) ?></td>
                        <td><?php echo ($data->id_status == 1) ? 'Participant' : 'Presenter'; ?></td>
                        <td><?php echo $data->fname." ".$data->lname ?></td>
                        <td><?php echo $data->company ?></td>
                        <td><?php echo $data->email ?></td>
                        <td><?php echo $data->satuan ?> <?php echo $data->jml ?></td>
                        <td><?php echo $data->bank ?></td>
                        <td><?php echo $data->a_name ?></td>
                        <td><?php echo $data->a_number ?></td>
                        <td align="center"><?php echo ($data->paper_id) ? $data->paper_id : "-" ?></td>
                        <td><?php echo $data->message ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>