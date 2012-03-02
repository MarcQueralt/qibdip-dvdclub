<div class="formats form">
<?php echo $this->Form->create('Format');?>
	<fieldset>
		<legend><?php echo __('Add Format'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('daily_rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Formats'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
	</ul>
</div>
