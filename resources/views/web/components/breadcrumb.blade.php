<section class="page-header page-header-modern bg-color-grey page-header-lg m-0 py-4">
    <div class="container container-xl-custom">
        <div class="row">
            <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                <h1 class="text-dark font-weight-bold">{{end($pages)['title']}}</h1>
            </div>
            <div class="col-md-4 order-1 order-md-2 align-self-center">
                <ul class="breadcrumb d-block text-md-end font-weight-medium">
                    <li><a href="{{route('web')}}">Domov</a></li>
                    @foreach($pages as $page)
                        @if(!$loop->last)
                            <li><a href="{{$page['route']}}">{{$page['title']}}</a></li>
                        @else
                            <li class="active">{{$page['title']}}</li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>