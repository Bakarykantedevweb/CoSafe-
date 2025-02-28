@extends('layouts.auth')
@section('content')
    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6 d-flex flex-column gap-4">
                        <div>
                            <a href="{{ url('/') }}"><img src="assets/images/brand/logo/logo-icon.svg" class="mb-4"
                                    alt="logo-icon" /></a>
                            <div class="d-flex flex-column gap-1">
                                <h1 class="mb-0 fw-bold">Se connecter</h1>
                            </div>
                        </div>
                        <!-- Form -->
                        <form action="{{ route('login') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="signInEmail" class="form-label">Username or email</label>
                                <input type="email" name="email" id="signInEmail" class="form-control @error('email') is-invalid @enderror" name="signInEmail"
                                    placeholder="Email address here" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="signInPassword" class="form-label">Password</label>
                                <input type="password" name="password" id="signInPassword" class="form-control @error('password') is-invalid @enderror" name="signInPassword"
                                    placeholder="**************" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}.</div>
                                @enderror
                            </div>
                            <!-- Checkbox -->
                            <div class="d-lg-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="rememberme" {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label" for="rememberme">Se Souvenir de moi</label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                                <div>
                                    <a href="#">Mot de passe oublié?</a>
                                </div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Se Connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
