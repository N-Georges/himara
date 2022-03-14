<div class="parallax-mirror"
    style="visibility: visible; z-index: 0; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 116.5px, 0px); height: 535px; width: 966px;">
</div>
<div class="blog-post-cover gradient-overlay op5" data-src="{{ asset('himara/images/blog/post/blog-full.jpg') }}" data-parallax="scroll"
    data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0" style="margin-top: 0px;">
    <div class="container inner">
        <h2 class="blog-post-title">{{ $id->title }}</h2>
        <div class="blog-post-info">
            <img alt="" src={{ asset('himara/' . $id->author->image) }} class="author-avatar" width="16">
            <p>by
                <span>
                    <a href="#">{{ $id->author->name }}</a></span>
            </p>
            <p>on
                <time >{{$id->created_at->format('F j, Y')}}</time>
            </p>
        </div>
    </div>
</div>
