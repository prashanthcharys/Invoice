<div class="representativeItems view">
<h2><?php echo __('Representative Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($representativeItem['RepresentativeItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Representative'); ?></dt>
		<dd>
			<?php echo $this->Html->link($representativeItem['Representative']['name'], array('controller' => 'representatives', 'action' => 'view', $representativeItem['Representative']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($representativeItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $representativeItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Count'); ?></dt>
		<dd>
			<?php echo h($representativeItem['RepresentativeItem']['count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($representativeItem['RepresentativeItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($representativeItem['RepresentativeItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Representative Item'), array('action' => 'edit', $representativeItem['RepresentativeItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Representative Item'), array('action' => 'delete', $representativeItem['RepresentativeItem']['id']), array(), __('Are you sure you want to delete # %s?', $representativeItem['RepresentativeItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Representative Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representatives'), array('controller' => 'representatives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative'), array('controller' => 'representatives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
