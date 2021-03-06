<?php include 'include/navigation/sidebar.php';  ?>
		<div id="content">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="pull-left">
							<p class="nav-drawer" id="sidebarCollapse"><span class="sidemenu"></span></p>
							<span class="brand-text">SmartShelf</span>		
						</div>
						<div class="pull-right">
							<a href="search.php" rel="external"><span class="search pull-left"><i class="fa fa-search search"></i></span></a>
							<span class="more-options"></i></span>
						</div>						
					</div>
				</div>	
			</nav>
			<div class="tab-wrapper">
				<ul id="optionTab" class="nav nav-tabs" style="width:498px;">
					<li class="active"><a href="#undergraduate">HEALTH</a></li>
					<li><a href="#postgraduate">FINANCE</a></li>
					<li><a href="#interests">RELATIONSHIP</a></li>		
					<li><a href="#textbook">BUSINESS</a></li>
					<li><a href="#techicalpaper">FAITH</a></li>
					<li><a href="#mustread">TECHNOLOGY</a></li>				
				</ul>
			</div>
			<div class="overlay">


			<div class="details package">
			<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Health Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="health_details">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
			
			<div class="details Course_Material">
			<div id="myModal1" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Finance Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="Finances">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
			<div class="details IT_Report">
				<div id="myModal2" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Relationship Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="relationship1">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>

			<div class="details Project_Work">
				<div id="myModal3" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Business Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="business1">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
			<div class="details GraduatePackage">
				<div id="myModal4" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Faith Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="faith1">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
			<div class="details Course_Material">
				<div id="myModal5" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content" style="padding: 10px;">
				      <div class="modal-header">
				        <button type="button" class="close popupDelete" id="" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Technology Details</h4>
				      </div>
				      <div class="modal-body">
				        <div class="technology1">
						
						</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default popupDelete" id="" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>

			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="undergraduate" style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="health">
							
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="postgraduate"style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="finance">
							
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="interests"style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="relationship">
							
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="textbook"style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="business">

						</div>
					</div>										
				</div>
				<div class="tab-pane fade" id="techicalpaper"style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="faith">
						</div>
					</div>										
				</div>
				<div class="tab-pane fade" id="mustread"style="overflow-x: scroll;">
					<div class="col-sm-6 col-xs-12 books-wrapper">
						<div class="technology">
							
						</div>
					</div>										
				</div>
			</div>			
		</div>

			<script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>
			<script type="text/javascript" src="assets/js/page/archive.js"></script>
			<script type="text/javascript" src="assets/js/bootstrap-3.3.7.min.js"></script>
			<script type="text/javascript" src="assets/js/scripts.js"></script>

			<noscript>
				<style type="text/css">
				body {
					display: none ;
					visibility: none;
				}
			</style>
			<!-- <META HTTP-EQUIV="Refresh" CONTENT="0;URL=https://play.google.com/store/apps/details?id=com.danielobasi.smartbooks"> -->
		</noscript>
	</body>
	</html>
<style>
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    border: 0px solid transparent;
    border-bottom: 3px solid #fff !important;
    background-color: #1d2d42 !important;
    color: #fff;
}
</style>
<script>
  function payWithPaystack(){
						var email = $("#btn-downloadbook").attr("email");
						var price = $("#btn-downloadbook").attr("price");
						var phone = $('.phone').val();
						// alert(phone);
						    var handler = PaystackPop.setup({
						      key: 'pk_test_0d82aa4c8cc3c05f4c41bb5dbdde0df13b6cb9cc',
						      email: email,
						      amount: price,
						      metadata: {
						         custom_fields: [
						            {
						                display_name: "Mobile Number",
						                variable_name: "mobile_number",
						                value: phone
						            }
						         ]
						      },
						      callback: function(response){
						          alert('success. transaction ref is ' + response.reference);
						        },
						      onClose: function(){
						          alert('window closed');
						      }
						    });
						    handler.openIframe();
	}
 $(document).ajaxComplete(function(){
 	$("#btn-downloadbook").click(function(){
 			              swal({
                        title: "Procced Payment",
                        // text: "great",
                        type: "success",
                        showCancelButton: false,
                        closeOnConfirm: true,
                        showLoaderOnConfirm: false,
                      })
                   	payWithPaystack();
           });
    });
</script>


