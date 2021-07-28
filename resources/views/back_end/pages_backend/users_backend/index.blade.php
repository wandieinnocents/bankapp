@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')



<div class="content-body">
            <div class="container-fluid">

<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                                <a href="{{ route('users.create') }}"><button  class="btn btn-primary">Add User</button></a>
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
                                                <th><strong>Address</strong></th>
                                                <th><strong>Country</strong></th>
                                                <th colspan="2">Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                                
                                                <td> {{ $user->id }}	</td>
                                                <td> {{ $user->first_name }}</td>
                                                <td> {{ $user->last_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone_number }}</td>
                                                <td>{{ $user->address }}</td>
                                                <td>{{ $user->country }}</td>
                                                 <!-- action buttons -->
                                                 <td>
													<div class="d-flex">
														<a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                        
                                                        <!-- delete form -->
                                                        <form action="{{ route('users.destroy',$user->id) }}" method="POST"> 
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