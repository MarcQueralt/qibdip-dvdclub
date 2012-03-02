<div class="movements">
    <?php $total=0;?>
    <h2><?php echo __('Rental Report');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('Id');?></th>
            <th><?php echo __('Client');?></th>
            <th><?php echo __('Copy');?></th>
            <th><?php echo __('Amount');?></th>
            <th><?php echo __('Started');?></th>
            <th><?php echo __('Ended');?></th>
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
            <td style="text-align: right;"><?php echo h($movement['Movement']['amount']); ?>&nbsp;</td>
            <td><?php echo h($movement['Movement']['started']); ?>&nbsp;</td>
            <td><?php echo h($movement['Movement']['ended']); ?>&nbsp;</td>
        </tr>
        <?php $total+=$movement['Movement']['amount'];?>
        <?php endforeach; ?>
        <tr>
            <th colspan="3"><strong>TOTAL</strong></th>
            <th style="text-align:right;"><?php echo number_format($total, 2);?></th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </table>
</div>