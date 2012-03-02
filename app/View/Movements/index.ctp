<div class="movements index">
    <h2><?php echo __('Movements');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id');?></th>
            <th><?php echo $this->Paginator->sort('client_id');?></th>
            <th><?php echo $this->Paginator->sort('copy_id');?></th>
            <th><?php echo $this->Paginator->sort('mov_type');?></th>
            <th><?php echo $this->Paginator->sort('amount');?></th>
            <th><?php echo $this->Paginator->sort('started');?></th>
            <th><?php echo $this->Paginator->sort('ended');?></th>
            <th><?php echo $this->Paginator->sort('returned');?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
        <?php
        foreach ($movements as $movement): ?>
        <tr>
            <td><?php echo h($movement['Movement']['id']); ?>&nbsp;</td>
            <td>
                    <?php echo $this->Html->link($movement['Client']['fullname'], array('controller' => 'clients', 'action' => 'view', $movement['Client']['id'])); ?>
            </td>
            <td>
                    <?php echo $this->Html->link($movement['Copy']['title'], array('controller' => 'copies', 'action' => 'view', $movement['Copy']['id'])); ?>
            </td>
            <td>
                    <?php
                    echo 'C'==$movement['Movement']['mov_type']?__('Rental'):'';
                    echo 'M'==$movement['Movement']['mov_type']?__('Money'):'';
                    ?>
                &nbsp;
            </td>
            <td><?php echo h($movement['Movement']['amount']); ?>&nbsp;</td>
            <td><?php echo h($movement['Movement']['started']); ?>&nbsp;</td>
            <td><?php echo h($movement['Movement']['ended']); ?>&nbsp;</td>
            <td class="actions">
                    <?php
                    if(h($movement['Movement']['returned'])):
                        echo __('Yes');
                    elseif('C'==h($movement['Movement']['mov_type'])):
                        echo $this->Html->link(__('Copy Return'), array('controller' => 'movements', 'action' => 'rentend', $movement['Movement']['id']));
                    else:
                        echo '&nbsp;';
                    endif;
                    ?>
            </td>
            <td class="actions">
                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $movement['Movement']['id'])); ?>
                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movement['Movement']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movement['Movement']['id']), null, __('Are you sure you want to delete # %s?', $movement['Movement']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New Movement'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
    </ul>
</div>
