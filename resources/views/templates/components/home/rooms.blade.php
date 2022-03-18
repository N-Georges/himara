<!-- ========== ROOMS ========== -->
<section class="rooms gray">
    <div class="container">
        <div class="section-title">
            <h4>OUR <span class="text-himara">ROOMS</span></h4>
            <p class="section-subtitle">Our favorite rooms</p>
            <a href="{{ route('rooms') }}" class="view-all">View all rooms</a>
        </div>
        <div class="row">
            <!-- ITEM -->
            @forelse ($room as $item)
                <div class="col-md-4">
                    <div class="room-grid-item">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="{{ route('room.show', $item->id) }}">
                                <img src={{ asset('himara/images/' . $item->image) }} class=" img-fluid" alt="Image">
                            </a>
                            <div class="room-services">
                                @foreach ($item->tags as $tag)
                                    <i class="{{ $tag->icon }}" aria-hidden="true" data-toggle="popover"
                                        data-placement="right" data-trigger="hover" data-content="{{ $tag->content }}"
                                        data-original-title="{{ $tag->name }}"></i>
                                @endforeach

                            </div>
                            <div class="room-price">€{{ $item->price }} / night</div>
                        </figure>
                        <div class="room-info">
                            <h2 class="room-title">
                                <a href="{{ route('room.show', $item->id) }}">{{ $item->categorie->name }}</a>
                            </h2>
                            <p>Enjoy our {{ $item->categorie->name }}</p>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse

        </div>
    </div>
</section>
