@extends('layouts.app')

@section('title', 'Forms Create Soal')

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
                <h1>Forms Add Questions</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Users</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Add Question</h2>
                    <div class="card">
                        <form action="{{ route('soal.store') }}" method="POST">
                            @csrf
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Questions</label>
                                    <input type="text" class="form-control @error('pertanyaan')
                                        is-invalid
                                    @enderror" name="pertanyaan">
                                    @error('pertanyaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Category</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Numeric" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">Numeric</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Verbal" class="selectgroup-input">
                                            <span class="selectgroup-button">Verbal</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Logika" class="selectgroup-input">
                                            <span class="selectgroup-button">
                                                Logika
                                            </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Answer A</label>
                                    <input type="text" class="form-control @error('jawaban_a')
                                        is-invalid
                                    @enderror" name="jawaban_a">
                                    @error('jawaban_a')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Answer B</label>
                                    <input type="text" class="form-control @error('jawaban_b')
                                        is-invalid
                                    @enderror" name="jawaban_b">
                                    @error('jawaban_b')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Answer C</label>
                                    <input type="text" class="form-control @error('jawaban_c')
                                        is-invalid
                                    @enderror" name="jawaban_c">
                                    @error('jawaban_c')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Answer D</label>
                                    <input type="text" class="form-control @error('jawaban_d')
                                        is-invalid
                                    @enderror" name="jawaban_d">
                                    @error('jawaban_d')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Key</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="a" class="selectgroup-input" checked="">
                                            <span class="selectgroup-button">
                                                A
                                            </span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="b" class="selectgroup-input">
                                            <span class="selectgroup-button">
                                                B
                                            </span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="c" class="selectgroup-input">
                                            <span class="selectgroup-button">
                                                C
                                            </span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="d" class="selectgroup-input">
                                            <span class="selectgroup-button">
                                                D
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
