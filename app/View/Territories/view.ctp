<div class="territories view">
<h2><?php echo __('Territory'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($territory['Territory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($territory['Territory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Territory'), array('action' => 'edit', $territory['Territory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Territory'), array('action' => 'delete', $territory['Territory']['id']), array(), __('Are you sure you want to delete # %s?', $territory['Territory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Territories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Territory'), array('action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Customers'); ?></h3>
	<?php if (!empty($territory['Customer'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address Line 1'); ?></th>
		<th><?php echo __('Address Line 2'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Balance'); ?></th>
		<th><?php echo __('Credit Limit'); ?></th>
		<th><?php echo __('Mothly Sales'); ?></th>
		<th><?php echo __('Yearly Sales'); ?></th>
		<th><?php echo __('Territory Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($territory['Customer'] as $customer): ?>
		<tr>
			<td><?php echo $customer['id']; ?></td>
			<td><?php echo $customer['name']; ?></td>
			<td><?php echo $customer['username']; ?></td>
			<td><?php echo $customer['password']; ?></td>
			<td><?php echo $customer['email']; ?></td>
			<td><?php echo $customer['address_line_1']; ?></td>
			<td><?php echo $customer['address_line_2']; ?></td>
			<td><?php echo $customer['city']; ?></td>
			<td><?php echo $customer['state']; ?></td>
			<td><?php echo $customer['zip']; ?></td>
			<td><?php echo $customer['balance']; ?></td>
			<td><?php echo $customer['credit_limit']; ?></td>
			<td><?php echo $customer['mothly_sales']; ?></td>
			<td><?php echo $customer['yearly_sales']; ?></td>
			<td><?php echo $customer['territory_id']; ?></td>
			<td><?php echo $customer['created']; ?></td>
			<td><?php echo $customer['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'customers', 'action' => 'view', $customer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'customers', 'action' => 'edit', $customer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'customers', 'action' => 'delete', $customer['id']), array(), __('Are you sure you want to delete # %s?', $customer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Representatives'); ?></h3>
	<?php if (!empty($territory['Representative'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('State'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Commission'); ?></th>
		<th><?php echo __('Total Commission'); ?></th>
		<th><?php echo __('Territory Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($territory['Representative'] as $representative): ?>
		<tr>
			<td><?php echo $representative['id']; ?></td>
			<td><?php echo $representative['name']; ?></td>
			<td><?php echo $representative['username']; ?></td>
			<td><?php echo $representative['password']; ?></td>
			<td><?php echo $representative['email']; ?></td>
			<td><?php echo $representative['city']; ?></td>
			<td><?php echo $representative['street']; ?></td>
			<td><?php echo $representative['state']; ?></td>
			<td><?php echo $representative['zip']; ?></td>
			<td><?php echo $representative['commission']; ?></td>
			<td><?php echo $representative['total_commission']; ?></td>
			<td><?php echo $representative['territory_id']; ?></td>
			<td><?php echo $representative['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'representatives', 'action' => 'view', $representative['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'representatives', 'action' => 'edit', $representative['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'representatives', 'action' => 'delete', $representative['id']), array(), __('Are you sure you want to delete # %s?', $representative['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Representative'), array('controller' => 'representatives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
