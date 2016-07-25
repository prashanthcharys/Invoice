<div class="representatives index">
	<h2><?php echo __('Representatives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('commission'); ?></th>
			<th><?php echo $this->Paginator->sort('total_commission'); ?></th>
			<th><?php echo $this->Paginator->sort('territory_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($representatives as $representative): ?>
	<tr>
		<td><?php echo h($representative['Representative']['id']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['name']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['username']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['password']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['email']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['city']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['street']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['state']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['zip']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['commission']); ?>&nbsp;</td>
		<td><?php echo h($representative['Representative']['total_commission']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($representative['Territory']['name'], array('controller' => 'territories', 'action' => 'view', $representative['Territory']['id'])); ?>
		</td>
		<td><?php echo h($representative['Representative']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $representative['Representative']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $representative['Representative']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $representative['Representative']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $representative['Representative']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Representative'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Territories'), array('controller' => 'territories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Territory'), array('controller' => 'territories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representative Items'), array('controller' => 'representative_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative Item'), array('controller' => 'representative_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
