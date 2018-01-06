@extends('classimax.layouts.app')

@section('content')
	<section class="blog single-blog section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
					<article class="single-post">
						<h3>Donec id dolor in erat imperdiet.</h3>
						<ul class="list-inline">
							<li class="list-inline-item">by <a href="">Admin</a></li>
							<li class="list-inline-item">Nov 22, 2016</li>
						</ul>
						<img src="{{ asset('vendor/classimax/images/blog/post-4.jpg') }}" alt="article-01">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt  labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
						sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>

						<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<ul class="social-circle-icons list-inline">
							<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-twitter" href=""></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-google-plus" href=""></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-pinterest-p" href=""></a></li>
							<li class="list-inline-item text-center"><a class="fa fa-linkedin" href=""></a></li>
						</ul>
					</article>
					<div class="block comment">
						<h4>Leave A Comment</h4>
						<form action="#">
							<!-- Message -->
							<div class="form-group mb-30">
								<label for="message">Message</label>
								<textarea class="form-control" id="message" rows="8"></textarea>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-6">
									<!-- Name -->
									<div class="form-group mb-30">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name">
									</div>
								</div>
								<div class="col-sm-12 col-md-6">
									<!-- Email -->
									<div class="form-group mb-30">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email">
									</div>
								</div>
							</div>
							<button class="btn btn-transparent">Leave Comment</button>
						</form>
					</div>
				</div>
				<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
					<div class="sidebar">
						<!-- Search Widget -->
						<div class="widget search p-0">
							<div class="input-group">
								<input type="text" class="form-control" id="expire" placeholder="Search...">
								<span class="input-group-addon"><i class="fa fa-search"></i></span>
							</div>
						</div>
						<!-- Category Widget -->
						<div class="widget category">
							<!-- Widget Header -->
							<h5 class="widget-header">Categories</h5>
							<ul class="category-list">
								<li><a href="">Appearel <span class="float-right">(2)</span></a></li>
								<li><a href="">Accesories <span class="float-right">(5)</span></a></li>
								<li><a href="">Business<span class="float-right">(7)</span></a></li>
								<li><a href="">Entertaiment<span class="float-right">(3)</span></a></li>
								<li><a href="">Education<span class="float-right">(9)</span></a></li>
							</ul>
						</div>
						<!-- Store Widget -->
						<div class="widget related-store">
							<!-- Widget Header -->
							<h5 class="widget-header">Related Store</h5>
							<ul class="store-list md list-inline">
								<li class="list-inline-item">
									<a href="">Ebay</a>
								</li>
								<li class="list-inline-item">
									<a href="">Amazon</a>
								</li>
							</ul>
						</div>
						<!-- Archive Widget -->
						<div class="widget archive">
							<!-- Widget Header -->
							<h5 class="widget-header">Archives</h5>
							<ul class="archive-list">
								<li><a href="">January 2017</a></li>
								<li><a href="">February 2017</a></li>
								<li><a href="">March 2017</a></li>
								<li><a href="">April 2017</a></li>
								<li><a href="">May 2017</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection