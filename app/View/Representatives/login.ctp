<div class="representatives form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('Representative'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
    <?php echo $this->Html->link(__('Signup'), array('action' => 'add')); ?>
<?php echo $this->Form->end(__('Login')); ?>
</div>