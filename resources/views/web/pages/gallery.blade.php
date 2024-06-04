@extends('web.web')

			
@section('content')
<section class="page-header page-header-modern bg-color-grey page-header-lg m-0">
    <div class="container container-xl-custom">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark font-weight-bold">Galéria</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end font-weight-medium">
                    <li><a href="{{ route('web')}}">Domov</a></li>
                    <li class="active">Galéria</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col py-4">
        <hr>
    </div>
</div>

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