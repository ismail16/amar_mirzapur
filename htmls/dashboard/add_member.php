<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">Add member</h3>
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
					<form method="post" action="<?php echo BASE ?>/dashboard/save_member_info" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Full Name:</label>
									<input type="text" name="name" class="form-control m-input" placeholder="Enter full name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Mobile Number:</label>
									<input type="text" name="mobile" class="form-control m-input" placeholder="Enter contact number">
								</div>
								<div class="col-lg-6 data_field">
									<label>Email:</label>
									<input type="email" name="email" class="form-control m-input" placeholder="Enter Email">
								</div>
								<div class="col-lg-6">
									<label class="">Gender:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" checked value="male">Male
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" value="female">Female
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" value="other">Other
											<span></span>
										</label>
									</div>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Religion:</label>
									<select name="religion" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select Religion</option>
		                                <option value="islam">Islam</option>
		                                <option value="hinduism">Hinduism</option>
		                                <option value="buddhism">Buddhism</option>
		                                <option value="christianity">Christianity</option>
		                                <option value="others">Others</option>
									</select>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">National ID:</label>
									<input type="text" name="n_id" class="form-control m-input" placeholder="Enter National ID number">
								</div>
								
								<div class="col-lg-12">
									<label class="">Blood Group:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" checked value="A+">A+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="A-">A-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="B+">B+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="B-">B-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="O+">O+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="O-">O-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="blood_grp" value="AB+">AB+
											<span></span>
										</label>

									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Education institution:</label>
									<input type="text" name="edu_institution" class="form-control m-input" placeholder="Education institution name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Subject:</label>
									<input type="text" name="subject" class="form-control m-input" placeholder="Enter Subject">
								</div>
								<div class="col-lg-6 data_field">
									<label>Workplace:</label>
									<input type="text" name="workplace" class="form-control m-input" placeholder="Enter Workplace">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Occupation:</label>
									<select name="occupation" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select Occupation</option>
		                                <option value="teacher">Teacher</option>
		                                <option value="engineer">Engineer</option>
		                                <option value="doctor">Doctor</option>
		                                <option value="farmer">Farmer</option>
		                                <option value="student">Student</option>
		                                <option value="bussiness">Bussiness</option>
		                                <option value="banker">Banker</option>
		                                <option value="advocate">Advocate</option>
		                                <option value="nurse">nurse</option>
		                                <option value="house_wife">House Wife</option>
		                                <option value="imam">Imam</option>
		                                <option value="moajjin">Moajjin</option>
		                                <option value="job_holder">Job Holder</option>
		                                <option value="other">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Temporary address:</label>
									<input type="text" name="temp_address" class="form-control m-input" placeholder="Enter full name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Permanent address:</label>
									<input type="text" name="permanent_address" class="form-control m-input" placeholder="Enter contact number">
								</div>
								<div class="col-lg-6 data_field">
									<label>Union:</label>
									<select name="u_nion" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select Union</option>
		                                <option value="ajgana">Ajgana Union</option>
		                                <option value="anaitara">Anaitara Union</option>
		                                <option value="bahuria">Bahuria Union</option>
		                                <option value="banail">Banail Union</option>
		                                <option value="banshtail">Banshtail Union</option>
		                                <option value="bhaora">Bhaora Union</option>
		                                <option value="bhatgram">Bhatgram Union</option>
		                                <option value="fatehpur">Fatehpur Union (Mirzapur)</option>
		                                <option value="gorai">Gorai Union</option>
		                                <option value="jamurki">Jamurki Union</option>
		                                <option value="latifpur">Latifpur Union</option>
		                                <option value="mohera">Mohera Union</option>
		                                <option value="tarafpur">Tarafpur Union</option>
		                                <option value="uarsi">Uarsi Union</option>
									</select>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Word:</label>
									<select name="word_name" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select Word</option>
		                                <option value="1">1</option>
		                                <option value="2">2</option>
		                                <option value="3">3</option>
		                                <option value="4">4</option>
		                                <option value="5">5</option>
		                                <option value="6">6</option>
		                                <option value="7">7</option>
		                                <option value="8">8</option>
		                                <option value="9">9</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">

								<div class="col-lg-6 data_field">
									<label class="">Previous Organiazation:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="student" name="pre_org">Student
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="main_org" name="pre_org">Main
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="other" name="pre_org">Other
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="no" name="pre_org">No
											<span></span>
										</label>
									</div>		
								</div>

								<div class="col-lg-6 data_field">
									<label>Pre-organization status:</label>
									<select name="pre_org_status" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select last org status</option>
		                                <option value="supporter">Supporter</option>
		                                <option value="worker">Associate</option>
		                                <option value="associate">Worker</option>
		                                <option value="member">Member</option>
		                                <option value="rokon">Rokon</option>
									</select>
								</div>


								<div class="col-lg-6 data_field">
									<label class="">Present Organiazation:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="student" name="present_org">Student
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="main_org" name="present_org">Main
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="other" name="present_org">Other
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="no" name="present_org">No
											<span></span>
										</label>
									</div>		
								</div>

								<div class="col-lg-6 data_field">
									<label class="">Present Organizational status:</label>
									<select name="present_org_status" class="form-control m-input m-input--square">
										<option value="no_applicable" selected="selected">Select present org status</option>
		                                <option value="supporter">Supporter</option>
		                                <option value="worker">Associate</option>
		                                <option value="associate">Worker</option>
		                                <option value="member">Member</option>
		                                <option value="rokon">Rokon</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<img id="output"/ height="100px;" width="100px">
								</div>
								<div class="col-lg-6 data_field">
									<div class="custom-file">
										<input type="file" name="image" accept="image/*" class="custom-file-input" id="customFile" onchange="loadFile(event)">
										<label name="image" class="custom-file-label selected" for="customFile"></label>
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
										<button type="submit" class="btn btn-primary">Save</button>
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
		margin-bottom: 15px;
	}
</style>