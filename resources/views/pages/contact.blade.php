@extends('layouts.main')
@section('content')
<div class="container" id="main-container">
	<!-- Breadcrumb Starts -->
	<ol class="breadcrumb">
		<li><a href="index.html">Home</a></li>
		<li class="active">Contact Us</li>
	</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
	<h2 class="main-heading text-center">
	Contact Us
	</h2>
	<!-- Main Heading Ends -->
	<!-- Google Map Starts -->
	<div id="map-wrapper">
		<div id="map-block" style="height: 248px; position: relative; background-color: rgb(229, 227, 223); overflow: hidden;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;" class="gm-style"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: 427px; top: -198px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 427px; top: 58px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 171px; top: -198px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 171px; top: 58px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 683px; top: -198px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 683px; top: 58px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -85px; top: -198px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -85px; top: 58px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 939px; top: -198px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 939px; top: 58px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=17.135439,78.43558&amp;z=9&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 62px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 62px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white2.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 419px; top: 34px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data &copy;2015 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 161px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data &copy;2015 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data &copy;2015 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; position: absolute; right: 92px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><div draggable="false" style="-moz-user-select: none; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@17.1354389,78.4355803,9z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div></div></div>
	</div>
	<!-- Google Map Ends -->
	<!-- Starts -->
	<div class="row">
		<!-- Contact Details Starts -->
		<div class="col-sm-4">
			<div class="panel panel-smart">
				<div class="panel-heading">
					<h3 class="panel-title">Contact Details</h3>
				</div>
				<div class="panel-body">
					<ul class="list-unstyled contact-details">
						<li class="clearfix">
							<i class="fa fa-home pull-left"></i>
							<span class="pull-left">
								My Company <br>
								1247 LB Nagar Road, Hyderabad, <br>
								Telangana - 500 035
							</span>
						</li>
						<li class="clearfix">
							<i class="fa fa-phone pull-left"></i>
							<span class="pull-left">
								91 99887 74455 <br>
								001 123 974 9856
							</span>
						</li>
						<li class="clearfix">
							<i class="fa fa-envelope-o pull-left"></i>
							<span class="pull-left">
								info@demolink.com <br>
								admin@demolink.com <br>
								support@demolink.com
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Contact Details Ends -->
		<!-- Contact Form Starts -->
		<div class="col-sm-8">
			<div class="panel panel-smart">
				<div class="panel-heading">
					<h3 class="panel-title">Send us a mail</h3>
				</div>
				<div class="panel-body">
					<form role="form" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label" for="name">
								Name
							</label>
							<div class="col-sm-10">
								<input type="text" placeholder="Name" id="name" name="name" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="email">
								Email
							</label>
							<div class="col-sm-10">
								<input type="email" placeholder="Email" id="email" name="email" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="subject">
								Subject
							</label>
							<div class="col-sm-10">
								<input type="text" placeholder="Subject" id="subject" name="subject" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" for="message">
								Message
							</label>
							<div class="col-sm-10">
								<textarea placeholder="Message" rows="5" class="form-control" id="message" name="message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button class="btn btn-black text-uppercase" type="submit">		Submit
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Contact Form Ends -->
	</div>
	<!-- Ends -->
</div>
@endsection