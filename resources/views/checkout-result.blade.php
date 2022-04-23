<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('include.meta')

    <!-- Css Styles -->
    @include('include.css')
</head>

<body>

    <!-- Header Section-->
    @include('include.header')

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="checkout-result-icon-box">
                        @if ($status == 'ACCEPTED')
                            <div class="checkout-result-icon"
                                style="background-image: url('{{ asset('template/img/check.png') }}');"></div>
                            <div class="checkout-result-content">
                                <h3 style="margin-bottom: 15px">Paiement réussi</h3>
                                <a href="{{ route('home') }}" class="primary-btn">Continuer les achats</a>
                            </div>
                        @else
                            <div class="checkout-result-icon"
                                style="background-image: url('{{ asset('template/img/cancel.png') }}');"></div>
                            <div class="checkout-result-content">
                                <h3 style="margin-bottom: 15px">Transaction annulée</h3>
                                <a href="{{ route('panier') }}" class="primary-btn">Revenir au panier</a>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Résultat de la commande</span>
                            @if ($status == 'ACCEPTED')
                                <h2>Félicitations !</h2>
                            @else
                                <h2>Echec de paiement</h2>
                            @endif
                            <p>
                                {{ $paymentMsg }}
                            </p>
                        </div>
                        @if ($status == 'ACCEPTED')
                            <ul>
                                <li>
                                    <h4>Produits</h4>
                                    @for ($i = 0; $i < 5; $i++)
                                        <p>produit {{ $i }}</p>
                                    @endfor
                                </li>
                                <li>
                                    <h4>Montant</h4>
                                    <p>100.000 F</p>
                                </li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    @include('include.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('include.js')
</body>

</html>
