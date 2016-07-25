<div class="invoiceItems view">
<h2><?php echo __('Invoice Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoiceItem['Invoice']['order_id'], array('controller' => 'invoices', 'action' => 'view', $invoiceItem['Invoice']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($invoiceItem['Item']['name'], array('controller' => 'items', 'action' => 'view', $invoiceItem['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($invoiceItem['InvoiceItem']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice Item'), array('action' => 'edit', $invoiceItem['InvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invoice Item'), array('action' => 'delete', $invoiceItem['InvoiceItem']['id']), array(), __('Are you sure you want to delete # %s?', $invoiceItem['InvoiceItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoice Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
