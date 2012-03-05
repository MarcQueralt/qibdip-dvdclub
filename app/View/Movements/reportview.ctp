<div class="movements">
    <?php $total=0;?>
    <h2><?php echo __('Rental Report');?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo __('fiscalDate');?></th>
            <th><?php echo __('Movement Id');?></th>
            <th><?php echo __('Client');?></th>
            <th style="text-align:right;"><?php echo __('Amount');?></th>
        </tr>
        <?php
        foreach ($movements as $movement): ?>
        <tr>
            <td><?php echo h($movement['Movement']['fiscalDate']); ?>&nbsp;</td>
            <td><?php echo h($movement['Movement']['id']); ?>&nbsp;</td>
            <td><?php echo h($movement['Client']['fullname']); ?>&nbsp;</td>
            <td style="text-align: right;"><?php echo h($movement['Movement']['amount']); ?>&nbsp;</td>
        </tr>
            <?php $total+=$movement['Movement']['amount'];?>
        <?php endforeach; ?>
        <tr>
            <th colspan="3" style="text-align:right;"><strong>TOTAL</strong></th>
            <th style="text-align:right;"><?php echo number_format($total, 2);?>&nbsp;</th>
        </tr>
    </table>
</div>