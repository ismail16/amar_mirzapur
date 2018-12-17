<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">Profile view</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">-</li>
					<li class="m-nav__item">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">Add member</span>
						</a>
					</li>
				</ul>
			</div>
			<div>
				<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
						<i class="la la-plus m--hide"></i>
						<i class="la la-ellipsis-h"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first m--hide">
											<span class="m-nav__section-text">Quick Actions</span>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-share"></i>
												<span class="m-nav__link-text">Activity</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-chat-1"></i>
												<span class="m-nav__link-text">Messages</span>
											</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit">
										</li>
										<li class="m-nav__item">
											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- END: Subheader -->
	<div class="m-content">
		<div class="row">
			<div class="col-lg-10">
				<div class="m-portlet">
					<form method="post" action="<?php echo BASE ?>/dashboard/update_member_info" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">

						<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions--solid">
								<div class="row">
									<div class="col-lg-12 m--align-center">
										<!-- <strong><span class="data_strong"><?php echo $data['name'] ?></span></strong> -->
									</div>
								</div>
							</div>
						</div>

						<div class="m-portlet__body">

							<div class="row">
								<div class="col-lg-6">
									<div class="m-form__group form-group row">
										<div class="col-lg-6">
									<!-- <img src="<?php echo BASE.$data['image'] ?>" id="output"/ height="160px;" width="160px"> -->
									<img src="https://cdn.shopify.com/s/files/1/0014/2743/9710/users/DSC0470_128x.jpeg?v=1531820411" id="output"/ height="160px;" width="160px">
								</div>
									</div>
								</div>
								<div class="col-lg-6" style="margin: auto;">
									<div class="m-form__group form-group row">
										<label class="col-4 text-left">Name</label>
										<label class="col-8 text-left"><strong>: <span class="data_strong"><?php echo $data['name'] ?></span></strong></label>
										<label class="col-4 text-left">Mobile</label>
										<label class="col-8 text-left"><strong>: <span class="data_strong"> <?php echo $data['mobile'] ?></span></strong></label>
										<label class="col-4 text-left">Email</label>
										<label class="col-8 text-left"><strong>: <span class="data_strong"> <?php echo $data['email'] ?></span></strong></label>
									</div>
								</div>
							</div>
							<hr>
							<div class="row" style="">
								<div class="col-lg-6 data_field">
									<div class="m-form__group form-group row">
										<label class="col-6 text-left">Gender</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['gender'] ?></span></strong></label>
										<label class="col-6 text-left">Blood Group</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['blood_grp'] ?></span></strong></label>
										<label class="col-6 text-left">Religion</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['religion'] ?></span></strong></label>
										<label class="col-6 text-left">National ID</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['n_id'] ?></span></strong></label>
									</div>
								</div>
								<div class="col-lg-6 data_field">
									<div class="m-form__group form-group row">
										<label class="col-6 text-left">Education institution</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['edu_institution'] ?></span></strong></label>
										<label class="col-6 text-left">Subject</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['subject'] ?></span></strong></label>
										<label class="col-6 text-left">Workplace</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['workplace'] ?></span></strong></label>
										<label class="col-6 text-left">Occupation</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['occupation'] ?></span></strong></label>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 data_field">
									<div class="m-form__group form-group row">
										<label class="col-6 text-left">Temporary address</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['temp_address'] ?></span></strong></label>
										<label class="col-6 text-left">Permanent address</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['permanent_address'] ?></span></strong></label>
										<label class="col-6 text-left">Union</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['u_nion'] ?></span></strong></label>
										<label class="col-6 text-left">Word</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['word_name'] ?></span></strong></label>
									</div>
								</div>
								<div class="col-lg-6 data_field">
									<div class="m-form__group form-group row">
										<label class="col-6 text-left">Previous Organiazation</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['pre_org'] ?></span></strong></label>
										<label class="col-6 text-left">Pre-organization status</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['pre_org_status'] ?></span></strong></label>
										<label class="col-6 text-left">Present Organiazation</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['present_org'] ?></span></strong></label>
										<label class="col-6 text-left">Present Organizational status</label>
										<label class="col-6 text-left"><strong>: <span class="data_strong"> <?php echo $data['present_org_status'] ?></span></strong></label>
									</div>
								</div>									
							</div>	
						</div>
						<script>
							var loadFile = function(event) {
								var output = document.getElementById('output');
								output.src = URL.createObjectURL(event.target.files[0]);
							};
						</script>

						<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
							<div class="m-form__actions m-form__actions--solid">
								<div class="row">
									<div class="col-lg-12 m--align-right">
										<button type="reset" class="btn btn-secondary">Cancel</button>
										<button type="submit" class="btn btn-primary">Print</button>
									</div>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<style type="text/css">
	.data_field{
		margin-bottom: 16px;
	}
	.data_strong{
		margin-left: 30px;
	}
</style>