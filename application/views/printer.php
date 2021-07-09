<?php include 'header.php'; ?>
		<!-- main content start-->
        <div id="page-wrapper">
            <div class="row">
      			<form class="form-horizontal" action="<?php echo site_url();?>/AdminController/add_printer/" method="post">
					<h3 class="title1">ADD PRRINTERS :</h3>
					<div class="form-three widget-shadow">
						<div class="form-group">
							<label for="manufacture" class="col-sm-2 control-label">Manufacture</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="manufacture">
							</div>
						</div>
						<div class="form-group">
							<label for="model" class="col-sm-2 control-label">Model</label>
							<div class="col-sm-8">
								<input  type="text" class="form-control1" name="model">
							</div>
						</div>
						<div class="form-group">
							<label for="type" class="col-sm-2 control-label">Type</label>
							<div class="col-sm-8">
								<select  id="selector1" class="form-control1" name="type">
									<option>Inkjet</option>
									<option>Laser</option>
									<option>LED</option>
								</select>
							</div>
						</div>
            			<div class="form-group">
							<label for="location" class="col-sm-2 control-label">Location</label>
							<div class="col-sm-8"><select  id="selector1" class="form-control1" name="location">
									<option>LAB 1</option>
									<option>LAB 2</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="description" class="col-sm-2 control-label">Description</label>
							<div class="col-sm-8">
								<textarea  id="txtarea1" cols="50" rows="4" class="form-control1" name="description"></textarea>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
					<h3 class="title1">PAYMENT DETAILS :</h3>
					<div class="form-three widget-shadow">
						<div class="form-group">
							<label for="gst" class="col-sm-2 control-label">GST</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="gst">
							</div>
						</div>
						<div class="form-group">
							<label for="price" class="col-sm-2 control-label">Price</label>
							<div class="col-sm-8">
								<input  type="text" class="form-control1" name="price">
							</div>
						</div>
						<div class="form-group">
							<label for="warranty" class="col-sm-2 control-label">Warranty valid till (Year):</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" name="warranty">
							</div>
						</div>
							<input type="submit" class="btn btn-primary btn-lg" id="submit" value="ADD" name="save"> 
						</div>
					</div>
				</form>
			</div>

    		<script  src="<?php echo base_url();?>/assets/js/index1.js"></script>
	
		<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">Carousel Slider</h4>
					<!-- start content_slider -->
					<div id="owl-demo" class="owl-carousel text-center">
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider1.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider2.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider3.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider4.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider5.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider6.jpg" alt="name">
						</div>
						<div class="item">
							<img class="lazyOwl img-responsive" data-src="<?php echo base_url();?>/assets/images/slider7.jpg" alt="name">
						</div>
						
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		
		<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>Inbox</h2>
					<div class="scrollbar" id="style-1">
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Michael Chris</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:05 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Alexander</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:06 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/3.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Daniel Lucas</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:30 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/2.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">Jackson Jacob</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>01:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/1.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">David Samuel</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:20 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
						
						<div class="activity-row">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/4.jpg' class="img-responsive" alt=""/></div>
							<div class="col-xs-7 activity-desc">
								<h5><a href="#">laura Smith</a></h5>
								<p>Hey ! There I'm available.</p>
							</div>
							<div class="col-xs-2 activity-desc1"><h6>12:50 PM</h6></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
					<h3>chat</h3>
					<div class="scrollbar" id="style-3">
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/1.jpg' class="img-responsive" alt=""/><span>06:01 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Hello ! this is Michael chris</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Hi,How are you ? What about our next meeting?</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/3.jpg' class="img-responsive" alt=""/><span>06:02 AM</span></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/1.jpg' class="img-responsive" alt=""/><span>06:05 AM</span></div>
							<div class="col-xs-5 activity-img1">
								<div class="activity-desc-sub">
									<h5>Michael Chris</h5>
									<p>Yeah fine, Hope you the same</p>
								</div>
							</div>
							<div class="col-xs-4 activity-desc1"></div>
							<div class="clearfix"> </div>
						</div>
						<div class="activity-row activity-row1">
							<div class="col-xs-2 activity-desc1"></div>
							<div class="col-xs-7 activity-img2">
								<div class="activity-desc-sub1">
									<h5>Alexander</h5>
									<p>Wow that's great</p>
								</div>
							</div>
							<div class="col-xs-3 activity-img"><img src='<?php echo base_url();?>/assets/images/3.jpg' class="img-responsive" alt=""/><span>06:20 PM</span></div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Send"/>		
					</form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>todo</h3>
					<div class="scrollbar" id="style-2">
						<div class="activity-row activity-row1">
							<div class="single-bottom">
								<ul>
									<li>
										<input type="checkbox"  id="brand" value="">
										<label for="brand"><span></span> Integer sollicitudin lacinia condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand1" value="">
										<label for="brand1"><span></span> ligula sit amet hendrerit init lorem.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand2" value="">
										<label for="brand2"><span></span>  Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand9" value="">
										<label for="brand9"><span></span>  at tristique Pain that produces no resultant.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand8" value="">
										<label for="brand8"><span></span> Nulla finibus rhoncus turpis quis tristique.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand7" value="">
										<label for="brand7"><span></span> Cupidatat non proident Praising pain.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand3" value="">
										<label for="brand3"><span></span>  libero vel elementum euismod, mauris tellus</label>
									</li>
									<li>
										<input type="checkbox"  id="brand4" value="">
										<label for="brand4"><span></span> Donec aliquam dolor eu augue condimentum.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand5" value="">
										<label for="brand5"><span></span> Orci varius natoque penatibus et magnis dis.</label>
									</li>
									<li>
										<input type="checkbox"  id="brand6" value="">
										<label for="brand6"><span></span> parturient Dolorem ipsum quia.</label>
									</li>
									
									
								</ul>
							</div>
						</div>
					</div>
					<form action="#" method="post">
						<input type="text" value="Enter your text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your text';}" required="">
						<input type="submit" value="Submit"/>		
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
		</div>
<?php include 'footer.php'; ?>