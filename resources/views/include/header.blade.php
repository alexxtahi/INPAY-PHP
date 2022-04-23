

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <h4><strong>#CinetPay</strong></h4>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li @if ($view_name == 'home') class="active" @endif>
                            <a href="{{ route('home') }}">Accueil</a>
                        </li>
                        <li @if ($view_name == 'cart') class="active" @endif>
                            <a href="{{ route('panier') }}">Panier</a>
                        </li>
                        <li @if ($view_name == 'about') class="active" @endif>
                            <a href="{{ route('about') }}">A Propos</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="header__nav__option">
                    <a href="#" class="search-switch"><img src="{{ asset('template/img/icon/search.png') }}"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('template/img/icon/heart.png') }}" alt=""></a>
                    <a href="#"><img src="{{ asset('template/img/icon/cart.png') }}" alt=""> <span>0</span></a>
                    <div class="price">$0.00</div>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
