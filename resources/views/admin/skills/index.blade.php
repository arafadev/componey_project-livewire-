@extends('admin.master')
@section('title', 'Skills')
@section('skills_active', 'active')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="mb-3">
                <h4 class="fw-bold py-3 mb-4 d-inline">Skills</h4>

                @livewire('admin.skills.skills-create')
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary mb-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#createModel">
                    Add Skill
                </button>

           
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    @livewire('admin.skills.skills-data')
                </div>
            </div>
            @livewire('admin.skills.skills-update')
            @livewire('admin.skills.skills-delete')
            @livewire('admin.skills.skills-show')
            <!-- / Content -->
            <div class="content-backdrop fade"></div>
        </div>
    @endsection
