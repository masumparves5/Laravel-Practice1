@extends('master')

@section('title')
    Detail Page
@endsection


@section('body')

    <section class="py bg-dark-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <img src="{{asset($product['image'])}}" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body bg-transparent border-0">
                        <h1>{{$product['name']}}</h1>
                        <p>NETWORK :{{$product['NETWORK']}}</p>
                        <p>BATTERY :{{$product['BATTERY']}}</p>
                        <p>SOUND :{{$product['SOUND']}}</p>
                        <p>CAMERA :{{$product['CAMERA']}}</p>
                        <p>MEMORY :{{$product['MEMORY']}}</p>
                        <p>PLATFORM :{{$product['PLATFORM']}}</p>
                        <p>DISPLAY :{{$product['DISPLAY']}}</p>
                        <p>BODY :{{$product['BODY']}}</p>
                        <p>PRICE :{{$product['price']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

