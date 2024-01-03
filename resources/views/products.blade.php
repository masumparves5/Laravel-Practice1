@extends('master')

@section('title')
    Product Page
@endsection

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-body card text-center bg-secondary-subtle border-0 shadow">
                        <h3>MOBILE PHONE</h3>
                    </div>
                </div>
            </div>


            <div class="row mt-4">
                @foreach($mobile as $mobile)
                    <div class="col-md-3 mb-3">
                        <a href="{{route('detail', ['id' =>$mobile['id']])}}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{asset($mobile['image'])}}" alt="" height="300px">
                                <div class="card-body">
                                    <h5>{{$mobile['name']}}</h5>
                                    <p>{{$mobile['price']}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-body card text-center bg-secondary-subtle border-0 shadow">
                        <h3>Fridge</h3>
                    </div>
                </div>
            </div>
                <div class="row mt-4">
                    @foreach($fridges as $fridge)
                        <div class="col-md-3 mb-3">
                            <a href="{{route('detail', ['id' =>$fridge['id']])}}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{asset($fridge['image'])}}" alt="" height="300px">
                                <div class="card-body">
                                    <h5>{{$fridge['name']}}</h5>
                                    <p>{{$fridge['price']}}</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>


    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card-body card text-center bg-secondary-subtle border-0 shadow">
                        <h3>Television</h3>
                    </div>
                </div>
            </div>
                <div class="row mt-4">
                    @foreach($tvs as $tv)
                        <div class="col-md-3 mb-3">
                            <a href="{{route('detail', ['id' =>$tv['id']])}}">
                            <div class="card">
                                <img src="{{asset($tv['image'])}}" alt="" height="300px">
                                <div class="card-body">
                                    <h5>{{$tv['name']}}</h5>
                                    <p>{{$tv['price']}}</p>
                                </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
        </div>
    </section>
@endsection


