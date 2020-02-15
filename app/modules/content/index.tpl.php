<h1>Content List</h1>

<?php if (!empty($data)): ?>
	<table border="1">
		<tr>
			<td>id</td>
			<td>title</td>
			<td>description</td>
			<td>created</td>
			<td>updated</td>
		</tr>
		<?php foreach ($data as $key => $value): ?>
			<tr>
				<td><?php echo $value['id'];?></td>
				<td><?php echo $value['title'];?></td>
				<td><?php echo $value['description'];?></td>
				<td><?php echo $value['created'];?></td>
				<td><?php echo $value['updated'];?></td>
			</tr>		
		<?php endforeach ?>
	</table>
<?php endif ?>