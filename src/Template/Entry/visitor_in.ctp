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
			<th>Out</th>
        </tr>
    </thead>
    <tbody>
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
         table= $('#data-table').DataTable({
		    ajax:{
			  url:"visitorInData",
			  data:function(d){
			      d.req_from="vi"
			  }
			},
			"columns": [
                {"data": "id"},
                {"data": "visitor_name"},
                {"data": "contact_no"},
                {"data": "visitor_type"},
                {"data": "visiting_purpose"},
                {"data": "to_meet"},
                {"data": "remarks"},
                {
                    "render": function (data, type, row, meta) {
                        return "<button class='btn btn-sm waves-effect waves-light blue out_entry' ids = {$data['id']}>Out </button>";
                    },
                    "targets": 0,
                }
            ],
		 });
    } );
	$("body").on("click",".out_entry",function(){
	   $.ajax({
	        url:"outEntry",
			data:{"id":$(this).attr('ids')},
			success:function(){
	             table.ajax.reload();
			},
	   });
	})
  </script>
