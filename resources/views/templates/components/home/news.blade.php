    <!-- ========== NEWS ==========-->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h4 class="title">LATEST NEWS</h4>
                <p class="section-subtitle">Check out our latest news</p>
            </div>
            <div class="row">
                <!-- ITEM -->
                @foreach ($blogLast as $item)
                    <div class="col-md-4">
                        <div class="news-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="{{ route('blog.show', $item->id) }}">
                                    <img src={{ asset('himara/images/' . $item->image) }} class="img-fluid"
                                        alt="Image">
                                </a>
                            </figure>
                            <div class="news-info">
                                <h5 class="">
                                    <a href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                                </h5>
                                <p>{{ Str::of($item->description)->words(30) }}</p>
                                <div class="post-meta">
                                    <span class="author">
                                        <a href="#"><img src={{ asset('himara/images/' . $item->author->image) }} width="16"
                                                alt="Image">
                                            {{ $item->author->name }}</a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-clock-o"></i>
                                        {{$item->created_at->format('F j, Y')}}</span>
                                    <span class="comments">
                                        
                                        <a href="#">
                                            <i class="fa fa-commenting-o"></i>
                                            {{ count($comment) }} Comment</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
