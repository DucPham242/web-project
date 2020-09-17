<div class="container">
		<div class="row" >
			<ol class="breadcrumb" >
				<li>Trang chủ</li>
				<li>Liên hệ</li>
			</ol>
		</div>
		<div class="row">
			<!-- google map -->
			<div class="col-md-12 col-xs-12>">
				<h3>Liên hệ <hr></h3>
				<div >
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29786.18674209143!2d105.84489204812472!3d21.061742201503247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aa2e4261c55b%3A0x8de2243c2dffb31a!2zTmfhu41jIFRo4buleSwgTG9uZyBCacOqbiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1596659002029!5m2!1svi!2s" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="contract"></iframe>
				</div>
			</div>
		</div>
		<!-- end map -->
		<!-- contract us -->
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<!-- form để lại lời nhắn -->
				<h5><b><span class="glyphicon glyphicon-envelope"></span>  Để lại lời nhắn cho chúng tôi</b></h5>
				<hr>

				<form action="" method="POST" role="form" onsubmit="return Validate_contact();">
					<div class="col-md-6">

						<div class="input-group">

							<span class="input-group-btn">

								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-user"></span></button>

							</span>

							<input type="text" name="name" class="form-control" placeholder="Họ tên..." onblur="blur_name();" id="name">

						</div>
						<div class="input-group">

							<span class="input-group-btn">

								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span> </button>

							</span>

							<input type="email" name="email" class="form-control" placeholder="Email đầy đủ..." onblur="blur_email();" id="email">

						</div>
						<div class="input-group">

							<span class="input-group-btn">

								<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-phone"></button>

								</span>

								<input type="number" name="phone" class="form-control" placeholder="Số điện thoại..." onkeypress="return onlyNum();" onblur="blur_phone();" id="phone">

							</div>

						</div>
						<div class="col-md-6">
							<textarea class="form-control" rows="4" required="required" placeholder="gửi lời nhắn..." style="resize: none;" name="contact"></textarea>
						</div>

						<div class="row">
							<div class="col-md-12 col-md-push-4" style="margin-top: 10px;margin-bottom: 20px">
								<button type="submit" name="submit_contact" class="btn btn-default">Gửi lời nhắn</button>
								
							</div>
							<span id="check" style="color:red;">
									<?php 
										if(isset($_SESSION['noti_contact']) && $_SESSION['noti_contact']==1){
											echo "<span style='color:green;'>Cảm ơn đóng góp ý kiến của bạn, MarvelStore sẽ phản hồi lại bạn nhanh nhất có thể</span>";
										}else if(isset($_SESSION['noti_contact']) && $_SESSION['noti_contact']==2){
											echo "<span style='color:red;'>Thất bại! Có lỗi trong quá trình gửi</span>";
										}
										unset($_SESSION['noti_contact']);
									 ?>
								</span>
						</div>
					</form>
				</div>
			<!-- end form -->
			<!-- detail contract -->
			<div class="col-md-6 col-sm-12">
				<h5><b>Marvel Store chúc bạn một ngày tốt lành</b></h5>
				<hr>
				<p><span class="glyphicon glyphicon-globe"></span> Marvel Việt Nam</p>
				<p> <span class="glyphicon glyphicon-earphone"></span> 0357545556</p>
				<p><span class="glyphicon glyphicon-map-marker"></span> Ngọc Thụy- Long biên- Hà Nội</p>
				<span class="glyphicon glyphicon-envelope"></span> ngocduc022497@gmail.com
			</div>
		</div>

	</div>