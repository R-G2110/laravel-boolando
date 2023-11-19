
@extends('layouts.main')

@section('content')
    <div class="container flex justify-center">
        @foreach ($products as $product)

            <a class="item flex " href="{{ route('productDetail', ['slug' => $product['slug']]) }}">


                <div class="photo-item">

                    <img
                        src="/img/{{ $product['photo'] }}"
                        alt="{{ $product['itemName'] }}"
                    >
                    <img
                        class="alternative"
                        src="/img/{{ $product['alternative'] }}"
                        alt="{{ $product['itemName'] }}"
                    >
                    <span class="heart">&hearts;</span>
                    <span
                        class="{{$product['discount'] === 0 ? 'hide' :''}} discount"

                    >-{{ $product['discount'] }}%</span>
                    <span
                        class="{{$product['eco'] ? '' :'hide'}} {{$product['discount'] === 0 ? 'no-discount eco' :'eco'}}"

                    >Sostenibilità</span>
                    <div class="item-info">

                        <span class="brand">{{$product['brand']}}</span>
                        <span class="item-name">{{$product['itemName']}}</span>
                        <span class="c-price">{{$product['currPrice']}}&euro;</span>
                        <span
                            class="{{$product['discount'] === 0 ? 'hide' :''}}"
                            class="o-price"
                        >{{$product['origPrice']}}&euro;</span>
                    </div>

                </div>

            </a>
        @endforeach
    </div>
@endsection
