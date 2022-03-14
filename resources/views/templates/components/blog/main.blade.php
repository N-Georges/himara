      <!-- ========== MAIN ========== -->
      <main>
          <div class="container">
              <div class="row">
                  <div class="col-lg-9 col-12">
                      <!-- POSTS -->
                      <div class="blog-posts">
                          <!-- POST -->
                          @forelse ($blog as $item)
                              <article class="post">
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="post-thumbnail">
                                              <figure class="gradient-overlay-hover link-icon">
                                                  <a href="{{ route('blog.show', $item->id) }}">
                                                      <img src={{ asset('himara/' . $item->image) }} class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="post-details">
                                              <h2 class="post-title">
                                                  <a href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                                              </h2>
                                              <div class="post-meta">
                                                  <span class="author">
                                                      <a href="#"><img src={{ asset('himara/' . $item->author->image) }} width="16"
                                                              alt="Image">{{ $item->author->name }}</a>
                                                  </span>
                                                  <span class="date">
                                                      <a href="#">
                                                          <i class="fa fa-clock-o"></i>{{$item->created_at->format('F j, Y')}}</a>
                                                  </span>
                                                  <span class="comments">
                                                      <a href="#">
                                                          <i class="fa fa-commenting-o"></i>1 Comment</a>
                                                  </span>
                                                  <span class="category">
                                                      <i class="fa fa-folder-open-o"></i>IN
                                                      <a href="#">News</a>,
                                                      <a href="#">Events</a>
                                                  </span>
                                              </div>
                                              <p>{{ Str::of($item->description)->words(45) }}</p>
                                          </div>
                                      </div>
                                  </div>
                              </article>

                          @empty
                          @endforelse
                      </div>
                      <!-- ========== PAGINATION ========== -->
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
                              <li>
                                  <a href="#">4</a>
                              </li>
                              <li>
                                  <a href="#">5</a>
                              </li>
                              <li>...</li>
                              <li>
                                  <a href="#">18</a>
                              </li>
                              <li>
                                  <a href="#">19</a>
                              </li>
                              <li>
                                  <a href="#">20</a>
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
                  <!-- SIDEBAR -->
                  <div class="col-lg-3 col-12">
                      <div class="sidebar">
                          <aside class="widget noborder">
                              <div class="search">
                                <form class="widget-search" action="{{ route('blog.search') }}" method="POST">
                                    @csrf
                                    <input type="search" placeholder="Search" name="search">
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
                                      <a href="#">Travel<span class="posts-num">51</span></a>
                                  </li>
                                  <li>
                                      <a href="#">Rooms<span class="posts-num">24</span></a>
                                  </li>
                                  <li>
                                      <a href="#">Holidays
                                          <span class="posts-num">9</span></a>
                                  </li>
                                  <li>
                                      <a href="#">Travel<span class="posts-num">12</span></a>
                                  </li>
                                  <li>
                                      <a href="#">Events<span class="posts-num">28</span></a>
                                  </li>
                              </ul>
                          </aside>
                          <!-- WIDGET -->
                          <aside class="widget">
                              <h4 class="widget-title">Latest Posts</h4>
                              <div class="latest-posts">
                                  <!-- ITEM -->
                                  <div class="latest-post-item">
                                      <div class="row">
                                          <div class="col-5">
                                              <figure class="gradient-overlay-hover link-icon sm">
                                                  <a href="blog-post.html">
                                                      <img src="images/blog/blog-post1.jpg" class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                          <div class="col-7">
                                              <div class="post-details">
                                                  <h6 class="post-title">
                                                      <a href="blog-post.html">10 Tips for Holiday Travel</a>
                                                  </h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ITEM -->
                                  <div class="latest-post-item">
                                      <div class="row">
                                          <div class="col-5">
                                              <figure class="gradient-overlay-hover link-icon sm">
                                                  <a href="blog-post.html">
                                                      <img src="images/blog/blog-post2.jpg" class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                          <div class="col-7">
                                              <div class="post-details">
                                                  <h6 class="post-title">
                                                      <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                                  </h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ITEM -->
                                  <div class="latest-post-item">
                                      <div class="row">
                                          <div class="col-5">
                                              <figure class="gradient-overlay-hover link-icon sm">
                                                  <a href="blog-post.html">
                                                      <img src="images/blog/blog-post3.jpg" class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                          <div class="col-7">
                                              <div class="post-details">
                                                  <h6 class="post-title">
                                                      <a href="blog-post.html">Honeymoon in Hotel Himara</a>
                                                  </h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ITEM -->
                                  <div class="latest-post-item">
                                      <div class="row">
                                          <div class="col-5">
                                              <figure class="gradient-overlay-hover link-icon sm">
                                                  <a href="blog-post.html">
                                                      <img src="images/blog/blog-post4.jpg" class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                          <div class="col-7">
                                              <div class="post-details">
                                                  <h6 class="post-title">
                                                      <a href="blog-post.html">Travel Gift Ideas for Every Type of
                                                          Traveler</a>
                                                  </h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- ITEM -->
                                  <div class="latest-post-item">
                                      <div class="row">
                                          <div class="col-5">
                                              <figure class="gradient-overlay-hover link-icon sm">
                                                  <a href="blog-post.html">
                                                      <img src="images/blog/blog-post5.jpg" class="img-fluid"
                                                          alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                          <div class="col-7">
                                              <div class="post-details">
                                                  <h6 class="post-title">
                                                      <a href="blog-post.html">Breakfast with coffee and orange juic</a>
                                                  </h6>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </aside>
                          <!-- WIDGET -->
                          <aside class="widget">
                              <h4 class="widget-title">Tags</h4>
                              <div class="tagcloud">
                                  <a href="#">
                                      <span class="tag">Party</span></a>
                                  <a href="#">
                                      <span class="tag">Travel</span></a>
                                  <a href="#">
                                      <span class="tag">Wedding</span></a>
                                  <a href="#">
                                      <span class="tag">Food</span></a>
                                  <a href="#">
                                      <span class="tag">Music</span></a>
                                  <a href="#">
                                      <span class="tag">City</span></a>
                                  <a href="#">
                                      <span class="tag">Image</span></a>
                                  <a href="#">
                                      <span class="tag">Hotel</span></a>
                              </div>
                          </aside>
                      </div>
                  </div>
              </div>
          </div>
      </main>
