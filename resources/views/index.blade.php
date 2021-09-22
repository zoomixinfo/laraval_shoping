@extends('layout')

@section('content')
@foreach($products as $product)
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Sale</p>
                            </div>
                            <img src="{{ $product->image }}" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="{{ route('add.to.cart', $product->id) }}">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{ $product->name }}</h4>
                            <h5>{{ $product->description }}</h5>
                        </div>
                    </div>
                </div>
        @endforeach
        @endsection