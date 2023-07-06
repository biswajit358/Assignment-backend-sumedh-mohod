@extends('layouts.admin')

@section('main-content')
    <div class='container my-5 card'>
        <div class="row">
            <h1 class="col-12 my-3 text-center">Amenity form</h1>
            @if (isset($amenity->id))
                <form method="post" action='/amenities/{{ $amenity->id }}' class="needs-validation" novalidate="">
                    {{ method_field('PUT') }}
                @else
                    <form method="post" action='/amenities/' class="needs-validation" novalidate="">
            @endif
            @csrf
            <div class=" col-10 offset-1 my-3">
                <label for="name" class="form-label">Name<span style="color:red; font-size:20px">*</span></label>
                <input type="text" name='name' class="form-control @error('name') is-invalid @enderror" id="name"
                    value="{{ old('name', $amenity->name ?? '') }}" required>
                <div class="invalid-feedback">Please enter a name</div>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class=" col-10 offset-1 my-3">
                <label for="details" class="form-label">Details</label>
                <textarea name="details" class="form-control" id="details"
                    aria-label="With textarea">{{ old('details', $amenity->details ?? '') }}</textarea>
            </div>
            <div class="offset-1 my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
    @endsection