@extends('guest.layout')

@section('content')
<div class="text-inner-banner-one pos-r">
				<div class="shape-wrapper">
					<svg class="img-shape shape-one">
					<path fill-rule="evenodd"  fill="rgb(255, 223, 204)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-two">
					<path fill-rule="evenodd"  fill="rgb(182, 255, 234)"
					 d="M6.000,12.000 C9.314,12.000 12.000,9.314 12.000,6.000 C12.000,2.686 9.314,-0.000 6.000,-0.000 C2.686,-0.000 -0.000,2.686 -0.000,6.000 C-0.000,9.314 2.686,12.000 6.000,12.000 Z"/>
					</svg>
					<svg class="img-shape shape-three">
					<path fill-rule="evenodd"  fill="rgb(181, 198, 255)"
					 d="M12.000,24.000 C18.627,24.000 24.000,18.627 24.000,12.000 C24.000,5.372 18.627,-0.000 12.000,-0.000 C5.372,-0.000 -0.000,5.372 -0.000,12.000 C-0.000,18.627 5.372,24.000 12.000,24.000 Z"/>
					</svg>
					<svg class="img-shape shape-four">
					<path fill-rule="evenodd"  fill="rgb(255, 156, 161)"
					 d="M7.500,15.000 C11.642,15.000 15.000,11.642 15.000,7.500 C15.000,3.358 11.642,-0.000 7.500,-0.000 C3.358,-0.000 -0.000,3.358 -0.000,7.500 C-0.000,11.642 3.358,15.000 7.500,15.000 Z"/>
					</svg>
					<svg class="img-shape shape-five">
					<path fill-rule="evenodd"  fill="rgb(178, 236, 255)"
					 d="M12.500,25.000 C19.403,25.000 25.000,19.403 25.000,12.500 C25.000,5.596 19.403,-0.000 12.500,-0.000 C5.596,-0.000 -0.000,5.596 -0.000,12.500 C-0.000,19.403 5.596,25.000 12.500,25.000 Z"/>
					</svg>
				</div> <!-- /.shape-wrapper -->
				<div class="container">
					<p>Services</p>
					<h2 class="pt-30 pb-15">Provided Services</h2>
					<p class="sub-heading">From a team of passionate creators working side-by-side with our partners to deliver engaging digital and physical campaigns.</p>
				</div>
			</div> <!-- /.text-inner-banner-one -->



			<!-- 
			=============================================
				Intro Text
			============================================== 
			-->
			<div class="intro-text-block pos-r" style="background-color: #F4E8FC;">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 order-lg-last">
							<h5>We offer planty of digital service with our <span>expert with great support.</span></h5>
							<p>Lorem ipsum dolor sit amet, hendrerit omitantur mel, est animal iracundia. Ius te altera essent incorrupte. Id alien accu consettur eam, nibh aliquam iracundia.</p>
							<!-- <h6>Rashed Kabir, <span>CEO CreativeGigs</span></h6> -->
							<!-- <img src="images/home/sign3.png" alt=""> -->
						</div>
						<div class="col-lg-6 order-lg-first">
							<div class="custom-svg-service-v3-2">
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
								<lottie-player
								    src="https://assets7.lottiefiles.com/packages/lf20_G621vj.json"  background="transparent"  speed="1"  style="width: 1024px; height: 608px;"  loop  autoplay >
								</lottie-player>
							</div>
						</div>
					</div>
				</div>
			</div> <!-- /.intro-text-block -->

