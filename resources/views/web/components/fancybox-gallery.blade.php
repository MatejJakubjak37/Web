<div class="row g-2 justify-content-center fancybox-gallery">
    @foreach($images as $image)
        <div class="col-xl-3 col-md-4 col-6">
            <a
                data-fancybox="gallery"
                href="{{config('app.path_img').'/gallery/'.$image['name']}}"
                data-caption="{{$image['alt']}}">
                <img
                    src="{{config('app.path_img').'/gallery/'.$image['name']}}"
                    alt="{{$image['alt']}}">
            </a>
        </div>
    @endforeach
</div>