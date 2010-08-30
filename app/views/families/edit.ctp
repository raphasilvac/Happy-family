<div class="families form">
<?php echo $this->Form->create('Family');?>
	<fieldset>
 		<legend><?php __('Edit Family'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Family.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Family.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Families', true), array('action' => 'index'));?></li>
	</ul>
</div>