<?php include("templates/header.php"); ?>

				<section class="section_slider_1">
					<div class="slider_line_1"></div>
					<div class="slider_line_2"></div>
					
					<div id="slider" class="slider">
						<div class="oneByOne_item">
							<img src="<?php echo base_url();?>images/pic_slider_1_1_1.png" alt="" class="pic_1_1" data-ease-type="bounceInRight" />
							<img src="<?php echo base_url();?>images/pic_slider_1_1_2.png" alt="" class="pic_1_2" data-ease-type="bounceInRight" />
							<img src="<?php echo base_url();?>images/pic_slider_1_1_3.png" alt="" class="pic_1_3" data-ease-type="bounceInRight" />
							<div class="text_1_1" data-ease-type="fadeInUp">perfect portal to</div>
							<div class="text_1_2" data-ease-type="fadeInUp">manage your school</div>
							<div class="text_1_3" data-ease-type="fadeInUp">portal is created in the minimalist “clean” style. With a powerful administrator and flexible options.</div>
						</div>
						
						<div class="oneByOne_item">
							<img src="<?php echo base_url();?>images/pic_slider_1_2_1.png" alt="" class="pic_2_1" data-ease-type="fadeInRight" />
							<img src="<?php echo base_url();?>images/pic_slider_1_2_2.png" alt="" class="pic_2_2" data-ease-type="fadeInRight" />
							<div class="text_2_1" data-ease-type="fadeIn">Powerful Solution With Interactive Design</div>
							<div class="text_2_2" data-ease-type="fadeIn">Better Performance Measurement</div>
							<div class="text_2_3" data-ease-type="fadeIn">Our solution offers varied features and intact functionalities.</div>
							<div class="text_2_4" data-ease-type="fadeIn"><a href="#" class="general_button big arrow_down"><span>Order now</span></a></div>
						</div>
						
						<div class="oneByOne_item">
							<img src="<?php echo base_url();?>images/pic_slider_1_3_1.png" alt="" class="pic_3_1" data-ease-type="bounceInDown" />
							<img src="<?php echo base_url();?>images/pic_slider_1_3_2.png" alt="" class="pic_3_2" data-ease-type="bounceInDown" />
							<img src="<?php echo base_url();?>images/pic_slider_1_3_3.png" alt="" class="pic_3_3" data-ease-type="bounceInDown" />
							<div class="text_3_1" data-ease-type="fadeInLeft">Theme Looks Good On</div>
							<div class="text_3_2" data-ease-type="fadeInLeft">different types of devices</div>
							<div class="text_3_3" data-ease-type="fadeInLeft">Tested on desktop, tablet and mobile phone.</div>
							<div class="text_3_4" data-ease-type="fadeInLeft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
							<div class="text_3_5" data-ease-type="fadeInLeft"><a href="#" class="general_button big arrow_right"><span>Read More</span></a></div>
						</div>
						
						<div class="oneByOne_item">
							<div class="text_4_1" data-ease-type="fadeInLeft">video present your</div>
							<div class="text_4_2" data-ease-type="fadeInLeft"><b>Product</b> and <b>services</b></div>
							<div class="text_4_3" data-ease-type="fadeInLeft">Play YouTube and Vimeo Videos</div>
							<div class="text_4_4" data-ease-type="fadeInLeft">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
							<div class="text_4_5" data-ease-type="fadeInLeft"><a href="#" class="general_button big arrow_right"><span>Read More</span></a></div>
						</div>
					</div>
					
					<div class="static_pic"><img src="<?php echo base_url();?>images/pic_slider_1_static.jpg" alt="" /></div>
					
					<script type="text/javascript">
						$(function() {
							$('#slider').oneByOne({
								width : 2000,
								className : 'oneByOne1',	             
								easeType : 'bounceInRight',
								slideShow : false,
								showArrow : true,
								showButton : false
							});
						});
					</script>
				</section>
			</div>
		</header>
		<!-- HEADER END -->
		
		<!-- CONTENT BEGIN -->
		<div id="content" class="">
			<div class="inner">
				<div class="general_content">
					<div class="main_content">
						<div class="block_slogan_1">
							<p class="text_1">Looking for an efficient school management system?</p>
							<p class="text_2">We provide a complete solution to automate school's diverse operations from classes to school events and a powerful online community to bring parents, teachers & students on a common interactive platform.</p>
						</div>
						<div class="line_2" style="margin:0px 0px 37px;"></div>
						
						<div class="block_services_type_1">
							<div class="service">
								<div class="icon"><img src="<?php echo base_url();?>images/icon_services_1_1.png" alt="" /></div>
								<div class="title">
									<h5>Monitor Student's Progress</h5>
									<p>EASY INTERFACE</p>
								</div>
								<div class="clearboth"></div>
								<div class="text">
									<p>The portal provides easy access to parents to view their children's activities. The interface provides options like attendance report, weekly updates and events.</p>
									<a href="<?php echo base_url();?>services.html" class="general_button fr">Read More</a>
								</div>
							</div>
							
							<div class="service">
								<div class="icon"><img src="<?php echo base_url();?>images/icon_services_1_2.png" alt="" /></div>
								<div class="title">
									<h5>Multiple Schools Registration</h5>
									<p>CENTRAL HUB</p>
								</div>
								<div class="clearboth"></div>
								<div class="text">
									<p>This system can handle multiple schools sessions through single system (database). Single interface provides consistency in work flow model.</p>
									<a href="<?php echo base_url();?>services.html" class="general_button fr">Read More</a>
								</div>
							</div>
							
							<div class="service">
								<div class="icon"><img src="<?php echo base_url();?>images/icon_services_1_3.png" alt="" /></div>
								<div class="title">
									<h5>Excellent Customer Support</h5>
									<p>FEEL FREE</p>
								</div>
								<div class="clearboth"></div>
								<div class="text">
									<p>We assure to provide excellent customer support. We fulfill all your needs at your place. Feel free to contact us for any query.</p>
									<a href="<?php echo base_url();?>services.html" class="general_button fr">Read More</a>
								</div>
							</div>
							
							<div class="clearboth"></div>
						</div>
						
						<div class="line_2" style="margin:37px 0px 35px;"></div>
						
						<div class="block_latest_projects_2">
							<h4>System Highlights</h4>
							
							<div class="project">
								<div class="image">
									<img src="<?php echo base_url();?>images/pic_latest_project_2_1.jpg" alt="" />
									<div class="info">
										<div class="icons">
											<ul>
												<li><a href="<?php echo base_url();?>images/pic_latest_project_2_1.jpg" data-rel="prettyPhoto" class="icon_zoom" title="">Zoom</a></li>
												<li><a href="<?php echo base_url();?>portfolio_item.html" class="icon_link">Link</a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="description">
									<h6><a href="<?php echo base_url();?>portfolio_item.html">Biometric Enrollment & Login</a></h6>
									<p class="tags"><a href="#">Easy Attendance</a></p>
								</div>
								
								<div class="line_2"></div>
							</div>
							
							<div class="project">
								<div class="image">
									<img src="<?php echo base_url();?>images/pic_latest_project_2_2.jpg" alt="" />
									<div class="info">
										<div class="icons">
											<ul>
												<li><a href="<?php echo base_url();?>images/pic_latest_project_2_2.jpg" data-rel="prettyPhoto" class="icon_zoom" title="">Zoom</a></li>
												<li><a href="<?php echo base_url();?>portfolio_item.html" class="icon_link">Link</a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="description">
									<h6><a href="<?php echo base_url();?>portfolio_item.html">Quick SMS alert on login</a></h6>
									<p class="tags"><a href="#">Efficient Notification</a></p>
								</div>
								
								<div class="line_2"></div>
							</div>
							
							<div class="project">
								<div class="image">
									<img src="<?php echo base_url();?>images/pic_latest_project_2_3.jpg" alt="" />
									<div class="info">
										<div class="icons">
											<ul>
												<li><a href="<?php echo base_url();?>images/pic_latest_project_2_3.jpg" data-rel="prettyPhoto" class="icon_zoom" title="">Zoom</a></li>
												<li><a href="<?php echo base_url();?>portfolio_item.html" class="icon_link">Link</a></li>
											</ul>
										</div>
									</div>
								</div>
								
								<div class="description">
									<h6><a href="<?php echo base_url();?>portfolio_item.html">Centralized Web Portal</a></h6>
									<p class="tags"><a href="#">Easy management</a></p>
								</div>
								
								<div class="line_2"></div>
							</div>
							
							<div class="clearboth"></div>
						</div>
						
						<div class="separator" style="height:36px;"></div>
						
						<div class="general_column_300">
							<div class="block_accordeon_type_1">
								<h4>Our Other Services</h4>
								<div class="button_outer first"><div class="button_inner">Integrated Time-Table Generator</div></div><!-- accordeon trigger -->
								<div class="accordeon_content">
									<!-- accordeon content goes here -->
									<p>We provide wide range of features for time-table generation based on constraints like even distribution of subjects, multiple sections, etc.</p>
								</div>
								
								<div class="button_outer"><div class="button_inner">Accounting and Payroll System</div></div><!-- accordeon trigger -->
								<div class="accordeon_content">
									<!-- accordeon content goes here -->
									<p>We provide a generic interface for centralized &amp; generic payroll management based on employee attendance records and generic benefits &amp; deductions.</p>
								</div>
								
								<div class="button_outer"><div class="button_inner">Online Admissions</div></div><!-- accordeon trigger -->
								<div class="accordeon_content">
									<!-- accordeon content goes here -->
									<p>We provide a generic interface for student's admission through online application form with basic information.</p>
								</div>
								
								<script type="text/javascript">
									$('.block_accordeon_type_1').tabs('.block_accordeon_type_1 div.accordeon_content', {
										tabs : '.button_outer',
										effect : 'slide',
										currentClose: false,
										initialIndex : 0
									});
								</script>
							</div>
						</div>
						
						
						<div class="general_column_300">
							<div class="block_main_testimonials_2">
								<h4>Testimonials</h4>
								
								<div class="block_testimonials_3">
									<div class="userpic"><a href="#" style="background-image:url(<?php echo base_url();?>images/pic_testimonials_3_1.jpg);"></a></div>
									<div class="content">
										<p>“ Jmnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.”</p>
										<div class="author"><p><a href="#">Dohn Doe</a><span class="position">, Project Manager</span></p></div>
									</div>
									<div class="clearboth"></div>
								</div>
								
								<div class="block_testimonials_3">
									<div class="userpic"><a href="#" style="background-image:url(<?php echo base_url();?>images/pic_testimonials_3_2.jpg);"></a></div>
									<div class="content">
										<p>“ Ste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque.”</p>
										<div class="author"><p><a href="#">Ralf Witacker</a><span class="position">, Web Developer</span></p></div>
									</div>
									<div class="clearboth"></div>
								</div>
								
							</div>
						</div>
						
						
						<div class="general_column_300 last">
							<div class="block_contact_form_1">
								<h4>Contact Form</h4>
								
								<form id="contact_form" action="php/contact_form.php" />
									<div class="field"><input type="text" name="Name" class="w_def_text" title="Your name" /></div>
									<div class="field"><input type="text" name="Email" class="w_def_text" title="Email address" /></div>
									<div class="textarea"><textarea name="Message" cols="1" rows="1" class="w_def_text" title="Your message"></textarea></div>
									<div class="button"><input type="submit" class="general_button" value="Send Message" /></div>
								</form>
								<script type="text/javascript">
									$(function () {
										$('#contact_form').ajaxForm({
											beforeSubmit : function() {return init_validation('#contact_form');},
											success : function() {
												alert('Your message has been sent!');
												$('#contact_form').resetForm();
											}
										});
									});
								</script>
							</div>
						</div>
						<div class="clearboth"></div>
						
					</div>
					
					<div class="clearboth"></div>
				</div>
			</div>
		</div>
		<!-- CONTENT END -->
		
		<!-- FOOTER BEGIN -->
		<footer>
			<div id="footer">
				<section class="section_top">
					<div class="inner">
						<div class="block_to_top">
							<a href="#">BACK TO TOP</a>						</div>
						
						<div class="block_footer_widgets">
							<div class="column">
								<h3>About Us</h3>
								
								<div class="block_footer_about">
									<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
									<p>&nbsp;</p>
									<p>Address: Street 1565, Paris 145, France</p>
									<p>Telephone: +8 589 154 21 98</p>
									<p>Fax: +8 589 541 26 32</p>
								</div>
								
								<div class="block_footer_social_1">
									<ul>
										<li><a href="#" class="twitter">Twitter</a></li>
										<li><a href="#" class="facebook">Facebook</a></li>
										<li><a href="#" class="pinterest">Pinterest</a></li>
										<li><a href="#" class="vimeo">Vimeo</a></li>
										<li><a href="#" class="rss">RSS</a></li>
										<li><a href="#" class="flickr">Flickr</a></li>
									</ul>
								</div>
							</div>
							
							
							<div class="column">
								<h3>Recent Posts</h3>
								
								<div class="block_footer_recent_posts">
									<ul>
										<li><a href="<?php echo base_url();?>blog_post.html">Perspiciatis unde omnis iste natus.</a></li>
										<li><a href="<?php echo base_url();?>blog_post.html">Sit voluptatem accusantium dolore.</a></li>
										<li><a href="<?php echo base_url();?>blog_post.html">Laudantium, totam rem aperiam, eaque ipsa quae ab illo.</a></li>
										<li><a href="<?php echo base_url();?>blog_post.html">Quasi architecto beatae vitae dicta.</a></li>
									</ul>
								</div>
							</div>
							
							
							<div class="column">
								<h3>Latest Tweets</h3>
								
								<div class="block_footer_tweets">
									<script type="text/javascript">
										// ('YOUR USERNAME','NUMBER OF POSTS');
										AddTweet('_eformation', 2);
									</script>
								</div>
							</div>
							
							<div class="column">
								<h3>Flickr Stream</h3>
								
								<div class="block_flickr_footer">
                                	<ul>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_1.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_2.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_3.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_4.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_5.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_6.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_7.jpg" alt="" /></a></li>
										<li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo base_url();?>images/pic_flickr_8.jpg" alt="" /></a></li>
									</ul>
								</div>
                            </div>
							
							<div class="clearboth"></div>
						</div>
					</div>
				</section>
				
				<section class="section_bottom">
					<div class="inner">
						<div class="block_bottom_menu">
							<ul>
								<li><a href="#">Sitemap</a></li>
								<li><a href="#">Terms of use</a></li>
								<li><a href="#">Privacy policy</a></li>
							</ul>
						</div>
						
						<div class="block_copyrights"><p>Copyright &copy; 2012 WebLionMedia. All rights reserved.</p></div>
						
						<div class="clearboth"></div>
					</div>
				</section>
			</div>
		</footer>
		<!-- FOOTER END -->
	</div>
</body>

</html>