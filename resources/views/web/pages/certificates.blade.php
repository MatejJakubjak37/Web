@extends('web.web')

@section('title')
    {{end($breadcrumb)['title']}}
@endsection

@section('content')

@include('web.components.breadcrumb', ['pages' => $breadcrumb])

<div class="row">
    <div class="col py-4">
        <hr>
    </div>
</div>

<div class="container container-xl-custom p-relative z-index-1 custom-el-pos-2 pb-5">
    @include('web.components.fancybox-certificates', ['images' => $images])
</div>
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