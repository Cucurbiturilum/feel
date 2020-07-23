<div class="register py-3 py-lg-5">
    <form action="" method="post">
        <input type="hidden" name="ci_csrf_token" value="<?php echo $this->security->get_csrf_hash(); ?>">
        <div class="container bg-black-opacity p-4 rounded mb-4">
            <div class="form-row mb-4 mb-lg-5">

            <?php
            $messages = $this->session->flashdata('msg');
            print_r($messages);
            if((isset($messages) && $messages)) {
                if(!$messages['success']) {
                    ?><div class="flashmessage error"><?php echo $messages['message']; ?></div><?php
                } else {
                    ?><div class="flashmessage"><?php echo $messages['message']; ?></div><?php
                }
            }
            ?>
        </div>

            <p class="subtitle text-danger h4 mb-3 pl-lg-5"><?php echo lang('Your site information') ?></p>
            <div class="form-row mb-4 mb-lg-5">
                <div class="col-12 col-md-3 col-lg-2 d-flex align-items-center justify-content-md-end">
                    <label for="site-name" class="form-control-label text-white mb-md-0"><?php echo lang('Site name') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4 mb-lg-0">
                    <input type="text" class="form-control" id="site-name" name="site_name">
                    <span class="error message" htmlfor="site_name" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('site_name')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-2 d-flex align-items-center justify-content-md-end">
                    <label for="site-url" class="form-control-label text-white mb-md-0"><?php echo lang('Site URL') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3">
                    <input type="text" class="form-control" id="site-url" name="site_url">
                    <span class="error" htmlfor="site_url" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('site_url')?></span>
                </div>
            </div>
            <p class="subtitle text-danger h4 mb-3 pl-lg-5"><?php echo lang('Your information') ?></p>
            <div class="form-row">
                <div class="col-12 col-md-3 col-lg-2 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="user-name" class="form-control-label text-white mb-md-0"><?php echo lang('Username') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="user-name" name="username">
                    <span class="error message" htmlfor="username" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('username')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-3 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="first-name" class="form-control-label text-white mb-md-0"><?php echo lang('First Name') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="first-name" name="first_name">
                    <span class="error message" htmlfor="first_name" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('first_name')?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-3 col-lg-2 order-3 order-lg-1 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="password" class="form-control-label text-white mb-md-0"><?php echo lang('Password') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 order-4 order-lg-2 mb-4">
                    <input type="text" class="form-control" id="password" name="password">
                    <span class="error message" htmlfor="password" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('password')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-3 order-1 order-lg-3 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="last-name" class="form-control-label text-white mb-md-0"><?php echo lang('Last Name') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 order-2 order-lg-4 mb-4">
                    <input type="text" class="form-control" id="last-name" name="last_name">
                    <span class="error message" htmlfor="last_name" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('last_name')?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-md-3 col-lg-2 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="repeat-password" class="form-control-label text-white mb-md-0"><?php echo lang('Repeat Password') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="repeat-password" name="rep_password">
                    <span class="error message" htmlfor="rep_password" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('rep_password')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-3 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="company-name" class="form-control-label text-white mb-md-0"><?php echo lang('Company Name') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="company-name" name="company_name">
                    <span class="error message" htmlfor="company_name" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('company_name')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-2 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="email" class="form-control-label text-white mb-md-0"><?php echo lang('Email') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="email" class="form-control" id="email" name="email">
                    <span class="error message" htmlfor="email" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('email')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-3 mb-md-3 d-flex align-items-center justify-content-md-end text-md-right">
                    <label for="chamber" class="form-control-label text-white mb-md-0"><?php echo lang('Chamber of Commerce NR') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="chamber" name="kvk_nr">
                    <span class="error message" htmlfor="kvk_nr" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('kvk_nr')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-2 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="phone-number" class="form-control-label text-white mb-md-0"><?php echo lang('Phone Number') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="phone-number" name="phone">
                    <span class="error" htmlfor="phone" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('phone')?></span>
                </div>
                <div class="col-12 col-md-3 col-lg-3 mb-md-3 d-flex align-items-center justify-content-md-end">
                    <label for="vat-number" class="form-control-label text-white mb-md-0"><?php echo lang('VAT Number') ?></label>
                </div>
                <div class="col-12 col-md-9 col-lg-3 mb-4">
                    <input type="text" class="form-control" id="vat-number" name="vat_nr">
                    <span class="error message" htmlfor="vat_nr" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('vat_nr')?></span>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-row">
                        <div class="col-12 col-md-3 col-lg-4 mb-md-3 d-flex align-items-center justify-content-md-end">
                            <label for="address" class="form-control-label text-white mb-md-0"><?php echo lang('Address') ?></label>
                        </div>
                        <div class="col-12 col-md-9 col-lg-6 mb-4">
                            <input type="text" class="form-control" id="address" name="address">
                            <span class="error message" htmlfor="address" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('address')?></span>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 mb-md-3 d-flex align-items-center justify-content-md-end">
                            <label for="zip" class="form-control-label text-white mb-md-0"><?php echo lang('ZIP') ?></label>
                        </div>
                        <div class="col-12 col-md-9 col-lg-6 mb-4">
                            <input type="text" class="form-control" id="zip" name="zip">
                            <span class="error" htmlfor="zip" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('zip')?></span>
                        </div>
                        <div class="col-12 col-md-3 col-lg-4 mb-md-3 d-flex align-items-center justify-content-md-end">
                            <label for="city" class="form-control-label text-white mb-md-0"><?php echo lang('City') ?></label>
                        </div>
                        <div class="col-12 col-md-9 col-lg-6 mb-4">
                            <input type="text" class="form-control" id="city" name="city">
                            <span class="error message" htmlfor="city" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('city')?></span>
                        </div>
                        <script type="text/javascript">
                            $(function(){
                                if($('#country').val() == 'US'){
                                    $('#state').show();
                                }
                                $('#country').change(function(){
                                    if($('#country').val() == 'US'){
                                        $('#state').slideDown();
                                        $('input[name=state]').val('');
                                    } else {
                                        $('#state').slideUp();
                                        $('input[name=state]').val('state');
                                    }
                                });
                            });
                        </script>
                        <div class="col-12 col-md-3 col-lg-4 mb-md-3 d-flex align-items-center justify-content-md-end">
                            <label for="country" class="form-control-label text-white mb-md-0"><?php echo lang('Country') ?></label>
                        </div>
                        <div class="col-12 col-md-9 col-lg-6 mb-4">
<!--                            <input type="text" class="form-control" id="country" name="country">-->
                            <?php echo form_dropdown_new('country', $countries, set_value('country'),'id="country"')?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="form-row d-flex align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 offset-md-3 offset-lg-4 custom-control mb-3 custom-checkbox ">
                            <?php echo form_checkbox('tos', 'tos',set_value('tos'))?>
                            <label class="text-danger" for="customCheck1"><?php echo lang('I agree the Term of Services') ?></label>
                            <span class="error" htmlfor="tos" generated="true" style="color: #fac71b;font-size: 16px;"><?php echo form_error('tos')?></span>
                        </div>
                        <div class=" col-12 col-md-9 col-lg-3 text-center mb-3 col-12 col-md-9 col-lg-6 offset-md-3 offset-lg-4">
                            <button class="btn bg-red text-white w-100 rounded-0"><?php echo lang('Register') ?></button>
                        </div>
                        <div class=" col-12 col-md-9 col-lg-3 text-center mb-3 col-12 col-md-9 col-lg-6 offset-md-3 offset-lg-4">
                            <a href="login" class="item-link text-danger text-decoration-underline"><u><?php echo lang('Already have an account?') ?></u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>