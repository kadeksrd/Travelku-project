@extends('layouts.app')

@section('title')
    Travelku
@endsection


@section('content')

    <!-- header -->
    <header class="text-center">
        <h1>
            Explore The World <br />
            Only One Click
        </h1>
        <p class="mt-3">
            You will see beautiful <br />
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <!-- main -->
    <main>
        <!-- stastitik  -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <!-- main web -->
                <div class="col-5 col-md-2 stats-detail stats-1">
                    <h1>20K</h1>
                    <p>Members</p>
                </div>
                <div class="d-none  d-md-block col-md-2 stats-detail">
                    <h1>12</h1>
                    <p>Countries</p>
                </div>
                <div class="d-none  d-md-block col-md-2 stats-detail">
                    <h1>3K</h1>
                    <p>Hotels</p>
                </div>
                <div class="col-5 col-md-2 stats-detail stats-2">
                    <h1>72</h1>
                    <p>Patners</p>
                </div>
            </section>
        </div>

        <!-- popular section -->
        <section class="popular-section" id="PopularSection">
            <!-- popular heading -->
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading" id="popular">
                        <h2>Wisata Popular</h2>
                        <p>Something but you'll never try <br />before you try it</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- popular content -->
        <section class="section-popular-content" id="PopularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                        <!-- image -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('details', $item->slug) }}" class="btn btn-travels-details"
                                        px-6">View
                                        details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- our network -->
        <section class="our-network-section" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>Company Trust Us <br />
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="front-end/images/networks/image 3.png" alt="" class="img-patner">
                    </div>
                </div>
            </div>
        </section>

        <!-- testimonial heading -->
        <section class="section-testimonial-heading" id="TestimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us </h2>
                        <p>
                            Moments were giving them
                            <br />
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial content -->
        <section class="section-testimonial-content" id="TestimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <!-- dmotov -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center ">
                            <div class="testimonial-content">
                                <img src="front-end/images/testimonial/Dmotov.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Dmotov kiev</h3>
                                <p class="testimonial">“ It was glorious and I could not stop to say wohooo for every
                                    single moment Dankeeeeee “</p>
                            </div>
                            <hr>
                            <h2 class="trip-to">Trip To Bali</h2>
                        </div>
                    </div>
                    <!-- ansol -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center ">
                            <div class="testimonial-content">
                                <img src="front-end/images/testimonial/Ansol.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Ansol Ahmad</h3>
                                <p class="testimonial">“ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “</p>
                            </div>
                            <hr>
                            <h2 class="trip-to">Trip To Phucket</h2>
                        </div>
                    </div>
                    <!-- gisela -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center ">
                            <div class="testimonial-content">
                                <img src="front-end/images/testimonial/Gisella.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Gisela Angie </h3>
                                <p class="testimonial">“ I loved it when the waves
                                    was shaking harder — I was
                                    scared too “</p>
                            </div>
                            <hr>
                            <h2 class="trip-to">Trip To Osaka</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="" class="btn btn-need-help px-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mx-1">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection
