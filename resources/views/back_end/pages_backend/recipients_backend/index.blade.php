@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')


<!-- contact , location ,  -->
<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recipients</h4>
                                <a href="{{ route('recipients.create') }}"><button  class="btn btn-primary">Add Recipient</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <!-- start of table row -->
                                            
                                            <tr>
                                               
                                           
                                                <th><strong>#ID</strong></th>
                                                <th><strong>First Name</strong></th>
                                                <th><strong>Last Name</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th><strong>Phone Number</strong></th>
                                                <th><strong>Mobil Money No.</strong></th>
                                                <th><strong>Country</strong></th>
                                                <th colspan="2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($recipients as $fetch_recipient)
                                            <tr>
                                                <td>{{ $fetch_recipient->id }}          	   </td>
                                                <td>{{ $fetch_recipient->first_name }}	       </td>
                                                <td> {{ $fetch_recipient->last_name }}         </td>
                                                <td> {{ $fetch_recipient->email }}             </td>
                                                <td> {{ $fetch_recipient->phone_number }}      </td>
                                                <td>{{ $fetch_recipient->mobile_money_number }}</td>
                                                <td> {{ $fetch_recipient->country }}</td>
                                                
                                                <!-- action buttons -->
                                                <td>
													<div class="d-flex">
														<a href="{{ route('recipients.edit',$fetch_recipient->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        
                                                        <!-- delete form -->
                                                        <form action="{{ route('recipients.destroy',$fetch_recipient->id) }}" method="POST"> 
                                                        @csrf()
                                                        @method('DELETE')
                                                        <a >  <button class="btn btn-danger shadow btn-xs sharp"> <span class="fa fa-trash"> </button> </a>  
                                                        </form>
                                                        <!-- end of delete form -->

                                                        
													</div>
												</td>
                                            </tr>
                                        @endforeach
                                            <!-- end of table row -->
											

										


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

</div>
</div>

@endsection 