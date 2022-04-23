<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->

    <!-- Css Styles -->
    @include('include.css')
</head>

<body>


    <!-- Header Section Begin -->
    @include('include.header')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Paiement</h4>
                        <div class="breadcrumb__links">
                            <a href="{{ route('home') }}">Accueil</a>
                            <a href="{{ route('panier') }}">Description</a>
                            <span>{{ $MonProduits->designation }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset($MonProduits->img_prod) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset($MonProduits->img_prod) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container" prod_general2>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4> {{ $MonProduits->designation }}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <span> - 5 Reviews</span>
                            </div>
                            <h3> {{ $MonProduits->prix_prod }} FCFA<span> {{ $MonProduits->ancien_prix }}FCFA</span>
                            </h3>
                            <p> {{ $MonProduits->description }}</p>

                            <div class="product__details__cart__option">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1" class="qt_prod">
                                        <input value="{{ $MonProduits->prix_prod }}" type="hidden"
                                            class="id_prod">
                                    </div>
                                </div>
                                <a href="/produit/{{ $MonProduits->id }}" class="primary-btn">Ajouter au panier</a>
                            </div>

                            <div class="product__details__last__option">
                                <h5>
                                    <span>Paiement sécurisé garanti</span>
                                    <img src="{{ asset('template/img/cinetpay.png') }}">
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    @include('include.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('include.js')
</body>

</html>
