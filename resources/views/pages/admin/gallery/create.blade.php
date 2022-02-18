@extends('layouts.admin')

@section('title')
    Add Gallery
@endsection


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Gallery</h1>
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

        <div class="card card-shadow rounded">
            <div class="card-body">
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- .form-control.label="title".Paket Travel>select --}}
                    <div class="form-group">
                        <label for="travel_packages_id">
                            Paket Travel
                        </label>
                        <select name="travel_packages_id" required class="form-control">
                            <option value="">Pilih Paket Travel</option>
                            @foreach ($travel_packages as $travel_package)
                                <option value="{{ $travel_package->id }}">
                                    {{ $travel_package->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" placeholder="image">
                    </div>
                    <button class="mt-5 btn btn-primary btn-block" type="submit">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>


@endsection
