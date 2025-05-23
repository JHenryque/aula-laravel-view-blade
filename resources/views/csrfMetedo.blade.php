@extends('layouts.main_layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">


            <div class="col-6">

                <form action="{{ route('submit') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                            <input type="txt" name="username" class="form-control">
                        @error('username')
                            <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                        <p class="alert alert-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
