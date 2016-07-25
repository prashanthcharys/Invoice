<div class="orders index">
    <h2><?php echo __('Orders'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo 'id'; ?></th>
                <th><?php echo 'customer_id'; ?></th>
                <th><?php echo 'address_id'; ?></th>
                <th><?php echo 'status'; ?></th>
                <th><?php echo 'created'; ?></th>
                <th><?php echo 'modified'; ?></th>
                <th class="actions"><?php 'Actions'; ?></th>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
                <td>
			<?php echo $this->Html->link($order['Customer']['name'], array('controller' => 'customers', 'action' => 'view', $order['Customer']['id'])); ?>
                </td>
                <td>
			<?php echo $this->Html->link($order['Address']['name'], array('controller' => 'addresses', 'action' => 'view', $order['Address']['id'])); ?>
                </td>
                <td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
                <td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
                <td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
                <td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller'=>'orders','action' => 'view', $order['Order']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('controller'=>'orders','action' => 'edit', $order['Order']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('controller'=>'orders','action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?>
                </td>
            </tr>
<?php endforeach; ?>
        </tbody>
    </table>

</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Addresses'), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Address'), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Order Items'), array('controller' => 'order_items', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Order Item'), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
    </ul>
</div>
