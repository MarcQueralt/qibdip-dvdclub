<div class="movements index">
    <h2><?php echo __('Rental Report');?></h2>
    <div class="filter">
        <?php echo $this->Form->create('Movement', array('action' => 'report')); ?>
        <fieldset>
            <legend><?php __('Date Selection');?></legend>
            <?php echo $this->Form->input('Report.minDate',array('label'=>__('From date'),'type'=>'date','dateFormat'=>'DMY','maxYear'=>date('Y'),'minYear'=>2010,'empty'=>true,'monthNames'=>false));?>
            <?php echo $this->Form->input('Report.maxDate',array('label'=>__('To date'),'type'=>'date','dateFormat'=>'DMY','maxYear'=>date('Y'),'minYear'=>2010,'empty'=>true,'monthNames'=>false));?>
            <?php echo $this->Form->submit(__('Report', true), array('div' => false));?>
        </fieldset>
        <?php echo $this->Form->end();?>
    </div>
</div>