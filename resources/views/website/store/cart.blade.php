@extends('website.app')
@section('content')
    <x-website.partials.page-header  :title="trans('store.cart.title')"/>
    <section class="cart-list pb-0">
       <cart-resume :cart-items="{{$cart->items}}" cart_url="{{ url_locale('order-submit')}}"></cart-resume>
    </section>
    @if (!$cart->isEmpty())
    <section class="cart-action pt-1 pb-4">
        <div class="container">
            <div id="cart-buttons"  class="d-flex justify-content-between">
                <a class="btn btn-primary" href="{{url_locale('store')}}">
                    {{trans('store.cart.back')}}
                </a>

            </div>
        </div>
    </section>
    @endif

@endsection
