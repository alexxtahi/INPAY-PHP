<!DOCTYPE html>
<html lang="fr">

<head>
    @include('include.meta')


    <!-- Css Styles -->
    @include('include.css')
</head>

<body>
    <!-- Header Section -->
    @include('include.header')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Paiement</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Accueil</a>
                            <a href="{{ route('panier') }}">Panier</a>
                            <span>Paiement</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="checkout__form">
                <form action="{{ url('paiement') }}" method="POST">
                    @csrf @method('POST')
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <h6 class="coupon__code">
                                <span class="icon_tag_alt"></span>
                                Renseignez vos informations personnelles pour finaliser le paiement.
                            </h6>
                            <h6 class="checkout__title">Informations personnelles</h6>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nom <span>*</span></p>
                                        <input type="text" name="nom" value="tahi" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Prénom <span>*</span></p>
                                        <input type="text" name="prenom" value="ezan" required>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Pays <span>*</span></p>
                                <input type="text" value="Côte d'Ivoire" required>
                            </div>
                            <div class="checkout__input">
                                <p>Ville <span>*</span></p>
                                <input type="text" name="ville" value="Abidjan" required class="checkout__input__add">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Téléphone <span>*</span></p>
                                        <input type="text" name="tel" value="0584649825" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email <span>*</span></p>
                                        <input type="email" name="email" value="alexandretahi7@gmail.com" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4 class="order__title">Votre commande</h4>
                                <div class="checkout__order__products">Produit <span>Total</span></div>
                                <ul class="checkout__total__products">
                                    @php
                                        $total = 0;
                                    @endphp
                                    @foreach ($cart as $item)
                                        <li>{{ $item->produits->designation }}
                                            <span>
                                                {{ number_format($item->produits->prix_prod * $item->qt_prod, 0, ',', ' ') }}
                                                FCFA
                                            </span>
                                        </li>
                                        @php
                                            $total += $item->produits->prix_prod * $item->qt_prod;
                                        @endphp
                                    @endforeach
                                </ul>
                                <ul class="checkout__total__all">
                                    <li>Montant Total <span>{{ $total }} FCFA</span></li>
                                    <input type="hidden" name="montant_total" value="{{ $total }}" required>
                                </ul>
                                <button type="submit" class="site-btn">Valider</button>
                                <img src="{{asset('fashi/img/cinetpay.png')}}">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>The customer is at the heart of our unique business model, which includes design.</p>
                        <a href="#"><img src="img/payment.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>Be the first to know about new arrivals, look books, sales & promos!</p>
                            <form action="#">
                                <input type="text" required placeholder="Your email">
                                <button type="submit"><span class="icon_mail_alt"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footer__copyright__text">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>2020
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" required id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
