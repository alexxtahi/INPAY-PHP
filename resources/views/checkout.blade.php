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
                                <input type="text" name="pays" value="Côte d'Ivoire" required>
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
                            <p>
                                <strong>
                                    NB: Renseignez les parties ci-dessous si vous souhaitez payer par carte
                                    bancaire
                                </strong>
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>District</p>
                                        <input type="text" name="adresse" value="Lagunes">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Code postal</p>
                                        <input type="text" name="postal_code" value="75 BP 175">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkout__input">
                                        <p>Adresse</p>
                                        <input type="text" name="adresse" value="Yopougon, Cité verte">
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
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    @include('include.footer')
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
