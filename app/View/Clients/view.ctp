<div class="clients view">
    <h2><?php  echo __('Client');?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($client['Client']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Firstname'); ?></dt>
        <dd>
            <?php echo h($client['Client']['firstname']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Surname'); ?></dt>
        <dd>
            <?php echo h($client['Client']['surname']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Address'); ?></dt>
        <dd>
            <?php echo h($client['Client']['address']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cp'); ?></dt>
        <dd>
            <?php echo h($client['Client']['cp']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('City'); ?></dt>
        <dd>
            <?php echo h($client['Client']['city']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Phone'); ?></dt>
        <dd>
            <?php echo h($client['Client']['phone']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Mobile'); ?></dt>
        <dd>
            <?php echo h($client['Client']['mobile']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Personal ID'); ?></dt>
        <dd>
            <?php echo h($client['Client']['personal_id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Active'); ?></dt>
        <dd>
            <?php echo h($client['Client']['active']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Comments'); ?></dt>
        <dd>
            <?php echo h($client['Client']['comments']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Birthday'); ?></dt>
        <dd>
            <?php echo h($client['Client']['birthday']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($client['Client']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($client['Client']['modified']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Client'), array('action' => 'edit', $client['Client']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Client'), array('action' => 'delete', $client['Client']['id']), null, __('Are you sure you want to delete # %s?', $client['Client']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Client'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Rent Copy'), array('controller' => 'movements', 'action' => 'rent',$client['Client']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('Charge Money'), array('controller' => 'movements', 'action' => 'charge',$client['Client']['id'])); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Movements');?></h3>
    <?php if (!empty($client['Movement'])):?>
    <table cellpadding = "0" cellspacing = "0">
        <tr>
            <th><?php echo __('Id'); ?></th>
            <th><?php echo __('Copy'); ?></th>
            <th><?php echo __('Mov Type'); ?></th>
            <th><?php echo __('Amount'); ?></th>
            <th><?php echo __('Started'); ?></th>
            <th><?php echo __('Ended'); ?></th>
            <th><?php echo __('Returned'); ?></th>
            <th class="actions"><?php echo __('Actions');?></th>
        </tr>
            <?php
            $i = 0;
            foreach ($client['Movement'] as $movement): ?>
        <tr>
            <td><?php echo $movement['id'];?></td>
            <td><?php echo isset($movement['Copy']['copy_complete_name'])?$movement['Copy']['copy_complete_name']:'';?></td>
            <td>
                        <?php
                        echo 'C'==h($movement['mov_type'])?__('Rental'):'';
                        echo 'M'==h($movement['mov_type'])?__('Money'):'';
                        ?>
            </td>
            <td class="number"><?php echo $movement['amount'];?></td>
            <td><?php echo isset($movement['started'])?date('d-m-Y',strtotime($movement['started'])):'';?></td>
            <td><?php echo ('0000-00-00'==$movement['ended'])?'':date('d-m-Y',strtotime($movement['ended']));?></td>
            <td class="actions">
                        <?php
                        if($movement['returned']):
                            echo __('Yes');
                        elseif('C'==$movement['mov_type']):
                            echo $this->Html->link(__('Copy Return'), array('controller' => 'movements', 'action' => 'rentend', $movement['id']));
                        else:
                            echo '&nbsp;';
                        endif;
                        ?>
            </td>
            <td class="actions">
                        <?php echo $this->Html->link(__('View'), array('controller' => 'movements', 'action' => 'view', $movement['id'])); ?>
                        <?php echo $this->Html->link(__('Edit'), array('controller' => 'movements', 'action' => 'edit', $movement['id'])); ?>
                        <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movements', 'action' => 'delete', $movement['id']), null, __('Are you sure you want to delete # %s?', $movement['id'])); ?>
            </td>
        </tr>
            <?php endforeach; ?>
    </table>
    <?php endif; ?>
</div>
