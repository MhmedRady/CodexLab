<!-- /********************************************/ -->
<?php if (!isset($prev) || $prev == 0): ?>

	<!-- £ -->

			<section class="ftco-appointment ContactUS">
				<div class="overlay"></div>
	    	<div class="container-wrap">
	    		<div class="row no-gutters d-md-flex align-items-center">
	    			<div class="col-md-6 col-lg-6  d-flex align-self-stretch">
	    				<div class="info ftco-animate">

							  <div class="logo">
	                <img src="layout/images/LOGO/333.png" alt="">
	                <span>ODE</span>
	                <img src="layout/images/LOGO/7.png" alt="">
	                <span>LAB</span>
	              </div>

	              <h3> Crafting <span>Design</span> Success</h3>

	              <p> We consult, design & engineer successful web, mobile & custom software solutions,
	                  that fuel innovation & increase business efficiency!
	              </p>

	                <a class="whyUS" href="about#WHyUS"><button type="btn badge btn-outline-primary btn-sm" >  لمـــاذا تتعــامل معنا </button> </a>

	            </div>
	    			</div>
		    		<div class="col-md-6 col-lg-6 col-sm-10 col-xl-5 appointment ftco-animate">
	            <h3 class="mb-3">تواصل معنا</h3>
	            <div class="clip">

	              <form id="_CONTENT" class="appointment-form" method="post">
	                <div class="row">

	                  <div class="d-md-flex col ">
	                    <div class="form-group ftco-animated">
	                      <label for="" class="requir">اسم صاحب الطلب</label>
	                      <input id="name" type="text"  name="_ownr" class="form-control" placeholder="insert your first & last name">
												<span  id="namerr" class=""></span>
												<span  id="name_veu"></span>
										  </div>
	                  </div>

	                </div>

	                <div class="row ftco-animated">

	                  <div class="d-md-flex col-xl-6 col-lg-6 ">
	                    <div class="form-group">
	                      <label class="requir">رقم الهاتف</label>
	                      <input id="phone" data-mask="20 000 000 000 0" type="text" name="_phon" class="form-control Numeric" placeholder="(20)-10-123-456-78" value="">
												<span  id="phnerr" class=""></span>
											</div>
	                  </div>

	                  <div class="d-md-flex col-xl-6 col-lg-6 ">

	                    <div class="form-group">
	                      <label class="requir">Email</label>
	                      <input id="_email" type="email" name="_mail" class="form-control" placeholder="info@yourdomain.com">
												<span id="_emlerr" class=""></span>
											</div>
	                  </div>

	                </div>

	                <div class="d-me-flex ftco-animated">
	                  <div class="form-group">
	                    <label> اسم الشركة </label>
	                    <input id="comp" type="text" class="form-control" name="_comp" placeholder="Company Name or Your Project Name ">
											<span id="cmperr" class="error"></span>
									  </div>
	                </div>

									<?php $getW = getOne('ID,Name','categories',"WHERE Visibility =1",'AND Parent =1  AND Block =0'); ?>
									<?php $getG = getOne('ID,Name','categories',"WHERE Visibility =1",'AND Parent =5  AND Block =0'); ?>
									<div class="d-me-flex ftco-animated">
	                  <div class="form-group">
	                    <label class="requir"> نوع المشروع </label>
	                      <select dir="rtl" id="_CAT" class="custom-select" name="_cat" required>

													<option selected disabled value="0">القسم  ... </option>
													<optgroup label="website" style="text-align:center;">
														<?php foreach ($getW as $W): ?>
															<option value="<?php echo $W['ID'] ?>" >
																 <?php $cat1 = new arb(); $CN = $cat1->val = $W['Name']; ?>
																 <?php if (array_key_exists($CN,$cat1->langA)) {
																	 echo $cat1->langA($CN);
																 } else {
																	 echo $W['Name'];
																 } ?>
															 </option>
														<?php endforeach; ?>
													</optgroup>
													<optgroup label="Graphic">
														<?php foreach ($getG as $G): ?>
															<option value="<?php echo $M['ID'] ?>" >
																 <?php $cat1 = new arb(); $CN = $cat1->val = $G['Name']; ?>
																 <?php if (array_key_exists($CN,$cat1->langA)) {
																	 echo $cat1->langA($CN);
																 } else {
																	 echo $G['Name'];
																 } ?>
															 </option>
														<?php endforeach; ?>
													</optgroup>
													<option value="00">اخري ...</option>
	                      </select>
												<span id="_CATerr" class="_CATerr"></span>
	                  </div>
	                </div>

	                <div class="d-me-flex ftco-animated">
	                  <div class="form-group">
	                    <label class="requir">وصف المشروع</label>
	                    <textarea name="_desc" id="Trea" cols="30" rows="3" class="form-control" placeholder="In a few words, please tell us about your request."></textarea>
											<span id="deserr" class=""></span>
										</div>
	                </div>
	                <div class="form-group">
	                  <button id="_submet" class="btn btn-sm" type="submit" name="_order">send</button>
	                </div>
	              </form>
	              <div class="end-fa">
	                <li class="fa fa-contao "></li>
	              </div>
	            </div>
	            <div class="form-group out ftco-animated">
	              <button id="_send" class="btn btn-sm" type="button" name="button">ارسال الطلب</button>
	            </div>
		    		</div>
	    		</div>
	    	</div>

	    </section>

	    <footer class="ftco-footer ftco-section img" >
	    	<div class="overlay"></div>
	      <div class="container">

					<div class="row mb-5">
						<div class="back">

	          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">About Us</h2>
	              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	                <li class="ftco-animate"><a target='_blank' href="https://api.whatsapp.com/send?phone=201069364670&text=&source=&data=&app_absent="><span class="icon-whatsapp"></span></a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
	            <div class="ftco-footer-widget mb-4">
	              <h2 class="ftco-heading-2">Recent Blog</h2>
								<?php
									$stmW = $con->prepare("SELECT temp.*,admin.username AS ADM,categories.ID AS CAT
																					FROM temp INNER JOIN admin ON admin.ID = temp.Admin_ID
																					INNER JOIN categories ON categories.ID = temp.Cat_ID
																					WHERE temp.Approve = 1 AND categories.Visibility = 1
																					AND categories.Parent = 1 AND categories.Block = 0 AND admin.Block = 0
																					ORDER BY temp.View DESC LIMIT 1");
									$W  = $stmW->execute();
									$getW  = $stmW->fetchAll();
									$Wcont = $stmW->rowCount();
								 ?>
								 <?php if ($Wcont == 1): ?>

									 <?php foreach ($getW as $W): ?>
										 <?php //print_r($getG); ?>
										 <?php $M = getOne("Name","Categories","WHERE ID = 1"); ?>
										<?php   $tmp = $W['Name']; $ID = $W['ID']; $des = getOne('LENGTH(Description) AS des','Temp',"WHERE ID = $ID");?>
										<?php $LN = $des[0]['des']; $Dlength = $LN >= 60 ? 'Hlength':''; ?>
										<?php $M = $M[0]['Name']; $P=md5($W['Cat_ID']); $HID = sha1($W['ID']); $M = md5($M); $link = "Preview?V=$M&P=$P&Temp=$HID" ?>
										<div class="block-21 mb-4 d-flex">  <?php $img = $W['img_1']; $IMG = "data/TEMP/".$W['ID']."/img/$img"; ?>
											<a class="blog-img mr-4" href="<?php echo $link ?>" style="background-image: url(<?php echo $IMG; ?>);"></a>
											<div class="text">
												<h3 class="heading"><a class="<?php echo $Dlength ?>" href="<?php echo $link ?>"><strong>[<?php echo $tmp ?>]</strong> - <?php echo $W['Description']; ?></a></h3>
												<div class="meta">
													<div><span ><span class="icon-calendar"></span> <?php echo date('M d, Y', strtotime($W['Date'])); ?></span></div>
													<div><span ><span class="icon-person"></span> <?php echo $W['ADM']; ?></span></div>
													<div><span ><span class="icon-thumbs-up"></span> <?php echo $W['Likes']; ?></span></div>
												</div>
											</div>
										</div>
									<?php endforeach; ?>

								 <?php endif; ?>

								<?php
									$stmG = $con->prepare("SELECT temp.*,admin.username AS ADM,categories.ID AS CAT
																					FROM temp INNER JOIN admin ON admin.ID = temp.Admin_ID
																					INNER JOIN categories ON categories.ID = temp.Cat_ID
																					WHERE temp.Approve = 1 AND categories.Visibility = 1
																					AND categories.Parent = 5 AND categories.Block = 0 AND admin.Block = 0
																					ORDER BY temp.View DESC LIMIT 1");
									$G  = $stmG->execute();
									$getG  = $stmG->fetchAll();
									$Gcont = $stmG->rowCount();
								 ?>
								 <?php if ($Gcont == 1): ?>

									 <?php foreach ($getG as $G): ?>
										 <?php //print_r($getG); ?>
										 <?php $M = getOne("Name","Categories","WHERE ID = 5"); ?>
	 									<?php   $tmp = $G['Name']; $ID = $G['ID']; $des = getOne('LENGTH(Description) AS des','Temp',"WHERE ID = $ID");?>
										<?php $LN = $des[0]['des']; $Dlength = $LN >= 60 ? 'Hlength':'';?>
										<?php $M = $M[0]['Name']; $P=md5($G['Cat_ID']); $HID = sha1($G['ID']); $M = md5($M); $link = "Preview?V=$M&P=$P&Temp=$HID" ?>
										<div class="block-21 mb-4 d-flex">  <?php $img = $G['img_1']; $IMG = "data/TEMP/".$G['ID']."/img/$img"; ?>
											<a class="blog-img mr-4" href="<?php echo $link ?>" style="background-image: url(<?php echo $IMG; ?>);"></a>
			                <div class="text">
			                  <h3 class="heading"><a class="<?php echo $Dlength ?>" href="<?php echo $link ?>"><strong>[<?php echo $tmp ?>]</strong> - <?php echo $G['Description']; ?></a></h3>
			                  <div class="meta">
													<div><span ><span class="icon-calendar"></span> <?php echo date('M d, Y', strtotime($G['Date'])); ?></span></div>
			                    <div><span ><span class="icon-person"></span> <?php echo $G['ADM']; ?></span></div>
			                    <div><span ><span class="icon-thumbs-up"></span> <?php echo $G['Likes']; ?></span></div>
			                  </div>
			                </div>
			              </div>
	 								<?php endforeach; ?>

								 <?php endif; ?>

	            </div>
	          </div>
	          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
	             <div class="ftco-footer-widget mb-4 ml-md-4">
	              <h2 class="ftco-heading-2">Services</h2>
	              <ul class="list-unstyled servs">
	                <li><a href="#" class="py-2 d-block">Web Development</a></li>
	                <li><a href="#" class="py-2 d-block">Web Design</a></li>
	                <li><a href="#" class="py-2 d-block">Mobile App</a></li>
	                <li><a href="#" class="py-2 d-block">Graphic Design</a></li>
	              </ul>
	            </div>
	          </div>
	          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
	            <div class="ftco-footer-widget mb-4">
	            	<h2 class="ftco-heading-2">Have a Questions?</h2>
	            	<div class="block-23 mb-3">
		              <ul>
		                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
		                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
		                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
		              </ul>
		            </div>
	            </div>
	          </div>

					</div>

	        </div>
	        <div class="row">
	          <div class="col-md-12 text-center copy">

	            <p>
	    			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | made with <i class="icon-heart" aria-hidden="true"></i> by <a class="My_Copy" href="index.php" target="_blank">Codex|LaB</a>
	    			 </p>
	          </div>
	        </div>
	      </div>

</section>
<!-- /******************************************/ -->

	<?php $contact = 'Hi Codex|LAB Company'; ?>

		<section class="scrollbtn">




	<div class="msg <?php if ($REFERER == 0): ?> _msg_o <?php endif; ?>">

		<span class="_arrow"></span>
		<h3 class="msg_header">
			<button id="_lock" class="lock_msg" data-feather='x-circle'></button>
			<strong class="_msg_strong"> Codexlab </strong>
			مرحبا بكم في
		</h3>
		<?php $msg = "اذا كان لديك اي استفسار لا تتردد في مراسلتنا  اترك رسالتك  و سوف يتم الرد عليكم  خلال 24 ساعه !" ?>

		<div class="chat_body">

			<div dir="rtl" class="_msg_P">
				<span data-pargph="<?php echo $msg ?>"></span>
				<button>
					<i id="GO_chat" class="fa fa-paper-plane-o ftco-animate"></i>
					<a target='_blank' href="https://api.whatsapp.com/send?phone=+0201069364670&text=&source=&data=&app_absent="><i  class="fa fa-whatsapp ftco-animate"></i></a>
					<a href="mailto:TenCent10.TC@Gmail.com?subject=<?php echo $contact; ?>"><i  class="fa fa-envelope-o ftco-animate"></i></a>
				</button>
			</div>

			<div class="_chat">
				<form id="chat_FORM" class="appointment-form" method="post">
					<input type="hidden" name="_CSRF" value="<?php echo _CSRF(); ?>">
					<div class="form-group">
						<label class="requir">اسم صاحب الطلب </label>
						<input id="chat_NAME" type="text" name="name" class="form-control" autofocus autocomplete="off" placeholder="insert your first & last name">
					</div>

					<div class="row">

						<div class="d-md-flex col-xl-6 col-lg-6 ">
							<div class="form-group">
								<label class="requir">رقم التلفون</label>
								<input id="chat_PHONE" name="phon" data-mask="20 000 000 000 0" type="text" class="form-control Numeric"  placeholder="(+20)-10-123-456-78" value="" maxlength="11">
							</div>
						</div>

						<div class="d-md-flex col-xl-6 col-lg-6 ">
							<div class="form-group">
								<label class="requir">Email</label>
								<input id="chat_EMAIL" type="email" name="mail"  class="form-control"  placeholder="info@yourdomain.com">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label dir="rtl" class="requir"> الأستفسار : </label>
						<textarea id="chat_MSG" type="text" name="desc" class="form-control" rows="8" cols="80"  placeholder="  اترك استفسارك وسوف نتواصل معك"></textarea>
					</div>
					<div class="form-group">
						<button id="s_CHAT" class="btn badge btn-info" type="submit" name="_MSG">إرسال <i class="fa fa-paper-plane-o"></i></button>
					</div>
				</form>
			</div>
		</div>

	</div>

			<a id="_chat">

			<?php $chat = $REFERER == 1 ? 'chat1':''; ?>

					<samp class="msg_numb <?php echo $chat ?>">1</samp>

						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chat-right-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M2 1h12a1 1 0 0 1 1 1v11.586l-2-2A2 2 0 0 0 11.586 11H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
							<path fill-rule="evenodd" d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
						</svg>

			</a>

			<button id="top" type="button" name="button">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4.646 4.354a.5.5 0 0 0 .708 0L8 1.707l2.646 2.647a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 0 0 0 .708z"/>
				  <path fill-rule="evenodd" d="M8 11.5a.5.5 0 0 0 .5-.5V2a.5.5 0 0 0-1 0v9a.5.5 0 0 0 .5.5z"/>
				  <path fill-rule="evenodd" d="M2.5 14A1.5 1.5 0 0 0 4 15.5h8a1.5 1.5 0 0 0 1.5-1.5V7A1.5 1.5 0 0 0 12 5.5h-1.5a.5.5 0 0 0 0 1H12a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5H4a.5.5 0 0 1-.5-.5V7a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 0 0-1H4A1.5 1.5 0 0 0 2.5 7v7z"/>
				</svg>
			</button>
		</section>


<?php endif; ?>


	<!-- /*************** ** PREVIEW GET CONTENT ** **************/ -->

					<?php if (isset($prev) && $prev !== 0): ?>

							<!-- Modal -->
							<div class="modal fade Codex_CONET" id="Codex_MODEL" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="overlay"></div>
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="staticBackdropLabel">Content Us</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span class="close_model" aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body">

									    <!-- /*****************************************************/ -->

											<form id="CODEX_CONTENT" action="#" class="appointment-form">
												<input type="hidden" name="ID" value="<?php echo $ID ?>">
												<div class="row">
													<div class="d-md-flex col">
														<div class="form-group">
															<label class="requir">اسم صاحب الطلب </label>
															<input id="CODEX_NAME" type="text" name="name" class="form-control" placeholder="insert your first & last name">
															<span  id="namerr"></span>
														</div>
													</div>

												</div>

												<div class="row">

													<div class="d-md-flex col-xl-6 col-lg-6 ">
														<div class="form-group">
															<label class="requir">رقم التلفون</label>
															<input id="CODEX_PHONE" data-mask="+20 000 000 000 0" type="text" class="form-control Numeric" placeholder="(+20)-10-123-456-78" value="" maxlength="11">
															<span  id="phnerr"></span>
														</div>
													</div>

													<div class="d-md-flex col-xl-6 col-lg-6 ">
														<div class="form-group">
															<label class="requir">Email</label>
															<input id="CODEX_EMAIL" type="email" required class="form-control" placeholder="info@yourdomain.com">
															<span  id="emlerr"></span>
														</div>
													</div>

												</div>

												<div class="d-me-flex">
													<div class="form-group">
														<label> اسم الشركة </label>
														<input id="CODEX_COMP" type="text" class="form-control" placeholder="Company Name or Your Project Name ">
														<span  id="cmperr"></span>
													</div>
												</div>

												<?php $getM = getOne('ID,Name','categories',"WHERE Visibility =1",'AND Parent != 0 AND Block =0'); ?>

												<div class="row">
													<div class="d-md-flex col-xl-6 col-lg-6 ">
														<div class="form-group">
															<label>اسم التصميم</label>
															<input id="CODEX_TEMP" type="text" class="form-control" disabled value="<?php echo $TEMP; ?>">
															<span  id="emlerr"></span>
														</div>
													</div>
													<div class="d-me-flex col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="requir"> نوع المشروع </label>
																<select id="CODEX_CAT" class="custom-select" required disabled>

																	<option selected disabled value="0">... القسم</option>
																	<?php foreach ($getM as $M): ?>
																		<option value="<?php echo $M['ID'] ?>" <?php if($P == md5($M['ID']))echo "selected"; ?>>
																			 <?php $cat1 = new arb(); $CN = $cat1->val = $M['Name']; ?>
																			 <?php if (array_key_exists($CN,$cat1->langA)) {
																				 echo $cat1->langA($CN);
																			 } else {
																				 echo $M['Name'];
																			 } ?>
																		 </option>

																	<?php endforeach; ?>

																</select>
																<span id="CATerr"></span>
														</div>
													</div>

												</div>

												<div class="d-me-flex">
													<div class="form-group">
														<label class="requir"> الوصف </label>
														<textarea name="DESC" id="CODEX_DESC" cols="30" rows="3" class="form-control" placeholder="In a few words, please tell us about your request."></textarea>
														<span  id="deserr">	</span>
													</div>
												</div>

												<div class="d-me-flex redio_APP">
													<div class="form-group">
														<label class="requir">هل تريد تطبيق الهاتف لهذا التصميم ؟ </label>
														<div class="form-check">
										          <input class="form-check-input" type="radio" name="APP" id="gridRadios1" value="1" checked>
										          <label class="form-check-label" for="gridRadios1">
										            Website
										          </label>
										        </div>
										        <div class="form-check">
										          <input class="form-check-input" type="radio" name="APP" id="gridRadios2" value="2">
										          <label class="form-check-label" for="gridRadios2">
										            Website & Mobile Application
										          </label>
										        </div>
													</div>
												</div>

												<div style="display:none;" class="form-group">
													<button id="T_SEND" class="btn btn-sm CODEX_SEND" type="submit" name="button">send</button>
												</div>
											</form>

											<!-- /*****************************************************/ -->

									  </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary btn-sm clos" data-dismiss="modal">الغاء</button>
							        <button id="CODEX_SEND" type="button" class="btn btn-primary btn-sm" >ارسال <i class="fa fa-paper-plane-o"></i> </button>
							      </div>
							    </div>
							  </div>
							</div>


					<?php endif; ?>

	<div id="CODEX_OUT"></div>

<div id="_POST" class="_POST"></div>

</main>
	<!-- /************************************/ -->

	<?php
	$i1 = rand(1,9); $i2 =$i1 + 1; $i3 =$i1 - 1;
	 $jsVersion = $i1.'.'.$i2.'.'.$i3; ?>

	<?php   if (!isset($prev) || $prev == 0) : ?>
		<script src="<?php echo $js; ?>feather.min.js"></script>
		<script src="<?php echo $js; ?>feather.min.js.map"></script>
		<script src="<?php echo $js; ?>jquery.min.js"></script>
		<script src="<?php echo $js; ?>jquery-migrate-3.0.1.min.js"></script>
		<script src="<?php echo $js; ?>jquery-3.4.1-mask.main.js"></script>
		<script src="<?php echo $js; ?>popper.min.js"></script>
		<script src="<?php echo $js; ?>bootstrap.min.js"></script>
		<script src="<?php echo $js; ?>jquery.easing.1.3.js"></script>
		<script src="<?php echo $js; ?>jquery.waypoints.min.js"></script>
		<script src="<?php echo $js; ?>jquery.stellar.min.js"></script>
		<script src="<?php echo $js; ?>owl.carousel.min.js"></script>
		<script src="<?php echo $js; ?>jquery.magnific-popup.min.js"></script>
		<script src="<?php echo $js; ?>aos.js"></script>
		<script src="<?php echo $js; ?>jquery.animateNumber.min.js"></script>
		<script src="<?php echo $js; ?>bootstrap-datepicker.js"></script>
		<script src="<?php echo $js; ?>jquery.timepicker.min.js"></script>
		<script src="<?php echo $js; ?>scrollax.min.js"></script>
		<script src="<?php echo $js; ?>jquery-ui.min.js"></script>
		<script src="<?php echo $js; ?>slick.min.js"></script>
	  <script src="<?php echo $js; ?>cube.js"></script>

		<script src="<?php echo $js; ?>main.js"></script>
		<script src="<?php echo $live; ?>AJAX.js"></script>
		<script src="<?php echo $js; ?>js.js?v=<?php echo $jsVersion; ?>"></script>

<?php endif; ?>

<?php   if (isset($prev) && $prev == 1): ?>
<footer>
  <?php if (isset($GRPHview) &&  $GRPHview == 2): ?>

    <!-- /************** * GRAPHIC TEMP SCRIPTS * **************/ -->

		<script src="<?php echo $js; ?>jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>popper.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo $js; ?>owl.carousel.min.js"></script>
    <script src="<?php echo $js; ?>jquery.fancybox.min.js"></script>
    <script src="<?php echo $js; ?>aos.js"></script>

		<script src="<?php echo $js; ?>siteCarousel.js"></script>

  <?php endif; ?>
		<script src="<?php echo $js; ?>jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo $js; ?>bootstrap.min.js" type="text/javascript"></script>
		<!-- <script src="<?php echo $live; ?>AJAX.js" type="text/javascript"></script> -->
    <script src="<?php echo $js; ?>prev.js" type="text/javascript"></script>
  <?php endif; ?>

</footer>

  </body>
</html>
