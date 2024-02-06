@extends('layouts.main')

@section('content')
<div class="pagetitle">
    <h1>Masterlist</h1>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body p-4">
            <table class="table table-bordered" id="student-table">
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @if(isset($list))
                      @foreach($list as $c)
                          <tr>
                            <td>{{ $c->StudentID }}</td>
                            <td>{{ $c->FirstName . '' .$c->LastName  }}</td>
                            <td>{{ date('M. d, Y', strtotime($c->DateofBirth)) }}</td>
                            <td>{{ $c->Address }}</td>
                            
                          </tr>
                      @endforeach
                  @endif
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
  @section('scripts') 
            <script>
              $("#student-table").dataTable()
            </script>
  @endsection