<div class="representatives view">
<h2><?php echo __('Representative'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Commission'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['commission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Commission'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['total_commission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Territory'); ?></dt>
		<dd>
			<?php echo $this->Html->link($representative['Territory']['name'], array('controller' => 'territories', 'action' => 'view', $representative['Territory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($representative['Representative']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Representative'), array('action' => 'edit', $representative['Representative']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Representative'), array('action' => 'delete', $representative['Representative']['id']), array(), __('Are you sure you want to delete # %s?', $representative['Representative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Representatives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Territories'), array('controller' => 'territories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Territory'), array('controller' => 'territories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representative Items'), array('controller' => 'representative_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative Item'), array('controller' => 'representative_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Representative Items'); ?></h3>
	<?php if (!empty($representative['RepresentativeItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Representative Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Count'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($representative['RepresentativeItem'] as $representativeItem): ?>
		<tr>
			<td><?php echo $representativeItem['id']; ?></td>
			<td><?php echo $representativeItem['representative_id']; ?></td>
			<td><?php echo $representativeItem['item_id']; ?></td>
			<td><?php echo $representativeItem['count']; ?></td>
			<td><?php echo $representativeItem['created']; ?></td>
			<td><?php echo $representativeItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'representative_items', 'action' => 'view', $representativeItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'representative_items', 'action' => 'edit', $representativeItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'representative_items', 'action' => 'delete', $representativeItem['id']), array(), __('Are you sure you want to delete # %s?', $representativeItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Representative Item'), array('controller' => 'representative_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
