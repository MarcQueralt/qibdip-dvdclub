<?php //echo '<pre>';print_r($this->Paginator);echo '</pre>';?>
<div class="movements pending">
    <h2><?php echo __('Pending');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('client_id');?></th>
            <th><?php echo $this->Paginator->sort('phone');?></th>
            <th><?php echo $this->Paginator->sort('mobile');?></th>
            <th><?php echo $this->Paginator->sort('copy_id');?></th>
            <th><?php echo $this->Paginator->sort('started');?></th>
        </tr>
        <?php
        foreach ($movements as $movement): ?>
        <tr>
            <td>
                    <?php echo $this->Html->link($movement['Client']['fullname'], array('controller' => 'clients', 'action' => 'view', $movement['Client']['id'])); ?>
            </td>
            <td><?php echo h($movement['Client']['phone']); ?>&nbsp;</td>
            <td><?php echo h($movement['Client']['mobile']); ?>&nbsp;</td>
            <td>
                    <?php echo $this->Html->link($movement['Copy']['title'], array('controller' => 'copies', 'action' => 'view', $movement['Copy']['id'])); ?>
            </td>
            <td><?php echo h($movement['Movement']['started']); ?>&nbsp;</td>
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