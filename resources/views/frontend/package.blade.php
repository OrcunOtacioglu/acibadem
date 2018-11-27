@extends('layouts.frontend')

@section('title')
    What's included in {{ $type }} package?
@stop

@section('content')
    <!-- Parallax -->
    <section class="parallax-section single-par list-single-section" data-scrollax-parent="true" id="sec1">
        <div class="bg par-elem "  data-bg="/images/all/acibadem-hastanesi.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="list-single-header absolute-header fl-wrap">
            <div class="container">
                <div class="list-single-header-item">
                    <div class="list-single-header-item-opt fl-wrap">
                        <div class="list-single-header-cat fl-wrap">
                            <a href="#">{{ ucfirst($type) }}</a>
                            <span>  Flight tickets <i class="fa fa-check"></i></span>
                            <span>  Transfers <i class="fa fa-check"></i></span>
                            <span>  Accommodation <i class="fa fa-check"></i></span>
                        </div>
                    </div>
                    <h2>{{ ucfirst($type) }} Package</h2>
                    <span class="section-separator"></span>
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                        <span>(11 reviews)</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="list-single-header-contacts fl-wrap">
                                <ul>
                                    <li><i class="fa fa-phone"></i><a  href="#">+90(216)649 44 44</a></li>
                                    <li><i class="fa fa-envelope-o"></i><a  href="#">info@acibadem.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fl-wrap list-single-header-column">
                                <a class="add-list" href="#sec5">€490/person</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Parallax -->

    <!-- Single Navbar -->
    <div class="scroll-nav-wrapper fl-wrap">
        <div class="container">
            <nav class="scroll-nav scroll-init">
                <ul>
                    <li><a class="act-scrlink" href="#sec1">Overview</a></li>
                    <li><a href="#sec2">Details</a></li>
                    <li><a href="#sec3">Gallery</a></li>
                    <li><a href="#sec4">Reviews</a></li>
                </ul>
            </nav>
            <a href="{{ url('/get-quote') }}" class="save-btn"> <i class="fa fa-envelope"></i> Get your offer </a>
        </div>
    </div>
    <!-- End Single Navbar -->

    <!-- Package Details -->
    <section class="gray-section no-top-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="list-single-main-wrapper fl-wrap" id="sec2">
                        <div class="breadcrumbs gradient-bg  fl-wrap"><a href="#">Home</a><a href="#">Packages</a><span>{{ ucfirst($type) }} Package</span></div>
                        <div class="list-single-main-media fl-wrap">
                            <img src="{{ asset('images/all/acıbadem-hastanesi-2.jpg') }}" class="respimg" alt="">
                        </div>
                        <div class="list-single-main-item fl-wrap">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>What's Included </h3>
                            </div>
                            <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut tristique elit risus at metus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                            <a href="#" class="btn transparent-btn float-btn">Download brochure <i class="fa fa-file-pdf-o"></i></a>
                            <span class="fw-separator"></span>
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Services</h3>
                            </div>
                            <div class="listing-features fl-wrap">
                                <ul>
                                    <li><i class="fa fa-rocket"></i> Flight tickets</li>
                                    <li><i class="fa fa-wifi"></i> Hotel accommodation</li>
                                    <li><i class="fa fa-motorcycle"></i> Free breakfast</li>
                                    <li><i class="fa fa-cloud"></i> Airport to hotel transfers</li>
                                    <li><i class="fa fa-shopping-cart"></i> Optional city tours</li>
                                    <li><i class="fa fa-paw"></i> Hotel to hospital transfers</li>
                                </ul>
                            </div>
                        </div>
                        <div class="accordion">
                            <a class="toggle act-accordion" href="#"> FAQ 1   <i class="fa fa-angle-down"></i></a>
                            <div class="accordion-inner visible">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                            </div>
                            <a class="toggle" href="#"> FAQ 2  <i class="fa fa-angle-down"></i></a>
                            <div class="accordion-inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                            </div>
                            <a class="toggle" href="#"> FAQ 3  <i class="fa fa-angle-down"></i></a>
                            <div class="accordion-inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>
                            </div>
                        </div>
                        <div class="list-single-main-item fl-wrap" id="sec3">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>Gallery - Photos</h3>
                            </div>
                            <!-- gallery-items   -->
                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                <!-- 1 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 1 end -->
                                <!-- 2 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 end -->
                                <!-- 3 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 end -->
                                <!-- 4 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 4 end -->
                                <!-- 5 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 5 end -->
                                <!-- 7 -->
                                <div class="gallery-item">
                                    <div class="grid-item-holder">
                                        <div class="box-item">
                                            <img  src="/images/all/single/1.jpg"   alt="">
                                            <a href="/images/all/single/1.jpg" class="gal-link popup-image"><i class="fa fa-search"  ></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- 7 end -->
                            </div>
                            <!-- end gallery items -->
                        </div>
                        <!-- list-single-main-item end -->
                        <!-- list-single-main-item -->
                        <div class="list-single-main-item fl-wrap" id="sec4">
                            <div class="list-single-main-item-title fl-wrap">
                                <h3>{{ ucfirst($type) }} Package Reviews -  <span> 3 </span></h3>
                            </div>
                            <div class="reviews-comments-wrap">
                                <!-- reviews-comments-item -->
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Jessie Manrty</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>27 May 2018</span>
                                    </div>
                                </div>
                                <!--reviews-comments-item end-->
                                <!-- reviews-comments-item -->
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Mark Rose</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>12 April 2018</span>
                                    </div>
                                </div>
                                <!--reviews-comments-item end-->
                                <!-- reviews-comments-item -->
                                <div class="reviews-comments-item">
                                    <div class="review-comments-avatar">
                                        <img src="/images/avatar/1.jpg" alt="">
                                    </div>
                                    <div class="reviews-comments-item-text">
                                        <h4><a href="#">Adam Koncy</a></h4>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                        <div class="clearfix"></div>
                                        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                        <span class="reviews-comments-item-date"><i class="fa fa-calendar-check-o"></i>03 December 2017</span>
                                    </div>
                                </div>
                                <!--reviews-comments-item end-->
                            </div>
                        </div>
                        <!-- list-single-main-item end -->
                    </div>
                </div>
                <!--box-widget-wrap -->
                <div class="col-md-4">
                    <div class="box-widget-wrap">
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>{{ ucfirst($type) }} Package Itinerary : </h3>
                            </div>
                            <div class="box-widget opening-hours">
                                <div class="box-widget-content">
                                    <ul>
                                        <li><span class="opening-hours-day">Monday </span><span class="opening-hours-time">Flight</span></li>
                                        <li><span class="opening-hours-day">Tuesday </span><span class="opening-hours-time">Accommodation</span></li>
                                        <li><span class="opening-hours-day">Wednesday </span><span class="opening-hours-time">Surgery</span></li>
                                        <li><span class="opening-hours-day">Thursday </span><span class="opening-hours-time">Surgery</span></li>
                                        <li><span class="opening-hours-day">Friday </span><span class="opening-hours-time">City tour</span></li>
                                        <li><span class="opening-hours-day">Saturday </span><span class="opening-hours-time">City tour</span></li>
                                        <li><span class="opening-hours-day">Sunday </span><span class="opening-hours-time">Flight</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>Get a Quote Online : </h3>
                            </div>
                            <div class="box-widget opening-hours">
                                <div class="box-widget-content">
                                    <form   class="add-comment custom-form">
                                        <fieldset>
                                            <label><i class="fa fa-user-o"></i></label>
                                            <input type="text" placeholder="Your Name *" value=""/>
                                            <div class="clearfix"></div>
                                            <label><i class="fa fa-envelope-o"></i>  </label>
                                            <input type="text" placeholder="Email Address*" value=""/>
                                            <textarea cols="40" rows="3" placeholder="Additional Information:"></textarea>
                                        </fieldset>
                                        <button class="btn  big-btn  color-bg flat-btn">Send<i class="fa fa-angle-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                        <!--box-widget-item -->
                        <div class="box-widget-item fl-wrap">
                            <div class="box-widget-item-header">
                                <h3>Location / Contacts : </h3>
                            </div>
                            <div class="box-widget">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781" data-mapTitle="Out Location"></div>
                                </div>
                                <div class="box-widget-content">
                                    <div class="list-author-widget-contacts list-item-widget-contacts">
                                        <ul>
                                            <li><span><i class="fa fa-map-marker"></i> Adress :</span> <a href="#">Altunizade Mah. Yurtcan Sok. No: 1 Üsküdar / İstanbul 34662</a></li>
                                            <li><span><i class="fa fa-phone"></i> Phone :</span> <a href="#">+90(216)649 44 44</a></li>
                                            <li><span><i class="fa fa-envelope-o"></i> Mail :</span> <a href="#">atzinfo@acibadem.com.tr</a></li>
                                        </ul>
                                    </div>
                                    <div class="list-widget-social">
                                        <ul>
                                            <li><a href="#" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-vk"></i></a></li>
                                            <li><a href="#" target="_blank" ><i class="fa fa-whatsapp"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--box-widget-item end -->
                    </div>
                </div>
                <!--box-widget-wrap end -->
            </div>
        </div>
    </section>
    <!-- End Package Details -->
@stop

@section('footer.scripts')
    <script type="text/javascript" src="{{ asset('js/map_infobox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/markerclusterer.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/maps.js') }}"></script>
@stop