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
                                        <a href="room.html"><img src={{ asset('himara/'.$item->image) }}
                                                class="img-fluid" alt="Image"></a>
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
                                            <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                        </span>
                                        <p>{{ Str::of($item->description)->words(7) }}</p>
                                        <div class="room-services">
                                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Breakfast Included"
                                                data-original-title="Breakfast"></i>
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
                                        <span class="price">€{{ $item->price }} / night</span>
                                        <a href="room.html" class="btn btn-sm">view <br> details</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                    {{-- <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="favorite-item">
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/double/double.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">TANGER</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
                                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Free WiFi"
                                            data-original-title="WiFi"></i>
                                        <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Plasma TV with cable channels"
                                            data-original-title="TV"></i>
                                        <span>Beds: 2 King</span>
                                        <span>Max Guests: 4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="room-price">
                                    <span class="price">€129 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/deluxe/deluxe.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">TOKYO</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
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
                                    <span class="price">€189 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/family/family.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">PARIS</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
                                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Free WiFi"
                                            data-original-title="WiFi"></i>
                                        <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Plasma TV with cable channels"
                                            data-original-title="TV"></i>
                                        <span>Beds: 2 King and 1 Sofabed</span>
                                        <span>Max Guests: 4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="room-price">
                                    <span class="price">€149 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/king/king.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">RIO DE JANEIRO</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
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
                                    <span class="price">€289 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="favorite-item">
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/honeymoon/honeymoon.jpg"
                                            class="img-fluid" alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">SICILIA</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
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
                                    <span class="price">€169 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/view/view.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">MOSCOU</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
                                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Free WiFi"
                                            data-original-title="WiFi"></i>
                                        <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Plasma TV with cable channels"
                                            data-original-title="TV"></i>
                                        <span>Beds: 1 King and 1 Sofabed</span>
                                        <span>Max Guests: 4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="room-price">
                                    <span class="price">€119 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/luxury/luxury.jpg"
                                            class="img-fluid" alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">LONDON</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
                                        <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Free WiFi"
                                            data-original-title="WiFi"></i>
                                        <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Plasma TV with cable channels"
                                            data-original-title="TV"></i>
                                        <span>Beds: 2 King</span>
                                        <span>Max Guests: 4</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="room-price">
                                    <span class="price">€349 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ITEM -->
                    <div class="room-list-item">
                        <div class="row">
                            <div class="col-lg-5">
                                <figure class="gradient-overlay-hover link-icon">
                                    <a href="room.html"><img src="images/rooms/small/small.jpg" class="img-fluid"
                                            alt="Image"></a>
                                </figure>
                            </div>
                            <div class="col-lg-5">
                                <div class="room-info">
                                    <h3 class="room-title">
                                        <a href="room.html">DUBAÎ</a>
                                    </h3>
                                    <span class="room-rates">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <a href="room.html#room-reviews">5.00 Based on 3 Ratings</a>
                                    </span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing ..</p>
                                    <div class="room-services">
                                        <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Breakfast Included"
                                            data-original-title="Breakfast"></i>
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
                                    <span class="price">€39 / night</span>
                                    <a href="room.html" class="btn btn-sm">view <br> details</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                                    <input type="search" placeholder="Search">
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
                                <a href="#">
                                    <span class="tag">Red</span></a>
                                <a href="#">
                                    <span class="tag">Dark</span></a>
                                <a href="#">
                                    <span class="tag">Yellow</span></a>
                                <a href="#">
                                    <span class="tag">Blue</span></a>
                                <a href="#">
                                    <span class="tag">Pink</span></a>
                                <a href="#">
                                    <span class="tag">Green</span></a>
                                <a href="#">
                                    <span class="tag">Gray</span></a>
                                <a href="#">
                                    <span class="tag">Brown</span></a>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
