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
					<form method="post" action="<?php echo BASE ?>/dashboard/update_member_info" enctype="multipart/form-data" class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
						<div class="m-portlet__body">
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Full Name:</label>
									<input type="text" name="name" value="<?php echo $data['name'] ?>" class="form-control m-input" placeholder="Enter full name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Mobile Number:</label>
									<input type="text" name="mobile" value="<?php echo $data['mobile'] ?>" class="form-control m-input" placeholder="Enter contact number">
								</div>
								<div class="col-lg-6 data_field">
									<label>Email:</label>
									<input type="email" name="email" value="<?php echo $data['email'] ?>" class="form-control m-input" placeholder="Enter Email">
								</div>
								<div class="col-lg-6">
									<label class="">Gender:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" value="male"  <?php echo ($data['gender']=='male')?'checked':'' ?>>Male
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" value="female"  <?php echo ($data['gender']=='female')?'checked':'' ?>>Female
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" name="gender" value="other"  <?php echo ($data['gender']=='other')?'checked':'' ?>>Other
											<span></span>
										</label>
									</div>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Religion:</label>
									<select name="religion" class="form-control m-input m-input--square">
										<option value="no_applicable" <?php echo ($data['religion']=='no_applicable')?'selected':'';?> selected="selected">Select Religion</option>
		                                <option value="islam" <?php echo ($data['religion']=='islam')?'selected':'';?>>Islam</option>
		                                <option value="hinduism" <?php echo ($data['religion']=='hinduism')?'selected':'';?>>Hinduism</option>
		                                <option value="buddhism" <?php echo ($data['religion']=='buddhism')?'selected':'';?>>Buddhism</option>
		                                <option value="christianity" <?php echo ($data['religion']=='christianity')?'selected':'';?>>Christianity</option>
		                                <option value="others" <?php echo ($data['religion']=='others')?'selected':'';?>>Others</option>
									</select>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">National ID:</label>
									<input type="text" name="n_id" value="<?php echo $data['n_id'] ?>" class="form-control m-input" placeholder="Enter National ID number">
								</div>
								
								<div class="col-lg-12">
									<label class="">Blood Group:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp"  value="A+">A+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp" value="A-">A-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='B+')?'checked':'' ?> name="blood_grp" value="B+">B+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp" value="B-">B-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp" value="O+">O+
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp" value="O-">O-
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" <?php echo ($data['blood_grp']=='A+')?'checked':'' ?> name="blood_grp" value="AB+">AB+
											<span></span>
										</label>

									</div>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Education institution:</label>
									<input type="text" name="edu_institution" value="<?php echo $data['edu_institution'] ?>" class="form-control m-input" placeholder="Education institution name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Subject:</label>
									<input type="text" name="subject" value="<?php echo $data['subject'] ?>" class="form-control m-input" placeholder="Enter Subject">
								</div>
								<div class="col-lg-6 data_field">
									<label>Workplace:</label>
									<input type="text" name="workplace" value="<?php echo $data['workplace'] ?>" class="form-control m-input" placeholder="Enter Workplace">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Occupation:</label>
									<select name="occupation" class="form-control m-input m-input--square">
										<option <?php echo ($data['occupation']=='no_applicable')?'selected':'';?> value="no_applicable">Select Occupation</option>
		                                <option <?php echo ($data['occupation']=='teacher')?'selected':'';?> value="teacher">Teacher</option>
		                                <option <?php echo ($data['occupation']=='engineer')?'selected':'';?> value="engineer">Engineer</option>
		                                <option <?php echo ($data['occupation']=='doctor')?'selected':'';?> value="doctor">Doctor</option>
		                                <option <?php echo ($data['occupation']=='farmer')?'selected':'';?> value="farmer">Farmer</option>
		                                <option <?php echo ($data['occupation']=='student')?'selected':'';?> value="student">Student</option>
		                                <option <?php echo ($data['occupation']=='bussiness')?'selected':'';?> value="bussiness">Bussiness</option>
		                                <option <?php echo ($data['occupation']=='banker')?'selected':'';?> value="banker">Banker</option>
		                                <option <?php echo ($data['occupation']=='advocate')?'selected':'';?> value="advocate">Advocate</option>
		                                <option <?php echo ($data['occupation']=='nurse')?'selected':'';?> value="nurse">nurse</option>
		                                <option <?php echo ($data['occupation']=='house_wife')?'selected':'';?> value="house_wife">House Wife</option>
		                                <option <?php echo ($data['occupation']=='imam')?'selected':'';?> value="imam">Imam</option>
		                                <option <?php echo ($data['occupation']=='moajjin')?'selected':'';?> value="moajjin">Moajjin</option>
		                                <option <?php echo ($data['occupation']=='job_holder')?'selected':'';?> value="job_holder">Job Holder</option>
		                                <option <?php echo ($data['occupation']=='other')?'selected':'';?> value="other">Other</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<label>Temporary address:</label>
									<input type="text" name="temp_address" value="<?php echo $data['temp_address'] ?>" class="form-control m-input" placeholder="Enter full name">
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Permanent address:</label>
									<input type="text" name="permanent_address" value="<?php echo $data['permanent_address'] ?>" class="form-control m-input" placeholder="Enter contact number">
								</div>
								<div class="col-lg-6 data_field">
									<label>Union:</label>
									<select name="u_nion" class="form-control m-input m-input--square">

										<option value="no_applicable" <?php echo ($data['u_nion']=='no_applicable')?'selected':'';?>>Select Union</option>
		                                <option value="ajgana" <?php echo ($data['u_nion']=='ajgana')?'selected':'';?>>Ajgana Union</option>
		                                <option value="anaitara" <?php echo ($data['u_nion']=='anaitara')?'selected':'';?>>Anaitara Union</option>
		                                <option value="bahuria" <?php echo ($data['u_nion']=='bahuria')?'selected':'';?>>Bahuria Union</option>
		                                <option value="banail" <?php echo ($data['u_nion']=='banail')?'selected':'';?>>Banail Union</option>
		                                <option value="banshtail" <?php echo ($data['u_nion']=='banshtail')?'selected':'';?>>Banshtail Union</option>
		                                <option value="bhaora" <?php echo ($data['u_nion']=='bhaora')?'selected':'';?>>Bhaora Union</option>
		                                <option value="bhatgram" <?php echo ($data['u_nion']=='bhatgram')?'selected':'';?>>Bhatgram Union</option>
		                                <option value="fatehpur" <?php echo ($data['u_nion']=='fatehpur')?'selected':'';?>>Fatehpur Union (Mirzapur)</option>
		                                <option value="gorai" <?php echo ($data['u_nion']=='gorai')?'selected':'';?>>Gorai Union</option>
		                                <option value="jamurki" <?php echo ($data['u_nion']=='jamurki')?'selected':'';?>>Jamurki Union</option>
		                                <option value="latifpur" <?php echo ($data['u_nion']=='latifpur')?'selected':'';?>>Latifpur Union</option>
		                                <option value="mohera" <?php echo ($data['u_nion']=='mohera')?'selected':'';?>>Mohera Union</option>
		                                <option value="tarafpur" <?php echo ($data['u_nion']=='tarafpur')?'selected':'';?>>Tarafpur Union</option>
		                                <option value="uarsi" <?php echo ($data['u_nion']=='uarsi')?'selected':'';?>>Uarsi Union</option>
									</select>
								</div>
								<div class="col-lg-6 data_field">
									<label class="">Word:</label>
									<select name="word_name" class="form-control m-input m-input--square">
										<option <?php echo ($data['word_name']=='no_applicable')?'selected':'';?> value="no_applicable">Select Word</option>
		                                <option <?php echo ($data['word_name']=='1')?'selected':'';?> value="1">1</option>
		                                <option <?php echo ($data['word_name']=='2')?'selected':'';?> value="2">2</option>
		                                <option <?php echo ($data['word_name']=='3')?'selected':'';?> value="3">3</option>
		                                <option <?php echo ($data['word_name']=='4')?'selected':'';?> value="4">4</option>
		                                <option <?php echo ($data['word_name']=='5')?'selected':'';?> value="5">5</option>
		                                <option <?php echo ($data['word_name']=='6')?'selected':'';?> value="6">6</option>
		                                <option <?php echo ($data['word_name']=='7')?'selected':'';?> value="7">7</option>
		                                <option <?php echo ($data['word_name']=='8')?'selected':'';?> value="8">8</option>
		                                <option <?php echo ($data['word_name']=='9')?'selected':'';?> value="9">9</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">

								<div class="col-lg-6 data_field">
									<label class="">Previous Organiazation:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="student" <?php echo ($data['pre_org']=='student')?'checked':'' ?> name="pre_org">Student
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="main_org" <?php echo ($data['pre_org']=='main_org')?'checked':'' ?> name="pre_org">Main
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="other" <?php echo ($data['pre_org']=='other')?'checked':'' ?> name="pre_org">Other
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="no" <?php echo ($data['pre_org']=='no')?'checked':'' ?> name="pre_org">No
											<span></span>
										</label>
									</div>		
								</div>

								<div class="col-lg-6 data_field">
									<label>Pre-organization status:</label>
									<select name="pre_org_status" class="form-control m-input m-input--square">
										<option value="no_applicable" <?php echo ($data['pre_org_status']=='no_applicable')?'selected':'';?> selected="selected">Select last org status</option>
		                                <option value="supporter" <?php echo ($data['pre_org_status']=='supporter')?'selected':'';?>>Supporter</option>
		                                <option value="worker" <?php echo ($data['pre_org_status']=='worker')?'selected':'';?>>Associate</option>
		                                <option value="associate" <?php echo ($data['pre_org_status']=='associate')?'selected':'';?>>Worker</option>
		                                <option value="member" <?php echo ($data['pre_org_status']=='member')?'selected':'';?>>Member</option>
		                                <option value="rokon" <?php echo ($data['pre_org_status']=='rokon')?'selected':'';?>>Rokon</option>
									</select>
								</div>


								<div class="col-lg-6 data_field">
									<label class="">Present Organiazation:</label>
									<div class="m-radio-inline">
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="student"  <?php echo ($data['present_org']=='student')?'checked':'' ?> name="present_org">Student
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											 <input type="radio" value="main_org"  <?php echo ($data['present_org']=='main_org')?'checked':'' ?> name="present_org">Main
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="other"  <?php echo ($data['present_org']=='other')?'checked':'' ?> name="present_org">Other
											<span></span>
										</label>
										<label class="m-radio m-radio--solid">
											<input type="radio" value="no"  <?php echo ($data['present_org']=='no')?'checked':'' ?> name="present_org">No
											<span></span>
										</label>
									</div>		
								</div>

								<div class="col-lg-6 data_field">
									<label class="">Present Organizational status:</label>
									<select name="present_org_status" class="form-control m-input m-input--square">
										<option value="no_applicable" <?php echo ($data['present_org_status']=='no_applicable')?'selected':'';?> selected="selected">Select last org status</option>
		                                <option value="supporter" <?php echo ($data['present_org_status']=='supporter')?'selected':'';?>>Supporter</option>
		                                <option value="worker" <?php echo ($data['present_org_status']=='worker')?'selected':'';?>>Associate</option>
		                                <option value="associate" <?php echo ($data['present_org_status']=='associate')?'selected':'';?>>Worker</option>
		                                <option value="member" <?php echo ($data['present_org_status']=='member')?'selected':'';?>>Member</option>
		                                <option value="rokon" <?php echo ($data['present_org_status']=='rokon')?'selected':'';?>>Rokon</option>
									</select>
								</div>
							</div>
							<div class="form-group m-form__group row">
								<div class="col-lg-6 data_field">
									<img src="<?php echo BASE.$data['image'] ?>" id="output"/ height="100px;" width="100px">
								</div>
								<div class="col-lg-6 data_field">
									<div class="custom-file">
										<input type="file" name="image" value="<?php echo BASE.$data['image'] ?>" accept="image/*" class="custom-file-input" id="customFile" onchange="loadFile(event)">
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
						<input type="" value="<?php echo $data['id']; ?>" name="member_id">
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