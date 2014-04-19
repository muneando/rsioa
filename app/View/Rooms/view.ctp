<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Room');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($room['Room']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Apartment'); ?></dt>
			<dd>
				<?php echo $this->Html->link($room['Apartment']['name'], array('controller' => 'apartments', 'action' => 'view', $room['Apartment']['id'])); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Room No'); ?></dt>
			<dd>
				<?php echo h($room['Room']['room_no']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Room Status'); ?></dt>
			<dd>
				<?php echo h($room['Room']['room_status']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($room['Room']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($room['Room']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Room')), array('action' => 'edit', $room['Room']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Room')), array('action' => 'delete', $room['Room']['id']), null, __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Rooms')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Room')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Apartments')), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Apartment')), array('controller' => 'apartments', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

