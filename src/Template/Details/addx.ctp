<?=  $this->Form->create($detail) ?>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
    <?php echo $this->Form->input('name',['class'=>'form-control','Placeholder'=>'Name'])?>
    </div>
    <div class="form-group">
    <?php echo $this->Form->input('phone',['class'=>'form-control','Placeholder'=>'Phone No'])?>
    </div>


    </fieldset>
    <?php echo $this->Form->button(__('Submit'),['class'=>'btn btn-primary']);?>

    <?php echo $this->html->link('Back',['action'=>'index'],['class'=>'btn btn-primary']);?>
    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
  </fieldset>
  </fieldset>
<?= $this->Form->end() ?>