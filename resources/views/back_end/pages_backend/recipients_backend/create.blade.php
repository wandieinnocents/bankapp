@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
<div class="container-fluid">


        <!-- form -->
        <div class="row">
        <!-- COL 1 -->
                <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
                
                </div>
            <!-- COL 2 - FORM -->
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Recipient</h4>
                        </div>
                        <div class="card-body">
                            <!-- form submission status -->
                            @if(session('success'))
                            <div class="alert alert-success">
                            {{ session('success') }}
                            </div>
                            @endif
                            <!-- end of form submission status -->

                            <div class="basic-form">
                            
                                <form action="{{ route('recipients.store') }}" method="post">
                                    {{ csrf_field() }}

                                     <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="First Name" name="first_name">
                                    </div>
                                    <!--  validation -->
                                     @if ($errors->has('first_name'))
                                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                                    @endif
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Last Name" name="last_name">
                                    </div>
                                    <!-- validation -->
                                    @if ($errors->has('last_name'))
                                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                    @endif

                                    <div class="form-group">
                                        <input type="email" class="form-control input-rounded" placeholder="Email" name="email">
                                    </div>
                                      <!-- validation -->
                                      @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Phone Number" name="phone_number">
                                    </div>
                                    <!-- validation -->
                                      @if ($errors->has('phone_number'))
                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                    @endif
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Mobile Money Number" name="mobile_money_number">
                                    </div>
                                     <!-- validation -->
                                     @if ($errors->has('mobile_money_number'))
                                    <span class="text-danger">{{ $errors->first('mobile_money_number') }}</span>
                                    @endif

                                    <div class="form-group">
                                        <input type="text" class="form-control input-rounded" placeholder="Country" name="country">
                                    </div>
                                      <!-- validation -->
                                      @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                    @endif 
                                    <br>

                                <!-- submit -->
                                <button type="submit" class="btn btn-primary">Add Recipient</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                  
                </div>
                


            <!-- COL 3 -->
            <div class="col-md-3 col-xl-3 col-lg-3" style="visibility:hidden;">
               
            </div>
               <!-- end form -->
    
    </div>

    </div>
    </div>

@endsection 