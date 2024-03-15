@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header"><b>How to Integrate Cashier Stripe Subscription in Laravel - Techsolutionstuff</b></div>
				<div class="card-body">
					<div class="row">
						@foreach($plans as $plan)
						<div class="col-md-6">
							<div class="card mb-3">
								<div class="card-header">
									${{ $plan->price }} / Month
								</div>
								<div class="card-body">
									<h5 class="card-title">{{ $plan->name }}</h5>
									<p class="card-text">Please Select Plan</p>
									<a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary pull-right">Choose</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection
