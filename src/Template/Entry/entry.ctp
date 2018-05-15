<section id="content">
        <div class="container">
          
		  <div class="row">
		  
                              <div class="input-field col s6">
							  <p class="caption tempcolor">Enter Visitors Information</p>

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
                        <h4 class="header2">User Details</h4>
                        <div class="row">
						<?php echo $this->Form->create(null, ['url' => ['controller' => 'entry','action' => 'visitorEntry'], 'class' => 'col s12 right-alert']);?>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <i class="mdi-action-settings-phone prefix"></i>
                                    <input id="age_input2" type="number" class="validate" name='contact_no'>
                                    <label for="age_input2" data-error="Please enter your Mobile.">Mobile</label>
                                  </div>
                                  <div class="input-field col s6">
                                    <select class='validate' style="margin-left:10% !important" name='role_id'>
									  <option value="" disabled selected>Campus</option>
									  <option value="1" selected>Campus1</option>
									  <option value="2">Campus2</option>
									</select>
                                    <label for="age_input2" data-error="Please enter your Mobile.">Campus</label>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                    <i class="mdi-action-account-box prefix"></i>
                                    <input id="age_input2" type="text" class="validate" name='visitor_name'>
                                    <label for="age_input2" data-error="Please enter your Mobile.">Name of the visitor</label>
                                  </div>
								  <div class="input-field col s6">
                                    <select class='validate' style="margin-left:10% !important" name='visitor_type'>
									  <option value="" disabled selected>Visitor Type</option>
                                        <?php foreach($visitor_type as $data){
                                            echo '<option value='.$data['id'].'>'.$data['visitor_type_name'].'</option>';
                                        }
                                        ?>
									</select>
                                    <label for="age_input2" data-error="Please enter your Mobile.">Visitor</label>
                                </div>
                              </div>
                              </div>
                              <div class="row">
                                  <div class="input-field col s6">
                                          <i class="mdi-action-account-box prefix"></i>
                                          <input id="age_input2" type="text" class="validate" name='purpose'>
                                          <label for="age_input2" data-error="Please enter your Mobile.">Purpose of
                                              the Visit
                                          </label>
                                </div>
                              </div>
                            <div class="row">
                              <div class="input-field col s12">
                                <button class="btn waves-effect waves-light right" type="submit">Submit
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
  $("[name='contact_no']").on("blur",function(){
		if(($("[name='contact_no']").val()).length > 9)
		{
			$.ajax({
				url:"getData",
				success:function(ret){
					obj = JSON.parse(ret);
                    console.log(obj);
                    $("[name='visitor_name']").val(obj.visitor_name).focus();
				}
			});
		}
  });
  
  </script>
  
