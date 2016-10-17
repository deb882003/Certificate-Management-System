<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Courses List</h4>
            <p class="category">Manage Courses &nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo $this->Html->link('Add Course',array(
  'action'=>'add'
));
 ?>
            </p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <thead>
                  <th>SL#</th>
                  <th>Code</th>
                  <th>Name</th>
                  <th>Duration (Month/s)</th>
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
    <td><?php echo $data['Course']['code']; ?></td>
    <td><?php echo $data['Course']['name']; ?></td>
    <td><?php echo $data['Course']['duration']; ?></td>
    <td>
      <?php
      if($data['Course']['is_enable'] == 1){
        echo "<font color=green>Yes</font>";
      }else{
        echo "<font color=red>No</font>";
      }
      ?></td>
    <td>
<?php
echo $this->Html->link('Edit',array(
  'action'=>'edit',
  $data['Course']['id']
));
 ?>
&nbsp;&nbsp;||&nbsp;&nbsp;
<?php
echo $this->Html->link('Delete',array(
  'action'=>'delete',
  $data['Course']['id']
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
