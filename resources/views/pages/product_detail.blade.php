@extends('master')
@section('content')
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
									    <div class="product-img" style="background-image: url(source/images/{{$product->image_link}});">
											<p class="tag"><span class="sale">Sale</span></p>
										</div> 

									

										<div class="thumb-nail">
											@foreach($rel_product as $pro)
											<a href="product/{{$pro->id}}" class="thumb-img" style="background-image: url(source/images/{{$pro->image_link}});"></a>
											@endforeach
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<div class="desc">
										<h3>{{$product->name}}</h3>
										<p class="price">
											<span>${{$product->price}}</span> 
											<span class="rate text-right">
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-full"></i>
												<i class="icon-star-half"></i>
												(74 Rating)
											</span>
										</p>
										<p>{{$product->description}}</p>
										<div class="color-wrap">
											<p class="color-desc">
												Color: 
												<a href="#" class="color color-1"></a>
												<a href="#" class="color color-2"></a>
												<a href="#" class="color color-3"></a>
												<a href="#" class="color color-4"></a>
												<a href="#" class="color color-5"></a>
											</p>
										</div>
										<div class="size-wrap">
											<p class="size-desc">
												Size: 
												<a href="#" class="size size-1">xs</a>
												<a href="#" class="size size-2">s</a>
												<a href="#" class="size size-3">m</a>
												<a href="#" class="size size-4">l</a>
												<a href="#" class="size size-5">xl</a>
												<a href="#" class="size size-5">xxl</a>
											</p>
										</div>
										<div class="row row-pb-sm">
											<div class="col-md-4">
                                    <div class="input-group">
                                 		<span class="input-group-btn">
                                       	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                                          <i class="icon-minus2"></i>
                                       	</button>
                                   		</span> 

                                    	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                    	<span class="input-group-btn">
                                       	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                            <i class="icon-plus2"></i>
                                        </button>
                                    	</span> 

                                    	
                                 	</div>
                        			</div>
										</div>
										<p><a href="addCart/{{$product->id}}" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Description</a></li>
									<li><a data-toggle="tab" href="#manufacturer">Manufacturer</a></li>
									<li><a data-toggle="tab" href="#review">Reviews</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										<p>{{$product->description}}</p>
										
						         </div>
						         <div id="manufacturer" class="tab-pane fade">
						         	<p><span>{{$product->manafacture->name}}</span><br>
						         		<span>{{$product->manafacture->description}}</span></p>
								      
								   </div>



								   <div id="review" class="tab-pane fade">
								   	<div class="row">
								   		<div class="col-md-7">
								   			<h3>{{$count_comment}} Review</h3>
                                            @foreach($comments as $comment)
					                       @if($comment->product_id == $product->id)
								   			<div class="review">
										   		<div class="user-img" style="background-image: url(source/images/person1.jpg)"></div>
										   		<div class="desc">
										   			<h4>
										   				<span class="text-left">{{$comment->user->name}} </span>
										   				<span class="text-right">{{$comment->date}}</span>
										   			</h4>
										   			@if($comment->rate==5)
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			@endif
										   			@if($comment->rate==4)
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			@endif
										   			@if($comment->rate==3)
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			@endif
										   			@if($comment->rate==2)
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			@endif
										   			@if($comment->rate==1)
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			@endif
										   			<p>{{$comment->content}}</p>
										   		</div>
 										   	</div>
                                            @endif
						                    @endforeach

										   @if(Auth::check())
										   <h5 style="color: #365899">{{Auth::user()->name}}</h5>
										   <form action="product/{{$product->id}}" method="post" enctype="multipart/form-data">
	 					                    {{csrf_field()}}
	 					                    <h5>Đánh giá: <span class="text-success">
	 					                  	<select style="border-color: #fff" name="rate">
			 		                		<option value="5">&#9733&#9733&#9733&#9733&#9733 xuất sắc</option>
			 		                   		<option value="4">&#9733&#9733&#9733&#9733&#9734 tốt</option>
			 		                  		<option value="3">&#9733&#9733&#9733&#9734&#9734 khá</option>
			 		                 		<option value="2">&#9733&#9733&#9734&#9734&#9734 trung bình</option>
			 		                  		<option value="1">&#9733&#9734&#9734&#9734&#9734 tồi</option>
			 		                 		</select>

	 			                                 </span></h5>
	 					                    	@endif
				                         <div class="form-group">
			                               <label for="comment">Comment:</label>
			                               <textarea class="form-control" rows="5" id="comment" name="comment" ></textarea>
		                                   <input type="hidden" name="product_id" value="{{$product->id}}">
			                              <button type="submit " class="btn btn-primary" style="width: 250px; margin-top: 10px;">Gửi bình luận  </button>
		                                   </form>
		                                  </div>
								   		</div>



								   		<div class="col-md-4 col-md-push-1">
								   			<div class="rating-wrap">
									   			<h3>Give a Review</h3>
									   			<p class="star">
									   				<span>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					
								   					</span>
								   					<span>{{$star5}} Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-empty"></i>
									   					
								   					</span>
								   					<span>{{$star4}} Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					
								   					</span>
								   					<span>{{$star3}} Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					
								   					</span>
								   					<span>{{$star2}} Reviews</span>
									   			</p>
									   			<p class="star">
									   				<span>
									   					<i class="icon-star-full"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					<i class="icon-star-empty"></i>
									   					
								   					</span>
								   					<span>{{$star1}} Reviews</span>
									   			</p>
									   		</div>
								   		</div>
								   	</div>
								   </div>
					         </div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Similar Products</span></h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					@foreach($rel_product as $pro)
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(source/images/{{$pro->image_link}});">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="addCart/{{$pro->id}}"><i class="icon-shopping-cart"></i></a></span> 
										<span><a href="product/{{$pro->id}}"><i class="icon-eye"></i></a></span> 
										<span><a href="#"><i class="icon-heart3"></i></a></span>
										<span><a href="add-to-wishlist.html"><i class="icon-bar-chart"></i></a></span>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="product/{{$pro->id}}">{{$pro->name}}</a></h3>
								<p class="price"><span>${{$pro->price}}</span></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

@endsection
