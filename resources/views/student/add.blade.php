@extends('layouts.main')

@section('content')
<div class="pagetitle">
    <h1>Add Customer</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body p-4">
               @livewire('student.add-student')
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection