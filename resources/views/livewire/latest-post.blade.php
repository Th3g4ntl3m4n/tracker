

<section class="bg-12 p-t-92 p-b-60">
		<div class="container">
			<!-- Title section -->
			<div class="flex-col-c-c p-b-50">
				<h3 class="t1-b-1 cl-3 txt-center m-b-11">
					Articulos de interés
				</h3>

				<div class="size-a-2 bg-3"></div>
			</div>


    

	<!--  -->
    <div class="row justify-content-center">
    @foreach ($posts as $post )
				<div class="col-sm-10 col-md-8 col-lg-4 p-b-40">
					<div class="bg-0 h-full">
						<a href="news-detail.html" class="hov-img0 of-hidden">
							<img src="{{ $post->image}}" alt="IMG">
						</a>

						<div class="bg-0 p-rl-28 p-t-26 p-b-35">
							<h4 class="p-b-12">
								<a href="news-detail.html" class="t1-m-1 cl-3 hov-link2 trans-02">
									{{$post->name}}
								</a>
							</h4>

							<div class="flex-wr-s-c p-b-9">
								<div class="p-r-20">
									<i class="fs-14 cl-7 fa fa-calendar m-r-2"></i>

									<span class="t1-s-2 cl-7">
										Nov 10 , 2017
									</span>
								</div>

								<div class="p-l-20 bo-l-1 bcl-12">
									<i class="fs-14 cl-7 fa fa-user m-r-2"></i>

									<a href="#" class="t1-s-2 cl-11 hov-link3">
										Admin
									</a>
								</div>
							</div>

							<p class="t1-s-2 cl-6 p-b-20">
								To take a trivial example, which of us ever und takes laborious physical exercise, except to obtain some advantage from it...
							</p>

							<a href="news-detail.html" class="d-inline-flex flex-c-c size-a-1 p-rl-15 t1-s-2 text-uppercase cl-0 bg-11 hov-btn1 trans-02">
								Read More
							</a>
						</div>
					</div>
                    
				</div>
                @endforeach
            </div>
           
		</div>
      
	</section>
