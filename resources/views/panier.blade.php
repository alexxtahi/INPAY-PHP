<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Metas -->
    
    <!-- Css Styles -->
    @include('include.css')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('include.header')
    <!-- Header End -->

     <!-- Shopping Cart Section Begin -->
     <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $total = 0;
                                @endphp
                                @forelse ($cart as $items)
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset($items->produits->img_prod) }}" alt="">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $items->produits->designation }}</h6>
                                                <h5>{{ $items->produits->prix_prod }} FCFA </h5>
                                            </div>
                                        </td>
                                        <td class="quantity__item">
                                            <div class="quantity">
                                                <div class="pro-qty-2">
                                                    <input type="text" value="{{ $items->qt_prod }}" disabled="True">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="cart__price">{{ $items->produits->prix_prod * $items->qt_prod}} FCFA </td>
                                        <td class="cart__close">
                                            <a href="{{ route('produit.destroy', ['id' => $items->id_prod]) }}">
                                                <i class="fa fa-close"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    @php
                                    $total += $items->produits->prix_prod * $items->qt_prod;
                                    @endphp

                                @empty
                                @endforelse
                                
                               
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="{{route('home')}}">Continuer vos achat</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span>{{ number_format($total, 0, ',', ' ') }}
                                (TTC) </span></li>
                            
                        </ul>
                        <a href="#" class="primary-btn">Proceed to checkout</a>
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
