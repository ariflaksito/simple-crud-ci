<?php if(isset($ok)):?><div class="alert alert-info"><?php echo $ok?></div><?php endif;?>
<?php if(isset($error)):?><div class="alert alert-danger"><?php echo $ok?></div><?php endif;?>
<form action="" method="post">
<div class="form-group">
  <label for="name">Name:</label>
  <input type="text" class="form-control" value="<?php echo $member['fullname']?>" name="fullname">
</div>
<div class="form-group">
  <label for="email">Email:</label>
  <input type="email" class="form-control" value="<?php echo $member['email']?>" name="email">
</div>
<div class="form-group">
  <label for="company">Company:</label>
  <input type="text" class="form-control" value="<?php echo $member['company']?>" name="company">
</div>
<div class="form-group">
  <label for="address">Address:</label>
  <input type="text" class="form-control" value="<?php echo $member['address']?>" name="address">
</div>
<div class="form-group">
  <label for="city">City:</label>
  <input type="text" class="form-control" value="<?php echo $member['city']?>" name="city">
</div>
<div class="form-group">
  <label for="country">Country:</label>
  <input type="text" class="form-control" value="<?php echo $member['country']?>" name="country">
</div>
<a href="<?php echo site_url()?>" class="btn btn-warning">Kembali</a>
<button id="save" class="btn btn-info">Simpan</button>
</form>