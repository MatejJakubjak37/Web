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

    <div class="row">
        <div class="mb-5 mb-lg-0">

            <article>
                <div class="card border-0">
                    <div class="card-body z-index-1 p-0">
                        <p class="text-uppercase text-1 mb-3 text-color-default"><time pubdate datetime="2023-01-10">{{$blog_post->created_at->format('d M Y')}}</time></p>

                        <div class="post-content">
                            <img class="card-img-top rounded-2 float-start blog-img mb-5 me-5" src="{{config('app.blog_path_img').$blog_post->image_src}}" alt="{{$blog_post->title}}">
                            {!! $blog_post->content !!}
                        </div>
                    </div>
                </div>
            </article>

        </div>
    </div>

</div>


@include('web.components.get-a-quote-section')

@endsection