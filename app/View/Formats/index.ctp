<div class="formats index">
	<h2><?php echo __('Formats');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('daily_rate');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($formats as $format): ?>
	<tr>
		<td><?php echo h($format['Format']['id']); ?>&nbsp;</td>
		<td><?php echo h($format['Format']['description']); ?>&nbsp;</td>
		<td><?php echo h($format['Format']['daily_rate']); ?>&nbsp;</td>
		<td><?php echo h($format['Format']['created']); ?>&nbsp;</td>
		<td><?php echo h($format['Format']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $format['Format']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $format['Format']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $format['Format']['id']), null, __('Are you sure you want to delete # %s?', $format['Format']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Format'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
	</ul>
</div>
