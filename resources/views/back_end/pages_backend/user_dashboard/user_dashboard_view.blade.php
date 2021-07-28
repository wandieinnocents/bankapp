@extends('back_end.layouts.layout_master_backend')

<!-- title section  -->
@section('title')

@endsection

<!-- content section -->
@section('content')
<div class="content-body rightside-event">
            <!-- row -->
			<div class="container-fluid">
				<!-- start of row -->
				
				<!-- end of row -->

				<!-- ROW FOR GRIDS -->
				<div class="row">
					

					
					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">{{ $count_recipients }}</h2>
										<p class="font-w100 fs-20 text-black">Recipients</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="/recipients" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">3</h2>
										<p class="font-w100 fs-20 text-black">Deposits</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void()" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->



					<!-- col -->
					<div class="col-md-3">
						<!-- card -->
						<div class="card">
							<div class="card-body">

								<div class="row mx-0">

									<div class="col-sm-12 col-lg-12 px-0">
										<h2 class="fs-40 text-black font-w600">5 </h2>
										<p class="font-w100 fs-20 text-black">Transactions</p>
										
										<div class="justify-content-between border-0 d-flex fs-14 align-items-end">
											<a href="javascript:void()" class="text-primary">View more <i class="las la-long-arrow-alt-right scale5 ml-2"></i></a>
											
										</div>
									</div>
									
								</div>

							</div>
						</div>
						<!-- end of card -->
					</div>
					<!-- end of col -->


				</div>
				<!-- END OF ROW FOR GRIDS -->


            </div>
        </div>
@endsection



