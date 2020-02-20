<style type="text/css">
	.input-group
	{
		width:100%;
	}


/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
    height: 450px;
    overflow-y: auto;
}
.right
{
	float:right;
}
.position-relative
{
	position: relative;
  padding-top: 10px;
}
.f9px
{
	font-size: 9px;
}
.detailbox a
{
	cursor: pointer;
}
</style>
<div class="panel-heading">
	<div class="row">
	<div class="col-md-8">
   <h3 class="panel-title">Welcome to Bookchor</h3>
   <p class="panel-subtitle">Complete your on-boarding process to get started</p>
	</div>
	<div class="col-md-4">
		<div class="progress">
		<div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
											75%
		</div>
	</div>
		
		<p>Your process is 75% complete</p>

	</div>
</div>
</div>
<div class="panel-body">
   <div class="row">
      <div class="col-md-3">
         <div class="metric detailbox">
            <div class="corner-ribbon top-right sticky shadow">Pending</div>
            <span class="icon"><i class="fa fa-shopping-bag"></i></span>
            <center>
               <h3 class="detailheader">Business Details</h3>
               
                  <div class="boxcontent"><p>You need to provide your GSTIN, TAN and other business information.</p></div>
             
               <hr>
               <a herf="#"  data-toggle="modal" data-target="#business_details"><b>ADD DETAILS</b></a>
			</center>
         </div>
      </div>
      <div class="col-md-3">
         <div class="metric detailbox">
            <div class="corner-ribbon top-right sticky shadow">Pending</div>
            <span class="icon"><i class="fa fa-bank"></i></span>
            <center>
               <h3 class="detailheader">Bank Details</h3>
             
                 <div class="boxcontent"> <p>We need your bank account details and KYC documents to verify your bank account Details.</p></div>
              
                <hr>
               <a herf="#"  data-toggle="modal" data-target="#bank_details"><b>ADD DETAILS</b></a>
            </center>
         </div>
      </div>
      <div class="col-md-3">
         <div class="metric detailbox" >
            <div class="corner-ribbon top-right sticky shadow">Pending</div>
            <span class="icon"><i class="fa fa-tag"></i></span>
            <center>
               <h3 class="detailheader">Store Details</h3>
             
                  <div class="boxcontent"><p>You need to update your display name and business description.</p></div>
              
                <hr>
               <a herf="#"  data-toggle="modal" data-target="#store_details"><b>ADD DETAILS</b></a>
            </center>
         </div>
      </div>
      <div class="col-md-3">
         <div class="metric detailbox" >
            <div class="corner-ribbon top-right sticky shadow">Pending</div>
            <span class="icon"><i class="fa fa-list"></i></span>
            <center>
               <h3 class="detailheader">Add Listings</h3>
              
                 <div class="boxcontent"> <p>You need to add minimum 1 listings to activate your account.</p></div>
              
                 <hr>
                <a herf="#"  data-toggle="modal" data-target="#store_details"><b>ADD DETAILS</b></a>
            </center>
         </div>
      </div>
   </div>
</div>
<?php include 'bv_business_detail_modal.php';?>
<?php include 'bv_bank_detail_modal.php';?>
<?php include 'bv_store_detail_modal.php';?>