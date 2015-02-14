id	<!--      Wizard container        -->
							<div class="wizard-container" id="re-wizard">

								<?php
								if(isset($_SESSION['success']))
								{
								?>

								<div id="one" >

									<?php echo $_SESSION['success']; ?>
								</div>
								<?php
								}
								unset($_SESSION['success']);
								?>

								<div class="card wizard-card ct-wizard-green" id="wizard">

									<!--        You can switch "ct-wizard-azzure"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

									<div class="wizard-header">
										<h3><?php echo $Participate9; ?></h3>
									</div>
									<ul>
										<li>
											<a href="#personal" data-toggle="tab"><?php echo $Participate10; ?></a>
										</li>
										<li>
											<a href="#occupation" data-toggle="tab"><?php echo $occupation; ?></a>
										</li>
									</ul>
									<form name="myform" action="#" method="get" onsubmit="return chek();">
										<div class="tab-content">
											<div class="tab-pane" id="personal">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group left-inner-addon required-field-block">
																<span class="fa fa-user"></span>
																<span class="pull-left text-left" id="error1" style="color:red"></span>
															<input type="text" class="form-control fa fa-user" name="firstname"  id="fname" placeholder="   <?php echo $Participate11; ?>" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];} ?>" >
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
																	<span class="fa fa-user"></span>
											</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-user"></span>
															<span class="pull-left text-left" id="error2" style="color:red"></span>
															<input type="text" class="form-control fa fa-user" name="lastname" id="lname" placeholder="   <?php echo $Participate12; ?>" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-mobile-phone"></span>
															<span class="pull-left" id="error3" style="color:red"></span>
															<input type="tel" class="form-control fa fa-phone" name="phonnumber" id="tel" placeholder="  <?php echo $phonno; ?>" value="<?php if(isset($_SESSION['pnum'])){echo $_SESSION['pnum'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>

													<div class="col-md-6">

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-envelope"></span>
															<span class="pull-left" id="error4" style="color:red"></span>
															<input type="email" class="form-control fa fa-envelope" name="email" id="email" placeholder="   <?php echo $Participate13; ?>" value="<?php if(isset($_SESSION['em'])){echo $_SESSION['em'];} ?>"/>
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
															<?php
																if(isset($_SESSION['suc']))
																		{
															?>

															<div id="onono" class='text-danger pull-left' >

																<?php echo $_SESSION['suc']; ?>
															</div>
															<?php }
															unset($_SESSION['suc']);
															?>
														</div>
														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-tasks"></span>
															<span class="pull-left" id="error5" style="color:red"></span>
															<input type="text" class="form-control fa fa-tasks" name="occopation" id="job" placeholder="   <?php echo $Participate14; ?>" value="<?php if(isset($_SESSION['occ'])){echo $_SESSION['occ'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-globe"></span>
															<span class="pull-left" id="error6" style="color:red"></span>
															<input type="text" class="form-control fa fa-globe" name="company" id="company" placeholder="  <?php echo $Participate15; ?>" value="<?php if(isset($_SESSION['comp'])){echo $_SESSION['comp'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>
													<div class="row">
													<div class="separator-2"></div>
														<label><?php echo $Participate16; ?></label>
														<input type="checkbox" name="lan1" value="<?php echo $Participate17; ?>" id="lan1">
														Pashto&nbsp;&nbsp;
														<input type="checkbox" name="lan2" value="<?php echo $ps; ?>" id="lan2">
														Dari&nbsp;&nbsp;
														<input type="checkbox" name="lan3" value="<?php echo $Participate18; ?>" id="lan3">
														English&nbsp;&nbsp;
														<div class="form-group col-md-10 col-md-offset-1">
															<input type="text" class="form-control" name="lan4" id="other" placeholder="   <?php echo $Participate19; ?>">
															<span class="" id="error7" style="color:red"></span>
														</div>

														</div>
												</div>
												<div class="row">

													<?php
if(isset($_SESSION['su']))
{
													?>
													<div class= 'text- alert-dismissible text-danger text-center'>
														<?php echo $_SESSION['su']; ?>
													</div>
													<?php
													}
													unset($_SESSION['su']);
													?>
												</div>
											</div>
											<div class="tab-pane" id="occupation">
												<div class="row">
														<div class="form-group pull-left col-sm-6">
															<label><?php echo $wherp; ?></label> &nbsp;&nbsp;&nbsp;<br>
															<input type="radio" name="place" value="kabul" checked="">- Kabul &nbsp; <input type="radio" name="place" value="herat">- Herat
														</div>
														<div class="form-group pull-right col-sm-6">
															<label>Please, let us know what background you are coming from?</label>
															<input type="radio" name="back" value="social worker" checked=""> I am social worker &nbsp; <input type="radio" name="back" value="technologist‏"> I am a technologist
													  </div>
												<div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="pre-lab1" placeholder="<?php echo $Participate20; ?>"><?php if(isset($_SESSION['pre'])){echo $_SESSION['pre'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="intrest" placeholder="<?php echo $Participate21; ?>"><?php if(isset($_SESSION['in'])){echo $_SESSION['in'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="social" placeholder="<?php echo $Participate22; ?>"><?php if(isset($_SESSION['social'])){echo $_SESSION['social'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="problem" placeholder="<?php echo $Participate23; ?>"><?php if(isset($_SESSION['prob'])){echo $_SESSION['prob'];} ?></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wizard-footer">
											<div class="<?php echo $sclas; ?>">
												<input type='button' class='btn btn-next btn-primary btn-outline btn-sm ' name='next' value='<?php echo $Participate27; ?>' />

												<input type='submit' class='btn btn-finish btn-primary btn-outline btn-sm' name='Submit' value='<?php echo $Participate25; ?>' />
											</div>
											<div class="<?php echo $fclas; ?>">
												<input type='button' class='previous btn btn-previous btn-default btn-outline btn-sm' name='previous' value='<?php echo $Participate26; ?>' />
											</div>
											<div class="clearfix"></div>
										</div>
									</form>

								</div>
							</div>
							<!-- wizard container -->