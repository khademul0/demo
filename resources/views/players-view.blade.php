@extends('layouts.main')

@push('title')
<title>Players List</title>
@endpush

@section('main-section')

<div class="container mt-5">
    <div class="card shadow">

        <div class="card-body">



            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Position</th>
                            <th>Jersey</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($players as $player)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $player->first_name }} {{ $player->last_name }}</td>
                            <td>{{ $player->emali }}</td>
                            <td>{{ $player->phone }}</td>
                            <td>{{ $player->dob }}</td>
                            <td>{{ $player->gender }}</td>
                            <td>{{ $player->city }}</td>
                            <td>{{ $player->country }}</td>
                            <td>{{ $player->position }}</td>
                            <td>{{ $player->jersey_number }}</td>
                            <td>{{ $player->emali }}</td>
                            <td>
                                <a href="{{ route('players.delete', $player->id) }}">
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>
    </div>
</div>

@endsection