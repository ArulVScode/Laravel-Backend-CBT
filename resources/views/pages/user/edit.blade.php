@extends('layouts.app')

@section('title', 'Forms Edit User')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Edit Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Users</h2>
                    <div class="card">
                        <form action="{{ route('user.update', $users) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header">
                                <h4>Edit Forms</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control @error('name')
                                        is-invalid
                                    @enderror" name="name" value="{{ $users->name }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control @error('email')
                                        is-invalid
                                    @enderror" name="email" value="{{ $users->email }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password Strength</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password"
                                            class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password">
                                    </div>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label>Phone</label>
                                <input type="number" class="form-control" name="phone" value="{{ $users->phone }}">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Roles</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="roles" value="ADMINT" class="selectgroup-input" @if ($users->roles == 'ADMINT') checked
                                            @endif>
                                            <span class="selectgroup-button">Admint</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="roles" value="STAFF" class="selectgroup-input" @if ($users->roles == 'STAFF') checked
                                            @endif>
                                            <span class="selectgroup-button">Staff</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="roles" value="USER" class="selectgroup-input" @if ($users->roles == 'USER') checked
                                            @endif>
                                            <span class="selectgroup-button">
                                                User
                                            </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit"
                                    class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
@endpush
