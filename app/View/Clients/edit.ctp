<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Edit Client'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstname');
		echo $this->Form->input('surname');
		echo $this->Form->input('address');
		echo $this->Form->input('cp');
		echo $this->Form->input('city');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
                echo $this->Form->input('personal_id',array('type'=>'text'));
		echo $this->Form->input('active');
		echo $this->Form->input('comments');
		echo $this->Form->input('birthday',array('dateFormat'=>'DMY','maxYear'=>date('Y'),'minYear'=>date('Y')-120,'empty'=>true,'monthNames'=>false));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
	</ul>
</div>
