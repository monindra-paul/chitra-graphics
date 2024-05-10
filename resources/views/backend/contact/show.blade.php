@extends('backend.layout.app')
@section('content')

<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Query of {{ $contacts->name }} </h5>

                        <!-- General Form Elements -->
                        <form>                          
                            
                           <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $contacts->name }}" disabled>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $contacts->email }}" disabled>
                                </div>
                            </div>

                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Subject</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" value="" rows="8" disabled>{{ $contacts->sub }}</textarea>
                                </div>
                            </div>  
                            
                            
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" value="" rows="8" disabled>{{ $contacts->message }}</textarea>
                                </div>
                            </div>                          


                            

                            <div class="row mb-3">
                               
                                <div class="col-sm-10">
                                   <a href="{{url('/partnerapplication')}}"> <button type="" class="btn btn-primary">Back to Applications</button></a>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>

            
        </div>
    </section>

</main>

@endsection