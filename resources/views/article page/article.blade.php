@extends('layouts.template')

@section('layout_content')

    <div class="content-article">
        @foreach ($articles as $key => $article)
            <div class="row row-content">
                <!-- Left Column -->
                <div class="col-md-6 right-column kolom-gambar">
                    @if ($article->gambar)
                    <img src="{{asset('storage/photo-article/'.$article->gambar)}}" alt="Gambar Artikel" class="gambar-artikel">
                    @endif
                </div>

                <!-- Right Column -->
                <div class="col-md-6 left-column kolom-tulisan">
                    <h2 class="text">{{ $article->judul_article}}</h2>
                    <p class="text">{{ $article->deskripsi_article}}</p>
                    <!-- Tautan untuk menambah artikel -->

                    <div>  
                        <!--Delete Button-->
                        <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <!--END Delete Button -->

                        <!--Edit Button-->
                        <form action="{{ route('article.edit', $article->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-danger">Edit</button>
                        </form>
                        <!--END Edit Button --> 

                    </div>
                    

                </div>
            </div>
        @endforeach

        <!--ADD Article Button-->
        <div class="text-center mt-3">
            <a href="{{route('article.create')}}" class="btn btn-primary">Add Article</a>
        </div>
        <!-- END ADD Article Button -->

        
    </div>

        <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    @if ($article->gambar)
                        <img class="img-fluid" src="{{asset('storage/photo-article/'.$article->gambar)}}" alt="">
                    @endif   
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                        <h1 class="display-6">{{ $article->judul_article}}</h1>
                    </div>
                    <p class="mb-4">{{ $article->deskripsi_article}}</p>
                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-primary rounded-pill py-3 px-5">Update</a>
                    <div>  
                        <!--Delete Button-->
                        <form action="{{ route('article.destroy', $article->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary rounded-pill py-3 px-5">Delete</button>
                        </form>
                        <!--END Delete Button -->

                        <!--Edit Button-->
                        <form action="{{ route('article.edit', $article->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-primary rounded-pill py-3 px-5">Edit</button>
                        </form>
                        <!--END Edit Button --> 

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->

    <section class="section posts-entry posts-entry-sm bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="{{asset('storage/photo-article/'.$article->gambar)}}" alt="Image" class="img-fluid">
						</a>
						<span class="date">{{ $article->tanggal_publish}}</span>
						<h2><a href="single.html">{{ $article->judul_article}}</a></h2>
						<p></p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="blog-entry">
						<a href="single.html" class="img-link">
							<img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
						</a>
						<span class="date">Apr. 14th, 2022</span>
						<h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p><a href="#" class="read-more">Continue Reading</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
