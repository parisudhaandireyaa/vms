  <section id="content">
        <div class="container">
          <p class="caption">Users List</p>
		  <!--<div class="input-field col s6">
                                <a class="btn waves-effect waves-light blue" href="<?php echo $this->Url->build(array('controller'=>'Masters','action'=>'users/add')); ?>"><i class="mdi-hardware-keyboard-tab"></i> Users Add</a>
                              </div> -->
          <div class="divider"></div>
          <!--jqueryvalidation-->
          <div id="jqueryvalidation" class="section">
            <div class="row">
              <div class="col m12">
                  <table class='display table table-striped table-bordered data_table' id='data-table'>
    <thead>
        <tr>
            <th>S.No</th>
            <th>Visitors Name</th>
			<th>Mobile</th>
			<th>Visitor Type</th>
			<th>Purpose</th>
			<th>To meet</th>
			<th>Remarks</th>
        </tr>
    </thead>
    <tbody>
	    <?php foreach($res as $data) {
           echo "<tr>";
		     echo "<td>3</td>";
             echo "<td>{$data['visitor_name']}</td>";
             echo "<td>{$data['contact_no']}</td>";
			 echo "<td>{$data['visitor_type']}</td>";
			 echo "<td>{$data['visitor_purpose']}</td>";
			 echo "<td>{$data['to_meet']}</td>";
			 echo "<td>{$data['remarks']}</td>";
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
