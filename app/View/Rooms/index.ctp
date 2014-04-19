<div class="row-fluid">
	<div class="span9">
		<h2><?php echo __('List %s', __('Rooms'));?></h2>

		<p>
			<?php echo $this->BootstrapPaginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?>
		</p>

		<table class="table">
			<tr>
				<th><?php echo $this->BootstrapPaginator->sort('id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('apartment_id');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('room_no');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('room_status');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('created');?></th>
				<th><?php echo $this->BootstrapPaginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
		<?php foreach ($rooms as $room): ?>
			<tr>
				<td><?php echo h($room['Room']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($room['Apartment']['name'], array('controller' => 'apartments', 'action' => 'view', $room['Apartment']['id'])); ?>
				</td>
				<td><?php echo h($room['Room']['room_no']); ?>&nbsp;</td>
				<td><?php echo h($room['Room']['room_status']); ?>&nbsp;</td>
				<td><?php echo h($room['Room']['created']); ?>&nbsp;</td>
				<td><?php echo h($room['Room']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $room['Room']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $room['Room']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $room['Room']['id']), null, __('Are you sure you want to delete # %s?', $room['Room']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>

		<?php echo $this->BootstrapPaginator->pagination(); ?>
	</div>
	<div class="span3">
		<div class="well" style="padding: 8px 0; margin-top:8px;">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
			<li><?php echo $this->Html->link(__('New %s', __('Room')), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List %s', __('Apartments')), array('controller' => 'apartments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New %s', __('Apartment')), array('controller' => 'apartments', 'action' => 'add')); ?> </li>
		</ul>
		</div>
	</div>
</div>