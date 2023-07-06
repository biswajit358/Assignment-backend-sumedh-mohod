@extends('layouts.admin')

@section('main-content')
@if (Session::has('message'))
        <div class="alert alert-primary">
            <div class="d-flex flex-column">
                <h4 class="mb-1 text-dark">Information!</h4>
                {{ Session::get('message') }}
            </div>
        </div>
    @endif
    <div class='container card'>
        <div class="row d-flex">
            <div class="col-10 text-center my-5">
                <h3 class="text-center">Amenity table</h3>
            </div>
            <div class="col-2 text-center my-5">
                <a href='/amenities/add'><button class="btn btn-primary btn-sm ms-2">Add New</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <table class="display" id="amenity-table">
                    <thead>
                        <tr class="my-3 fw-bold">
                            <th>Name</th>
                            <th>Details</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($amenities as $amenity)
                            <tr class="my-5">
                                <td><a href="/amenities/{{ $amenity->id }}">{{ $amenity->name }}</a></td>
                                <td><a href="/amenities/{{ $amenity->id }}">{{ $amenity->details }}</a></td>
                                <td class="d-flex justify-content-center">
                                    <a href='/amenities/{{ $amenity->id }}/edit'><button
                                            class="btn btn-primary btn-sm ms-2">Update</button></a>
                                    <form action="/amenities/{{ $amenity->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-dark btn-sm ms-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection

