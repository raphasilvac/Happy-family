<div class="families form">
<?php echo $this->Form->create('Family');?>
	<fieldset>
 		<legend><?php __('Add Family'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Families', true), array('action' => 'index'));?></li>
	</ul>
</div>