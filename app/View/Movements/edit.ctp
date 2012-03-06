<div class="movements form">
<?php echo $this->Form->create('Movement');?>
	<fieldset>
		<legend><?php echo __('Edit Movement'); ?></legend>
	<?php
                echo $this->Form->input('id');
		echo $this->Form->input('client_id');
		echo $this->Form->input('copy_id',array('empty'=>true));
		echo $this->Form->input('mov_type',array('type'=>'select','empty'=>true,'options'=>array('C'=>__('Rental'),'M'=>__('Money'))));
		echo $this->Form->input('amount');
                echo $this->Form->input('prepaid');
                echo $this->Form->input('started',array('dateFormat'=>'DMY','monthNames'=>false));
                echo $this->Form->input('ended',array('dateFormat'=>'DMY','monthNames'=>false));
		echo $this->Form->input('returned');
		echo $this->Form->input('comments');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Movement.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Movement.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Movements'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
	</ul>
</div>
