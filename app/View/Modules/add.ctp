<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="header">
                    <h4 class="title">Add Module</h4>
                </div>
                <div class="content">
                  <?php
echo $this->Form->create('Module');
                   ?>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Name</label>
  <?php
echo $this->Form->input('name',array(
  'div'=>false,
  'label'=>false,
  'class'=>'form-control',
  'placeholder'=>'Enter Name (Required)',
  'required'
));
 ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Scheme</label>
                                    <?php
                                    echo $this->Form->input('scheme_id',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'placeholder'=>'Select Scheme (Required)',
                                    'required',
                                    'empty'=>'--Select Scheme--',
                                    'options'=>$schemes
                                    ));
                                    ?>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Course</label>
                                    <?php
                                    echo $this->Form->input('course_id',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'class'=>'form-control',
                                    'placeholder'=>'Select Course (Required)',
                                    'required',
                                    'empty'=>'--Select Course--',
                                    'options'=>$courses
                                    ));
                                    ?>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Semester</label>
                                    <?php
                                  echo $this->Form->input('semester',array(
                                    'div'=>false,
                                    'label'=>false,
                                    'type'=>'number',
                                    'class'=>'form-control',
                                    'placeholder'=>'Enter Semester',
                                    'required'
                                    ));
                                   ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>Mark</label>
                                  <?php
                                echo $this->Form->input('mark',array(
                                  'div'=>false,
                                  'label'=>false,
                                  'class'=>'form-control',
                                  'placeholder'=>'Enter Mark',
                                  'type'=>'number',
                                  'default'=>0,
                                  'required'
                                ));
                                 ?>
                              </div>
                          </div>
                          <div class="col-md-3">
                              <div class="form-group">
                                  <label>Machine Hours</label>
                                  <?php
                                echo $this->Form->input('mh',array(
                                  'div'=>false,
                                  'label'=>false,
                                  'class'=>'form-control',
                                  'placeholder'=>'Enter Machine Hours',
                                  'type'=>'number',
                                  'default'=>0,
                                  'required'
                                ));
                                 ?>
                              </div>
                          </div>
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
                        <div class="clearfix"></div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>

    </div>
</div>
