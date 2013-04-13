<div class="copies form">
<?php echo $this->Form->create('Copy');?>
	<fieldset>
		<legend><?php echo __('Add Copy'); ?></legend>
	<?php
                echo $this->Form->input('label',array('type'=>'text'));
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
		<li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Formats'), array('controller' => 'formats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Format'), array('controller' => 'formats', 'action' => 'add')); ?> </li>
	</ul>
</div>
