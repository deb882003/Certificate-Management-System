<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Scheme</h4>
                </div>
                <div class="content">
                  <?php
echo $this->Form->create('Scheme');
                   ?>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Code</label>
  <?php
  echo $this->Form->input('id');
echo $this->Form->input('code',array(
  'div'=>false,
  'label'=>false,
  'class'=>'form-control',
  'placeholder'=>'Enter Scheme Code (Required)',
  'required'
));
 ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name</label>
                                    <?php
                                    echo $this->Form->input('name',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'placeholder'=>'Enter Scheme Name (Required)',
                                    'required'
                                    ));
                                    ?>
                                    </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                        <div class="clearfix"></div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
