@extends('master')

@section('title')
    Contact Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{route('makeOddEven')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="first_number" value="{{session('first_number')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Last Number</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" name="last_number" value="{{session('last_number')}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control">{{session('result')}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Choice</label>
                                <div class="col-md-9">
                                    <label class=""><input type="radio" name="choice" value="Odd"> Odd</label>
                                    <label class="px-5"><input type="radio" name="choice" value="Even"> Even</label>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
