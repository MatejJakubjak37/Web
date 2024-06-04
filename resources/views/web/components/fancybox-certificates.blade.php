<div class="row g-5 justify-content-center fancybox-certificates">
    @foreach($images as $image)
        <div class="col-4 col-xl-3">
            <a
                data-fancybox="certificates"
                href="{{config('app.path_img').'/certificates/'.$image['name']}}"
                data-caption="{{$image['alt']}}">
                <img
                    src="{{config('app.path_img').'/certificates/'.$image['name']}}"
                    alt="{{$image['alt']}}">
            </a>
        </div>
    @endforeach
</div>