@extends('dashboard.layouts.master')
@section('title','Student Registration')
@section('css')
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- TAGS INPUT-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
    <!-- SLIDER CTRL-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/bootstrap-slider/dist/css/bootstrap-slider.css')}}">
    <!-- CHOSEN-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/chosen-js/chosen.css')}}">
    <!-- DATETIMEPICKER-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.css')}}">
    <!-- COLORPICKER-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css')}}">
    <!-- SELECT2-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/select2/dist/css/select2.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.css')}}">
    <!-- WYSIWYG-->
    <link rel="stylesheet" href="{{asset('dashboard_assets/vendor/bootstrap-wysiwyg/css/style.css')}}">
@endsection

@section('main')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    Student Registration
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <!-- Page content-->
                    <div class="card card-default">
                        @include('dashboard.layouts.error')
                        <div class="card-header">Enter Student's Information</div>
                        <div class="card-body">
                            <form id="example-form" action="#">
                                <div>
                                    <h4>Account
                                        <br>
                                        <small>Information for login.</small>
                                    </h4>
                                    <fieldset>
                                        <label for="userName">User name *</label>
                                        <input class="form-control required" id="userName" name="userName" type="text">
                                        <label for="password">Password *</label>
                                        <input class="form-control required" id="password" name="password" type="text">
                                        <label for="confirm">Confirm Password *</label>
                                        <input class="form-control required" id="confirm" name="confirm" type="text">
                                        <label for="image">Image</label>
                                        <input class="form-control filestyle" type="file" data-classbutton="btn btn-secondary" data-classinput="form-control inline" data-icon="&lt;span class='fa fa-upload mr-2'&gt;&lt;/span&gt;">

                                        <p>(*) Require</p>
                                    </fieldset>
                                    <h4>Profile
                                        <br>
                                        <small>Nam egestas, leo eu gravida tincidunt</small>
                                    </h4>
                                    <fieldset>
                                        <label for="name">First name *</label>
                                        <input class="form-control required" id="name" name="name" type="text">
                                        <label for="surname">Last name *</label>
                                        <input class="form-control required" id="surname" name="surname" type="text">
                                        <label for="email">Email *</label>
                                        <input class="form-control required" id="email" name="email" type="text">
                                        <label for="address">Address</label>
                                        <input class="form-control" id="address" name="address" type="text">
                                        <p>(*) Mandatory</p>
                                    </fieldset>
                                    <h4>Hints
                                        <br>
                                        <small>Nam egestas, leo eu gravida tincidunt</small>
                                    </h4>
                                    <fieldset>
                                        <p class="lead text-center">Almost there!</p>
                                    </fieldset>
                                    <h4>Finish
                                        <br>
                                        <small>Nam egestas, leo eu gravida tincidunt</small>
                                    </h4>
                                    <fieldset>
                                        <p class="lead">One last check</p>
                                        <div class="checkbox c-checkbox">
                                            <label>
                                                <input type="checkbox" required="required" name="terms">
                                                <span class="fa fa-check"></span>I agree with the Terms and Conditions.</label>
                                        </div>
                                    </fieldset>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- JQUERY VALIDATE-->
    <script src="{{asset('dashboard_assets/vendor/jquery-validation/dist/jquery.validate.js')}}"></script>
    <script src="{{asset('dashboard_assets/vendor/jquery-validation/dist/additional-methods.js')}}"></script>
    <!-- JQUERY STEPS-->
    <script src="{{asset('dashboard_assets/vendor/jquery-steps/build/jquery.steps.js')}}"></script>
@endsection


