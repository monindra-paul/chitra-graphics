@extends('backend.layout.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">



        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Become a Partner Applications</h5>
  
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>
                      <th scope="col">Mobile No.</th>
                      <th scope="col">Email</th>
                      <th scope="col">Portfolio</th>                     
                      <th scope="col">Status</th>                     
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                 
                  @foreach($partner as $application)
                    <tr>                    
                      <td scope="row">{{ $application->id }}</td>
                      <td>{{ $application->name }}</td>
                      <td>{{ $application->mobile }}</td>
                      <td>{{ $application->email }}</td>
                      <td><a href ="{{ asset($application->img_src) }}" target="_blank" <button type="button" class="btn btn-success">View</button></a></td>
                      <td>@if($application->status == true) <span class="badge bg-success">ACTIVE</span> @else <span class="badge bg-danger">INACTIVE</span> @endif</td>
                      <td><button type="button" class="btn btn-primary m-1  radius-20" onclick='window.location.href="{{ url('/partnerapplication/' . $application->id) }}"'>Action</button></td>
                    </tr> 
                    @endforeach                   
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->  
              </div>
            </div>
            
  
          </div>


    </div>
</section>
</main>
@endsection