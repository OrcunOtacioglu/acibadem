<header class="main-header dark-header fs-header sticky">
    <div class="header-inner">
        <div class="logo-holder">
            <a href="{{ url('/') }}"><img src="{{ asset('images/acblogo.png') }}" alt=""></a>
        </div>
        <a href="{{ url('/get-quote') }}" class="add-list">Get a free quote <span><i class="fa fa-envelope"></i></span></a>
        <!-- nav-button-wrap-->
        <div class="nav-button-wrap color-bg">
            <div class="nav-button">
                <span></span><span></span><span></span>
            </div>
        </div>
        <!-- nav-button-wrap end-->
        <!--  navigation -->
        <div class="nav-holder main-menu">
            <nav>
                <ul>
                    <li>
                        <a href="{{ url('/') }}" class="act-link">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/why-us') }}">Why Acıbadem?</a>
                    </li>
                    <li>
                        <a href="{{ url('/treatment') }}">Treatment</a>
                    </li>
                    <li>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- navigation  end -->
    </div>
</header>