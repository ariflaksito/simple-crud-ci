<table class="table table-striped">
	<tbody>
		<tr>
			<td>Email</td>
			<td><?php echo $member['email']?></td>
		</tr>
		<tr>
			<td>Company</td>
			<td><?php echo $member['company']?></td>
		</tr>
		<tr>
			<td>address</td>
			<td><?php echo $member['address']?></td>
		</tr>
		<tr>
			<td>City</td>
			<td><?php echo $member['city']?></td>
		</tr>
		<tr>
			<td>Country</td>
			<td><?php echo $member['country']?></td>
		</tr>
	</tbody>
</table>
<a href="<?php echo site_url()?>" class="btn btn-warning">Kembali</a>