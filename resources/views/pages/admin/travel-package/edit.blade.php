@extends('layouts.admin')

@section('title')
    Add Travel Package
@endsection


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Travel Package</h1>
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

        <div class="card card-shadow">
            <div class="card-body">
                <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $item->title }}"
                            placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="{{ $item->location }}"
                            placeholder="Location">
                    </div>
                    <div class="form-group">
                        {{-- textarea,class=dblock w-100 form-control,value={{$item->about')}} --}}
                        <label for="about">About</label>
                        <textarea name="about" id="about" rows="10" class="form-control"
                            placeholder="About">{{ $item->about }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event"
                            value="{{ $item->featured_event }}" placeholder="Featured Events">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" value="{{ $item->language }}"
                            placeholder="Language">
                    </div>
                    <div class="form-group">
                        <label for="food">Foods</label>
                        <input type="text" class="form-control" name="food" value="{{ $item->food }}"
                            placeholder="Foods">
                    </div>
                    <div class="form-group">
                        <label for="depature_date">Depature date</label>
                        <input type="date" class="form-control" name="depature_date" value="{{ $item->depature_date }}"
                            placeholder="Depature Date">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" value="{{ $item->duration }}"
                            placeholder="Duration">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" value="{{ $item->type }}"
                            placeholder="Type">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" value="{{ $item->price }}"
                            placeholder="Price">
                    </div>
                    <button class="mt-5 btn btn-primary btn-block" type="submit">
                        Update
                    </button>
                </form>
            </div>
        </div>



    @endsection
