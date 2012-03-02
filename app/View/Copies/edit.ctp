<div class="copies form">
<?php echo $this->Form->create('Copy');?>
	<fieldset>
		<legend><?php echo __('Edit Copy'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('format_id');
		echo $this->Form->input('active');
		echo $this->Form->input('on_sale');
		echo $this->Form->input('adquisition_cost');
		echo $this->Form->input('sale_price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Copy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Copy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formats'), array('controller' => 'formats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Format'), array('controller' => 'formats', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movements'), array('controller' => 'movements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movement'), array('controller' => 'movements', 'action' => 'add')); ?> </li>
	</ul>
</div>
