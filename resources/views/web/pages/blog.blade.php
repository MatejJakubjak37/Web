@extends('web.web')

@section('header')
    <meta property="og:title"              content="{{config('app.name')}} : O nás" />
    <meta property="og:description"        content="Naša firma sa zameriava na výškové práce, opravy a rekonštrukcie striech, montáž klampiarskych prvkov a odkvapových systémov. Našim klientom ponúkame komplexné služby vrátane ohýbania materiálu, predaja materiálu a falcovania." />
    <meta name="description"               content="Naša firma sa zameriava na výškové práce, opravy a rekonštrukcie striech, montáž klampiarskych prvkov a odkvapových systémov. Našim klientom ponúkame komplexné služby vrátane ohýbania materiálu, predaja materiálu a falcovania.">
@endsection

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb]) 

<div class="container container-xl-custom py-5 my-3">

    <div class="row g-4 justify-content-center">
            @foreach($blog_posts as $post)
            <article class="mb-5 col-6">
                <div class="card bg-transparent border-0">
                    <div class="card-body p-0 z-index-1">
                        <a href="{{url('blog', $post->slug)}}" data-cursor-effect-hover="plus">
                            <img class="card-img-top rounded-0 mb-2" src="{{config('app.blog_path_img').$post->image_src}}" alt="{{$post->title}}">
                        </a>
                        <p class="text-uppercase text-color-default text-1 my-2">
                            <time pubdate datetime="2023-01-10">{{$post->created_at->format('d M Y')}}</time> 
                        </p>
                        <div class="card-body p-0">
                            <h4 class="card-title text-5 font-weight-bold pb-1 mb-2"><a class="text-color-dark text-color-hover-primary text-decoration-none" href="{{url('blog', $post->slug)}}">{{$post->title}}</a></h4>
                            <p class="card-text mb-2">{{$post->short_description}}</p>
                            <a href="{{url('blog', $post->slug)}}" class="read-more text-color-primary font-weight-semibold mt-0 text-2">Viac <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </article>
            @endforeach
    </div>

@include('web.components.get-a-quote-section')

@endsection