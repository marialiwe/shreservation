@extends('layout.app')

@section('content')
<section class="banner" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <p class="story">
                                 BOOK YOUR ROOM
                            </p>
                            <h1 class="header">
                                Plan your holiday with Sapphire Hotel
                            </h1>
                            <p class="support">
                            Welcomes you in a real cosmopolitan, pulsing milieu, at the same time offering peace and intimate retirement, just in the heart of the city centre joined forces for you!
                            
                            </p>
                            <p class="cta">
                                <a href="#reservation" class="btn btn-master btn-primary">
                                    Get Started
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 text-center">
                            <a href="#">
                                <img src="{{asset('images/home.png')}}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="benefits" id="facilities">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        FACILITIES
                    </p>
                    <h2 class="primary-header">
                        What we provide
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic1.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Pool
                        </h3>
                        <p class="support">
                            Indoor & outdoor room
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic2.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Spa
                        </h3>
                        <p class="support">
                            Fullbody spa
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic3.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Food & beverages
                        </h3>
                        <p class="support">
                            Breakfast, lunch, and dinner
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-12">
                    <div class="item-benefit">
                        <img src="{{asset('images/ic4.png')}}" class="icon" alt="">
                        <h3 class="title">
                            Playground
                        </h3>
                        <p class="support">
                            Outdoor and indoor playground
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps" id="reservation">
        <div class="container">
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/about.png')}}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <p class="story">
                        VIP Room
                    </p>
                    <h2 class="primary-header">
                        Rp 1.000.000
                    </h2>
                    <p class="support">
                    King size bed, unlimited room service, free breakfast.
                    </p>
                    <p class="mt-5">
                    <a href="{{route('checkout.create', 'gila-belajar')}}" class="btn btn-master btn-secondary me-3">
                            Book Room
                        </a>
                    </p>
                </div>
            </div>

        
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting pl-150">
                    <p class="story">
                        Regular Room
                    </p>
                    <h2 class="primary-header">
                        Rp 750.000
                    </h2>
                    <p class="support">
                        Each of you will be joining the private group and also <br> working together with team members on project
                    </p>
                    <p class="mt-5">
                    <a href="{{route('checkout.create', 'baru-mulai')}}" class="btn btn-master btn-secondary me-3">
                                        Book Room
                                    </a>
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{asset('images/about.png')}}" class="cover" alt="">
                </div>
            </div>
    </section>

    <section class="testimonials" id="testi">
        <div class="container">
            <div class="row text-center pb-70">
                <div class="col-lg-12 col-12 header-wrap">
                    <p class="story">
                        TESTIMONIALS
                    </p>
                    <h2 class="primary-header">
                        What they think about us
                    </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                "I've already stayed here for quite a couple times and the experience is always good"
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/testi1.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Essy
                                        </h4>
                                        <p class="role">
                                            College student
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                "Good places to stay, clean and comfy, also the team has a quick responses for your needs"
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/testi2.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Meggie
                                        </h4>
                                        <p class="role">
                                            Stay at home mother
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="item-review">
                                <img src="{{asset('images/stars.svg')}}" alt="">
                                <p class="message">
                                "The room is spacious, clean, the view is really ok, suitable for relaxing, good service"
                                </p>
                                <div class="user">
                                    <img src="{{asset('images/testi3.png')}}" class="photo" alt="">
                                    <div class="info">
                                        <h4 class="name">
                                            Mico
                                        </h4>
                                        <p class="role">
                                            Creativepreneur
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row copyright">
                        <div class="col-lg-12 col-12">
                            <p>
                                All Rights Reserved. Copyright Sapphire Hotel.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection