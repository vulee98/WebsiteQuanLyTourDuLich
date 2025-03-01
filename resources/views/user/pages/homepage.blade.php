<x-clayout title="Trang chủ">

    <body class="my-4 mx-4">
        <main class="main">
            <div class="card-container">
                @foreach ($tours as $tour)
                    <div class="card">
                        <div class="card__header">
                            <div class="card__picture">
                                <div class="card__picture-overlay">&nbsp;</div>
                                <img class="card__picture-img"
                                    src="{{ asset('/storage/img/tours') . '/' . $tour['imageCover'] }}"
                                    alt="{{ $tour['name'] }}">
                            </div>
                            <h3 class="heading-tertirary">
                                <span>{{ $tour['name'] }}</span>
                            </h3>
                        </div>
                        <div class="card__details">
                            <h4 class="card__sub-heading">mức độ {{ $tour['difficulty'] }} - chuyến du lịch
                                {{ $tour['duration'] }} ngày
                            </h4>
                            <p class="card__text">{{ $tour['summary'] }}</p>
                            <div class="card__data">
                                <svg class="card__icon">
                                    <use xlink:href="{{ asset('/storage/img/icons.svg' . '#icon-map-pin') }}">
                                    </use>
                                </svg>
                                <span>{{ $tour['address'] }}</span>
                            </div>

                            <div class="card__data">
                                <svg class="card__icon">
                                    <use xlink:href="{{ asset('/storage/img/icons.svg' . '#icon-calendar') }}"></use>
                                </svg>
                                <span>{{ $tour['startDate'] }}</span>
                            </div>

                            <div class="card__data">
                                <svg class="card__icon">
                                    <use xlink:href="{{ asset('/storage/img/icons.svg' . '#icon-flag') }}"></use>
                                </svg>
                                <span>{{ $tour['numberOfLocations'] }} trạm dừng</span>
                            </div>

                            <div class="card__data">
                                <svg class="card__icon">
                                    <use xlink:href="{{ asset('/storage/img/icons.svg' . '#icon-user') }}"></use>
                                </svg>
                                <span>{{ $tour['maxGroupSize'] }} người</span>
                            </div>
                        </div>
                        <div class="card__footer">
                            <p>
                                <span class="card__footer-value">{{ number_format(round($tour['price']), 0, ',', '.') }} VNĐ</span>
 <span
                                    class="card__footer-text">/người</span>
                            </p>
                            <p class="card__ratings">
                                <span class="card__footer-value">4.80</span> <span class="card__footer-text">rating
                                    (7)
                                </span>
                            </p>
                            <a class="btn btn--green btn--small" href="/tours/{{ $tour['id'] }}">Chi tiết
                            </a>
                        </div>
                    </div>
                @endforeach
        </main>
    </body>
</x-clayout>
