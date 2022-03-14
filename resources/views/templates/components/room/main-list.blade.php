    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- ITEM -->
                    <div class="room-list-item">
                        @forelse ($room as $item)
                            <div class="row">
                                <div class="col-lg-5">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="{{ route('room.show', $item->id) }}"><img
                                                src={{ asset('himara/' . $item->image) }} class="img-fluid"
                                                alt="Image"></a>
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
                                            @foreach ($item->tags as $tag)
                                                <span data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="{{ $tag->content }}"
                                                    data-original-title="{{ $tag->name }}">{{ $tag->name }}</span>
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
                                    <a><img src="{{ asset('himara/images/rooms/king/comingsoon.jpg') }}"
                                            class="img-fluid" alt="Image"></a>
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
                                                data-trigger="hover" data-content="2 Bathrooms"
                                                data-original-title="Bathroom"></i>
                                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
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
                    {{ $room->render('vendor.pagination.custom_pagination') }}
                </div>
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form class="widget-search" action="{{ route('rooms') }}" method="POST">
                                    @csrf
                                    <input type="search" placeholder="Search City, Price ..." name="search">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">
                                @foreach ($categorie as $item)
                                <li>
                                    <a href={{ route("categorie",$item->id) }}>{{ $item->name }}<span class="posts-num">{{ count($item->rooms) }}</span></a>
                                </li>
                                @endforeach
                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($tags as $tag)
                                    <a href={{ route('tag', $tag->id) }}>
                                        <span class="tag">{{ $tag->name }}</span></a>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
    </main>
