@extends('web.web')

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

			
@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb])

<section class="section my-0 py-5 border-0 bg-color-light">
    <div class="container container-xl-custom pt-4 pb-5">
        <h4 class="text-dark text-3 font-weight-bold mb-2">NAŠE REALIZÁCIE</h4>
        <h3 class="mb-3">Bližší pohľad na kvalitu našich projektov</h3>
        <p class="mb-4 pb-2">Pozrite si naše projekty a uistite sa o kvalite našej práce. Zaväzujeme sa k dokonalosti, inovácii a precíznosti. Každý projekt je dôkazom nášho odhodlania dosahovať vynikajúce výsledky.</p>
    </div>
</section>

<div class="container container-xl-custom p-relative z-index-1 custom-el-pos-2 pb-5">
    @include('web.components.fancybox-gallery', ['images' => $images])
</div>
@endsection

@section('style')
    <link rel="stylesheet" href="{{config('app.path_plugins').'/@fancyapps/ui/dist/fancybox/fancybox.css'}}">
@endsection

@section('script')
    <script src="{{config('app.path_plugins').'/@fancyapps/ui/dist/fancybox/fancybox.umd.js'}}"></script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {});
    </script>
@endsection