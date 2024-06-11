@extends('web.web')

@section('header')
    <meta property="og:title"              content="{{config('app.name')}} : Naše realizácie" />
    <meta property="og:description"        content="Prezrite si naše úspešné realizácie klampiarskych prác. Kvalitné strechy a klampiarske výrobky pre rôzne typy budov." />
    <meta name="description"               content="Prezrite si naše úspešné realizácie klampiarskych prác. Kvalitné strechy a klampiarske výrobky pre rôzne typy budov.">
@endsection

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

			
@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb])

<section class="section my-0 py-2 border-0 bg-color-light">
    <div class="container container-xl-custom pt-4 pb-2">
        <h4 class="text-dark text-3 font-weight-bold mb-2">NAŠE REALIZÁCIE</h4>
        <h3 class="mb-3">Bližší pohľad na kvalitu našich projektov</h3>
        <p class="mb-4 pb-2">Pozrite si naše referencie a presvedčte sa o kvalite našich prác. Realizovali sme množstvo projektov, od malých opráv po rozsiahle rekonštrukcie striech. Naše práce sú dôkazom našej profesionality a zodpovedného prístupu ku každému projektu. Navštívte našu galériu realizácií a nechajte sa inšpirovať našimi úspešnými projektmi.</p>
    </div>
</section>

<div class="container container-xl-custom p-relative z-index-1 custom-el-pos-2 pb-5">
    @include('web.components.fancybox-gallery', ['images' => $images])
</div>
@include('web.components.get-a-quote-section')
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