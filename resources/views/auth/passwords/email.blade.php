@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0">
                <div class="card-body rounded-lg">
                    <p class="text-muted text-center mb-5">Masukan email anda dengan benar.</p>
                    <div class="d-flex justify-content-center mb-5">
                        <a href="{{ route('login') }}" class="btn btn-white mr-3 text-button-login shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="mr-3" width="20" height="20">
                                <path fill="#5e72e4" d="M14.66 15.66A8 8 0 1 1 17 10h-2a6 6 0 1 0-1.76 4.24l1.42 1.42zM12 10h8l-4 4-4-4z" />
                            </svg>
                            Kembali login.
                        </a>
                    </div>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="input-group mb-4 shadow-sm">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 bg-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20"
                                        class="mr-2zZZZ">
                                        <path fill="#eeeeee"
                                            d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z" />
                                    </svg>
                                </div>
                            </div>
                            <input type="email" name="email" id="email"
                                class="form-control border-0 text-muted {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                value="{{ old('email') }}" placeholder="Email" required autofocus>
                        </div>

                        <div class="d-flex justify-content-center pt-3 mb-3">
                            <button type="submit" class="btn btn-primary shadow-sm">
                                {{ __('Send Password Reset Lin') }}
                            </button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
