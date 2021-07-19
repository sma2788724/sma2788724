@extends('layouts.app')

@section('title', env('APP_TITLE'))

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 col-lg-8 offset-lg-2 offset-md-2">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title">
                            WE ARE STILL PROCESSING LOANS! <br/>
                            FIND OUT HOW MUCH YOU QUALIFY FOR!
                        </h4>
                    </div>

                    <div class="card-body mx-5">
                        <p class="fs-1">
                            Take Advantage of Today's Historically Low Rates & Pay <u>LESS</u> Interest
                        </p>
                        <p class="text-primary fs-4">WITH THE 5% FIRST HOME LOAN DEPOSIT SCHEME</p>
                        <p class="fs-3">
                            Take Our 60 Second Mortgage Quiz Below To Find Out How Much You Qualify For:
                        </p>

                        <div class="row my-5">
                            <div class="col-md-8 col-lg-8 offset-lg-2 offset-md-2">
                                <div class="card text-start">
                                    <div class="card-body">
                                        <form id="rate_form" action="">
                                            <div class="row">
                                                <div class="form-group col-sm-12">
                                                    <label for="zipcode">{{ __('Zip Code') }} *</label>
                                                    <input type="text" name="zipcode" class="form-control" id="zipcode">
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="property_type">{{ __('What type of property are you purchasing') }} ? *</label>
                                                    <select name="property_type" id="property_type" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="house">{{ __('Home') }}</option>
                                                        <option value="townhouse">{{ __('Townhouse') }}</option>
                                                        <option value="unit">{{ __('Unit') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="property_use">{{ __('How will this property be used') }} ? *</label>
                                                    <select name="property_use" id="property_use" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="primary_home">{{ __('Primary Home') }}</option>
                                                        <option value="secondary_home">{{ __('Secondary Home') }}</option>
                                                        <option value="rental_home">{{ __('Rental Home') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="working_with_e_agent">{{ __('Are you currently working with a Real Estate Agent') }} ? *</label>
                                                    <select name="working_with_e_agent" id="working_with_e_agent" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="yes">{{ __('Yes') }}</option>
                                                        <option value="no">{{ __('No') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="when_to_buy">{{ __('How soon do you plan to buy a home') }} ? *</label>
                                                    <select name="when_to_buy" id="when_to_buy" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('Already under contract') }}">{{ __('Already under contract') }}</option>
                                                        <option value="{{ __('I want to make offer ASAP') }}">{{ __('I want to make offer ASAP') }}</option>
                                                        <option value="{{ __('Within the next 30-60 days') }}">{{ __('Within the next 30-60 days') }}</option>
                                                        <option value="{{ __('Longer than 60 days') }}">{{ __('Longer than 60 days') }}</option>
                                                        <option value="{{ __('Unsure') }}">{{ __('Unsure') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="buying_first_time">{{ __('Is this first time buying a house') }} ? *</label>
                                                    <select name="buying_first_time" id="buying_first_time" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('Yes') }}">{{ __('Yes') }}</option>
                                                        <option value="{{ __('No') }}">{{ __('No') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="estimate_price">{{ __('What is the estimated purchase price of the property') }} ? *</label>
                                                    <select name="estimate_price" id="estimate_price" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('$300,000 - $400,000') }}">{{ __('$300,000 - $400,000') }}</option>
                                                        <option value="{{ __('$400,000 - $500,000') }}">{{ __('$400,000 - $500,000') }}</option>
                                                        <option value="{{ __('$500,000 - $600,000') }}">{{ __('$500,000 - $600,000') }}</option>
                                                        <option value="{{ __('$600,000 - $700,000') }}">{{ __('$600,000 - $700,000') }}</option>
                                                        <option value="{{ __('$700,000 - $800,000') }}">{{ __('$700,000 - $800,000') }}</option>
                                                        <option value="{{ __('$800,000 - $900,000') }}">{{ __('$800,000 - $900,000') }}</option>
                                                        <option value="{{ __('$900,000 - $1,000,000') }}">{{ __('$900,000 - $1,000,000') }}</option>
                                                        <option value="{{ __('$1,000,000+') }}">{{ __('$1,000,000+') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="down_deposit">{{ __('How much are putting down as a deposit') }} ? *</label>
                                                    <select name="down_deposit" id="down_deposit" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('$0 - $30,000') }}">{{ __('$0 - $30,000') }}</option>
                                                        <option value="{{ __('$30,000 - $50,000') }}">{{ __('$30,000 - $50,000') }}</option>
                                                        <option value="{{ __('$50,000 - $70,000') }}">{{ __('$50,000 - $70,000') }}</option>
                                                        <option value="{{ __('$70,000 - $100,000') }}">{{ __('$70,000 - $100,000') }}</option>
                                                        <option value="{{ __('$100,000+') }}">{{ __('$100,000+') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="estimate_credit_score">{{ __('What is your estimate credit score') }} ? *</label>
                                                    <select name="estimate_credit_score" id="estimate_credit_score" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('Excellent') }}">{{ __('Excellent') }}</option>
                                                        <option value="{{ __('Good') }}">{{ __('Good') }}</option>
                                                        <option value="{{ __('Fair') }}">{{ __('Fair') }}</option>
                                                        <option value="{{ __('Poor') }}">{{ __('Poor') }}</option>
                                                        <option value="{{ __('Not sure') }}">{{ __('Not sure') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="annual_income">{{ __('What is your annual income') }} ? *</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-dollar-sign"></i>
                                                        </span>
                                                        <input type="number" name="annual_income" id="annual_income" class="form-control">
                                                        <span class="invalid-feedback">This question is required.</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="income_proof">{{ __('Can you provide proof of income') }} ? *</label>
                                                    <select name="income_proof" id="income_proof" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('Yes') }}">{{ __('Yes') }}</option>
                                                        <option value="{{ __('No') }}">{{ __('No') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="income_proof">{{ __('Have you filed for bankruptcy or defaulted in past 7 year') }} ? *</label>
                                                    <select name="income_proof" id="income_proof" class="form-control">
                                                        <option selected disabled value="">{{ __('Choose One') }}</option>
                                                        <option value="{{ __('Yes') }}">{{ __('Yes') }}</option>
                                                        <option value="{{ __('No') }}">{{ __('No') }}</option>
                                                    </select>
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>
                                            
                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="full_name">{{ __('Full Name') }} ? *</label>
                                                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="{{ __('Full Name') }}">
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="email">{{ __('Email') }} ? *</label>
                                                    <input type="email" name="email" id="email" class="form-control" placeholder="{{ __('Email') }}">
                                                    <span class="invalid-feedback">This question is required.</span>
                                                </div>
                                            </div>

                                            <div class="row d-none">
                                                <div class="form-group col-sm-12">
                                                    <label for="mobile">{{ __('Mobile Phone') }} ? *</label>
                                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="{{ __('Phone') }}">
                                                    <span class="invalid-feedback">This question is required.</span>
                                                    <span>If your eligible for pre-approval, a home loan expert will be in touch within 24 hours, please ensure this number is correct so we can best assist you.</span>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        <div class="btn-group">
                            <button data-step="0" class="btn btn-primary btn-sm d-none" id="prev-question">Prev <i class="fa fa-angle-double-right"></i></button>
                            <button data-step="1" class="btn btn-primary btn-sm" id="next-question">Next <i class="fa fa-angle-double-right"></i></button>
                            <button class="btn btn-info btn-sm d-none text-white" id="verify-mobile">Verify Mobile <i class="fa fa-mobile-alt"></i></button>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-md-12 text-center">
                        <p>Copyright {{ date('Y') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>

        const final_message = `<div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="fs-3">
                                            Thank you for taking the time to complete this survey.
                                        </h3>
                                    </div>
                                </div>`;
        var input = document.querySelector("#mobile");
        const tel_input = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
                });
            }
        });
        $(document).ready(() => {
            $('select').select2({
                theme: 'bootstrap-5'
            });

            $('#next-question').on('click', function (e) {
                e.preventDefault();

                const _form = $('#rate_form');
                var next_step = current_step = -1;
                const rows = _form.find('.row');
                const total_steps = rows.length;

                $.each(rows, function(index, row) {

                    if($(row).is(':visible')){

                        current_step = index;
                        next_step = index+1;
                    }
                });

                //we're on the last step already
                if(current_step == total_steps-1){
                    
                    $('#verify-mobile').removeClass('d-none');
                    $('#next-question').attr('disabled', 'disabled');
                    return;
                }

                //check value selected
                const current_row = _form.find(`.row:nth(${current_step})`);
                const control = $(current_row).find('.form-control');
                const control_value = control.val();
                if(control_value == '' || control_value == null){

                    control.addClass('is-invalid');
                    return;
                } else {

                    control.removeClass('is-invalid');
                }
                
                //check if 'next_step' equals to the 'last' row
                //if last row then show mobile 'icon'

                if(next_step == total_steps-1){
                    
                    $('#verify-mobile').removeClass('d-none');
                    $('#next-question').attr('disabled', 'disabled');
                }

                current_row.addClass('d-none');
                console.log(_form.find(`.row:nth(${next_step})`));
                _form.find(`.row:nth(${next_step})`).removeClass('d-none');
            });

            $('#verify-mobile').on('click', async function (e) {
                e.preventDefault();
                
                const mobile = $('#mobile').val();
                if(mobile == ''){

                    $('#mobile').addClass('is-invalid');
                    $('#mobile').parent().find('.invalid-feedback').html('Please enter your mobile number!');
                    //toastr.info('Please enter your mobile number!');
                    return;
                } else {

                    $('#mobile').removeClass('is-invalid');
                    $('#mobile').parent().find('.invalid-feedback').html();
                }

                const response = await fetch(`{{ url('verify-mobile') }}`, {
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        "Content-type": 'application/json'
                    },
                    method: 'POST',
                    body: JSON.stringify({
                        mobile: "+"+tel_input.getSelectedCountryData().dialCode + mobile
                    })
                }).then(response => response.json())
                .then( async (data) => {
                    
                    if(data.status == 'success' && data.opt_sent){

                        toastr.success(data.message);
                        Swal.fire({
                            icon: 'warning',
                            title: 'OTP Code Validation',
                            html: `<div class="row">
                                    <div class="col-md-12 text-left">
                                        <div class="form-group">
                                            <label  for="opt_code">OTP Code</label>
                                            <input class="form-control" type="number" value="" name="opt_code" id="opt_code" />
                                            </div>
                                        </div>
                                </div>`,
                                showConfirmationButton: true,
                                showCancelButton: true,
                                confirmButtonText: 'Submit OTP Code',
                                cancelButtonText: 'Close (All your input data will lost?)'
                        }).then(decision => {

                            if(decision.isConfirmed){

                                const html_container = Swal.getHtmlContainer();
                                const opt_code = $(html_container).find('#opt_code').val();

                                Swal.showLoading();
                                $.ajax({
                                        url: '{{ url('verify-otp') }}',
                                        method: 'post',
                                        data: {
                                            otp: opt_code,
                                            mobile: mobile,
                                            _csrf_token: '{{ csrf_token() }}'
                                        },
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                        },
                                        success:  response => {

                                            if(response.status =='success'){

                                                toastr.success(response.message);
                                                const form_data = new FormData($('#rate_form').get(0))
                                                
                                                //POST FORM DATA HERE////POST API///
                                                const headers = new Headers()
                                                headers.append("Content-Type", "application/json")

                                                const body = Object.fromEntries(form_data);

                                                const options = {
                                                method: "POST",
                                                headers,
                                                mode: "cors",
                                                body: JSON.stringify(body),
                                                }

                                                fetch("https://ena0na86dypqdxd.m.pipedream.net", options);

                                                $('#rate_form').html(final_message);
                                            } else {

                                                toastr.error(response.message);
                                            }
                                        }
                                    });

                            } else {

                                window.location.reload();
                            }
                        });
                    } else {

                        toastr.error(data.message);
                    }
                });
            });
        });
    </script>

@endsection