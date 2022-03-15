<!-- ========== GALLERY ========== -->
<section class="gallery">
    <div class="container">
        <div class="section-title">
            <h4>HIMARA. <span class="text-himara">GALLERY</span></h4>
            <p class="section-subtitle">Check out our image gallery</p>
            <a href="{{ route('gallery') }}" class="view-all">View gallery images</a>
        </div>
        <div class="gallery-owl owl-carousel image-gallery">
            <!-- ITEM -->
            @foreach ($gallerie as $item)
                <div class="gallery-item">
                    <figure class="gradient-overlay image-icon">
                        <a href="{{ asset('himara/' . $item->image) }}">
                            <img src={{ asset('himara/' . $item->image) }} alt="Image">
                        </a>
                        <figcaption>{{ $item->name }}</figcaption>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</section>
