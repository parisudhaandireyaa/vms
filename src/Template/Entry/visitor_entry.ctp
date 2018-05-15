<section id="content">
        <div class="container">
          
		  <div class="row">
		  
                              <div class="input-field col s6">
							  <p class="caption">Add User</p>
                              </div>
							  <div class="input-field col s6">
                                <button class="btn waves-effect waves-light blue" type="submit" name="action">Submit
                                </button>
                              </div>
                            </div>
          <div class="divider"></div>
          <!--jqueryvalidation-->
          <div id="jqueryvalidation" class="section">
            <div class="row">
              <div class="col m12">
                  <!--Form validation with icons-->
                  <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <h4 class="header2 temp_col">User Details</h4>
                        <div class="row">
						<?php echo $this->Form->create(null, ['url' => ['controller' => 'masters','action' => 'users'], 'class' => 'col s12 right-alert']);?>
                              <div class="row">
                                  <div class="input-field col s6">
                                      <i class="mdi-action-account-circle prefix"></i>
                                    <input id="first_input2" type="text" class="validate" name='user_name'>
                                    <label for="first_input2" data-error="Please enter first name." data-success="Perfect!">User Name</label>
                                  </div>
								  <div class="input-field col s6">
                                      <i class="mdi-action-account-circle prefix"></i>
                                    <input id="first_input2" type="text" class="validate"  name='display_name'>
                                    <label for="first_input2" data-error="Please enter profile name." data-success="Perfect!">Profile Name</label>
                                  </div>
                              </div>
							  <div class="row">
                                  <div class="input-field col s6">
                                      <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="password" type="text" class="validate" name='password'>
                                    <label for="password" data-error="Please enter first name." data-success="Done!">Password</label>
                                  </div>
								  <div class="input-field col s6">
                                      <i class="mdi-action-lock-outline prefix"></i>
                                    <input id="confirm_passoword" type="text" class="validate">
                                    <label for="confirm_passoword" data-error="Please enter Confirm password." data-success="Nice">Confirm Password</label>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <i class="mdi-action-verified-user prefix"></i>
                                    <input id="age_input2" type="number" class="validate" name='primary_mobile'>
                                    <label for="age_input2" data-error="Please enter your Mobile." data-success="Wow!">Mobile</label>
                                  </div>
								  <div class="input-field col s6">
                                    <i class="mdi-communication-email prefix"></i>
                                    <input id="email_input2" type="text" class="validate" name='email'>
                                    <label for="email_input2" class="" data-error="Please enter valid email." data-success="I Like it!">Email</label>
                                  </div>
                              </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <select class='validate' style="margin-left:10% !important" name='role_id'>
									  <option value="" disabled selected>Choose role</option>
									  <option value="1">Admin</option>
									  <option value="2">Security</option>
									</select>
                                    <label for="age_input2" data-error="Please enter your Mobile." data-success="Wow!">Role</label>
                                </div>
                              </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                  <i class="mdi-content-send right"></i>
                                </button>
                              </div>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
          
          
          <!-- Floating Action Button -->
            <div class="fixed-action-btn" style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large">
                  <i class="mdi-action-stars"></i>
                </a>
                <ul>
                  <li><a href="css-helpers.html" class="btn-floating red"><i class="large mdi-communication-live-help"></i></a></li>
                  <li><a href="app-widget.html" class="btn-floating yellow darken-1"><i class="large mdi-device-now-widgets"></i></a></li>
                  <li><a href="app-calendar.html" class="btn-floating green"><i class="large mdi-editor-insert-invitation"></i></a></li>
                  <li><a href="app-email.html" class="btn-floating blue"><i class="large mdi-communication-email"></i></a></li>
                </ul>
            </div>
            <!-- Floating Action Button -->
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->

      

    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->
  
<script>
    alert();

</script>
