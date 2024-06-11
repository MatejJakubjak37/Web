@if(sizeof($list) > 0)
    <div class="row">
        <div class="col-12">
            <h4 class="text-dark text-3 font-weight-bold mb-2">VAŠE HODNOTENIE NÁS POSÚVA ĎALEJ</h4>
            <h3 class="mb-3">Recenzie</h3>
        </div>
        @if(isset($swiped))
            <div class="swiper inline-3-swiper">
                <div class="swiper-wrapper">
                    @foreach ($list as $item)
                        <div class="swiper-slide">
                            @include('web.components.reviews.item', ['review' => $item])
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            @foreach ($list as $item)
                <div class="col-xl-4 col-md-6 col-sm-12">
                    @include('web.components.reviews.item', ['review' => $item])
                </div>
            @endforeach
        @endif
        <div class="col-12 mt-3">
            <div class="d-flex flex-column flex-md-row justify-content-between">
                <a href="{{config('app.google_reviews_url')}}" target="_blank" class="btn btn-modern btn-antracit font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap mb-3 mb-md-0">ZOBRAZIŤ VŠETKY <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="{{config('app.google_add_review_url')}}" target="_blank" class="btn btn-modern btn-tertiary font-weight-bold border-0 py-3 px-5 btn-arrow-effect-1 ws-nowrap">PRIDAŤ RECENZIU <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
@endif

