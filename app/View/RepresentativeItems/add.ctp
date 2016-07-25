<div class="representativeItems form">
<?php echo $this->Form->create('RepresentativeItem'); ?>
	<fieldset>
		<legend><?php echo __('Add Representative Item'); ?></legend>
	<?php
		echo $this->Form->input('representative_id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Representative Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
