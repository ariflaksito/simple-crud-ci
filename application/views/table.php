<div class="row">
	<div class="col-md-6">
		<a href="<?php echo site_url()?>/data/add" class="btn btn-success">Add Data</a>
	</div>
	<div class="col-md-6">
		<form action="" method="post" enctype="multipart/form-data" class="form-inline">
		<label>File Csv</label>	
		<div class="form-group">
			<input type="file" class="form-control" name="csv">
		</div>
		<button id="save" class="btn btn-primary">Import Csv</button>
		</form>
	</div>
</div>	

<?php if(isset($ok)):?><div class="alert alert-info"><?php echo $ok?></div><?php endif;?>
<?php if(isset($error)):?><div class="alert alert-danger"><?php echo $error?></div><?php endif;?>

<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Fullname</th>
			<th>Email</th>
			<th>Foto</th>
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
			<td>
				<?php if($d['foto']!=null):?>
				<img src="uploads/<?php echo $d['foto']?>" width="60"/>
				<?php endif?>
			</td>
			<td><a href="<?php echo site_url()?>/data/edit/<?php echo $d['id']?>" class='btn btn-warning'>Edit</a></td>
			<td><a href="<?php echo site_url()?>/data/detail/<?php echo $d['id']?>" class='btn btn-info'>Detail</a></td>
			<td><a href="<?php echo site_url()?>/data/del/<?php echo $d['id']?>" class='btn btn-danger'>Delete</a></td>
			<?php $no++?>
		</tr>
		<?php endforeach;?>	
	</tbody>
</table>