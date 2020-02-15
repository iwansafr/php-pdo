<h1>Content List</h1>

<?php if (!empty($data)): ?>
	<form action="" method="get">
		<input type="text" name="keyword" placeholder="cari">
	</form>
	<table border="1">
		<tr>
			<td>id</td>
			<td>title</td>
			<td>description</td>
			<td>created</td>
			<td>updated</td>
			<td>action</td>
		</tr>
		<?php foreach ($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['title'];?></td>
				<td><?php echo $value['description'];?></td>
				<td><?php echo $value['created'];?></td>
				<td><?php echo $value['updated'];?></td>
				<td>
					<a href="edit/?id=<?php echo $value['id'];?>">edit</a>
				</td>
			</tr>		
		<?php endforeach ?>
	</table>
<?php endif ?>