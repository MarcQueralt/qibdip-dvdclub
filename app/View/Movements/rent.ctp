<div class="movements form">
    <?php echo $this->Form->create('Movement');?>
    <fieldset>
        <legend><?php echo __('Movie rental'); ?></legend>
        <?php
        echo $this->Form->input('client_id',array('default' => isset($this->passedArgs)?$this->passedArgs:'','empty'=>true));
        echo $this->Form->input('copy_id_search',array('style'=>'width:100px;margin-right:10px;','div'=>''));
        echo $this->Form->button(__('Search'),array('type'=>'button','id'=>'copySearch','style'=>'height:41px;padding:5px;'));
        $this->Js->get('#copySearch');
        $this->Js->event('click','searchCopy();');
        echo $this->Form->input('copy_id',array('empty'=>true));
        echo $this->Form->input('mov_type',array('type' => 'hidden', 'default' => 'C'));
        echo $this->Form->input('started',array('dateFormat'=>'DMY','monthNames'=>false));
        echo $this->Form->input('prepaid',array('label'=>__('Prepayed')));
        echo $this->Form->input('amount');
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
<?php
echo $this->Js->writeBuffer();
echo $this->Html->script('searchCopy');
?>