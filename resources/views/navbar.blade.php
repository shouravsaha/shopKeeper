@extends('layouts.index')
@section('navbar')
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ url('index') }}">Shop Keeper</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <div class="d-none d-md-inline-block form-inline ms-auto me-auto me-md-3 my-2 my-md-0">
        {{-- <h1 class="text-light text-center">Shop-Keeper Management System</h1> --}}
    </div>
    <!-- Navbar-->
</nav>
@endsection

