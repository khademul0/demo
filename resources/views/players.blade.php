@extends('layouts.main')

@push('title')
<title>Player Registration</title>
@endpush

@section('main-section')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>Player Registration</h4>
                </div>

                <div class="card-body">

                    {{-- Success Message --}}
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    {{-- Validation Errors --}}
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('players.store') }}" method="POST">
                        @csrf

                        <x-input type="text" name="first_name" label="Enter First Name" />
                        <x-input type="text" name="last_name" label="Enter Last Name" />
                        <x-input type="email" name="email" label="Enter Email Address" />
                        <x-input type="text" name="phone" label="Enter Phone Number" />
                        <x-input type="date" name="dob" label="Enter Date of Birth" />
                        <x-input type="text" name="gender" label="Enter Gender" />
                        <x-input type="text" name="address" label="Enter Address" />
                        <x-input type="text" name="city" label="Enter City" />
                        <x-input type="text" name="country" label="Enter Country" />
                        <x-input type="text" name="position" label="Playing Position" />
                        <x-input type="number" name="jersey_number" label="Jersey Number" />
                        <x-input type="password" name="password" label="Create Password" />

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success">
                                Register Player
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection