<div class="row-fluid">
	<div class="span9">
		<h2><?php  echo __('Apartment');?></h2>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
			<dd>
				<?php echo h($apartment['Apartment']['id']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Name'); ?></dt>
			<dd>
				<?php echo h($apartment['Apartment']['name']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Created'); ?></dt>
			<dd>
				<?php echo h($apartment['Apartment']['created']); ?>
				&nbsp;
			</dd>
			<dt><?php echo __('Modified'); ?></dt>
			<dd>
				<?php echo h($apartment['Apartment']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('Edit %s', __('Apartment')), array('action' => 'edit', $apartment['Apartment']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete %s', __('Apartment')), array('action' => 'delete', $apartment['Apartment']['id']), null, __('Are you sure you want to delete # %s?', $apartment['Apartment']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Apartments')), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Apartment')), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List %s', __('Rooms')), array('controller' => 'rooms', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Room')), array('controller' => 'rooms', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span9">
		<h3><?php echo __('Related %s', __('Rooms')); ?></h3>
	<?php if (!empty($apartment['Room'])):?>
		<table class="table">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Apartment Id'); ?></th>
				<th><?php echo __('Room No'); ?></th>
				<th><?php echo __('Room Status'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($apartment['Room'] as $room): ?>
			<tr>
				<td><?php echo $room['id'];?></td>
				<td><?php echo $room['apartment_id'];?></td>
				<td><?php echo $room['room_no'];?></td>
				<td><?php echo $room['room_status'];?></td>
				<td><?php echo $room['created'];?></td>
				<td><?php echo $room['modified'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'rooms', 'action' => 'view', $room['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'rooms', 'action' => 'edit', $room['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rooms', 'action' => 'delete', $room['id']), null, __('Are you sure you want to delete # %s?', $room['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	<?php endif; ?>

	</div>
	<div class="span3">
		<ul class="nav nav-list">
			<li><?php echo $this->Html->link(__('New %s', __('Room')), array('controller' => 'rooms', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
