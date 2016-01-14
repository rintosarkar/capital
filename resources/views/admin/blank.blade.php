@extends('layouts.adminMaster')

@section('style')
	{{-- <link href="css/style.css" rel="stylesheet"> --}}
	<link href="css/jquery.stepy.css" rel="stylesheet">
	{{-- <link href="css/style-responsive.css" rel="stylesheet"> --}}

@stop

@section('body-content')
	    
	  <div class="row">
	      <div class="col-md-12">
	          <div class="square-widget">
	              <div class="widget-container">
	                  <div class="stepy-tab">
	                  </div>
	                  <form id="default" class="form-horizontal">
	                      <fieldset title="Initial Info">
	                          <legend>Personal Information</legend>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Full Name</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Full Name" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Email Address</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Email Address" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">User Name</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Username" class="form-control">
	                              </div>
	                          </div>
	                      </fieldset>
	                      <fieldset title="Contact Info">
	                          <legend>Contact Details</legend>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Phone</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Phone" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Mobile</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Mobile" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Address</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <textarea rows="5" cols="60" class="form-control"></textarea>
	                              </div>
	                          </div>
	                      </fieldset>
	                      <fieldset title="Billing Details">
	                          <legend>Billing Details</legend>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Billing Name 1</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Billing Name 1" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Billing Name 2</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <input type="text" placeholder="Billing Name 2" class="form-control">
	                              </div>
	                          </div>
	                          <div class="form-group">
	                              <label class="col-md-2 col-sm-2 control-label">Status</label>
	                              <div class="col-md-6 col-sm-6">
	                                  <textarea rows="5" cols="60" class="form-control"></textarea>
	                              </div>
	                          </div>
	                      </fieldset>
	                      <fieldset title="Final Step">
	                          <legend>Final Step Information</legend>
	                          <div class="form-group">
	                              <div class="col-md-12">
	                                  <p>Congratulations This is the Final Step</p>
	                              </div>
	                          </div>
	                      </fieldset>
	                      <button class="btn btn-info finish">
	                          Finish </button>
	                  </form>
	              </div>
	          </div>
	      </div>
	  </div>  
	    
@stop

@section('script')
	<!-- Placed js at the end of the document so the pages load faster -->
	{{-- // <script src="js/jquery-1.10.2.min.js"></script> --}}
	{{-- // <script src="js/jquery-ui-1.9.2.custom.min.js"></script> --}}
	{{-- // <script src="js/jquery-migrate-1.2.1.min.js"></script> --}}
	{{-- // <script src="js/jquery.validate.min.js"></script> --}}
	<script src="js/jquery.stepy.js"></script>
	{{-- // <script src="js/bootstrap.min.js"></script> --}}
	{{-- // <script src="js/modernizr.min.js"></script> --}}
	{{-- // <script src="js/jquery.nicescroll.js"></script> --}}


	<!--common scripts for all pages-->
	{{-- // <script src="js/scripts.js"></script> --}}

	<script>
	    /*=====STEPY WIZARD====*/
	    $(function() {
	        $('#default').stepy({
	            backLabel: 'Previous',
	            block: true,
	            nextLabel: 'Next',
	            titleClick: true,
	            titleTarget: '.stepy-tab'
	        });
	    });
	</script>    
@stop