<div class="box-body table-responsive">
	<table id="example2" class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Tên danh mục</th>
				<th>Tình trạng</th>
				<th></th> 
			</tr>
		</thead>
		<tbody>
		<?php if($list_cate_image <> null):?>
			<?php foreach($list_cate_image as $cate):?>
			<tr>
				<td><?php echo $cate->id?></td>
				<td><?php echo $cate->cate_name?></td>
				<td><?php if($cate->cate_status == 1):?>
					Active
				<?php else:?>
					Unactive
				<?php endif;?>
				</td>
				<td>
					
				</td>
				
			</tr>
			 <?php endforeach;?>
			 <?php endif;?>
		</tbody>
		<tfoot>
			<tr>
				<th>Rendering engine</th> 
			</tr>
		</tfoot>
	</table>
</div>