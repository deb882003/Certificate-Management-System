<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Modules List</h4>
            <p class="category">Manage Modules &nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo $this->Html->link('Add Module',array(
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
                  <th>Course</th>
                  <th>Semester</th>
                  <th>Mark</th>
                  <th>Machine Hours</th>
                  <th>Is Enable ?</th>
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
    <td><?php echo $data['Module']['name']; ?></td>
    <td><?php echo $data['Course']['name']; ?></td>
    <td><?php echo $data['Module']['semester']; ?></td>
    <td><?php echo $data['Module']['mark']; ?></td>
    <td><?php echo $data['Module']['mh']; ?></td>
    <td>
      <?php
      if($data['Module']['is_enable'] == 1){
        echo "<font color=green>Yes</font>";
      }else{
        echo "<font color=red>No</font>";
      }
      ?></td>
    <td>
<?php
echo $this->Html->link('Edit',array(
  'action'=>'edit',
  $data['Module']['id']
));
 ?>
&nbsp;&nbsp;||&nbsp;&nbsp;
<?php
echo $this->Html->link('Delete',array(
  'action'=>'delete',
  $data['Module']['id']
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