<!-- Tabs -->
<div class="sass-faq-section">
				<div class="section-shape-one"><img src="../Rogan/rogan-c/html/images/shape/shape-18.svg" alt=""></div>
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-26.svg')}}" alt="" class="section-shape-two">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-29.svg')}}" alt="" class="section-shape-three">
				<img src="{{asset('Rogan/rogan-c/html/images/shape/shape-30.svg')}}" alt="" class="section-shape-four">
				<div class="container">
					<div class="theme-title-one text-center hide-pr">
						<div class="icon-box hide-pr">
							<img src="{{asset('Rogan/rogan-c/html/images/shape/bg-shape1.svg')}}" alt="" class="bg-shape">
							<img src="{{asset('Rogan/rogan-c/html/images/icon/icon29.svg')}}" alt="" class="icon">
						</div>
						<h2 class="main-title">Questions? Look here.</h2>
					</div> <!-- /.theme-title-one -->
					<p class="sub-heading">Can’t find answer? call us at <a href="#">+880 1820 788 800</a> or email us <a href="#">xcoinc@gmail.com</a></p>


					<div class="faq-tab-wrapper">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs">
						    <li class="nav-item">
						      <a class="nav-link active" data-toggle="tab" href="#general">Starter</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#payment">Startup</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#feature">Professional</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#billing">Business</a>
						    </li>
						    <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#account">Enterprise</a>
						    </li>
						    <!-- <li class="nav-item">
						      <a class="nav-link" data-toggle="tab" href="#service">Services</a>
						    </li> -->
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<!-- Single Tab -->
						    <div id="general" class="tab-pane fade show active">
							    <div class="container">
				<div class="element-section mb-200">
				<!-- <div class="our-project project-minimal-style">
					<div class="inner-wrapper">
						<div class="project-minimal-slider">
							<div class="item">
								<div class="project-item">
									<div class="pricing-plan-three" data-aos="fade-up">
									<div class="single-pr-table subway custom-pr-table">
										<div class="pr-header">
											<h4 class="title">Starter</h4>
											<div class="price">$39.<sup>99</sup></div>
											<div class="package">Weekly</div>
										</div> 
										<div class="pr-body">
											<div class="slogan custom-center" sty>Top Features</div>
											<ul class="custom-center">
												<li>
													<i class="fa fa-check"></i>
													Paket 1
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 2
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 3
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 4
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 5
												</li>
											</ul>
										</div> 
										<div class="pr-footer">
											<a href="#" class="plan-button theme-btn service-three">Upgrade</a>
											<a href="#" class="trial-button">Get your 30 day free trial</a>
										</div>
									</div>
								</div> 
							</div>
							</div>
							<div class="item">
								<div class="project-item">
									<div class="pricing-plan-three" data-aos="fade-up">
									<div class="kml"> 
									<div class="adding">
									<div class="single-pr-table cz burger" id="customs">
										<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
										<div class="pr-header">
											<h4 class="title">Startup</h4>
											<h4 class="title-2" style="font-size: 40px">$39</h4>
											<div class="package">Weekly</div>
										</div>
										<div class="pr-body">
											<div class="slogan-custom custom-center" sty>Top Features</div>
											<ul class="custom-center custom-ul">
												<li>
													<i class="fa fa-check"></i>
													Paket 1
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 2
												</li>
												
											</ul>
										</div>
										<div class="pr-footer">
											<a href="#" class="plan-button theme-btn service-three">Upgrade</a>
											<a href="#" class="trial-button">Get your 30 day free trial</a>
										</div>
									</div> 
									</div>
									</div>
							</div> 
								</div>
							</div>
							<div class="item">
								<div class="project-item">
									<div class="pricing-plan-three" data-aos="fade-up">
									<div class="single-pr-table burger">
										<div class="pr-header">
											<h4 class="title">Professional</h4>
											<div class="price">$39.<sup>99</sup></div>
											<div class="package">Weekly</div>
										</div> 
										<div class="pr-body">
											<div class="slogan custom-center" sty>Top Features</div>
											<ul class="custom-center">
												<li>
													<i class="fa fa-check"></i>
													Paket 1
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 2
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 3
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 4
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 5
												</li>
											</ul>
										</div> 
										<div class="pr-footer">
											<a href="#" class="plan-button theme-btn service-three">Choaose Plan</a>
											<a href="#" class="trial-button">Get your 30 day free trial</a>
										</div>									</div>
							</div>								</div>							</div>
							<div class="item">
								<div class="project-item">
									<div class="pricing-plan-three" data-aos="fade-up">
									<div class="single-pr-table custom-burger">
										<div class="pr-header">
											<h4 class="title">Business</h4>
											<div class="price">$39.<sup>99</sup></div>
											<div class="package">Weekly</div>
										</div> 
										<div class="pr-body">
											<div class="slogan custom-center" sty>Top Features</div>
											<ul class="custom-center">
												<li>
													<i class="fa fa-check"></i>
													Paket 1
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 2
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 3
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 4
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 5
												</li>
											</ul>
										</div> 
										<div class="pr-footer">
											<a href="#" class="plan-button theme-btn service-three">Upgrade</a>
											<a href="#" class="trial-button">Get your 30 day free trial</a>
										</div>									</div>
							</div>								</div>							</div> 
							<div class="item">
								<div class="project-item">
									<div class="pricing-plan-three" data-aos="fade-up">
									<div class="single-pr-table custom-sandwich">
										<div class="pr-header">
											<h4 class="title">Enterprise</h4>
											<div class="price">$39.<sup>99</sup></div>
											<div class="package">Weekly</div>
										</div> 										<div class="pr-body">
											<div class="slogan custom-center" sty>Top Features</div>
											<ul class="custom-center">
												<li>
													<i class="fa fa-check"></i>
													Paket 1
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 2
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 3
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 4
												</li>
												<li>
													<i class="fa fa-check"></i>
													Paket 5
												</li>
											</ul>
										</div> 
										<div class="pr-footer">
											<a href="#" class="plan-button theme-btn service-three">Upgrade</a>
											<a href="#" class="trial-button">Get your 30 day free trial</a>
										</div> 
									</div>
							</div> 
								</div> 
							</div>
							 
						</div> 
					</div>
				</div>  -->
				<div class="inner-wrapper our-service-sass-custom">
						<div class="row">
							<div class="col-lg-4 single-block" data-aos="fade-up">
								<div class="service-block">
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<div class="hover-content"></div>
									<!-- <i class="flaticon-web icon-s"></i> -->
									<div class="pr-header-custom">
										<h4 class="title">Paket 1</h4>
										<h4 class="title-2" style="font-size: 40px">$39</h4>
										<div class="package">Weekly</div>
									</div>
									<hr class="line-custom">
									<h5 class="title"><a href="#">User Friendly dashboard & Cool Interface.</a></h5>
									<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
									<!-- <a href="#" class="detail-button"><i class="flaticon-next-1"></i></a> -->
									<div class="pr-footer-custom">
										<a href="#" class="btn-custom">Upgrade</a>
										<!-- <a href="#" class="trial-button">Get your 30 day free trial</a> -->
									</div>
								</div> <!-- /.service-block -->
							</div> <!-- /.single-block -->
							<div class="col-lg-4 single-block" data-aos="fade-up" data-aos-delay="300">
								<div class="service-block">
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<div class="hover-content"></div>
									<i class="flaticon-value icon-s"></i>
									<h5 class="title"><a href="#">Thousand of features and Custom option.</a></h5>
									<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
									<a href="#" class="detail-button"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div> <!-- /.single-block -->
							<div class="col-lg-4 single-block" data-aos="fade-up" data-aos-delay="500">
								<div class="service-block">
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<span class="snow-dot"></span>
									<div class="hover-content"></div>
									<i class="flaticon-login icon-s"></i>
									<h5 class="title"><a href="#">Strong Managment & Security.</a></h5>
									<p>Lorem ipsum dolor si amet, an dusino situ  sint pertinacia constituto, mir es dignsius quo great.</p>
									<a href="#" class="detail-button"><i class="flaticon-next-1"></i></a>
								</div> <!-- /.service-block -->
							</div> <!-- /.single-block -->
						</div> <!-- /.row -->
					</div>
			</div>
			</div>
						    </div> 


							<!-- Single Tab -->
						    <div id="payment" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion3">
											  <div class="panel">
											    <div class="panel-heading active-panel">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse111">
											        Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse111" class="panel-collapse collapse show">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse222">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse222" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion3" href="#collapse333">
											       How delete my account?</a>
											      </h6>
											    </div>
											    <div id="collapse333" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											</div> <!-- end #accordion3 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion4">
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse41">
											        How the affiliate programe works?</a>
											      </h6>
											    </div>
											    <div id="collapse41" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse42">
											        Where is the edit optioon on dashboard? </a>
											      </h6>
											    </div>
											    <div id="collapse42" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse43">
											       How to invite people with refferel link?</a>
											      </h6>
											    </div>
											    <div id="collapse43" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion4" href="#collapse45">
											       How delete my account?</a>
											      </h6>
											    </div>
											    <div id="collapse45" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 4 -->
											</div> <!-- end #accordion4 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
							    </div> <!-- /.row -->
						    </div>

							<!-- Single Tab -->
						    <div id="feature" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion5">
											  <div class="panel">
											    <div class="panel-heading active-panel">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse51">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse51" class="panel-collapse collapse show">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse52">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse52" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion5" href="#collapse53">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse53" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											</div> <!-- end #accordion4 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion6">
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse61">
											        How the affiliate programe works?</a>
											      </h6>
											    </div>
											    <div id="collapse61" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse62">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse62" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse63">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse63" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion6" href="#collapse64">
											       How to invite people with refferel link?</a>
											      </h6>
											    </div>
											    <div id="collapse64" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 4 -->
											</div> <!-- end #accordion6 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
							    </div> <!-- /.row -->
						    </div>

							<!-- Single Tab -->
						    <div id="billing" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion7">
											  <div class="panel">
											    <div class="panel-heading active-panel">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse71">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse71" class="panel-collapse collapse show">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse72">
											        How delete my account?</a>
											      </h6>
											    </div>
											    <div id="collapse72" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion7" href="#collapse73">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse73" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											</div> <!-- end #accordion7 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion8">
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse81">
											        How to invite people with refferel link?</a>
											      </h6>
											    </div>
											    <div id="collapse81" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse82">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse82" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse83">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse83" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion8" href="#collapse84">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse84" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 4 -->
											</div> <!-- end #accordion8 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
							    </div> <!-- /.row -->
						    </div>

							<!-- Single Tab -->
						    <div id="account" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion9">
											  <div class="panel">
											    <div class="panel-heading active-panel">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse91">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse91" class="panel-collapse collapse show">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse92">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse92" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion9" href="#collapse93">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse93" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											</div> <!-- end #accordion9 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion10">
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse101">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse101" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse102">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse102" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse103">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse103" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion10" href="#collapse104">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse104" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 4 -->
											</div> <!-- end #accordion10 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
							    </div> <!-- /.row -->
						    </div>

							<!-- Single Tab -->
						    <div id="service" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion13">
											  <div class="panel">
											    <div class="panel-heading active-panel">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse131">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse131" class="panel-collapse collapse show">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse132">
											        How the affiliate programe works?</a>
											      </h6>
											    </div>
											    <div id="collapse132" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion13" href="#collapse133">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse133" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											</div> <!-- end #accordion13 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
									<div class="col-lg-6">
										<!-- ================== FAQ Panel ================ -->
				        				<div class="faq-panel">
											<div class="panel-group theme-accordion" id="accordion14">
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse141">
											        How to create customer panel?</a>
											      </h6>
											    </div>
											    <div id="collapse141" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>mea case duis tollit et. Etiam nusquam set minium eu sea, ei tale paulo elabo et. Noluisse mnesarch Et ius vero incorrupte, eos deserunt quaeren dum not. Vim elit facete ei sem, maluisset constituam. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 1 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse142">
											        Where is the edit optioon on dashboard?</a>
											      </h6>
											    </div>
											    <div id="collapse142" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 2 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse143">
											       Is there any custome pricing system?</a>
											      </h6>
											    </div>
											    <div id="collapse143" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 3 -->
											  <div class="panel">
											    <div class="panel-heading">
											      <h6 class="panel-title">
											        <a data-toggle="collapse" data-parent="#accordion14" href="#collapse144">
											       How delete my account?</a>
											      </h6>
											    </div>
											    <div id="collapse144" class="panel-collapse collapse">
											      <div class="panel-body">
											      	<p>Lorem ipsum dolor sit amet, nec praesent conceptam no vis lorem temporibus. Ei vix rebum noluisse voluptatibus, cum in legere intellegebat, ius ad illum aperiri officiis. </p>
											      </div>
											    </div>
											  </div> <!-- /panel 4 -->
											</div> <!-- end #accordion14 -->
										</div> <!-- End of .faq-panel -->
									</div> <!-- /.col- -->
							    </div> <!-- /.row -->
						    </div>
						</div> <!-- /.tab-content -->
					</div> <!-- /.faq-tab-wrapper -->


					<a href="#footer" class="down-button scroll-target"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
				</div> <!-- /.container -->
			</div>




			




@stop

@section('css')
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
	<!-- <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/flaticon.css')}}"> -->
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/global.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/mainmenu.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
@stop