<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('help')

<div class="container mt-3" style="background:#fff;">
        <div class="search-form">
            <form class="d-flex align-items-center">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white border-0" id="search-icon">
                            <i class="fas fa-search text-light"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control border-0" placeholder="Search..." aria-label="Search" aria-describedby="search-icon">
                </div>
            </form>
        </div>
        <!-- Add your dashboard content here -->
    </div>
@endsection
