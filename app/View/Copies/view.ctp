<div class="copies view">
    <h2><?php  echo __('Copy');?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Title'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['title']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Format'); ?></dt>
        <dd>
            <?php echo $this->Html->link($copy['Format']['description'], array('controller' => 'formats', 'action' => 'view', $copy['Format']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Active'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['active'])?__('Yes'):__('No'); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('On Sale'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['on_sale'])?__('Yes'):__('No'); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Adquisition Cost'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['adquisition_cost']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Total Sales'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['copy_sales']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sale Price'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['sale_price']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($copy['Copy']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Copy'), array('action' => 'edit', $copy['Copy']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Copy'), array('action' => 'delete', $copy['Copy']['id']), null, __('Are you sure you want to delete # %s?', $copy['Copy']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Copies'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Copy'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Formats'), array('controller' => 'formats', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Format'), array('controller' => 'formats', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Movements'), array('controller' => 'movements', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Movement'), array('controller' => 'movements', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Movements');?></h3>
    <?php if (!empty($copy['Movement'])):?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Client'); ?></th>
            <th><?php echo __('Amount'); ?></th>
            <th><?php echo __('Started'); ?></th>
            <th><?php echo __('Ended'); ?></th>
            <th><?php echo __('Returned'); ?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($copy['Movement'] as $movement): ?>
        <tr>
            <td><?php echo $movement['id'];?></td>
            <td><?php echo $movement['client_id'];?></td>
            <td><?php echo $movement['amount'];?></td>
            <td><?php echo $movement['started'];?></td>
            <td><?php echo $movement['ended'];?></td>
            <td><?php echo $movement['returned']?__('Yes'):__('No');?></td>
            <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'movements', 'action' => 'view', $movement['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'movements', 'action' => 'edit', $movement['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movements', 'action' => 'delete', $movement['id']), null, __('Are you sure you want to delete # %s?', $movement['id'])); ?>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Movement'), array('controller' => 'movements', 'action' => 'add'));?> </li>
        </ul>
    </div>
</div>
