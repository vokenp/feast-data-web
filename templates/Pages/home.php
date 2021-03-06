<?php $this->assign('title', 'FEAST | '.h($currentEntity['portal_title'])); ?>

<?php echo $this->Html->css("home_style.css", array("inline"=>false)); ?>

<section class="main">
	    <div class="bottom-grid">
			<div class="logo">
				<h1> <a href="./"><img class='logo-image' src="/img/brand.png"></a></h1>
			</div>
		</div>
        
            <div class="col-md-4 col-md-offset-4 home-signin ">
                <div class="col-md-12">
                    <div class="panel panel-default card">
                        <div class="panel-heading ">
                            <p class='panel-title'>Sign in</p>
                        </div>
                        <div class="panel-body">
                            <div id="login">
                                <?= $this->Flash->render(); ?>                                
                                <form id="login" method="POST" action="/user/login">
                                    <div class="form-group">
                                        <label for="username">Email or Username </label>
                                        <input name="contact_email" type="text" class="form-control" id="loginInputUsername">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input name="password" type="password" class="form-control" id="loginInputPassword">
                                    </div>
                                  <div class='signin-action-block'><button type="submit" class="btn btn-sm btn-default" id="login-btn" >Sign in</button></div>
                                </form>
                                <div class='forgot-password-block'><p class="need-registration">Forgot your password? <a href="/user/resetPassword">Click Here</a></p></div>

                                 <div class='register-block'><p class="need-registration">Don't have an account yet?</p>
                                    <button type="button" class="btn btn-sm btn-default pull-right" data-toggle="modal" data-target="#register-modal">Register</button>
                                 </div>
                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-4 home-counter ">
                <div class="col-md-12">
                    <div class="panel panel-default card">
                        
                        <div class="panel-body">
            <div class="row row-2">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="counter1"><?= number_format($stat->countries, 0); ?><br></div> 
                    <span class="d-block caption"> Countries</span>   
                </div>  

              <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="counter1" > <?= number_format($stat->sites, 0); ?><br></div> 
                    <span class="d-block caption">Sites</span>
                </div>  

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="counter1"><?= number_format($stat->focus_groups, 0); ?><br> </div> 
                     <span class="d-block caption">Focus groups</span>
                </div>  

                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
                    <div class="counter1" > <?= number_format($stat->fodder_cultivated, 0); ?><br></div> 
                    <span class="d-block caption">Fodder ha</span>
                </div>  

                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
		


	     
</section>
<!-- <div class="untree_co-section-2 count-numbers">
<div class="container">
<div class="row">
		<div class="col-lg-12 mx-auto">
		<div class="row row-2">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
					<div class="counter" data-aos="fade-up" data-aos-delay="100">
						<strong class="d-block number" data-number="<?= $stat->countries; ?>">0</strong><br>
						<span class="d-block caption"> Countries</span>
					</div> 
				</div>	

			  <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
					<div class="counter" data-aos="fade-up" data-aos-delay="100">
						<strong class="d-block number" data-number="<?= $stat->sites; ?>">0</strong><br>
						<span class="d-block caption">Sites</span>
					</div> 
				</div>	

				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
					<div class="counter" data-aos="fade-up" data-aos-delay="10">
						<strong class="d-block number" data-number="<?= $stat->focus_groups; ?>">0</strong><br>
						<span class="d-block caption">Focus groups</span>
					</div> 
				</div>	

				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 text-center">
					<div class="counter" data-aos="fade-up" data-aos-delay="100">
						<strong class="d-block number" data-number="<?= $stat->fodder_cultivated; ?>">0</strong><br>
						<span class="d-block caption">Fodder Hectares</span>
					</div> 
				</div>	

			</div> 
		</div>
	</div>
