@extends('frontend_master')
@section('content')

<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid subtitle">
  		<div class="container">
    		<h1 class="text-center text-white"> Your Shopping Cart </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">
		
		<!-- Shopping Cart Div -->
		<div class="row mt-5 shoppingcart_div">
			<div class="col-12">
				<a href="{{ route('homepage') }}" class="btn mainfullbtncolor btn-secondary float-right px-3" > 
					<i class="icofont-shopping-cart"></i>
					Continue Shopping 
				</a>
			</div>
		</div>

		<div class="row mt-5 shoppingcart_div">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th colspan="3"> Product </th>
							<th colspan="3"> Qty </th>
							<th> Price </th>
							<th> Total </th>
						</tr>
					</thead>
					<tbody id="shoppingcart_table"></tbody>
					<tfoot id="shoppingcart_tfoot">
						
						<tr> 
							<td colspan="5"> 
								<textarea class="form-control" id="notes" placeholder="Any Request..."></textarea>
							</td>
							<td colspan="3">
								<?php
									if(isset($_SESSION['login_user'])){

								?>
								<a href="javascript:void(0)" class="btn btn-secondary btn-block mainfullbtncolor checkoutBtn">Check Out </a>
								
								<?php }else{ ?> 
									
								<a href="#" class="btn btn-secondary btn-block mainfullbtncolor">Check Out </a>

							<?php } ?>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<!-- No Shopping Cart Div -->
		<div class="row mt-5 noneshoppingcart_div text-center">
			
			

		</div>
	</div>		
	
	

@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
</script>


@endsection