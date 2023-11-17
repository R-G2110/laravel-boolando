@extends('layouts.main')

@section('content')
    <div class="container flex justify-center">
        @foreach ($products as $product)
            <div class="item flex ">


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
                    class="{'hide': itemObj.discount === '0%'}"
                    class="discount"
                >{{ $product['discount'] }}</span>
                <span
                    :class="getEco"
                    class="eco"
                >Sostenibilità</span>
                <span class="brand">{{$product['brand']}}</span>
                <span class="item-name">{{$product['itemName']}}</span>
                <span class="c-price">{{$product['currPrice']}}&euro;</span>
                <span
                    class="{'hide': itemObj.discount === '0%'}"
                    class="o-price"
                >{{$product['origPrice']}}&euro;</span>

                </div>

            </div>
        @endforeach
    </div>
@endsection
