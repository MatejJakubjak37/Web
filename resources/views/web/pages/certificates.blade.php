@extends('web.web')

@section('header')
    <meta property="og:title"              content="{{config('app.name')}} : Naše certifikáty" />
    <meta property="og:description"        content="Pozrite si naše certifikáty a osvedčenia, ktoré potvrdzujú našu odbornosť a kvalitu našich klampiarskych služieb." />
    <meta name="description"               content="Pozrite si naše certifikáty a osvedčenia, ktoré potvrdzujú našu odbornosť a kvalitu našich klampiarskych služieb.">
@endsection

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb])

<section class="section my-0 py-2 border-0 bg-color-light">
    <div class="container container-xl-custom pt-4 pb-2">
        <h4 class="text-dark text-3 font-weight-bold mb-2">NAŠE CERIFIKÁTY</h4>
        <h3 class="mb-3">Dôkaz o vynikajúcej kvalite našej práce</h3>
        <p class="mb-4 pb-2">Počas nášho pôsobenia sme si získali mnoho spokojných zákazníkov a tak isto ocenení a certifikátov, ktoré potvrdzujú našu solventnosť, dôveryhodnosť a spoľahlivosť. Naši profesionálni zamestnanci pravidelne absolvujú školenia o najnovších postupoch, technológiách a materiáloch, aby vám mohli poskytovať optimálne riešenia a služby najvyššej kvality.</p>
    </div>
</section>

<div class="container container-xl-custom p-relative z-index-1 custom-el-pos-2 pb-5">
    @include('web.components.fancybox-certificates', ['images' => $images])
</div>
@include('web.components.get-a-quote-section')
@endsection

@section('style')
    <link rel="stylesheet" href="{{config('app.path_plugins').'/@fancyapps/ui/dist/fancybox/fancybox.css'}}">
@endsection

@section('script')
    <script src="{{config('app.path_plugins').'/@fancyapps/ui/dist/fancybox/fancybox.umd.js'}}"></script>
    <script>
        Fancybox.bind('[data-fancybox="certificates"]', {});
    </script>
@endsection