<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Users List</h4>
            <p class="category">Manage Users &nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo $this->Html->link('Add User',array(
  'action'=>'add'
));
 ?>
            </p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                  <th>SL#</th>
                  <th>Name</th>
                  <th>E-Mail</th>
                  <th>Contact No.</th>
                  <th>User ID</th>
                  <th>
                    Is Active ?
                  </th>
                  <th>
                    Actions
                  </th>
                </thead>
                <tbody>
                  <?php
                  $i=0;
foreach($datas as $data){
  ?>
  <tr>
    <td><?php echo ++$i; ?></td>
    <td><?php echo $data['User']['name']; ?></td>
    <td><?php echo $data['User']['mail_id']; ?></td>
    <td><?php echo $data['User']['contact_no']; ?></td>
    <td><?php echo $data['User']['user_id']; ?></td>
    <td>
      <?php
if($data['User']['is_enable'] == 1){
  echo "<font color=green>Yes</font>";
}else{
    echo "<font color=red>No</font>";
}
       ?>
    </td>
    <td>
<?php
echo $this->Html->link('Edit',array(
  'action'=>'edit',
  $data['User']['id']
));
 ?>
&nbsp;&nbsp;||&nbsp;&nbsp;
<?php
echo $this->Html->link('Delete',array(
  'action'=>'delete',
  $data['User']['id']
));
 ?>

    </td>
  </tr>
  <?php
}
                   ?>


                </tbody>
            </table>

        </div>
    </div>
</div>
