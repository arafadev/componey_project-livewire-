@extends('admin.master')
@section('title', 'Counters')
@section('counters_active', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline">Counters</h4>
                @livewire('admin.counters.counters-create')
                <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModel">
                    Add Counter
                </button>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('admin.counters.counters-data')
                </div>
            </div>
            @livewire('admin.counters.counters-update')
            @livewire('admin.counters.counters-delete')
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>
    @endsection
