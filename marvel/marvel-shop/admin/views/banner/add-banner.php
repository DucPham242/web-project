<div id="tbl_banner_boxout">
	<div id="tbl_banner_boxin">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin: 30px 0px 40px 20px">
			Thêm mới ảnh banner
		</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Thêm ảnh banner</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="" onsubmit="return Validate_addPro();" method="POST" role="form" enctype="multipart/form-data">
				<div class="form-group">
						<label for="">Tên ảnh</label><span id="spanname" class="spanerror"></span>
						<input type="text" id="name_product" name="name_banner" class="form-control"  placeholder="" onblur="Blurname_product()">
					</div>
					<div class="form-group">
						<label for="">Chọn ảnh</label><span id="spanimg" class="spanerror"></span>
						<input type="file"  name="img" class="form-control"  placeholder="" onchange="validate_file();" id="input_avt" required="">
					</div>

							<button type="submit" id="submit_addPro" name="add_banner" class="btn btn-primary">Thêm</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php if(isset($_SESSION['noti_banner']) && $_SESSION['noti_banner'] == 1){
			?>
			<div class="alert alert-success" style="display: inline;">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thêm thành công!</strong> 
			</div>
			<?php
			
		} else if(isset($_SESSION['noti_banner']) && $_SESSION['noti_banner'] == 2){
			?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Thất bại ! Có lỗi trong quá trình thêm</strong>
			</div>
			<?php
		}
		unset($_SESSION['noti_banner']);
		?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>STT</th>
					<th>Ảnh banner</th>
					<th>Tên ảnh banner</th>
					<th>Hành động</th>
				</tr>
			</thead>
			<tbody>

				<?php
				$stt = 0;
				foreach ($get_banner as $key => $value) {
					$stt += 1;
			// echo '<pre>';
			// print_r($get_banner);
					?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><img src="../<?php echo $value['path'] ?>" alt="" width="100px"></td>
						<td><?php echo $value['name_banner']; ?></td>
						<?php 
						if($_SESSION['stt_admin']==1){
							?>
							<td> <button type="button" value="<?php echo $value['id_banner']; ?>" class="btn_del_banner btn btn-danger">Xóa</button></td>
						<?php } ?>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>