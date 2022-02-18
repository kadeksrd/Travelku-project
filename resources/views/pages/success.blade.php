@extends('layouts.success')

@section('title', 'Checkout Page')

@section('content')
    <main>
        <section class="success-checkout dflex align-items-center">
            <div class="col text-center">
                <img src="{{ url('front-end/images/checkout-picture/success_checkout/success_logo.png') }}"
                    alt="success_checkout" />
                <h1>Yay! Success</h1>
                <p>
                    We’ve sent you email for trip instruction
                    <br />
                    please read it as well
                </p>
                <a href="{{ route('home') }} " class="btn btn-primary btn-home mt-2 my-2 px-3 py-2">Home Page</a>
            </div>
        </section>
    </main>
@endsection
