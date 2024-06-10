@extends('web.web')

@section('header')
    <meta property="og:title"              content="{{config('app.name')}} | Naše klampiarske služby" />
    <meta property="og:description"        content="Ponúkame širokú škálu klampiarskych služieb vrátane montáže striech, opráv a údržby klampiarskych výrobkov. Profesionálny prístup a kvalitné materiály." />
    <meta name="description"               content="Ponúkame širokú škálu klampiarskych služieb vrátane montáže striech, opráv a údržby klampiarskych výrobkov. Profesionálny prístup a kvalitné materiály.">
@endsection

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb]) 

<div class="container container-xl-custom py-5">
    <div class="row py-4">
        <div class="col-lg-6">
            <h3 class="mb-3">Vaša strecha v bezpečných rukách</h3>
            <p class="mb-4 pb-2 font-weight-regular">Sme odborníci na klampiarske, pokrývačské a izolatérske práce, poskytujúci kvalitné strešné riešenia už viac ako 23 rokov.</p>
            <p class="mb-4 pb-2 font-weight-regular">Naša firma sa zameriava na výškové práce, opravy a rekonštrukcie striech, montáž klampiarskych prvkov a odkvapových systémov.</p>
            <p class="mb-4 pb-2 font-weight-regular">Našim klientom ponúkame komplexné služby vrátane ohýbania materiálu, predaja materiálu a falcovania.</p>
            <p class="mb-4 pb-2 font-weight-regular">Naše práce sú zaručené 10-ročnou zárukou, čo svedčí o našej dôvere v kvalitu a trvanlivosť našich riešení.</p>

            <div>
                <a href="{{route('services')}}" class="btn btn-modern btn-primary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">NAŠE SLUŽBY <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="cascading-images-wrapper">
                <div class="cascading-images position-relative">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{config('app.path_img').'/gallery/ac9ebeea-70ce-4631-affa-2f3707e30ae0.JPG'}}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                    </div>
                    <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{config('app.path_img').'/gallery/73b3e4f6-8c89-498e-9906-011c8efb0dfc.JPG'}}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                        </div>
                    </div>
                    <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.4, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{config('app.path_img').'/gallery/11abeced-0e2d-487b-8e99-0ccc1135a5ed.JPG'}}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" />
                        </div>
                    </div>
                </div>
            </div>								
        </div>
    </div>
</div>


@include('web.components.get-a-quote-section')

@endsection