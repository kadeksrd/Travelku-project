@extends('layouts.checkout-app')

@section('title', 'Checkout Page')

@push('addon-style')
    <link rel="stylesheet" href="{{ url('front-end/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@section('content')
    <main>
        <!-- header -->
        <section class="section-header-details"></section>
        <!-- content details -->
        <section class="section-content-details">
            <div class="section-details-content">
                <!-- breadcumb -->
                <div class="container">
                    <div class="row">
                        <div class="col p-0">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Paket Travel</li>
                                    <li class="breadcrumb-item">Details</li>
                                    <li class="breadcrumb-item active">Checkout</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- card-content -->
                    <div class="row">
                        <!-- member checkout -->
                        <div class="col-lg-8 pl-lg-0">
                            <div class="card card-details">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li> {{ $error }} </li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endif
                                <h1>Who is Going?</h1>
                                <p>Trip to {{ $item->travel_package->title }}, {{ $item->travel_package->location }}</p>
                                <!-- table member -->
                                <div class="attendee">
                                    <table class="table table-responsive-sm text-center table-borderless">
                                        <thead>
                                            <tr>
                                                <td>Picture</td>
                                                <td>Name</td>
                                                <td>Nationality</td>
                                                <td>Visa</td>
                                                <td>Passport</td>
                                                <td></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($item->details as $detail)
                                                <tr>
                                                    <td>
                                                        <img src="{{ url('https://ui-avatars.com/api/?name=' . $detail->username) }}"
                                                            height="50" alt="picture_members" />
                                                    </td>
                                                    <td class="align-middle">{{ $detail->username }}</td>
                                                    <td class="align-middle">{{ $detail->nationality }}</td>
                                                    <td class="align-middle">{{ $detail->is_visa ? '30 days' : 'N/A' }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}
                                                    </td>
                                                    <td class="align-middle">
                                                        <a href="{{ route('checkout-remove', $detail->id) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="gray" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="6" class="text-center">
                                                        <h3>No Visitor</h3>
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <!-- add member -->
                                <div class="members mt-3">
                                    <h2>Add Member</h2>
                                    <form class="form-inline mt-3" method="post"
                                        action="{{ route('checkout-create', $item->id) }}">
                                        @csrf

                                        <!-- label -->
                                        <label for="username" class="sr-only">Name</label>
                                        <input class="form-control mb-2 mr-sm-2" type="text" placeholder="username"
                                            id="username" name="username" />
                                        <label for="nationality" class="sr-only" required>NA</label>
                                        <input class="form-control mb-2 mr-sm-2" type="text" placeholder="NA"
                                            id="nationality" name="nationality" style="width: 50px;" />
                                        <label for="is_visa" class="sr-only">Visa</label>
                                        <select name="is_visa" id="is_visa" class="custom-select mb-2 mr-sm-2">
                                            <option selected>Visa</option>
                                            <option value="1">30 Days</option>
                                            <option value="0">N/A</option>
                                        </select>
                                        <label for="doe_passport" class="sr-only">Doe Passport</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input class="form-control datepicker" type="text" placeholder="Doe Passport"
                                                id="doe_passport" name="doe_passport" />
                                        </div>
                                        <button class="btn btn-add-now mb-2 px-4" type="submit">Add Now</button>
                                    </form>
                                    <!-- note -->
                                    <div class="note mt-2">
                                        <h3>Note</h3>
                                        <p>
                                            You are only able to invite member that has registered
                                            in Nomads.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- order card -->
                        <div class="col-lg-4">
                            <div class="card card-details card-right order-card checkout-card">
                                <!-- Checkout information -->
                                <h2>Checkout Information</h2>
                                <table>
                                    <tr>
                                        <th width="50%">Members</th>
                                        <td width="50%" class="text-right">{{ $item->details->count() }} person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Additional Visa</th>
                                        <td width="50%" class="text-right">$ {{ $item->additional_visa }},00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Trip Price</th>
                                        <td width="50%" class="text-right">${{ $item->travel_package->price }},00 /
                                            person</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Sub Total</th>
                                        <td width="50%" class="text-right">${{ $item->transaction_total }},00</td>
                                    </tr>
                                    <tr>
                                        <th width="50%">Total (+Unique Code)</th>
                                        <td width="50%" class="text-right">
                                            <span>${{ $item->transaction_total }},</span>
                                            <span class="text-orange">{{ mt_rand(0, 99) }}</span>
                                        </td>
                                    </tr>
                                </table>
                                <div class="payment-guide border-top mt-2">
                                    <h2 class="payment mt-2">Payment Intructions</h2>
                                    <p>
                                        Please complete your payment before to continue the
                                        wonderful trip
                                    </p>
                                    <div class="bank mt-2">
                                        <div class="bank-item mt-2">
                                            <img src="{{ url('front-end/images/checkout-picture/logo/bank1.png') }}"
                                                alt="bank" class="" />
                                        </div>
                                        <div class="description">
                                            <p>
                                                PT Travelku ID
                                                <br />
                                                0881 8829 8800
                                                <br />
                                                Bank Central Asia
                                            </p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="bank-item mt-2">
                                        <img src="{{ url('front-end/images/checkout-picture/logo/bank1.png') }}" alt=""
                                            class="bank" />
                                    </div>
                                    <div class="description">
                                        <p>
                                            PT Travelku ID
                                            <br />
                                            0899 8501 7888
                                            <br />
                                            Bank HSBC
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="join-container">
                                <a href="{{ route('checkout-success', $item->id) }}"
                                    class="btn btn-block btn-join-now mt-3 py-3">
                                    Order Now
                                </a>
                            </div>
                            <div class="text-center mt-3">
                                <a href="{{ route('details', $item->travel_package->slug) }}" class="text-muted">
                                    Cancel Booking
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script src="{{ url('front-end/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <!-- gijgo script -->
    <script>
        $(document).ready(function() {

            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                uiLibrary: "bootstrap4",
                icons: {
                    rightIcon: '<img src="{{ url('front-end/images/checkout-picture/logo/image 10.png') }}" />'
                },
            });
        });
    </script>
@endpush
