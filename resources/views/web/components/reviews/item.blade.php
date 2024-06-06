<article class="box box-item-short review mb-3">
    <div class="rating">
        <span class="stars">
            @for($i = 0; $i < 5; $i++)
                <i class="fa-solid fa-star @if($i < $review->rvw_data->rating) active @endif"></i>
            @endfor
        </span>
        <img src="{{ asset(config('app.path_img').'/google-logo.webp') }}" alt="Tenerife real google review">
    </div>
    <div class="time">{{$review->rvw_data->relative_time_description}}</div>
    <p>{{ Str::limit($review->rvw_data->text, 120, '...') }}</p>
    <div class="author">
        <a href="{{$review->rvw_data->author_url}}">
            <b>{{$review->rvw_data->author_name}}</b>
        </a>
    </div>
</article>
