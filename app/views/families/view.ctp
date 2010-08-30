<div class="families view">
<h2><?php  __('Family');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $family['Family']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Family', true), array('action' => 'edit', $family['Family']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Family', true), array('action' => 'delete', $family['Family']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $family['Family']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Families', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
