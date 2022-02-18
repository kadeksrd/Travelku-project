@extends('layouts.admin')

@section('title')
    Add Travel Package
@endsection


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Travel Package</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="card card-shadow roounded">
            <div class="card-body">
                <form action="{{ route('travel-package.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}"
                            placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="{{ old('location') }}"
                            placeholder="Location">
                    </div>
                    <div class="form-group">
                        {{-- textarea,class=dblock w-100 form-control,value={{old('about')}} --}}
                        <label for="about">About</label>
                        <textarea name="about" id="about" rows="10" class="form-control" value="{{ old('about') }}"
                            placeholder="About"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event"
                            value="{{ old('featured_event') }}" placeholder="Featured Events">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" value="{{ old('language') }}"
                            placeholder="Language">
                    </div>
                    <div class="form-group">
                        <label for="food">Foods</label>
                        <input type="text" class="form-control" name="food" value="{{ old('food') }}"
                            placeholder="Foods">
                    </div>
                    <div class="form-group">
                        <label for="depature_date">Depature date</label>
                        <input type="date" class="form-control" name="depature_date" value="{{ old('depature_date') }}"
                            placeholder="Depature Date">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{ old('duration') }}"
                            placeholder="Duration">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" value="{{ old('type') }}"
                            placeholder="Type">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ old('price') }}"
                            placeholder="Price">
                    </div>
                    <button class="mt-5 btn btn-primary btn-block" type="submit">
                        Save
                    </button>
                </form>
            </div>
        </div>



    @endsection
