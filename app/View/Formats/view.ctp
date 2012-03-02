<div class="formats view">
<h2><?php  echo __('Format');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($format['Format']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($format['Format']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Daily Rate'); ?></dt>
		<dd>
			<?php echo h($format['Format']['daily_rate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($format['Format']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($format['Format']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Format'), array('action' => 'edit', $format['Format']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Format'), array('action' => 'delete', $format['Format']['id']), null, __('Are you sure you want to delete # %s?', $format['Format']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Format'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Copies');?></h3>
	<?php if (!empty($format['Copy'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('On Sale'); ?></th>
		<th><?php echo __('Adquisition Cost'); ?></th>
		<th><?php echo __('Sale Price'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($format['Copy'] as $copy): ?>
		<tr>
			<td><?php echo $copy['id'];?></td>
			<td><?php echo $copy['title'];?></td>
			<td><?php echo $copy['active']?__('Yes'):__('No');?></td>
			<td><?php echo $copy['on_sale']?__('Yes'):__('No');;?></td>
			<td><?php echo $copy['adquisition_cost'];?></td>
			<td><?php echo $copy['sale_price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'copies', 'action' => 'view', $copy['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'copies', 'action' => 'edit', $copy['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'copies', 'action' => 'delete', $copy['id']), null, __('Are you sure you want to delete # %s?', $copy['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
