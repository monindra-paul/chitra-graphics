@extends('backend.layout.app')
@section('content')

<main id="main" class="main">

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Application of {{ $applications->name }} </h5>

                        <!-- General Form Elements -->
                        <form>                          
                            
                           <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->name }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Mobile No.</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->mobile }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Email Id</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->email }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->city }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">State</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->state }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->country }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">PIN Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->pin }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->address }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="{{ $applications->description }}" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">View Portfolio</label>
                                <div class="col-sm-10">
                                <a href ="{{ asset($applications->img_src) }}" target="_blank" <button type="button" class="btn btn-success">View</button></a>
                                </div>
                            </div>


                            

                            <div class="row mb-3">
                               
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Back to Applications</button>
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