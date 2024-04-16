@extends('admin.master')
@section('title', 'Categories')
@section('categories_active', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline">Categories</h4>
                <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModel">
                    Add Category
                </button>
                @livewire('admin.categories.categories-create')
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('admin.categories.categories-data')
                </div>
            </div>
            @livewire('admin.categories.categories-update')
            @livewire('admin.categories.categories-delete')
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>
    @endsection
