@extends('layouts.layout')

@section('content')
    <ul class="header-main ">
        <li class="home"><a href="#">Home   </a><i class="fa fa-angle-right" aria-hidden="true"></i></li>

        <li>  Contact us</li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="page-title">
                <h2>Contact Us</h2>
            </div>



            <div class="info-contact clearfix">
                <div class="col-lg-4 col-sm-4 col-xs-12 info-store">
                    <div class="row">
                        <div class="name-store">
                            <h3>Peezar Khana</h3>
                        </div>
                        <address>

                            <div class="phone form-group">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="text">Phone : (+92) 334-0167330</div>
                            </div>

                        </address>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-8 col-xs-12 contact-form">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <fieldset>
                            <legend>Contact Form</legend>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-name">Your Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" value="" id="input-name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-email">E-Mail Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" value="" id="input-email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="input-enquiry">Enquiry</label>
                                <div class="col-sm-10">
                                    <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <div class="buttons">
                            <div class="pull-right">
                                <button class="btn btn-default buttonGray" type="submit">
                                    <span>Submit</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
