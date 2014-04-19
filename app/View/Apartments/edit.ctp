<div class="row-fluid">
	<div class="span9">
		<?php echo $this->BootstrapForm->create('Apartment', array('class' => 'form-horizontal'));?>
			<fieldset>
				<legend><?php echo __('Edit %s', __('Apartment')); ?></legend>
				<?php
				echo $this->BootstrapForm->input('name', array(
					'required' => 'required',
					'helpInline' => '<span class="label label-important">' . __('Required') . '</span>&nbsp;')
				);
				echo $this->BootstrapForm->hidden('id');
				?>
				<?php echo $this->BootstrapForm->submit(__('Submit'));?>
			</fieldset>
		<?php echo $this->BootstrapForm->end();?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Apartment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Apartment.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Apartments')), array('action' => 'index'));?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Rooms')), array('controller' => 'rooms', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Room')), array('controller' => 'rooms', 'action' => 'add')); ?></li>
		</ul>
		</div>
	</div>
</div>