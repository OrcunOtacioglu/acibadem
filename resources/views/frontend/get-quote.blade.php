@extends('layouts.frontend')

@section('title', 'Get your personalized quote')

@section('content')
    <section id="sec1">
        <!-- container -->
        <div class="container">
            <!-- profile-edit-wrap -->
            <div class="profile-edit-wrap">
                <div class="profile-edit-page-header">
                    <h2>Get Your Personalized Offer</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><span>Your Offer</span></div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <!-- profile-edit-container-->
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Basic Informations</h4>
                            </div>
                            <div class="custom-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Full Name <i class="fa fa-user"></i></label>
                                        <input type="text" placeholder="Please put in your full name" value=""/>
                                    </div>
                                    <div class="col-md-8">
                                        <label>Email <i class="fa fa-envelope"></i></label>
                                        <input type="text" placeholder="Please put in your email address" value=""/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <label>Package Selection</label>
                                        <select class="chosen-select" >
                                            <option>Basic Package</option>
                                            <option>Extended Package</option>
                                            <option>Profiessional Package</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="custom-form">
                                            <label>Your hotel selection</label>
                                            <select class="chosen-select" >
                                                <option>Suadiye Hotel</option>
                                                <option>ISG Sabiha Gökçen Airport Hotel</option>
                                                <option>Four Points By Sheraton</option>
                                                <option>Park Dedeman</option>
                                                <option>Dedeman Istanbul</option>
                                                <option>The Green Park Bostancı</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- profile-edit-container end-->
                        <!-- profile-edit-container-->
                        <div class="profile-edit-container add-list-container">
                            <div class="profile-edit-header fl-wrap">
                                <h4>Your Requests</h4>
                            </div>
                            <div class="custom-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>1. Transfers</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                                                    <label class="onoffswitch-label" for="myonoffswitch5">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>2. City tours</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                                                    <label class="onoffswitch-label" for="myonoffswitch6">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                    </div>
                                    <div class="col-md-4">
                                        <!-- act-widget-->
                                        <div class="act-widget fl-wrap">
                                            <div class="act-widget-header">
                                                <h4>3. VIP Hospitality</h4>
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch7">
                                                    <label class="onoffswitch-label" for="myonoffswitch7">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- act-widget end-->
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn  big-btn  color-bg flat-btn">Request<i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- profile-edit-container end-->
                    </div>
                </div>
            </div>
            <!--profile-edit-wrap end -->
        </div>
        <!--container end -->
    </section>
@stop