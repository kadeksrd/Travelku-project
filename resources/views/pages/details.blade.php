@extends('layouts.app')

@section('title', 'Detail Travel')

@section('content')
    <!-- main -->
    <main>
        <!-- header -->
        <section class="section-header-details"></section>
        <!-- content details -->
        <section class="section-content-details">
            <div class="container">
                <!-- breadcumb -->
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Paket Travel</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- card-content -->
                <div class="row">
                    <!-- detail card -->
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>{{ $item->title }}</h1>
                            <p>{{ $item->location }}</p>
                            <!-- gallery content -->
                            @if ($item->galleries->count())
                                <div class="gallery">
                                    <!-- hero  -->
                                    <div class="xzoom-container">
                                        <img src="{{ Storage::url($item->galleries->first()->image) }}"
                                            class="xzoom"
                                            xoriginal="{{ Storage::url($item->galleries->first()->image) }}"
                                            id="xzoom-default" />
                                    </div>
                                    <!-- gallery image -->
                                    <div class="xzoom-thumbs">
                                        @foreach ($item->galleries as $gallery)
                                            <a href="{{ Storage::url($gallery->image) }}">
                                                <img src="{{ Storage::url($gallery->image) }}" alt="details-image"
                                                    class="xzoom-gallery mr-2" width="128px"
                                                    xpreview="{{ Storage::url($gallery->image) }}" />
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            <!-- description content -->
                            <h2 class="main-description">Tentang Wisata</h2>
                            <p>
                                {{ $item->about }}
                            </p>
                            <!-- features -->
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="{{ url('front-end/images/icon-details/Artboard – 4.png') }}"
                                        alt="icon-features" class="features" />
                                    <h3>Features Event</h3>
                                    <p>{{ $item->featured_event }}</p>

                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('front-end/images/icon-details/ic-bahasa.png') }}"
                                        alt="icon-language" class="features" />
                                    <h3>Language</h3>
                                    <p>{{ $item->language }}</p>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="{{ url('front-end/images/icon-details/ic-Food.png') }}" alt="icon-foods"
                                        class="features" />
                                    <h3>Food</h3>
                                    <p>{{ $item->food }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- order card -->
                    <div class="col-lg-4">
                        <div class="card card-details card-right order-card">
                            <!-- member information -->
                            <h2 class="members-text">Members Are Going</h2>
                            <div class="members-my-2">
                                <img src="{{ url('front-end/images/checkout-picture/members/mark.png') }}" alt=""
                                    class="member-image" />
                                <img src="{{ url('front-end/images/members/Mask Group (1).png') }}" alt=""
                                    class="member-image" />
                                <img src="{{ url('front-end/images/members/Mask Group (1).png') }}" alt=""
                                    class="member-image" />
                                <img src="{{ url('front-end/images/members/Mask Group (3).png') }}" alt=""
                                    class="member-image" />
                                <img src="{{ url('front-end/images/members/Mask Group (3).png') }}" alt=""
                                    class="member-image" />
                                <div class="border-bottom"></div>
                            </div>
                            <!-- trip Information -->
                            <h2 class="trip-information">Trip Information</h2>
                            <table>
                                <tr>
                                    <th width="50%">Date of Depatures</th>
                                    <td width="50%" class="text-right">
                                        {{ \Carbon\Carbon::create($item->date_of_depature)->format('F n, Y') }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">{{ $item->duration }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of Trip</th>
                                    <td width="50%" class="text-right">{{ $item->type }}</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">${{ $item->price }},00/Person</td>
                                </tr>
                            </table>
                        </div>

                        @auth
                            <form action="{{ route('checkout_process', $item->id) }}" method="post" class="join-container">
                                @csrf
                                <button class="btn btn-block btn-join-now mt-3 py-3">
                                    Join Now
                                </button>
                            </form>
                        @endauth
                        @guest
                            <div class="join-container">
                                <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-3">
                                    Login or Register
                                </a>
                            </div>
                        @endguest

                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('addon-style')
    <!-- xzoom styling -->
    <link rel="stylesheet" href="{{ url('front-end/libraries/xzoom/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('front-end/libraries/xzoom/xzoom.min.js') }}"></script>
    <!-- xzoom script -->
    <script>
        $(document).ready(function() {
            $("#xzoom-default, .xzoom, .xzoom-gallery").xzoom({
                zoomWidth: 500,
                title: false,
                tint: "#333",
                Xoffset: 15,
            });
        });
    </script>
@endpush
