@extends('backend.layout.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">



        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Contact Form Query</h5>
  
                <!-- Table with stripped rows -->
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Name</th>            
                      <th scope="col">Email</th>
                      <th scope="col">Subject</th>                                        
                                          
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                    <tr>                    
                      <td scope="row">{{ $contact->id }}</td>
                      <td>{{ $contact->name }}</td>                     
                      <td>{{ $contact->email }}</td>
                      <td>{{ $contact->sub }}</td>                                    
                     
                      <td><button type="button" class="btn btn-primary m-1  radius-20" onclick='window.location.href="{{ url('/contactapplication/' . $contact->id) }}"'>Action</button></td>
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