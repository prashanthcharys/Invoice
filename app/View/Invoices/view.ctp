<?php
$address = $invoice['Order']['Address'];
?>

<div class="invoices">
    <h2><?php echo __('Invoice'); ?></h2>
    <dl>
        <dt><?php echo __('Invoice ID'); ?></dt>
        <dd>
            #<?php echo h($invoice['Invoice']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Order ID'); ?></dt>
        <dd>
			<?php echo $this->Html->link($invoice['Order']['id'], array('controller' => 'orders', 'action' => 'view', $invoice['Order']['id'])); ?>
            &nbsp;
        </dd>

        <dt><?php echo __('Delivery Address'); ?></dt>
        <dd>
			<?php echo $address['name']."<br/>".$address['address_line_1']."<br/>".$address['city'].", ".$address['state']
                                
                                
                                
                                
                                ; ?>
        </dd>

    </dl>
</div>

<div class="invoices">
    <h3><?php // echo __('Invoice Items'); ?></h3>
	<?php if (!empty($invoice['InvoiceItem'])): ?>
    <table cellpadding = "0" cellspacing = "0" style="width:60%" >


        <tr>
            <th style="width:100px"><?php echo __('SKU'); ?></th>
            <th><?php echo __('Item Name'); ?></th>
            <th><?php echo __('Price'); ?></th>
            <th><?php echo __('Quantity'); ?></th>
            <th><?php echo __('Total'); ?></th>
        </tr>
	<?php foreach ($invoice['InvoiceItem'] as $invoiceItem): ?>
        <tr>
            <td><?php echo $invoiceItem['item_id']; ?></td>
            <td><?php echo $invoiceItem['Item']['name']; ?></td>
            <td><?php echo $invoiceItem['Item']['price']; ?></td>
            <td><?php echo $invoiceItem['quantity']; ?></td>
            <td><?php echo $invoiceItem['Item']['price']*$invoiceItem['quantity']; ?></td>
        </tr>
        <tr>
            <td colspan="5"><h3 style="float: right">Tax : <?php echo h($invoice['Invoice']['tax']); ?></td>
        </tr>
        <tr>
            <td colspan="5"><h3 style="float: right">Total : <?php        
            $total = 0;
            foreach ($invoice['InvoiceItem'] as $invoiceItem) { 
            $total += $invoiceItem['Item']['price']*$invoiceItem['quantity'];
            }
            echo $total; ?></h3></td>
        </tr>
	<?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Invoice Item'), array('controller' => 'invoice_items', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
