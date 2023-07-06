@extends('layouts.admin')

@section('main-content')
    <div class="container card">
        @if (isset($amenity))
            <div class="mb-5 mb-xl-10">
                <div class="card-header cursor-pointer">
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Amenity Information</h3>
                    </div>
                </div>
                <div class="card-body p-9">
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Name</label>
                        <div class="col-lg-8">
                            <span class="fw-bolder fs-6 text-gray-800">{{ $amenity->name }}
                            </span>
                        </div>
                    </div>
                    <div class="row mb-7">
                        <label class="col-lg-4 fw-bold text-muted">Details</label>
                        <div class="col-lg-8">
                            <span class="fw-bolder fs-6 text-gray-800">{{ $amenity->details }}
                            </span>
                        </div>
                    </div>
                    <div>
                        <a href="/amenities/{{ $amenity->id }}/edit" class="btn btn-primary my-3 btn-sm">Update</a>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @endsection