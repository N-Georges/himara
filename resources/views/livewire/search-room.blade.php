<div class="row">
    <div class="col-lg-9 col-12">
        <!-- ITEM -->
        <div class="room-list-item">
            @forelse ($room as $item)
                <div class="row">
                    <div class="col-lg-5">
                        <figure class="gradient-overlay-hover link-icon">
                            <a href="{{ route('room.show', $item->id) }}"><img
                                    src={{ asset('himara/' . $item->image) }} class="img-fluid" alt="Image"></a>
                        </figure>
                    </div>
                    <div class="col-lg-5">
                        <div class="room-info">
                            <h3 class="room-title">
                                <a href="room.html">{{ $item->city }}</a>
                            </h3>
                            <span class="room-rates">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="{{ route('room.show', $item->id) }}#room-reviews">5.00 Based on 3
                                    Ratings</a>
                            </span>
                            <p>{{ Str::of($item->description)->words(7) }}</p>
                            <div class="room-services flex-wrap">
                                @foreach ($item->tags as $tagp)
                                    <span data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="{{ $tagp->content }}"
                                        data-original-title="{{ $tagp->name }}">{{ $tagp->name }}</span>
                                @endforeach
                                {{-- <span>Beds: 1 King</span> --}}
                                {{-- <span>Max Guests: 2</span> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="room-price">
                            <span class="price">€{{ $item->price }} / night</span>
                            <a href="{{ route('room.show', $item->id) }}" class="btn btn-sm">view <br>
                                details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row">
                    <div class="col-lg-5">
                        <a><img src="{{ asset('himara/images/rooms/king/comingsoon.jpg') }}" class="img-fluid"
                                alt="Image"></a>
                    </div>
                    <div class="col-lg-5">
                        <div class="room-info">
                            <h3 class="room-title">
                                <a href="">new destinations</a>
                            </h3>
                            <span class="room-rates">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                            <p>New Room Coming Soon ..</p>
                            <div class="room-services">
                                <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Breakfast Included"
                                    data-original-title="Breakfast"></i>
                                <i class="fa fa-bath" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="2 Bathrooms" data-original-title="Bathroom"></i>
                                <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Free WiFi" data-original-title="WiFi"></i>
                                <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                    data-trigger="hover" data-content="Plasma TV with cable channels"
                                    data-original-title="TV"></i>
                                <span>Beds: 1 King</span>
                                <span>Max Guests: 2</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="room-price">
                            <span class="price">€ / night</span>
                            <a href="#" class="btn btn-sm">coming <br> details</a>
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
        <!-- PAGINATION -->
        <nav class="pagination">
            <ul>
                <li class="prev-pagination">
                    <a href="#">
                        &nbsp;<i class="fa fa-angle-left"></i>
                        Previous &nbsp;</a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>...</li>
                <li>
                    <a href="#">7</a>
                </li>
                <li>
                    <a href="#">8</a>
                </li>
                <li>
                    <a href="#">9</a>
                </li>
                <li class="next_pagination">
                    <a href="#">
                        &nbsp; Next
                        <i class="fa fa-angle-right"></i>
                        &nbsp;
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-lg-3 col-12">
        <div class="sidebar">
            <aside class="widget noborder">
                <div class="search">
                    <form class="widget-search">
                        <input wire:model.debounce.250ms="search" type="search" placeholder="Search city price ...">
                        <button class="btn-search" id="searchsubmit" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        @if ($room && $room->count() > 0)
                        @else
                            <p class="text-info">no room matching this search</p>
                        @endif

                    </form>
                </div>
            </aside>
            <!-- WIDGET -->
            <aside class="widget">
                <h4 class="widget-title">CATEGORIES</h4>
                <ul class="categories">
                    <li>
                        <a href="#">Single Room<span class="posts-num">51</span></a>
                    </li>
                    <li>
                        <a href="#">Double Room<span class="posts-num">24</span></a>
                    </li>
                    <li>
                        <a href="#">Family Room
                            <span class="posts-num">9</span></a>
                    </li>
                    <li>
                        <a href="#">Deluxe Room<span class="posts-num">12</span></a>
                    </li>
                </ul>
            </aside>
            <!-- WIDGET -->
            <aside class="widget">
                <h4 class="widget-title">Tags</h4>
                <div class="tagcloud">
                    @foreach ($tag as $t)
                        <a href={{ route("room.show",$t->id)  }}>
                            <span class="tag">{{ $t->name }}</span></a>
                    @endforeach
                    
                </div>
            </aside>
        </div>
    </div>
</div>
