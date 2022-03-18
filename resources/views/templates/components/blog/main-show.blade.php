<main class="post-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <article class="entry">
                    <div class="details">
                        <p class="dropcap">{{ Str::of($id->description)->words(77) }}</p>
                        <p>{{ Str::of($id->description)->words(77) }}</p>
                        <blockquote>
                            <p class="quote-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                <a href="#" data-toggle="tooltip" data-placement="top" data-trigger="hover"
                                    data-original-title="Marius Doe">Mauris
                                </a> {{ Str::of($id->description)->words(30) }}
                            </p>
                        </blockquote>
                        <p> {{ Str::of($id->description)->words(77) }}</p>
                        <figure>
                            <img src="{{ asset('himara/images/blog/post/blog-post1.jpg') }}" class="img-fluid">
                            <figcaption>Image Caption
                                <span class="source">
                                    <a href="#">
                                        <i class="fa fa-link" aria-hidden="true"></i>
                                        pexeles.com</a></span>
                            </figcaption>
                        </figure>
                        <p> {{ Str::of($id->description)->words(179) }}</p>
                        <div class="row image-gallery">
                            <div class="col-md-3">
                                <figure>
                                    <div class="gradient-overlay-hover image-icon sm">
                                        <a href="{{ asset('himara/images/blog/post/blog-post2.jpg') }}">
                                            <img src="{{ asset('himara/images/blog/post/blog-post2.jpg') }}"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <figcaption>Image Caption</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3">
                                <figure>
                                    <div class="gradient-overlay-hover image-icon sm">
                                        <a href="{{ asset('himara/images/blog/post/blog-post3.jpg') }}">
                                            <img src="{{ asset('himara/images/blog/post/blog-post3.jpg') }}"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <figcaption>Image Caption</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3">
                                <figure>
                                    <div class="gradient-overlay-hover image-icon sm">
                                        <a href="{{ asset('himara/images/blog/post/blog-post4.jpg') }}">
                                            <img src="{{ asset('himara/images/blog/post/blog-post4.jpg') }}"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <figcaption>Image Caption</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-3">
                                <figure>
                                    <div class="gradient-overlay-hover image-icon sm">
                                        <a href="{{ asset('himara/images/blog/post/blog-post5.jpg') }}">
                                            <img src="{{ asset('himara/images/blog/post/blog-post5.jpg') }}"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <figcaption>Image Caption</figcaption>
                                </figure>
                            </div>
                        </div>
                        <p> {{ Str::of($id->description)->words(125) }}</p>
                        <div class="meta-post">
                            <div class="tags">
                                <span>
                                    <i class="fa fa-tags"></i>
                                    TAGS</span>
                                @foreach ($tags as $item)
                                    <a href="#" rel="tag">{{ $item->name }}</a>
                                @endforeach
                            </div>
                            <div class="share">
                                <span>
                                    <i class="fa fa-share-alt"></i>
                                    SHARE</span>
                                <div class="social-media">
                                    <a class="facebook" href="#" data-toggle="tooltip"
                                        data-original-title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="twitter" href="#" data-toggle="tooltip"
                                        data-original-title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="googleplus" href="#" data-toggle="tooltip"
                                        data-original-title="Google Plus">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a class="pinterest" href="#" data-toggle="tooltip"
                                        data-original-title="Pinterest">
                                        <i class="fa fa-pinterest"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div id="comments">
                    <div class="section-title">
                        <h4>COMMENTS</h4>
                        <p class="section-subtitle">Leave your comment</p>
                    </div>
                    <ul id="comments-list" class="comments-list">
                        <li>
                            <div class="comment-main-level">
                                @foreach ($comments as $item)
                                <div class="comment-avatar"><img
                                        src="{{ asset('himara/images/blog/users/user1.jpg') }}" alt=""></div>
                                <div class="comment-box">
                                        <div class="comment_content">
                                            <h4 class="author-name">
                                                <a href="#">{{ $item->name }}</a>
                                            </h4>
                                            <span class="comment_info">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#">
                                                    <time datetime="2017-10-01T19:56:36+00:00">{{$item->created_at->format('F j, Y')}}</time>
                                                </a>
                                            </span>
                                            <div class="comment_said_text">
                                                <p>{{ $item->comment }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                        </li>
                    </ul>
                    <div class="section-title mt100">
                        <h4>LEAVE YOUR COMMENT</h4>
                        <p class="section-subtitle">Write your comment</p>
                    </div>
                    <form action="{{ route('blog.comment', $id->id) }}" method="POST id="comment-form" class="comment-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <input name="name" type="text" class="form-control" placeholder="Name*">
                            </div>
                            <div class="col-md-4">
                                <input name="email" type="email" class="form-control" placeholder="Email*">
                            </div>
                            <div class="col-md-4">
                                <input name="website" type="text" class="form-control" placeholder="Website">
                            </div>
                            <div class="col-md-12">
                                <textarea name="comment" class="form-control" placeholder="Write Your Comment"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn float-right">
                                    POST YOUR COMMENT
                                </button>
                                <div class="align-left">*Your email address will not be published.</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
