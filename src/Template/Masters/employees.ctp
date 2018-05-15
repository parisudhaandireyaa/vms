<?php
if($action!='list')
{
    ?>
    <section id="content">
        <div class="container">

            <div class="row">

                <div class="input-field col s6">
                    <p class="caption">Add Employees</p>
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
                                <h4 class="header2 temp_col">Employees Details</h4>
                                <div class="row">
                                    <?php echo $this->Form->create(null, ['url' => ['controller' => 'masters','action' => 'employees/add'], 'class' => 'col s12 right-alert']);?>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <i class="mdi-action-account-circle prefix"></i>
                                            <input id="first_input2" type="text" class="validate" name='visitor_type_name'>
                                            <label for="first_input2" data-error="Please enter visitor type name."
                                                   data-success="Perfect!">Visitor Type Name</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <select class='validate' style="margin-left:10% !important" name='status'>
                                                <option value="" disabled selected>Choose Status</option>
                                                <option value="active">Active</option>
                                                <option value="inactive">InActive</option>
                                            </select>
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


<?php }
else{
    ?>

    <section id="content">
    <div class="container">
        <p class="caption">Visitor Type List</p>
        <!--<div class="input-field col s6">
                                <a class="btn waves-effect waves-light blue" href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'users/add')); ?>"><i class="mdi-hardware-keyboard-tab"></i> Users Add</a>
                              </div> -->
        <div class="divider"></div>
        <!--jqueryvalidation-->
        <div id="jqueryvalidation" class="section">
            <div class="row">
                <div class="col m12">
                    <table class='display' id='data-table'>
                        <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($res as $data) {
                            echo "<tr>";
                            echo "<td>3</td>";
                            echo "<td>{$data['visitor_type_name']}</td>";
                            echo "<td>{$data['status']}</td>";
                            echo "</tr>";
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->

    <script>
        $(document).ready( function () {
            $('#data-table').DataTable();
        } );
    </script>

<?php }
?>
