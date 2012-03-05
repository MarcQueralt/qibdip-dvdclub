<div class="copies index">
    <h2><?php echo __('Copies');?></h2>
    <div class="filter">
        <?php echo $this->Form->create('Copy', array('action' => 'search')); ?>
        <fieldset>
            <legend><?php __('Copy Search');?></legend>
            <?php echo $this->Form->input('Search.id', array('div' => false, 'default' => ((isset($this->passedArgs['Search.id']))?$this->passedArgs['Search.id']:'')));?>
            <?php echo $this->Form->input('Search.title', array('div' => false, 'default' => ((isset($this->passedArgs['Search.title']))?$this->passedArgs['Search.title']:'')));?>
            <?php echo $this->Form->submit(__('Search', true), array('div' => false));?>
        </fieldset>
        <?php echo $this->Form->end();?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('title');?></th>
            <th><?php echo $this->Paginator->sort('format_id');?></th>
            <th><?php echo $this->Paginator->sort('active');?></th>
            <th><?php echo $this->Paginator->sort('on_sale');?></th>
            <th><?php echo $this->Paginator->sort('adquisition_cost');?></th>
            <th><?php echo $this->Paginator->sort('sale_price');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
        <?php
        foreach ($copies as $copy): ?>
        <tr>
            <td><?php echo h($copy['Copy']['id']); ?>&nbsp;</td>
            <td><?php echo h($copy['Copy']['title']); ?>&nbsp;</td>
            <td>
                    <?php echo $this->Html->link($copy['Format']['description'], array('controller' => 'formats', 'action' => 'view', $copy['Format']['id'])); ?>
            </td>
            <td><?php echo h($copy['Copy']['active'])?__('Yes'):__('No');
    ; ?>&nbsp;</td>
            <td><?php echo h($copy['Copy']['on_sale'])?__('Yes'):__('No');
    ; ?>&nbsp;</td>
            <td><?php echo h($copy['Copy']['adquisition_cost']); ?>&nbsp;</td>
            <td><?php echo h($copy['Copy']['sale_price']); ?>&nbsp;</td>
            <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $copy['Copy']['id'])); ?>
    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $copy['Copy']['id'])); ?>
    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $copy['Copy']['id']), null, __('Are you sure you want to delete # %s?', $copy['Copy']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Copy'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Formats'), array('controller' => 'formats', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Format'), array('controller' => 'formats', 'action' => 'add')); ?> </li>
    </ul>
</div>
