<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="" />
		<title></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="styles/uikit/plugins/global/plugins.bundle.css?v=<?php echo filemtime('styles/uikit/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="styles/uikit/css/style.bundle.css?v=<?php echo filemtime('styles/uikit/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!-- our custom styles -->
		<link href="styles/main.css?v=<?php echo filemtime("styles/main.css"); ?>" rel="stylesheet" type="text/css" />
		<link href="styles/raw-main.css?v=<?php echo filemtime("styles/raw-main.css"); ?>" rel="stylesheet" type="text/css" />
		<!-- our custom styles end-->
	</head>
	
	<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-toolbar-enabled="true" class="app-default">

		<div id="container">
		

		<div class="">
			<div class="container">
			<button type="button" class="btn btn-primary text-center w-auto m-5" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_1">
    Click the Modal to test
</button>

<div class="modal   m-auto fade w-200" tabindex="-1" id="kt_modal_scrollable_1">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-header">
                <h5 class="modal-title">ZUNTIA</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body" style="min-height: 2500px min-width: 70%">
			<div class="flex row nav">
					<div class="col-6 row">
						<p class="col-6">PREVIEW</p>
						<p class="col-6 text-success" > <span><i class=" bi bi-grid"></i></span> approved</p>

					</div>
					<div class="col-6">
						<p>ACTIVITY</p>
					</div>
			</div>
                <div class="row">
					<div class="col-6">
						<div class="card card-css" style="width: 18rem;">


							<img src="https://media.istockphoto.com/id/115890820/photo/african-woman.jpg?s=612x612&w=0&k=20&c=mgBd423pmM8com_uarM7DkIapUuL83_J9Pc52UKlIZ4=" class="card-img-top" alt="...">
							<div class="card-body">
								<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, distinctio.</p>
								<div class="separator my-5"></div>
							</div>
							<div class="my-2">
								<select class="form-select form-select-sm form-select-solid" data-control="select2" data-close-on-select="false" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
									<option></option>
									<option value="1"> <span> <i class="bi bi-currency-bitcoin p-2"></i></span>Batesa Enterprise Limited</option>
									<option value="2">Gikpad Solutions</option>
								</select>
							</div>
							<div class="mb-5">
								<select class="form-select form-select-sm form-select-solid" data-control="select2" data-placeholder="Select an option">
									<option></option>
									<option value="1">Social Media</option>
									<option value="2">Newspaper</option>
								</select>
							</div>
							<div class="my-3 p-2">
								<b class="my-5 p-4">Selected Socials <span> <i class=" bi bi-pencil-square text-primary"></i></span></b>
								<div class="mt-5">
									<p >Slider goes here</p>
								</div>
								<p><b>scheduled for: </b><span class="text-muted">23/jun/2022 - 9:30</span></p>
								<div class="separator my-5"></div>
								<b>campaign: <span class="text-primary">This is our moment</span></b>
							</div>
			
						</div>
					</div>
					<div class="col-6">
						<div>
							<form action="">
							<div class="form-group">
								<textarea class="form-control" id="text-area1" rows="3">
						
								</textarea>
							</div>

							</form>
						</div>
						<div>
						<p><b class="text-muted">system: </b><span>Publishing to </span><span class="text-primary">Facebook - Batesa Official</span> > <span class="text-success">Successful</span>  <span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						<p><b class="text-muted">system: </b><span>Publishing to </span><span class="text-primary">Twitter - Batesa Enterprise Ltd</span> > <span class="text-success">Successful</span><span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						<p><b class="text-muted">system: </b><span>Publish </span><b class="">Facebook Group- Batesa Fun Group</b> > <span class="text-danger">Failed - </span><span class=" text-info">Try again</span><span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						<p><b class="text-muted">system: </b><span>Publish to Instagram</span><span class="text-primary">@batesaentsug - Batesa Official</span> > <span class="text-success">Successful</span><span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						<p><b class="text-muted">system: </b><span>Publish to </span><span class="text-primary">Twitter (Batesa Group)</span> > <span class="text-success">Successful</span><span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						<p><b class="text-muted">system: </b><span>Publish to Instagram - @kamo_group</span> > <span class="text-danger">Failed - </span> <span class=" text-info">Try again</span><span><i class="d-flex justify-content-end text-muted"> 30 minutes ago</i></span></p>
						</div>
						<div class="row">
							<div class="col-2">
							<p><i class="bi bi-person fs-1"></i></p>
							</div>
							<div class="chat-background mb-3 p-3 col-10">
								<div class="d-flex justify-content-between">
									<b>Grace Logan</b>
									<p class="text-success">Approved</p>
									<p class="text-info">2 hours ago</p>
								</div>	
								<p class="separator my-5"></p>

								<textarea class="form-control" style="border: none" placeholder="reply" id="" rows="1" ></textarea>

							</div>
						</div>
						<p><b class="text-primary">Grace Logan:</b> <span>Updated Scheduling from <b> 4th/jun/200</b> </span> to <b>23/jun/2022</b></p>
						<div>
						<div class="row">
							<div class="col-2">
							<p><i class="bi bi-person fs-1"></i></p>							</div>
							<div class="chat-background mb-3 p-3 col-10">
								<div class="d-flex justify-content-between">
									<b>Makula Francis</b>
									<p class="text-info">updated</p>
									<p class="text-info">3 hours ago</p>
								</div>	
								<p class="separator my-5"></p>

								<textarea class="form-control" style="border: none" placeholder="reply..." id="" rows="1" ></textarea>

							</div>
						</div>
						</div>
						<div class="row">
							<div class="col-2">
								<p><i class="bi bi-person fs-1"></i></p>
							</div>
							<div class="chat-background mb-3 p-3 col-8">
								<div class="d-flex justify-content-between">
									<b>Grace Logan </b>
									<p class="text-warning">commented</p>
									<p class="text-info">3 hours ago</p>
								</div>	
								<p>Could we have the image changed to a person holding a basket? I think this will give a clear picture of what product we are trying to sell</p>
								<div class="d-flex justify-content-evenly">
									<div class="d-flex">
										<p><i class="bi bi-chat-left text-primary p-2"></i></p>
										<p>3</p>
									</div>
									<div class="d-flex">
										<p><i class="bi bi-suit-heart text-danger p-2"></i></p>
										<p>12</p>
									</div>
										</div>
									<div class="row">
										<div class="col-2">
											<p><i class="bi bi-person fs-1"></i></p>
										</div>
										<div class="col-10">
											<div>
												<b>Mr. Anderson</b>
												<p class="text-primary" style="--bs-text-opacity: .5;">3 hours ago</p>
											</div>
											<div>
												<p> Hi Grace, Yes this is ok. Let me talk to the team. Please check back in 2 hrs</p>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-2">
											<p><i class="bi bi-person fs-1"></i></p>
										</div>
										<div class="col-10">
											<div>
												<b>Makula Francis</b>
												<p class="text-primary" style="--bs-text-opacity: .5;">3 hours ago</p>
											</div>
											<div>
												<p>The changes will be update in a while from now</p>
											</div>
										</div>
									</div>
									
								<p class="separator my-5"></p>

								<textarea class="form-control" style="border: none" placeholder="reply..." id="" rows="1" ></textarea>
									</div>


							</div>

							<div class="row">
								<div class="col-2 "><i class="bi bi-person fs-1"></i></div>
								<div class="col-10">
									<div class="d-flex justify-content-between">
										<p>Grace Logan</p>
										<p class="text-info"> Edited Caption</p>
										<p class="text-primary" style="--bs-text-opacity: .5;">3 hours ago</p>

									</div>
									<form>
										<fieldset class="border text-sm border border-success rounded p-2">
										<legend  class="float-none b w-auto p-1 "> Revised Default</legend>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis porro facere hic nam neque iusto</p>
										</fieldset>
									</form>
									<form>
										<fieldset class="border text-sm border rounded border-warning p-2">
										<legend  class="float-none b w-auto p-2 ">previous Default</legend>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis porro facere hic nam neque iusto</p>
										</fieldset>
									</form>
									<form>
										<fieldset class="border text-sm border rounded border-success p-2">
										<legend  class="float-none b w-auto p-2 ">Twitter Default</legend>
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis porro facere hic nam neque iusto</p>
										</fieldset>
									</form>

								</div>
							</div>
						</div>
					</div>
					
				</div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
			</div>
		</div>

		<!-- End::your code -->
		</div>

		<!--begin::Javascript-->
		<script>var hostUrl = "scripts/lib/uikit/";</script>
		<script src="scripts/lib/uikit/plugins/global/plugins.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/plugins/global/plugins.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/scripts.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/scripts.bundle.js') ?>"></script>
		<script src="scripts/lib/uikit/js/widgets.bundle.js?v=<?php echo filemtime('scripts/lib/uikit/js/widgets.bundle.js') ?>"></script>

		<script src="scripts/lib/custom.js?v=<?php echo filemtime('scripts/lib/custom.js') ?>"></script>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
