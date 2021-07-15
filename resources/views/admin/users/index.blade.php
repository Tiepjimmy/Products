@extends('layouts.admin')
@section('content')
	@push('styles')
    <link href="{{ asset('css/users.css') }}" rel="stylesheet">
	@endpush
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<!--begin::Container-->
			<div id="kt_content_container" class="container">
				<!--begin::Card-->
				<div class="card">
					<!--begin::Card header-->
					<div class="card-header border-0 pt-6">
						<!--begin::Card title-->
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
								<span class="svg-icon svg-icon-1 position-absolute ms-6">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->
								<input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search user" />
							</div>
							<!--end::Search-->
						</div>
						<!--begin::Card title-->
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Toolbar-->
							<div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
								<!--begin::Filter-->
								<button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
								<!--begin::Svg Icon | path: icons/duotone/Text/Filter.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->Filter</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Separator-->
									<!--begin::Content-->
									<div class="px-7 py-5" data-kt-user-table-filter="form">
										<!--begin::Input group-->
										<div class="mb-10">
											<label class="form-label fs-6 fw-bold">Role:</label>
											<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
												<option></option>
												<option value="Administrator">Administrator</option>
												<option value="Analyst">Analyst</option>
												<option value="Developer">Developer</option>
												<option value="Support">Support</option>
												<option value="Trial">Trial</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<label class="form-label fs-6 fw-bold">Two Step Verification:</label>
											<select class="form-select form-select-solid fw-bolder" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
												<option></option>
												<option value="Enabled">Enabled</option>
											</select>
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-white btn-active-light-primary fw-bold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
											<button type="submit" class="btn btn-primary fw-bold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Content-->
								</div>
								<!--end::Menu 1-->
								<!--end::Filter-->
								<!--begin::Export-->
								<button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
								<!--begin::Svg Icon | path: icons/duotone/Files/Export.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24" />
											<path d="M17,8 C16.4477153,8 16,7.55228475 16,7 C16,6.44771525 16.4477153,6 17,6 L18,6 C20.209139,6 22,7.790861 22,10 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,9.99305689 C2,7.7839179 3.790861,5.99305689 6,5.99305689 L7.00000482,5.99305689 C7.55228957,5.99305689 8.00000482,6.44077214 8.00000482,6.99305689 C8.00000482,7.54534164 7.55228957,7.99305689 7.00000482,7.99305689 L6,7.99305689 C4.8954305,7.99305689 4,8.88848739 4,9.99305689 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,10 C20,8.8954305 19.1045695,8 18,8 L17,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) scale(1, -1) rotate(-180.000000) translate(-12.000000, -8.000000)" x="11" y="2" width="2" height="12" rx="1" />
											<path d="M12,2.58578644 L14.2928932,0.292893219 C14.6834175,-0.0976310729 15.3165825,-0.0976310729 15.7071068,0.292893219 C16.0976311,0.683417511 16.0976311,1.31658249 15.7071068,1.70710678 L12.7071068,4.70710678 C12.3165825,5.09763107 11.6834175,5.09763107 11.2928932,4.70710678 L8.29289322,1.70710678 C7.90236893,1.31658249 7.90236893,0.683417511 8.29289322,0.292893219 C8.68341751,-0.0976310729 9.31658249,-0.0976310729 9.70710678,0.292893219 L12,2.58578644 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 2.500000) scale(1, -1) translate(-12.000000, -2.500000)" />
										</g>
									</svg>
								</span>
								<!--end::Svg Icon-->Export</button>
								<!--end::Export-->
								<!--begin::Add user-->
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
								<!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
										<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
										<rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
									</svg>
								</span>
								<!--end::Svg Icon-->Add User</button>
								<!--end::Add user-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Group actions-->
							<div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
								<div class="fw-bolder me-5">
								<span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
								<button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
							</div>
							<!--end::Group actions-->
							<!--begin::Modal - Adjust Balance-->
							<div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Export Users</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
															<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
															<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_export_users_form" class="form" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">Select Roles:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bolder">
														<option></option>
														<option value="Administrator">Administrator</option>
														<option value="Analyst">Analyst</option>
														<option value="Developer">Developer</option>
														<option value="Support">Support</option>
														<option value="Trial">Trial</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Select Export Format:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bolder">
														<option></option>
														<option value="excel">Excel</option>
														<option value="pdf">PDF</option>
														<option value="cvs">CVS</option>
														<option value="zip">ZIP</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center">
													<button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - New Card-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header" id="kt_modal_add_user_header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add User</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
															<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
															<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
														</g>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_add_user_form" class="form" action="#">
												<!--begin::Scroll-->
												<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="d-block fw-bold fs-6 mb-5">Avatar</label>
														<!--end::Label-->
														<!--begin::Image input-->
														<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
															<!--begin::Preview existing avatar-->
															<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-1.jpg);"></div>
															<!--end::Preview existing avatar-->
															<!--begin::Label-->
															<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
																<i class="bi bi-pencil-fill fs-7"></i>
																<!--begin::Inputs-->
																<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
																<input type="hidden" name="avatar_remove" />
																<!--end::Inputs-->
															</label>
															<!--end::Label-->
															<!--begin::Cancel-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Cancel-->
															<!--begin::Remove-->
															<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
																<i class="bi bi-x fs-2"></i>
															</span>
															<!--end::Remove-->
														</div>
														<!--end::Image input-->
														<!--begin::Hint-->
														<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
														<!--end::Hint-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fw-bold fs-6 mb-2">Full Name</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-7">
														<!--begin::Label-->
														<label class="required fw-bold fs-6 mb-2">Email</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="e.smith@kpmg.com.au" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-7">
														<!--begin::Label-->
														<label class="required fw-bold fs-6 mb-5">Role</label>
														<!--end::Label-->
														<!--begin::Roles-->
														<!--begin::Input row-->
														<div class="d-flex fv-row">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_0">
																	<div class="fw-bolder text-gray-800">Administrator</div>
																	<div class="text-gray-600">Best for business owners and company administrators</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex fv-row">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_1">
																	<div class="fw-bolder text-gray-800">Developer</div>
																	<div class="text-gray-600">Best for developers or people primarily using the API</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex fv-row">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_2">
																	<div class="fw-bolder text-gray-800">Analyst</div>
																	<div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex fv-row">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_3">
																	<div class="fw-bolder text-gray-800">Support</div>
																	<div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<div class='separator separator-dashed my-5'></div>
														<!--begin::Input row-->
														<div class="d-flex fv-row">
															<!--begin::Radio-->
															<div class="form-check form-check-custom form-check-solid">
																<!--begin::Input-->
																<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
																<!--end::Input-->
																<!--begin::Label-->
																<label class="form-check-label" for="kt_modal_update_role_option_4">
																	<div class="fw-bolder text-gray-800">Trial</div>
																	<div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
																</label>
																<!--end::Label-->
															</div>
															<!--end::Radio-->
														</div>
														<!--end::Input row-->
														<!--end::Roles-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Scroll-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-white me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body pt-0">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
										</div>
									</th>
									<th class="min-w-125px">User</th>
									<th class="min-w-125px">Role</th>
									<th class="min-w-125px">Last login</th>
									<th class="min-w-125px">Two-step</th>
									<th class="min-w-125px">Joined Date</th>
									<th class="text-end min-w-100px">Actions</th>
								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="text-gray-600 fw-bold">
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-1.jpg" alt="Emma Smith" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
											<span>e.smith@kpmg.com.au</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">Yesterday</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>10 Mar 2021, 8:43 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
											<span>melody@altbox.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Analyst</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">20 mins ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>10 Mar 2021, 5:20 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-2.jpg" alt="Max Smith" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
											<span>max@kt.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>22 Sep 2021, 10:10 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-4.jpg" alt="Sean Bean" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
											<span>sean@dellito.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Support</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 hours ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>22 Sep 2021, 5:30 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-15.jpg" alt="Brian Cox" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
											<span>brian@exchange.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">2 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>05 May 2021, 2:40 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-warning text-warning">M</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
											<span>mikaela@pexcom.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>22 Sep 2021, 6:43 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-8.jpg" alt="Francis Mitcham" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
											<span>f.mitcham@kpmg.com.au</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Trial</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 weeks ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>21 Feb 2021, 5:20 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Olivia Wild</a>
											<span>olivia@corpmail.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">Yesterday</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>20 Jun 2021, 9:23 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Neil Owen</a>
											<span>owen.neil@gmail.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Analyst</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">20 mins ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>15 Apr 2021, 11:05 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-6.jpg" alt="Dan Wilson" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Dan Wilson</a>
											<span>dam@consilting.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>05 May 2021, 6:05 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
											<span>emma@intenso.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Support</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 hours ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>20 Dec 2021, 11:30 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-7.jpg" alt="Ana Crown" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
											<span>ana.cf@limtel.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">2 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>10 Mar 2021, 10:30 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-info text-info">A</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Robert Doe</a>
											<span>robert@benko.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>10 Nov 2021, 5:20 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-17.jpg" alt="John Miller" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">John Miller</a>
											<span>miller@mapple.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Trial</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 weeks ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>19 Aug 2021, 6:05 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-success text-success">L</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Lucy Kunic</a>
											<span>lucy.m@fentech.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">Yesterday</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>20 Jun 2021, 6:43 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Melody Macy</a>
											<span>melody@altbox.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Analyst</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">20 mins ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>25 Oct 2021, 8:43 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-2.jpg" alt="Max Smith" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Max Smith</a>
											<span>max@kt.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>19 Aug 2021, 9:23 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-4.jpg" alt="Sean Bean" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
											<span>sean@dellito.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Support</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 hours ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>15 Apr 2021, 8:43 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-15.jpg" alt="Brian Cox" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Brian Cox</a>
											<span>brian@exchange.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Developer</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">2 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td>
										<div class="badge badge-light-success fw-bolder">Enabled</div>
									</td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>25 Oct 2021, 11:30 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label fs-3 bg-light-warning text-warning">M</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
											<span>mikaela@pexcom.com</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Administrator</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">5 days ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>20 Dec 2021, 11:05 am</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
								<!--begin::Table row-->
								<tr>
									<!--begin::Checkbox-->
									<td>
										<div class="form-check form-check-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="1" />
										</div>
									</td>
									<!--end::Checkbox-->
									<!--begin::User=-->
									<td class="d-flex align-items-center">
										<!--begin:: Avatar -->
										<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
											<a href="apps/user-management/users/view.html">
												<div class="symbol-label">
													<img src="assets/media/avatars/150-8.jpg" alt="Francis Mitcham" class="w-100" />
												</div>
											</a>
										</div>
										<!--end::Avatar-->
										<!--begin::User details-->
										<div class="d-flex flex-column">
											<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
											<span>f.mitcham@kpmg.com.au</span>
										</div>
										<!--begin::User details-->
									</td>
									<!--end::User=-->
									<!--begin::Role=-->
									<td>Trial</td>
									<!--end::Role=-->
									<!--begin::Last login=-->
									<td>
										<div class="badge badge-light fw-bolder">3 weeks ago</div>
									</td>
									<!--end::Last login=-->
									<!--begin::Two step=-->
									<td></td>
									<!--end::Two step=-->
									<!--begin::Joined-->
									<td>25 Oct 2021, 5:20 pm</td>
									<!--begin::Joined-->
									<!--begin::Action=-->
									<td class="text-end">
										<a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">Actions
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
									</td>
									<!--end::Action=-->
								</tr>
								<!--end::Table row-->
							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Container-->
		</div>
	<!--end::Content-->

	<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog mw-650px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header pb-0 border-0 justify-content-end">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
									<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
									<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--begin::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
					<!--begin::Heading-->
					<div class="text-center mb-13">
						<!--begin::Title-->
						<h1 class="mb-3">Invite a Friend</h1>
						<!--end::Title-->
						<!--begin::Description-->
						<div class="text-gray-400 fw-bold fs-5">If you need more info, please check out
						<a href="#" class="link-primary fw-bolder">FAQ Page</a>.</div>
						<!--end::Description-->
					</div>
					<!--end::Heading-->
					<!--begin::Google Contacts Invite-->
					<div class="btn btn-light-primary fw-bolder w-100 mb-8">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
					<!--end::Google Contacts Invite-->
					<!--begin::Separator-->
					<div class="separator d-flex flex-center mb-8">
						<span class="text-uppercase bg-white fs-7 fw-bold text-gray-400 px-3">or</span>
					</div>
					<!--end::Separator-->
					<!--begin::Textarea-->
					<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
					<!--end::Textarea-->
					<!--begin::Users-->
					<div class="mb-10">
						<!--begin::Heading-->
						<div class="fs-6 fw-bold mb-2">Your Invitations</div>
						<!--end::Heading-->
						<!--begin::List-->
						<div class="mh-300px scroll-y me-n7 pe-7">
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
										<div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
										<div class="fw-bold text-gray-400">melody@altbox.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-2.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
										<div class="fw-bold text-gray-400">max@kt.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-4.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
										<div class="fw-bold text-gray-400">sean@dellito.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-15.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
										<div class="fw-bold text-gray-400">brian@exchange.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
										<div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-8.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
										<div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
										<div class="fw-bold text-gray-400">olivia@corpmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
										<div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-6.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
										<div class="fw-bold text-gray-400">dam@consilting.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
										<div class="fw-bold text-gray-400">emma@intenso.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-7.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
										<div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-info text-info fw-bold">A</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
										<div class="fw-bold text-gray-400">robert@benko.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-17.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
										<div class="fw-bold text-gray-400">miller@mapple.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-success text-success fw-bold">L</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
										<div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2" selected="selected">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/150-10.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
										<div class="fw-bold text-gray-400">ethan@loop.com.au</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1" selected="selected">Guest</option>
										<option value="2">Owner</option>
										<option value="3">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
							<!--begin::User-->
							<div class="d-flex flex-stack py-4">
								<!--begin::Details-->
								<div class="d-flex align-items-center">
									<!--begin::Avatar-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
									</div>
									<!--end::Avatar-->
									<!--begin::Details-->
									<div class="ms-5">
										<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
										<div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
									</div>
									<!--end::Details-->
								</div>
								<!--end::Details-->
								<!--begin::Access menu-->
								<div class="ms-2 w-100px">
									<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
										<option value="1">Guest</option>
										<option value="2">Owner</option>
										<option value="3" selected="selected">Can Edit</option>
									</select>
								</div>
								<!--end::Access menu-->
							</div>
							<!--end::User-->
						</div>
						<!--end::List-->
					</div>
					<!--end::Users-->
					<!--begin::Notice-->
					<div class="d-flex flex-stack">
						<!--begin::Label-->
						<div class="me-5 fw-bold">
							<label class="fs-6">Adding Users by Team Members</label>
							<div class="fs-7 text-gray-400">If you need more info, please check budget planning</div>
						</div>
						<!--end::Label-->
						<!--begin::Switch-->
						<label class="form-check form-switch form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" checked="checked" />
							<span class="form-check-label fw-bold text-gray-400">Allowed</span>
						</label>
						<!--end::Switch-->
					</div>
					<!--end::Notice-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	
	<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-dialog-centered mw-900px">
			<!--begin::Modal content-->
			<div class="modal-content">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Create App</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
									<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
									<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-lg-10 px-lg-10">
					<!--begin::Stepper-->
					<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
						<!--begin::Aside-->
						<div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
							<!--begin::Nav-->
							<div class="stepper-nav ps-lg-10">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">1</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Details</h3>
										<div class="stepper-desc">Name your App</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">2</span>
									</div>
									<!--begin::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Frameworks</h3>
										<div class="stepper-desc">Define your app framework</div>
									</div>
									<!--begin::Label-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">3</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Database</h3>
										<div class="stepper-desc">Select the app database type</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">4</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Billing</h3>
										<div class="stepper-desc">Provide payment details</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Line-->
									<div class="stepper-line w-40px"></div>
									<!--end::Line-->
									<!--begin::Icon-->
									<div class="stepper-icon w-40px h-40px">
										<i class="stepper-check fas fa-check"></i>
										<span class="stepper-number">5</span>
									</div>
									<!--end::Icon-->
									<!--begin::Label-->
									<div class="stepper-label">
										<h3 class="stepper-title">Release</h3>
										<div class="stepper-desc">Review and Submit</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--begin::Aside-->
						<!--begin::Content-->
						<div class="flex-row-fluid py-lg-5 px-lg-15">
							<!--begin::Form-->
							<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-2">
												<span class="required">App Name</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your unique app name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Category</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app category"></i>
											</label>
											<!--end::Label-->
											<!--begin:Options-->
											<div class="fv-row">
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotone/Home/Globe.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24" />
																			<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
																			<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Quick Online Courses</span>
															<span class="fs-7 text-muted">Creating a clear text structure is just one SEO</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category" value="1" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack mb-5 cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-danger">
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
																			<rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																			<rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																			<rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
																		</g>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Face to Face Discussions</span>
															<span class="fs-7 text-muted">Creating a clear text structure is just one aspect</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category" value="2" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
												<!--begin:Option-->
												<label class="d-flex flex-stack cursor-pointer">
													<!--begin:Label-->
													<span class="d-flex align-items-center me-2">
														<!--begin:Icon-->
														<span class="symbol symbol-50px me-6">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotone/Devices/Watch1.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<path d="M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z M9,6 L15,6 C16.6568542,6 18,7.34314575 18,9 L18,15 C18,16.6568542 16.6568542,18 15,18 L9,18 C7.34314575,18 6,16.6568542 6,15 L6,9 C6,7.34314575 7.34314575,6 9,6 Z" fill="#000000" fill-rule="nonzero" />
																		<path d="M9,8 C8.44771525,8 8,8.44771525 8,9 L8,15 C8,15.5522847 8.44771525,16 9,16 L15,16 C15.5522847,16 16,15.5522847 16,15 L16,9 C16,8.44771525 15.5522847,8 15,8 L9,8 Z" fill="#000000" opacity="0.3" />
																		<path d="M9,18 L15,18 L15,20.5 C15,21.3284271 14.3284271,22 13.5,22 L10.5,22 C9.67157288,22 9,21.3284271 9,20.5 L9,18 Z" fill="#000000" opacity="0.3" />
																		<path d="M10.5,2 L13.5,2 C14.3284271,2 15,2.67157288 15,3.5 L15,6 L9,6 L9,3.5 C9,2.67157288 9.67157288,2 10.5,2 Z" fill="#000000" opacity="0.3" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bolder fs-6">Full Intro Training</span>
															<span class="fs-7 text-muted">Creating a clear text structure copywriting</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category" value="3" />
													</span>
													<!--end:Input-->
												</label>
												<!--end::Option-->
											</div>
											<!--end:Options-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Select Framework</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify your apps framework"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<i class="fab fa-html5 text-warning fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">HTML5</span>
														<span class="fs-7 text-muted">Base Web Projec</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" checked="checked" name="framework" value="1" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="fab fa-react text-success fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">ReactJS</span>
														<span class="fs-7 text-muted">Robust and flexible app framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework" value="2" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="fab fa-angular text-danger fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Angular</span>
														<span class="fs-7 text-muted">Powerful data mangement</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework" value="3" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-primary">
															<i class="fab fa-vuejs text-primary fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Vue</span>
														<span class="fs-7 text-muted">Lightweight and responsive framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework" value="4" />
												</span>
												<!--end:Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="required fs-5 fw-bold mb-2">Database Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid" name="dbname" placeholder="" value="master_db" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-bold mb-4">
												<span class="required">Select Database Engine</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Select your app database engine"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="fas fa-database text-success fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">MySQL</span>
														<span class="fs-7 text-muted">Basic MySQL database</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine" checked="checked" value="1" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-danger">
															<i class="fab fa-google text-danger fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">Firebase</span>
														<span class="fs-7 text-muted">Google based app data management</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine" value="2" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<i class="fab fa-amazon text-warning fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bolder fs-6">DynamoDB</span>
														<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine" value="3" />
												</span>
												<!--end::Input-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Name On Card</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a card holder's name"></i>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-column mb-7 fv-row">
											<!--begin::Label-->
											<label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
											<!--end::Label-->
											<!--begin::Input wrapper-->
											<div class="position-relative">
												<!--begin::Input-->
												<input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111" />
												<!--end::Input-->
												<!--begin::Card logos-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-5">
													<img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
													<img src="assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px" />
													<img src="assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px" />
												</div>
												<!--end::Card logos-->
											</div>
											<!--end::Input wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
											<!--begin::Col-->
											<div class="col-md-8 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Expiration Date</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row fv-row">
													<!--begin::Col-->
													<div class="col-6">
														<select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
															<option></option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
															<option value="11">11</option>
															<option value="12">12</option>
														</select>
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
															<option></option>
															<option value="2021">2021</option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
															<option value="2026">2026</option>
															<option value="2027">2027</option>
															<option value="2028">2028</option>
															<option value="2029">2029</option>
															<option value="2030">2030</option>
															<option value="2031">2031</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-4 fv-row">
												<!--begin::Label-->
												<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
													<span class="required">CVV</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
													<!--end::Input-->
													<!--begin::CVV icon-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-3">
														<!--begin::Svg Icon | path: icons/duotone/Shopping/Credit-card.svg-->
														<span class="svg-icon svg-icon-2hx">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2" />
																	<rect fill="#000000" x="2" y="8" width="20" height="3" />
																	<rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::CVV icon-->
												</div>
												<!--end::Input wrapper-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="d-flex flex-stack">
											<!--begin::Label-->
											<div class="me-5">
												<label class="fs-6 fw-bold form-label">Save Card for further billing?</label>
												<div class="fs-7 fw-bold text-gray-400">If you need more info, please check budget planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												<span class="form-check-label fw-bold text-gray-400">Save Card</span>
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
									</div>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div data-kt-stepper-element="content">
									<div class="w-100 text-center">
										<!--begin::Heading-->
										<h1 class="fw-bolder text-dark mb-3">Release!</h1>
										<!--end::Heading-->
										<!--begin::Description-->
										<div class="text-muted fw-bold fs-3">Submit your app to kickstart your project.</div>
										<!--end::Description-->
										<!--begin::Illustration-->
										<div class="text-center px-4 py-15">
											<img src="assets/media/illustrations/todo.png" alt="" class="mw-100 mh-150px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-10">
									<!--begin::Wrapper-->
									<div class="me-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
										<span class="svg-icon svg-icon-3 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
													<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->Back</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
														<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
													</g>
												</svg>
											</span>
											<!--end::Svg Icon--></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<!--begin::Svg Icon | path: icons/duotone/Navigation/Right-2.svg-->
										<span class="svg-icon svg-icon-3 ms-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<rect fill="#000000" opacity="0.5" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1" />
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon--></button>
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	
	<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-xl">
			<!--begin::Modal content-->
			<div class="modal-content rounded">
				<!--begin::Modal header-->
				<div class="modal-header justify-content-end border-0 pb-0">
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
						<span class="svg-icon svg-icon-1">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
									<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
									<rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body pt-0 pb-15 px-5 px-xl-20">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<h1 class="mb-3">Upgrade a Plan</h1>
						<div class="text-gray-400 fw-bold fs-5">If you need more info, please check
						<a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">Monthly</a>
							<a href="#" class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">Annual</a>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Startup</h2>
												<div class="fw-bold opacity-50">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Advanced</h2>
												<div class="fw-bold opacity-50">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Enterprise
												<span class="badge badge-light-success ms-2 fs-7">Most popular</span></h2>
												<div class="fw-bold opacity-50">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bolder" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
											<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div class="form-check form-check-custom form-check-solid form-check-success me-6">
												<input class="form-check-input" type="radio" name="plan" value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">Custom</h2>
												<div class="fw-bold opacity-50">Requet a custom license</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<a href="#" class="btn btn-sm btn-primary">Contact Us</a>
										</div>
										<!--end::Price-->
									</div>
									<!--end::Tab link-->
								</div>
								<!--end::Tabs-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-6">
								<!--begin::Tab content-->
								<div class="tab-content rounded h-100 bg-light p-10">
									<!--begin::Tab Pane-->
									<div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-gray-400 fw-bold">Optimal for 10+ team size and new startup</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_advanced">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-gray-400 fw-bold">Optimal for 100+ team size and grown company</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-gray-400 flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Error-circle.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
									<!--begin::Tab Pane-->
									<div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
										<!--begin::Heading-->
										<div class="pb-5">
											<h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
											<div class="text-gray-400 fw-bold">Optimal for 1000+ team and enterpise</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10 Active Users</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30 Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting Module</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network Platform</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud Space</span>
												<!--begin::Svg Icon | path: icons/duotone/Code/Done-circle.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
														<path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Tab Pane-->
								</div>
								<!--end::Tab content-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
					<!--end::Plans-->
					<!--begin::Actions-->
					<div class="d-flex flex-center flex-row-fluid pt-12">
						<button type="reset" class="btn btn-white me-3" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Upgrade Plan</button>
					</div>
					<!--end::Actions-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
@push('scripts')	
	<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
	<script src="{{asset('assets/js/custom/apps/user-management/users/list/table.js')}}"></script>
	<script src="{{asset('assets/js/custom/apps/user-management/users/list/export-users.js')}}"></script>
	<script src="{{asset('assets/js/custom/apps/user-management/users/list/add.js')}}"></script>
@endpush	

@endsection