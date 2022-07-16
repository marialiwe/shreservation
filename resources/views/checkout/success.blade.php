@extends('layout.app')

@section('content')
<section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{asset('images/pay.png')}}" height="400" class="mb-5" alt=" ">
                </div>
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        You did it!
                    </p>
                    <h2 class="primary-header ">
                        Room reservation success
                    </h2>
                    <p>
                        Go to dashboard to complete payments
                    </p>
                    <a href="{{route('dashboard')}}" class="btn btn-primary mt-3">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endsection