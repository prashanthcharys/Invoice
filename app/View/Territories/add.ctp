<div class="territories form">
<?php echo $this->Form->create('Territory'); ?>
	<fieldset>
		<legend><?php echo __('Add Territory'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Territories'), array('action' => 'index')); ?></li>
	</ul>
</div>
