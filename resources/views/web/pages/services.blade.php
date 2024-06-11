@extends('web.web')

@section('header')
    <meta property="og:title"              content="{{config('app.name')}} : Naše klampiarske služby" />
    <meta property="og:description"        content="Ponúkame širokú škálu klampiarskych služieb vrátane montáže striech, opráv a údržby klampiarskych výrobkov. Profesionálny prístup a kvalitné materiály." />
    <meta name="description"               content="Ponúkame širokú škálu klampiarskych služieb vrátane montáže striech, opráv a údržby klampiarskych výrobkov. Profesionálny prístup a kvalitné materiály.">
@endsection

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb]) 


<section class="section my-0 py-3 border-0 bg-color-light">
    <div class="container container-xl-custom pt-4 pb-5">
        <h3 class="mb-1">Klampiarske a pokrývačské práce</h3>
    </div>
</section>

<div class="container container-xl-custom pt-2 pb-3">
    <div class="row">
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Montáž a inštalácia striech</h4>
            <h6>Naša firma ponúka kompletné služby v oblasti konštrukcie striech. Zabezpečujeme:</h6>
            <ul class="list list-icons list-primary font-weight-medium mt-3">
                <li><i class="fas fa-check text-color-primary"></i><strong>Inštalácia strešných krytín:</strong> <br> Široký výber strešných krytín, ktoré sú inštalované odbornými pracovníkmi pre maximálnu trvanlivosť a ochranu pred poveternostnými vplyvmi.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Integrácia klampiarskych a izolačných prvkov:</strong> <br> Komplexná inštalácia všetkých potrebných klampiarskych a izolačných prvkov pre kompletnú ochranu vašej strechy</li>
            </ul>
        </div>
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Rekonštrukcie striech</h4>
            <h6>Pre komplexnú obnovu strešných systémov ponúkame služby rekonštrukcie striech. Zabezpečujeme:</h6>
            <ul class="list list-icons list-primary font-weight-medium mt-3">
                <li><i class="fas fa-check text-color-primary"></i><strong>Kompletná výmena strešného systému:</strong> <br> Odstránenie starej krytiny a inštalácia novej, vrátane všetkých potrebných prvkov.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Zlepšenie izolačných vlastností: </strong> <br> Inštalácia moderných izolačných materiálov na zlepšenie energetickej účinnosti.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Zosilnenie a oprava nosných konštrukcií: </strong> <br> Posilnenie nosných prvkov pre zaistenie stability a bezpečnosti strechy.</li>
            </ul>
        </div>
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Montáž klampiarskych prvkov</h4>
            <h6>Kvalitná montáž klampiarskych prvkov je kľúčová pre ochranu vašej strechy pred poveternostnými vplyvmi. Ponúkame inštaláciu:</h6>
            <ul class="list list-icons list-primary font-weight-medium mt-3">
                <li><i class="fas fa-check text-color-primary"></i><strong>Záveterných líšt: </strong> <br> Chránia strechu pred silnými vetrami a zabraňujú poškodeniu krytiny.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Ríms a atík: </strong> <br> Estetické a funkčné prvky, ktoré zlepšujú odvádzanie vody zo strechy.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Okapníc a oplechovania komína: </strong> <br> Zabezpečujú efektívne odvádzanie dažďovej vody a chránia komín pred vlhkosťou.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Bočného lemovania a parapetov: </strong> <br> Chránia bočné steny a okná pred zatekaním vody.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Úžlabí: </strong> <br> Dôležité prvky, ktoré zaisťujú správny odvod vody v spojoch strešných rovín.</li>
            </ul>
        </div>
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Montáž odkvapových systémov</h4>
            <h6>Odkvapové systémy sú nevyhnutné pre ochranu vášho domu pred vlhkosťou a poškodením spôsobeným dažďovou vodou. Naša firma poskytuje:</h6>
            <ul class="list list-icons list-primary font-weight-medium mt-3">
                <li><i class="fas fa-check text-color-primary"></i><strong>Inštaláciu žľabov a odkvapových rúr: </strong> <br> Kvalitné systémy, ktoré zabezpečujú spoľahlivý odvod dažďovej vody z vašej strechy.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Montáž filtrov a ochranných mriežok: </strong> <br> Predchádzajú upchávaniu odkvapov listami a iným nečistotami.</li>
                <li><i class="fas fa-check text-color-primary"></i><strong>Opravy a údržbu existujúcich odkvapových systémov: </strong> <br> Pravidelná kontrola a údržba, ktorá zaručuje ich dlhodobú funkčnosť.</li>
            </ul>
        </div>
    </div>
</div>

<section class="section my-0 py-5 border-0 bg-color-light">
    <div class="container container-xl-custom pt-4 pb-5">
        <h3 class="mb-1">Doplnkové služby</h3>
    </div>
</section>

<div class="container container-xl-custom pt-2 pb-3">
    <div class="row">
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Ohýbanie materiálu</h4>
            <h6>Naša firma ponúka presné ohýbanie rôznych druhov materiálov podľa vašich špecifikácií. Využívame moderné stroje a technológie, ktoré zaručujú vysokú presnosť a kvalitu výsledného produktu.</h6>   
        </div>
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Falcovanie</h4>
            <h6>Poskytujeme odborné falcovanie materiálov, ktoré zvyšuje pevnosť a trvanlivosť vašich strešných systémov. Naši odborníci zabezpečia precízne spracovanie každého materiálu podľa vašich potrieb.</h6>   
        </div>
        <div class="col-lg-6 mb-5">
            <h4 class="font-weight-bold mt-4">Profilovanie Krytiny</h4>
        </div>
    </div>
</div>
@include('web.components.get-a-quote-section')

@endsection