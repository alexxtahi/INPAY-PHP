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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('template/img/hero/hero-1.jpg') }}">

            </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls" style="margin-top: 45px">
                        <li class="active" data-filter="*">Nos articles</li>
                        {{-- <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li> --}}
                    </ul>
                </div>
            </div>
            <div class="row product__filter">

                @foreach ($produits as $produit)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix
                        new-arrivals">
                        <div class="product__item prod_general2">
                            <a href="{{ route('produit', ['id' => $produit->id]) }}">
                                <div class="product__item__pic set-bg" data-setbg="{{ $produit->img_prod }}">
                                    <span class="label">Nouveau</span>
                                </div>
                            </a>
                            <div class="product__item__text">

                                <h6>{{ $produit->designation }} FCFA</h6>

                                <input value="{{ $produit->id }}" type="hidden" class="prod_id3">

                                <a class="add-cart prod_id2">+ Ajouter au panier</a>

                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                {{-- Prix --}}
                                <h5>{{ $produit->prix_prod }} FCFA</h5>
                                <div class="product__color__select">
                                    <label for="pc-1">
                                        <input type="radio" id="pc-1">
                                    </label>
                                    <label class="active black" for="pc-2">
                                        <input type="radio" id="pc-2">
                                    </label>
                                    <label class="grey" for="pc-3">
                                        <input type="radio" id="pc-3">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- Product Section End -->



    <!-- Footer Section Begin -->
    @include('include.footer')

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search
                        here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    @include('include.js')
</body>

</html>
