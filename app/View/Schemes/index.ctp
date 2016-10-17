<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Schemes List</h4>
            <p class="category">Manage Schemes &nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo $this->Html->link('Add Scheme',array(
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
    <td><?php echo $data['Scheme']['code']; ?></td>
    <td><?php echo $data['Scheme']['name']; ?></td>
    <td>
<?php
echo $this->Html->link('Edit',array(
  'action'=>'edit',
  $data['Scheme']['id']
));
 ?>
&nbsp;&nbsp;||&nbsp;&nbsp;
<?php
echo $this->Html->link('Delete',array(
  'action'=>'delete',
  $data['Scheme']['id']
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
