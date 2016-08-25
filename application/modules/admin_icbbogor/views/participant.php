<!DOCTYPE html>
      <div class="templatemo-content-wrapper">
        <div class="templatemo-content">
          <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin_icbbogor') ?>">Dashboard</a></li>
            <li class="active">Participants</li>
          </ol>
          
          <div class="row">            
              <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Company</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($presenter as $data) { ?>
                      <tr>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->title." ".$data->fname." ".$data->lname; echo ($data->status == 1) ? "" : "</b>";  ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->company; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->city; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->state; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->country; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->email; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->phone; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? "" : "<b>"; echo $data->address; echo ($data->status == 1) ? "" : "</b>"; ?></td>
                        <td><?php echo ($data->status == 1) ? '<span class="btn-primary" style="padding:3px">Done</span>' : '<span class="btn-danger" style="padding:3px">Pending</span>'; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
          </div>
        </div>
      </div>