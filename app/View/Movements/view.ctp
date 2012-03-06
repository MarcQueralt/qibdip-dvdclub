<div class="movements view">
    <h2><?php  echo __('Movement');?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Client'); ?></dt>
        <dd>
            <?php echo $this->Html->link($movement['Client']['surname'], array('controller' => 'clients', 'action' => 'view', $movement['Client']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Copy'); ?></dt>
        <dd>
            <?php echo $this->Html->link($movement['Copy']['title'], array('controller' => 'copies', 'action' => 'view', $movement['Copy']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Mov Type'); ?></dt>
        <dd>
            <?php
            echo 'C'==h($movement['Movement']['mov_type'])?__('Rental'):'';
            echo 'M'==h($movement['Movement']['mov_type'])?__('Money'):'';
            ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Amount'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['amount']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Prepaid'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['prepaid']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Started'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['started']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ended'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['ended']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Returned'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['returned']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Comments'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['comments']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($movement['Movement']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Movement'), array('action' => 'edit', $movement['Movement']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Movement'), array('action' => 'delete', $movement['Movement']['id']), null, __('Are you sure you want to delete # %s?', $movement['Movement']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Movements'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Movement'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
    </ul>
</div>
