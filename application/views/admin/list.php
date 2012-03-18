<?php include Kohana::find_file('views', 'header') ?>

		<table>
			<thead><td>Id</td><td>Url</td><td>Hash</td></thead>
			<tbody>
			<?php foreach ($urls as $row): ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><a href="<?php echo $row['url']?>"><?php echo $row['url']; ?></a></td>
					<td><a href="<?php echo $base_url?>"><?php echo $row['urlhash']; ?></a></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>

<?php include Kohana::find_file('views', 'footer') ?>