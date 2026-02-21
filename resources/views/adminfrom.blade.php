@extends('layouts.main')
@push('title')
<title>
    Admin form
</title>

@endpush
@section('main-section')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center">
                    <h4>admin Registration</h4>
                </div>
                <div class="card-body">
                    <form action="{{url('/')}}/aregi" method="post">
                        @csrf

                        <x-input type="text" name="name" label="please enter your name:" />
                        <x-input type="text" name="email" label="please enter your email:" />
                        <x-input type="password" name="password" label="please enter your password:" />
                        <x-input type="password" name="confirm_password" label="confirm your password:" />




                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection