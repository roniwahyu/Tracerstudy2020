<div class="wizard wizard-5 d-flex flex-column flex-lg-row flex-row-fluid" id="kt_wizard" data-wizard-state="first">
    <!--begin::Aside-->
    <div class="wizard-aside bg-white d-flex flex-column flex-row-auto w-100 w-lg-300px w-xl-400px w-xxl-500px">
        <!--begin::Aside Top-->
        <div class="d-flex flex-column-fluid flex-column px-xxl-30 px-10">
            <!--begin: Wizard Nav-->
            <div class="wizard-nav d-flex d-flex justify-content-center pt-10 pt-lg-20 pb-5">
                <!--begin::Wizard Steps-->
                <div class="wizard-steps">
                    <!--begin::Wizard Step 1 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <i class="wizard-check ki ki-check"></i>
                                <span class="wizard-number">1</span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Account Settings</h3>
                                <div class="wizard-desc">Setup Your Account Details</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 1 Nav-->
                    <!--begin::Wizard Step 2 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <i class="wizard-check ki ki-check"></i>
                                <span class="wizard-number">2</span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Address Details</h3>
                                <div class="wizard-desc">Setup Residence Address</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 2 Nav-->
                    <!--begin::Wizard Step 3 Nav-->
                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="pending">
                        <div class="wizard-wrapper">
                            <div class="wizard-icon">
                                <i class="wizard-check ki ki-check"></i>
                                <span class="wizard-number">3</span>
                            </div>
                            <div class="wizard-label">
                                <h3 class="wizard-title">Completed!</h3>
                                <div class="wizard-desc">Review and Submit</div>
                            </div>
                        </div>
                    </div>
                    <!--end::Wizard Step 3 Nav-->
                </div>
                <!--end::Wizard Steps-->
            </div>
            <!--end: Wizard Nav-->
        </div>
        <!--end::Aside Top-->
        <!--begin::Aside Bottom-->
        <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-y-bottom bgi-position-x-center bgi-size-contain pt-2 pt-lg-5 h-350px" style="background-image: url(/metronic/theme/html/demo1/dist/assets/media/svg/illustrations/features.svg)"></div>
        <!--end::Aside Bottom-->
    </div>
    <!--begin::Aside-->
    <!--begin::Content-->
    <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
        <!--begin::Title-->
        <div class="text-right mb-lg-30 mb-15 mr-xxl-10">
            <span class="font-weight-bold text-muted font-size-h5">Having issues?</span>
            <a href="javascript:;" class="font-weight-bolder text-primary font-size-h4" id="kt_login_signup">Get Help</a>
        </div>
        <!--end::Title-->
        <!--begin::Form-->
        <div class="d-flex justify-content-center flex-row-fluid">
            <form class="pb-5 w-100 w-md-450px w-lg-500px fv-plugins-bootstrap fv-plugins-framework" novalidate="novalidate" id="kt_wizard_form">
                <!--begin: Wizard Step 1-->
                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                    <!--begin::Title-->
                    <div class="pb-10 pb-lg-15">
                        <h3 class="font-weight-bolder text-dark font-size-h2">Create Account</h3>
                        <div class="text-muted font-weight-bold font-size-h5">Already have an Account ?
                            <a href="/metronic/demo1/custom/pages/login/login-3/signin.html" class="text-primary font-weight-bolder">Sign In</a></div>
                    </div>
                    <!--begin::Title-->
                    <!--begin::Form Group-->
                    <div class="form-group fv-plugins-icon-container">
                        <label class="font-size-h6 font-weight-bolder text-dark">First Name</label>
                        <input type="text" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" name="firstname" placeholder="First Name" value="">
                        <div class="fv-plugins-message-container"></div>
                    </div>
                    <!--end::Form Group-->
                    <!--begin::Form Group-->
                    <div class="form-group fv-plugins-icon-container">
                        <label class="font-size-h6 font-weight-bolder text-dark">Last Name</label>
                        <input type="text" class="form-control h-auto p-6 border-0 rounded-lg font-size-h6" name="lastname" placeholder="Last Name" value="">
                        <div class="fv-plugins-message-container"></div>
                    </div>
                    <!--end::Form Group-->
                </div>
                <!--end: Wizard Step 1-->
                <!--begin: Wizard Step 2-->
                <div class="pb-5" data-wizard-type="step-content">
                    <!--begin::Title-->
                    <div class="pb-10 pb-lg-15">
                        <h3 class="font-weight-bolder text-dark font-size-h2">Address Details</h3>
                        <div class="text-muted font-weight-bold font-size-h4">Have a Different Address ?
                            <a href="#" class="text-primary font-weight-bolder">Add Address</a></div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Form Group-->
                    <div class="form-group fv-plugins-icon-container">
                        <label class="font-size-h6 font-weight-bolder text-dark">Address Line</label>
                        <input type="text" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" name="address1" placeholder="Address Line 1" value="Address Line">
                        <div class="fv-plugins-message-container"></div>
                    </div>
                    <!--begin::Form Group-->
                    <!--end::Row-->
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <!--end::Form Group-->
                            <div class="form-group fv-plugins-icon-container">
                                <label class="font-size-h6 font-weight-bolder text-dark">City</label>
                                <input type="text" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" name="city" placeholder="City" value="Melbourne">
                                <div class="fv-plugins-message-container"></div>
                            </div>
                            <!--begin::Form Group-->
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!--end::Form Group-->
                            <div class="form-group fv-plugins-icon-container">
                                <label class="font-size-h6 font-weight-bolder text-dark">Country</label>
                                <select name="country" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6">
                                    <option value="">Select</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AL">Albania</option>
                                 
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                <div class="fv-plugins-message-container"></div>
                            </div>
                            <!--end::Form Group-->
                        </div>
                    </div>
                    <!--begin::Row-->
                </div>
                <!--end: Wizard Step 2-->
                <!--begin: Wizard Step 3-->
                <div class="pb-5" data-wizard-type="step-content">
                    <!--begin::Title-->
                    <div class="pb-10 pb-lg-15">
                        <h3 class="font-weight-bolder text-dark font-size-h2">Complete</h3>
                        <div class="text-muted font-weight-bold font-size-h4">Complete Your Signup And Become A Member!</div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Section-->
                    <h4 class="font-weight-bolder mb-3">Accoun Settings:</h4>
                    <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                        <div>Nick Stone</div>
                        <div>+12233434-34</div>
                        <div>nick.stone@gmail.com</div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <h4 class="font-weight-bolder mb-3">Address Details:</h4>
                    <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                        <div>Address Line 1</div>
                        <div>Address Line 2</div>
                        <div>Melbourne 3000, VIC, Australia</div>
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <h4 class="font-weight-bolder mb-3">Support Channels:</h4>
                    <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                        <div>Overnight Delivery with Regular Packaging</div>
                        <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end: Wizard Step 3-->
                <!--begin: Wizard Actions-->
                <div class="d-flex justify-content-between pt-3">
                    <div class="mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3" data-wizard-type="action-prev">
                            <span class="svg-icon svg-icon-md mr-1">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Left-2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1"></rect>
                                        <path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Previous</button>
                    </div>
                    <div>
                        <button class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3" data-wizard-type="action-submit" type="submit" id="kt_login_signup_form_submit_button">Submit
                            <span class="svg-icon svg-icon-md ml-2">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Right-2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></button>
                        <button type="button" class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3" data-wizard-type="action-next">Next Step
                            <span class="svg-icon svg-icon-md ml-1">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Navigation/Right-2.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <rect fill="#000000" opacity="0.3" transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)" x="7.5" y="7.5" width="2" height="9" rx="1"></rect>
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span></button>
                    </div>
                </div>
                <!--end: Wizard Actions-->
                <div></div>
                <div></div>
            </form>
        </div>
        <!--end::Form-->
    </div>
    <!--end::Content-->
</div>