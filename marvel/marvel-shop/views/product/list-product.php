<div class="container">
	<div class="row"  >
		<ol class="breadcrumb" >
			<li>Trang chủ</li>
			<li>Danh mục sản phẩm</li>
			<?php 	
			switch ($method) {
				case 'marvel':
				case 'dc':
				case 'trans':
				?>
				<li><?php echo $rs[0]['name_brand']; ?></li>
				<?php
				break;
				case 'modeltoyMV':
				case 'modeltoyDC':
				case 'modeltoyTrans':
				?>
				<li><?php echo $rs[0]['name_brand']; ?></li>
				<li><?php echo $rs[0]['name_type']; ?></li>
				<?php
				break;
				case 'hot':
				?>
				<li><?php echo 'Sản phẩm HOT-SALE'; ?></li>
				<?php
			}
						?>		
		</ol>
	</div>
	<div class="row" >
		<!-- left -->
		<div class="col-md-3" style="background-color:#F5F8F7; color: #F91919;margin-top: 20px">

			<ul class="nav test-demo">
				<li><h4>Danh mục nhóm</h4></li>
				<hr>
				<li class="nav-item">
					<a class="nav-link" href="home">Trang chủ</a>
				</li>

				<li class="nav-item">
					<a href="javascript:;" class="hidden-drop" data-toggle="collapse" data-target="#demo"> Marvel <i class="fa fa-fw fa-caret-down"></i></a>
					<ul  class="collapse " id="demo" style="z-index: 9999">
						<a href="list-product/modeltoyMV/pages1">
							<li>
								Mô hình
							</li>
						</a>
						<a href="list-product/techMV/pages1">
							<li>
								Đồ chơi công nghệ
							</li>
						</a>
						<a href="list-product/itemsMV/pages1">
							<li>
								Phụ kiện
							</li>
						</a>

					</ul>
				</li>
				<li class="nav-item">
					<a href="javascript:;" class="hidden-drop" data-toggle="collapse" data-target="#demo2"> DC <i class="fa fa-fw fa-caret-down"></i></a>
					<ul  class="collapse " id="demo2">
						<a href="list-product/modeltoyDC/pages1">
							<li>
								Mô hình
							</li>
						</a>
						<a href="list-product/techDC/pages1">
							<li>
								Đồ chơi công nghệ
							</li>
						</a>
						<a href="list-product/itemsDC/pages1">
							<li>
								Phụ kiện
							</li>
						</a>
					</ul>
				</li>
				<li class="nav-item">
					<a href="javascript:;" class="hidden-drop" data-toggle="collapse" data-target="#demo3"> Transformer <i class="fa fa-fw fa-caret-down"></i></a>
					<ul id="demo3" class="collapse">
						<a href="list-product/modeltoyTrans/pages1">
							<li>
								Mô hình
							</li>
						</a>
						
					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="list-product/hot/pages1">Hot sale</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="info/tutorial">Chỉ dẫn mua hàng</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="info/contact">Liên hệ</a>
				</li>
			</ul>
		</div>
		<!-- end left -->
		<!-- right -->
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12 col-sm-12" style="margin-top: 20px">
					<nav class="navbar navbar-default" role="navigation">
						<div class="container-fluid">

							<div class="collapse navbar-collapse navbar-ex1-collapse">
								<ul class="nav navbar-nav" style="line-height:50px;">
									<li >Danh sách sản phẩm:</li>
								</ul>
								<ul class="nav navbar-nav navbar-right">
									<li style="margin-top: 10px">
										<div class="btn-group">

													<!-- <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">

														Sắp xếp theo <span class="caret"></span>

													</button>
												-->
													<!-- <ul class="dropdown-menu">

														<li>Từ A-Z</li>
														<li>Từ 0-9</li>

													</ul> -->
													<select name="city" id="sort_list_name" class="form-control">
														<option value="">--Sắp xếp theo--</option>
														<option value="id_product_DESC" <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='id_product_DESC'){echo 'selected';} ?> >Mới nhất</option>
														<option value="id_product_ASC" <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='id_product_ASC'){echo 'selected';} ?> >Cũ nhất</option>
														<option value="name_product_ASC" <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='name_product_ASC'){echo 'selected';} ?> >Tên: A-Z</option><option value="name_product_DESC"  <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='name_product_DESC'){echo 'selected';} ?> >Tên: Z-A</option>
														<option value="sale_price_ASC" <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='sale_price_ASC'){echo 'selected';} ?> >
															Giá: Tăng dần
														</option>
														<option value="sale_price_DESC" <?php if(isset($_SESSION['sort']) && $_SESSION['sort']=='sale_price_DESC'){echo 'selected';} ?> >
															Giá: Giảm dần
														</option>
														

													</select>
													

												</div>
											</li>
										</ul>
									</div><!-- /.navbar-collapse -->
								</div>
							</nav>
						</div>
					</div>
					<div id="list_product_box">
					<div class="row" id="list_product">
						<?php 

						if(count($rs)<1){
							echo "<p style='color:red;margin-left:100px;'>Mặt hàng này hiện không còn sản phẩm, bạn vui lòng quay lại sau.</p>";
						}	
							foreach ($rs as $key => $value) {
							?>
							<div class="col-md-4 col-xs-6 product_box" style="margin-top: 20px;">
								<div class="thumbnail">
									<div class="set">
										<div href="#" style=""><img style="" src="<?php echo $value['img']; ?>" width="100%" alt="...">
											<button class="btn btn-danger shower"  data-toggle="modal" value="<?php echo $value['id_product']; ?>" data-target=".bs-example-modal-lg">Xem nhanh</button>
										</div>

									</div>

									

									<div class="caption" style="">

										<a href="product-detail/<?php echo $value['id_product'].'/'.$value['url_name']; ?>" style="color: #333333;"><h5><?php echo $value['name_product']; ?></h5></a>
										<hr>
										<?php 
										if ($value['discount'] <= 0) {
											
											
											?>
											<p class="caption_price_left"><?php echo number_format($value['price']).' đ'; ?></p>
											<?php 
										}else{

											?>
											<span class="caption_price_left"><?php echo number_format($value['discount_price']).' đ'; ?></span><span class="caption_price_right"><?php echo number_format($value['price']).' đ'; ?></span>
										<?php } ?>
									</div>
								</div>
							</div>
							<?php
						}
						?>
						<div class="modal fade bs-example-modal-lg modal_content" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg ">
								<div class="modal-content" style="padding: 40px;">
									
								
							</div>
						</div>
						</div>
					</div>
					</div>
					<div class="row" >
						<div class="col-md-6 col-md-push-2" >
							<ul class="pagination pagi-list" >

								<?php 
								if (isset($_GET['pages']) && $_GET['pages'] > 1) {
									$back = $_GET['pages'] - 1;
									
									?>
									<li><a href="list-product/<?php echo $method; ?>/pages<?php echo $back; ?>">Back</a></li>
									<?php 
								}	
								?>
								<?php
									// echo $pagination;
							
								for($i = 1; $i <= $pagination; $i++){
										if ($i > $current - 3 && $i < $current + 3) {
											
										
									?>
									<li <?php if($i==$_GET['pages']){echo 'class="active"';} ?> >
										<a href="list-product/<?php echo $method; ?>/pages<?php echo $i; ?>"><?php echo $i; ?>
										</a> 
									</li>
									<?php 
								}
								}
								?>
								<?php 

								if (isset($_GET['pages']) && $_GET['pages'] < $pagination) {
									$next = $_GET['pages'] + 1;	
									?>
									<li><a href="list-product/<?php echo $method; ?>/pages<?php echo $next; ?>">Next</a></li>
									<?php 
								}	
								?>
							</ul>

						</div>
					</div>
				</div>
				<!-- end right -->
			</div>
		</div>
