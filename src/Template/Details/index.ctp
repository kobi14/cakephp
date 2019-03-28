<?php echo $this->Flash->render('message');?>
<div class="row">
<?php echo $this->Html->Link('ADD NEW',['action'=>'addx'],['class'=>'btn btn-primary']); ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($details)):?>
  <?php foreach($details as $detail):?>
    <tr class="table-active">
      <th scope="row"><?php echo $detail->id;?></th>
      <td><?php echo $detail->name;?></td>
      <td><?php echo $detail->phone;?></td>
      <td></td>
    </tr>
<?php endforeach;?>
<?php else:?>
<td>Not Found</td>
<?php endif; ?>
    
  </tbody>
</table> 
</div>