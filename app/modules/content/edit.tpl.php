<form action="" method="post">
	<label for="title">title</label><br>
	<input type="text" name="title" value="<?php echo @$current_data['title'];?>"><br>
	<label for="description">description</label><br>
	<textarea name="description" id="" cols="30" rows="10" value="<?php echo @$current_data['description'];?>"><?php echo @$current_data['description'];?></textarea><br>
	<button>simpan</button>
</form>