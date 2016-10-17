<ul class="nav">
    <li class="active">
      <?php
  echo $this->Html->link('<i class="pe-7s-graph"></i><p>Dashboard</p>',array(
  'controller'=>'sites',
  'action'=>'index'
  ),array(
  'escape'=>false
  ));
       ?>
        <?php
echo $this->Html->link('<i class="pe-7s-user"></i><p>Users</p>',array(
  'controller'=>'users',
  'action'=>'index'
),array(
  'escape'=>false
));
         ?>

         <?php
 echo $this->Html->link('<i class="pe-7s-note2"></i><p>Schemes</p>',array(
   'controller'=>'schemes',
   'action'=>'index'
 ),array(
   'escape'=>false
 ));
          ?>
          <?php
  echo $this->Html->link('<i class="pe-7s-note2"></i><p>Courses</p>',array(
    'controller'=>'courses',
    'action'=>'index'
  ),array(
    'escape'=>false
  ));
           ?>
<?php
   echo $this->Html->link('<i class="pe-7s-note2"></i><p>Modules</p>',array(
     'controller'=>'modules',
     'action'=>'index'
   ),array(
     'escape'=>false
   ));
            ?>
<?php
               echo $this->Html->link('<i class="pe-7s-note2"></i><p>Centres</p>',array(
                 'controller'=>'centers',
                 'action'=>'index'
               ),array(
                 'escape'=>false
               ));
?>
    </li>

</ul>