</div>
</div> -->
<div class='modal fade' id="register-modal" tabindex='1' role='dialog' aria-labeled-by='register_model_label' aria-hidden='true'>
    <div class="modal-dialog">
        <div class="modal-content">            
            <!-- ko if: showRegisterForm -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Registration</h2>
                <p class='help-block'>* indicates required field</p>
            </div>
            <div class="modal-body">                
                <form role="form" id="register-user-form">
                   <div class='row'>
                   	 <div class="form-group col-md-6">
                        <label for="reg_salutation">Salutation</label>
                        <select name="reg_salutation" class="form-control" data-bind="optionsCaption:'Choose:', options: salutations, select2: {}, optionsText: 'description', optionsValue: 'id'"></select>                                    
                    </div>
                    <div class="form-group col-md-6">
                        <label for="reg_gender">Gender</label>
                        <select name='reg_gender' class="form-control" data-bind="optionsCaption:'Choose:', options: genders, select2: {}, optionsText:'description', optionsValue:'id'" ></select>
                    </div>
                   </div>
                    <div class="row">
                    	<div class="form-group col-md-6">
                        <label for="reg_first_name">First Name*</label>
                        <input name="reg_first_name" type="text" class="form-control" id="registerInputFname">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="reg_middle_name">Middle Name</label>
                        <input name="reg_middle_name" type="text" class="form-control" id="registerInputMname">
                    </div>
                    </div>

                    <div class="row">
                    	<div class="form-group col-md-6">
                        <label for="reg_last_name">Last Name*</label>
                        <input name="reg_last_name" type="text" class="form-control" id="registerInputLname">
                    </div>
                    <div class="form-group email-div col-md-6">
                        <label for="reg_email">Email*</label>
						<!-- ko if: errors() != null && errors().username != null -->
						<span class="text-error" data-bind="text: errors().username"></span>
						<!-- /ko -->
						<!-- ko if: errors() != null && errors().email != null -->
						<span class="text-error" data-bind="text: errors().email"></span>
						<!-- /ko -->
                        <input name="reg_email" type="email" class="form-control" id="registerInputEmail1">
                    </div>
                    </div>
                    <div class="row">
                    	<div class="form-group col-md-6">
                        <label for="reg_phone">Phone</label>
                        <input name="reg_phone" type="text" class="form-control" id="registerInputMobile">
                    </div>

                     <div class="form-group col-md-6">
                        <label for="reg_birthdate">Birth Date</label>
                        <input name="reg_birthdate" type="text" class="form-control" id="registerInputBirthdate" placeholder="YYYY-MM-DD">
                    </div>
                    </div>
  					<div class="row">
  						   <div class="form-group col-md-6">
                        <label for="reg_world_region">World Region</label>
                        <select name="reg_world_region" class="form-control" data-bind="optionsCaption:'Choose:', options: worldRegions, select2: {}, optionsText: 'name', value: selectedWorldRegion"></select>
                    </div>                        
                    <!-- ko if: selectedWorldRegion() !== undefined -->
                    <div class="form-group col-md-6">
                        <label for="reg_country">Country</label>
                        <select name="reg_country" class="form-control" data-bind="optionsCaption:'Choose:', options: selectedWorldRegion().system_country, select2: {}, optionsText: 'name', value: selectedCountry"></select>
                    </div>
                    <!-- /ko -->
  					</div>
                    <div class="row">
                    	<div class="form-group col-md-6">
                        <label for="reg_organization">Organization</label>
                        <input name="reg_organization" type="text" class="form-control" id="registerInputOrganization">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="reg_position">Position</label>
                        <input name="reg_position" type="text" class="form-control" id="registerInputPosition">
                    </div> 
                    </div>            
                   
                   <div class="row">
                   	 <div class="form-group password-div col-md-6">
                        <label for="reg_password">Password*</label>
						<!-- ko if: errors() != null && errors().reg_password != null && errors().reg_password.minLength != null -->
						<span class="text-error" data-bind="text: errors().reg_password.minLength" ></span>
						<!-- /ko -->
						<!-- ko if: errors() != null && errors().reg_password != null && errors().reg_password.maxLength != null -->
						<span class="text-error" data-bind="text: errors().reg_password.maxLength" ></span>
						<!-- /ko -->
						<!-- ko if: errors() != null && errors().reg_password != null && errors().reg_confirm_password != null -->
						<span class="text-error" data-bind="text: errors().reg_confirm_password" ></span>
						<!-- /ko -->
						<!-- ko if: errors() != null && errors().reg_password != null && errors().password != null -->
						<span class="text-error" data-bind="text: errors().password" ></span>
						<!-- /ko -->
                        <input name="reg_password" type="password" class="form-control" id="registerInputPassword">
                    </div>                                    
                    <div class="form-group confirm-password-div col-md-6">
                        <label for="reg_confirm_password">Confirm Password*</label>
                        <input name="reg_confirm_password" type="password" class="form-control" id="registerInputConfirmPassword">
                    </div> 
                   </div>
                    
                                                      
                </form>                
            </div>
            <div class="modal-footer">
                <span data-bind='text: lastRegistrationError'></span>
                <button class="btn btn-default" id="register-cancel-btn" data-dismiss='modal'>Cancel</button>
                <button class="btn btn-sm btn-primary" id="register-btn" data-bind="click: registerUser">Register</button>
            </div>
            <!-- /ko --> <!-- end showRegisterForm -->
            <!-- ko if: showRegisterSuccess -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title">Registration Successful</h2>
            </div>
            <div class="modal-body">       
            <?php if ($currentEntity['setting_email_confirmation_required']) { // At least need confirmation
                    if ($currentEntity['setting_approval_required']) { // Need both confirmation and approval ?>
                        <p>Thank you for registering.  Before activating your account, you will need to confirm your email address and have your registration approved by the administrator.  Please check your inbox (or spam folder) for the confirmation email.</p>
                    <?php } else { // Just need confirmation ?>
                        <p>Thank you for registering.  Before activating your account, you will need to confirm your email address.  Please check your inbox (or spam folder) for the confirmation email.</p>
                    <?php }
                  } else if ($currentEntity['setting_approval_required']) { // Just need approval ?>
                        <p>Thank you for registering.  Your registration is currently pending approval.  Expect an email from the administrator shortly.</p>
            <?php } ?>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" id="register-finish-btn" data-dismiss='modal'>Close</button>
            </div>
            <!-- /ko -->
        </div>
    </div>
</div>    

<?php $this->Html->script('user_access_strings.js', array('block' => 'script')) ?>
<?php $this->Html->script('user_access.js', array('block' => 'script')) ?>


<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>


