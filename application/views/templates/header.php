<!DOCTYPE html>
<html>

<head>
<title><?php echo $page_title; ?></title>

<meta name="keywords" content="" />
<meta name="description" content="" />

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!--[if lt IE 9]>
<script type="text/javascript" src="layout/plugins/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="<?php echo base_url();?>layout/style.css" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo base_url();?>layout/js/jquery.js"></script>

<!-- PrettyPhoto start -->
<link rel="stylesheet" href="<?php echo base_url();?>layout/plugins/prettyphoto/css/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/prettyphoto/jquery.prettyPhoto.js"></script>
<!-- PrettyPhoto end -->

<!-- jQuery tools start -->
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/tools/jquery.tools.min.js"></script>
<!-- jQuery tools end -->

<!-- ScrollTo start -->
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/scrollto/jquery.scroll.to.min.js"></script>
<!-- ScrollTo end -->

<!-- FlexSlider start -->
<link rel="stylesheet" href="<?php echo base_url();?>layout/plugins/flexslider/flexslider.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/flexslider/jquery.flexslider-min.js"></script>
<!-- FlexSlider end -->

<!-- jQuery Form Plugin start -->
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/ajaxform/jquery.form.js"></script>
<!-- jQuery Form Plugin end -->

<!-- Twitter Plugin start -->
<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/tweet/tweet.widget.js"></script>
<!-- Twitter Plugin end -->

<!-- jQuery Sort Plugin start -->
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/sort/jquery.sort.min.js"></script>
<!-- jQuery Sort Plugin end -->

<!-- Roundabout Plugin start -->
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/roundabout/jquery.roundabout.min.js"></script>
<!-- Roundabout Plugin end -->

<!-- Nivo Slider Plugin start -->
<link rel="stylesheet" href="<?php echo base_url();?>layout/plugins/nivo/nivo-slider.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/nivo/jquery.nivo.slider.pack.js"></script>
<!-- Nivo Slider Plugin end -->

<!-- OneByOne start -->
<link rel="stylesheet" href="<?php echo base_url();?>layout/plugins/onebyone/css/jquery.onebyone.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url();?>layout/plugins/onebyone/css/animate.css" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>layout/plugins/onebyone/jquery.onebyone.min.js"></script>
<!-- OneByOne end -->

<script type="text/javascript" src="<?php echo base_url();?>layout/js/main.js"></script>

<script type="text/javascript" language ="javascript">
    jQuery(document).ready(function(){
        var menu_id = <?php if(isset($current_menu)) echo $current_menu-1; else 0;?>;
        jQuery(".main_menu > ul > li").eq(menu_id).addClass("current_page_item");
    });
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>
    <div class="wrapper sticky_footer">
	<!-- HEADER BEGIN -->
	<header>
            <div id="header">
		<section class="section_top">
                    <div class="inner">
			<div id="logo"><a href="./"><img src="<?php echo base_url();?>images/logo.png" alt="SkyDream" title="SkyDream" /></a></div>
					
                            <nav class="main_menu">
				<ul>
                                    <li><a href="<?php echo base_url();?>index.php/welcome">Home<span class="subtext">start here</span></a></li>
                                    <li><a href="#">Admissions<span class="subtext">online admissions</span></a>
									
					<ul>
                                             <li><a href="<?php echo base_url();?>admission_dashboard.html">Admission Dashboard</a></li>
                                             <li><a href="<?php echo base_url();?>new_admission.html">New Admission</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Features<span class="subtext">all different pages</span></a>

                                            <ul>
                                                    <li><a href="#">Sliders</a>

                                                            <ul>
                                                                    <li><a href="<?php echo base_url();?>index.html">Slider 1</a></li>
                                                                    <li><a href="<?php echo base_url();?>slider_2.html">Slider 2</a></li>
                                                                    <li><a href="<?php echo base_url();?>slider_3.html">Slider 3</a></li>
                                                                    <li><a href="<?php echo base_url();?>slider_4.html">Slider 4</a></li>
                                                                    <li><a href="<?php echo base_url();?>slider_5.html">Slider 5</a></li>
                                                                    <li><a href="<?php echo base_url();?>slider_6.html">Slider 6</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Shortcodes</a>

                                                            <ul>
                                                                    <li><a href="<?php echo base_url();?>typography.html">Typography</a></li>
                                                                    <li><a href="<?php echo base_url();?>columns.html">Columns</a></li>
                                                                    <li><a href="<?php echo base_url();?>accordion.html">Accordion</a></li>
                                                                    <li><a href="<?php echo base_url();?>tabs.html">Tabs</a></li>
                                                                    <li><a href="<?php echo base_url();?>testimonials.html">Testimonials</a></li>
                                                                    <li><a href="<?php echo base_url();?>alert_messages.html">Alert Messages</a></li>
                                                                    <li><a href="<?php echo base_url();?>buttons.html">Buttons</a></li>
                                                                    <li><a href="<?php echo base_url();?>tables.html">Tables</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Pages</a>

                                                            <ul>
                                                                    <li><a href="<?php echo base_url();?>about.html">About Us</a></li>
                                                                    <li><a href="<?php echo base_url();?>services.html">Services</a></li>
                                                                    <li><a href="<?php echo base_url();?>pricing_table.html">Pricing Table</a></li>
                                                                    <li><a href="<?php echo base_url();?>faq.html">FAQ</a></li>
                                                                    <li><a href="<?php echo base_url();?>contact.html">Contact Us Style 1</a></li>
                                                                    <li><a href="<?php echo base_url();?>contact_2.html">Contact Us Style 2</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a href="#">Pages With Alternative Footer</a>

                                                            <ul>
                                                                    <li><a href="<?php echo base_url();?>index_alt_footer.html">Home Page</a></li>
                                                                    <li><a href="<?php echo base_url();?>about_alt_footer.html">About Us</a></li>
                                                                    <li><a href="<?php echo base_url();?>gallery_alt_footer.html">Gallery</a></li>
                                                                    <li><a href="<?php echo base_url();?>blog_alt_footer.html">Blog</a></li>
                                                                    <li><a href="<?php echo base_url();?>contact_alt_footer.html">Contact Us</a></li>
                                                            </ul>
                                                    </li>
                                            </ul>
                                    </li>
                                        
                                        <li><a href="<?php echo base_url();?>contact.html">Contact Us<span class="subtext">write message</span></a></li>
                                        <li><a href="<?php echo base_url('index.php/members');?>">Members<span class="subtext">account login</span></a></li>
                                </ul>
                             </nav>
						
                             <div class="clearboth"></div>
                    </div>
                </section>