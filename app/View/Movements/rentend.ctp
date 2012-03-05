<div class="movements form">
    <?php echo $this->Form->create('Movement');?>
    <fieldset>
        <legend><?php echo __('Return Register'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('client_id',array('type'=>'hidden'));
        echo $this->Form->input('client_id',array('disabled'));
        echo $this->Form->input('copy_id',array('disabled'));
        echo $this->Form->input('mov_type',array('type'=>'hidden'));
        echo $this->Form->input('amount',array('value'=> $this->data['Movement']['estimatedCost']));
        echo $this->Form->input('started',array('disabled','dateFormat'=>'DMY','empty'=>true,'monthNames'=>false));
        echo $this->Form->input('ended', array('dateFormat'=>'DMY','monthNames'=>false));
        echo $this->Form->input('returned',array('type'=>'hidden'));
        echo $this->Form->input('comments');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Back to Client'), array('controller' => 'clients', 'action' => 'view',$this->data['Movement']['client_id']));?> </li>
    </ul>
</div>
