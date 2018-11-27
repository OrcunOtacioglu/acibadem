@extends('layouts.frontend')

@section('title', 'Contact Us')

@section('content')
    @include('frontend.partials.simple-hero')

    <section id="sec1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="list-single-main-item fl-wrap">
                        <div class="list-single-main-item-title fl-wrap">
                            <h3>Contact <span>Details </span></h3>
                        </div>
                        <div class="list-single-main-media fl-wrap">
                            <img src="{{ asset('images/all/acıbadem-hastanesi-2.jpg') }}" class="respimg" alt="">
                        </div>
                        <p>The Acıbadem Healthcare Group is a Turkish healthcare institution, operating with 17.000 employees. Comprising 21 hospitals and 16 medical centers, Acıbadem has become the world’s second largest Healthcare Chain with this agreement under the auspices of IHH Healthcare Berhad.</p>
                        <div class="list-author-widget-contacts">
                            <ul>
                                <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">Altunizade Mah. Yurtcan Sok. No: 1 Üsküdar / İstanbul 34662</a></li>
                                <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+90(216)649 44 44</a></li>
                                <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">atzinfo@acibadem.com.tr</a></li>
                            </ul>
                        </div>
                        <div class="list-widget-social">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vk"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="list-single-main-wrapper fl-wrap">
                        <div class="list-single-main-item-title fl-wrap">
                            <h3>Our Location</h3>
                        </div>
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                        </div>
                        <div class="list-single-main-item-title fl-wrap">
                            <h3>Get In Touch</h3>
                        </div>
                        <div id="contact-form">
                            <div id="message"></div>
                            <form  class="custom-form" action="php/contact.php" name="contactform" id="contactform">
                                <fieldset>
                                    <label><i class="fa fa-user-o"></i></label>
                                    <input type="text" name="name" id="name" placeholder="Your Name *" value=""/>
                                    <div class="clearfix"></div>
                                    <label><i class="fa fa-envelope-o"></i>  </label>
                                    <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
                                    <div class="clearfix"></div>
                                    <label><i class="fa fa-phone"></i>  </label>
                                    <input type="text"  name="phone" id="phone" placeholder="Phone *" value=""/>
                                    <textarea name="comments"  id="comments" onClick="this.select()" >Message</textarea>
                                </fieldset>
                                <button class="btn  big-btn  color-bg flat-btn" id="submit">Send<i class="fa fa-angle-right"></i></button>
                            </form>
                        </div>
                        <!-- contact form  end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('footer.scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>
    <script type="text/javascript" src="{{ asset('js/map_infobox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/maps.js') }}"></script>
@stop