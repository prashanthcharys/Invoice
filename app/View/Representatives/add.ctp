<div class="representatives form">
<?php echo $this->Form->create('Representative'); ?>
	<fieldset>
		<legend><?php echo __('Add Representative'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('city');
		echo $this->Form->input('street');
		echo $this->Form->input('state');
		echo $this->Form->input('zip');
		echo $this->Form->input('commission');
		echo $this->Form->input('total_commission');
		echo $this->Form->input('territory_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Representatives'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Territories'), array('controller' => 'territories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Territory'), array('controller' => 'territories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representative Items'), array('controller' => 'representative_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representative Item'), array('controller' => 'representative_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
