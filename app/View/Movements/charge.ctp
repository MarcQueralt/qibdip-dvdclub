<div class="movements form">
    <?php echo $this->Form->create('Movement');?>
    <fieldset>
        <legend><?php echo __('Charge Money'); ?></legend>
        <?php
        echo $this->Form->input('client_id',array('default' => isset($this->passedArgs)?$this->passedArgs:'','empty'=>true));
        echo $this->Form->input('mov_type',array('type' => 'hidden', 'default' => 'M'));
        echo $this->Form->input('amount');
        echo $this->Form->input('ended',array('label' => __('Charge date'),'dateFormat'=>'DMY','monthNames'=>false));
        echo $this->Form->input('comments');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <?php if(isset($this->passedArgs[0])): ?>
        <li><?php echo $this->Html->link(__('Back to Client'), array('controller' => 'clients', 'action' => 'view',$this->passedArgs[0]));?> </li>
        <?php endif; ?>
        <li><?php echo $this->Html->link(__('List Movements'), array('action' => 'index'));?></li>
        <li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Copies'), array('controller' => 'copies', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Copy'), array('controller' => 'copies', 'action' => 'add')); ?> </li>
    </ul>
</div>
