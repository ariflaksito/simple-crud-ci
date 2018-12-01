<a href="<?php echo site_url()?>/data/add" class="btn btn-success">Add Data</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Fullname</th>
			<th>Email</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1?>
		<?php foreach($members as $d):?>
		<tr>
			<td><?php echo $no?></td>
			<td><?php echo $d['fullname']?></td>
			<td><?php echo $d['email'] ?></td>
			<td><a href="<?php echo site_url()?>/data/edit/<?php echo $d['id']?>" class='btn btn-warning'>Edit</a></td>
			<td><a href="<?php echo site_url()?>/data/detail/<?php echo $d['id']?>" class='btn btn-info'>Detail</a></td>
			<td><a href="<?php echo site_url()?>/data/del/<?php echo $d['id']?>" class='btn btn-danger'>Delete</a></td>
			<?php $no++?>
		</tr>
		<?php endforeach;?>	
	</tbody>
</table>