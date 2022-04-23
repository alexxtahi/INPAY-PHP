<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

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
                        <div class="checkout-result-icon"
                            style="background-image: url('{{ asset('template/img/check.png') }}');"></div>
                        <div class="checkout-result-content">
                            <h3 style="margin-bottom: 15px">Paiement réussi</h3>
                            <a href="{{ route('home') }}" class="primary-btn">Continuer les achats</a>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Résultat de la commande</span>
                            <h2>Félicitations !</h2>
                            <p>
                                Le paiement de votre commande d'un montant de 100.000F a été effectué avec
                                succès. Merci pour votre confiance.
                            </p>
                        </div>
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
