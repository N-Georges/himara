<!-- ========== SERVICES ========== -->
<section class="services">
    <div class="container">
        <div class="section-title">
            <h4>HIMARA. <span class="text-himara">SERVICES</span></h4>
            <p class="section-subtitle">Check out our awesome services</p>
        </div>
        <div class="row">
            <div class="col-lg-7 col-12">
                <div data-slider-id="services" class="services-owl owl-carousel">
                    @foreach ($service as $item)
                        <figure class="gradient-overlay">
                            <img src={{ asset('himara/' . $item->image) }} class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>{{ $item->title_image }}</h4>
                            </figcaption>
                        </figure>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="owl-thumbs" data-slider-id="services">
                    @foreach ($service as $item)
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="{{ $item->icon }}"></i>
                            </span>
                            <div class="media-body">
                                <h5>{!! $item->title !!}</h5>
                                <p>{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
