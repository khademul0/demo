@extends('layouts.main')

@push('title')
<title>Edit Player</title>
@endpush

@section('main-section')

<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card shadow">
            <div class="card-header text-center">
                <h4>Edit Player</h4>
            </div>

            <div class="card-body">

                <form action="{{ route('players.update', $player->id) }}" method="POST">
                    @csrf

                    <input type="text" name="first_name" value="{{ $player->first_name }}" class="form-control mb-2"
                        placeholder="First Name">
                    <input type="text" name="last_name" value="{{ $player->last_name }}" class="form-control mb-2"
                        placeholder="Last Name">
                    <input type="email" name="email" value="{{ $player->email }}" class="form-control mb-2">
                    <input type="text" name="phone" value="{{ $player->phone }}" class="form-control mb-2">
                    <input type="date" name="dob" value="{{ $player->dob }}" class="form-control mb-2">
                    <input type="text" name="gender" value="{{ $player->gender }}" class="form-control mb-2">
                    <input type="text" name="address" value="{{ $player->address }}" class="form-control mb-2">
                    <input type="text" name="city" value="{{ $player->city }}" class="form-control mb-2">
                    <input type="text" name="country" value="{{ $player->country }}" class="form-control mb-2">
                    <input type="text" name="position" value="{{ $player->position }}" class="form-control mb-2">
                    <input type="number" name="jersey_number" value="{{ $player->jersey_number }}"
                        class="form-control mb-3">

                    <button class="btn btn-success w-100">Update Player</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection