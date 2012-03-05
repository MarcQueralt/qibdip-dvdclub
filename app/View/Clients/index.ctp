<div class="clients index">
    <h2><?php echo __('Clients');?></h2>
    <div class="filter">
        <?php echo $this->Form->create('Client', array('action' => 'search')); ?>
        <fieldset>
            <legend><?php __('Client Search');?></legend>
            <?php echo $this->Form->input('Search.id', array('div' => false, 'default' => ((isset($this->passedArgs['Search.id']))?$this->passedArgs['Search.id']:'')));?>
            <?php echo $this->Form->input('Search.fullname', array('label'=>__('Full Name'),'div' => false, 'default' => ((isset($this->passedArgs['Search.fullname']))?$this->passedArgs['Search.fullname']:'')));?>
            <?php echo $this->Form->submit(__('Search', true), array('div' => false));?>
        </fieldset>
        <?php echo $this->Form->end();?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('firstname');?></th>
            <th><?php echo $this->Paginator->sort('surname');?></th>
            <th><?php echo $this->Paginator->sort('phone');?></th>
            <th><?php echo $this->Paginator->sort('mobile');?></th>
            <th><?php echo $this->Paginator->sort('active');?></th>
            <th><?php echo $this->Paginator->sort('balance');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
        <?php
        foreach ($clients as $client): ?>
        <tr>
            <td><?php echo h($client['Client']['id']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['firstname']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['surname']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['phone']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['mobile']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['active']); ?>&nbsp;</td>
            <td><?php echo h($client['Client']['balance']); ?>&nbsp;</td>
            <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $client['Client']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $client['Client']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?></li>
    </ul>
</div>
