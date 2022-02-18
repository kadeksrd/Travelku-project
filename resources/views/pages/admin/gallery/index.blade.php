@extends('layouts.admin')

@section('title')
    Gallery
@endsection


@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Gallery</h1>
            <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white-50"></i>
                Add Gallery
            </a>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="card card-body">
                <div class="table-responsive">
                    <table class="table table-bordered rounded" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                {{-- th=('ID','Title','Location','Type','Depature Date','Type',Action) --}}
                                <th>ID</th>
                                <th>Travel</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->travel_package->title }}</td>
                                    <td>
                                        {{-- img=src.storange.url --}}
                                        <img src="{{ Storage::url($item->image) }}" width="150px" alt=""
                                            class="img-thumbnail" />
                                    </td>
                                    <td>
                                        <a href="{{ route('gallery.edit', $item->id) }}" class="btn btn-info">
                                            {{-- i=pencil --}}
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('gallery.destroy', $item->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            {{-- btn=btn.danger>i=trash --}}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center"></td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
