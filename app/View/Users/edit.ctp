<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add User</h4>
                </div>
                <div class="content">
                  <?php
echo $this->Form->create('User');
                   ?>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
  <?php
echo $this->Form->input('id');
echo $this->Form->input('name',array(
  'div'=>false,
  'label'=>false,
  'class'=>'form-control',
  'placeholder'=>'Enter Full Name (Required)',
  'required'
));
 ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>E-Mail</label>
                                    <?php
                                    echo $this->Form->input('mail_id',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'type'=>'email',
                                    'class'=>'form-control',
                                    'placeholder'=>'E-Mail ID (Required)',
                                    'required'
                                    ));
                                    ?>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number</label>
                                    <?php
                                  echo $this->Form->input('contact_no',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'placeholder'=>'Contact/Mobile No. (Optional)',
                                    ));
                                   ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>User ID</label>
                                    <?php
                                    echo $this->Form->input('user_id',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'type'=>'text',
                                    'placeholder'=>'Enter User ID/Login ID (Required)',
                                    'required'
                                    ));
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <?php
                                    echo $this->Form->input('password',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'type'=>'password',
                                    'class'=>'form-control',
                                    'placeholder'=>'Enter Password',
                                    'required'
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Is Enable ?</label>
                                    <?php
                                  echo $this->Form->input('is_enable',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'placeholder'=>'Is Enable ?',
                                    'options'=>$eoptions,
                                    'default'=>1,
                                    'required'
                                  ));
                                   ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php
echo $this->HTml->link('Cancel',array('action'=>'index'));
 ?>
                        <div class="clearfix"></div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
