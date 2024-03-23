<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($banners as $key => $banner)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : '' }}"
            aria-label="Slide {{ $key + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach ($banners as $banner)
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('uploads/Banner/' . $banner->image) }}" class="d-block w-100" style="height: 500px;" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
