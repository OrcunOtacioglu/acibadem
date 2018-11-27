<section id="pricing">
    <div class="container">
        <div class="section-title">
            <h2> Package Prices</h2>
            <div class="section-subtitle">cost of our services</div>
            <span class="section-separator"></span>
            <p>Explore Istanbul and enjoy your hairtransplant medical surgery.</p>
        </div>
        <div class="pricing-wrap fl-wrap">
            <!-- price-item-->
            <div class="price-item">
                <div class="price-head op1">
                    <h3>Basic</h3>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-num fl-wrap">
                        <span class="curen">€</span>
                        <span class="price-num-item">490</span>
                        <div class="price-num-desc">Starting price</div>
                    </div>
                    <div class="price-desc fl-wrap">
                        <ul>
                            <li>Hairtransplant surgery</li>
                            <li>Hotel Accommodation in 3 stars hotel</li>
                            <li>Transfers</li>
                        </ul>
                        <a href="#" class="price-link">Choose Basic</a>
                        <a href="{{ action('ApplicationController@package', ['type' => 'basic']) }}" class="details">See details</a>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
            <!-- price-item-->
            <div class="price-item best-price">
                <div class="price-head op2">
                    <h3>Extended</h3>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-num fl-wrap">
                        <span class="curen">€</span>
                        <span class="price-num-item">990</span>
                        <div class="price-num-desc">Starting price</div>
                    </div>
                    <div class="price-desc fl-wrap">
                        <ul>
                            <li>Hairtransplant surgery</li>
                            <li>Flight tickets</li>
                            <li>Transfers</li>
                            <li>Hotel accommodation in 4* hotel</li>
                        </ul>
                        <a href="#" class="price-link">Choose Extended</a>
                        <a href="{{ action('ApplicationController@package', ['type' => 'extended']) }}" class="details">See details</a>
                        <div class="recomm-price">
                            <i class="fa fa-check"></i>
                            <span class="clearfix"></span>
                            Recommended
                        </div>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
            <!-- price-item-->
            <div class="price-item">
                <div class="price-head">
                    <h3>Professional</h3>
                </div>
                <div class="price-content fl-wrap">
                    <div class="price-num fl-wrap">
                        <span class="curen">€</span>
                        <span class="price-num-item">1490</span>
                        <div class="price-num-desc">Starting price</div>
                    </div>
                    <div class="price-desc fl-wrap">
                        <ul>
                            <li>Hairtransplant surgery</li>
                            <li>Flight tickets</li>
                            <li>VIP transfers</li>
                            <li>Hotel accommodation in 5* hotels</li>
                        </ul>
                        <a href="#" class="price-link">Choose Professional</a>
                        <a href="{{ action('ApplicationController@package', ['type' => 'professional']) }}" class="details">See details</a>
                    </div>
                </div>
            </div>
            <!-- price-item end-->
        </div>
        <!-- about-wrap end  -->
    </div>
</section>