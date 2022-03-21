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
                                                      <img src={{ asset('himara/images/' . $item->image) }}
                                                          class="img-fluid" alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="post-details">
                                              <h2 class="post-title">
                                                  <a
                                                      href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                                              </h2>
                                              <div class="post-meta">
                                                  <span class="author">
                                                      <a href="#"><img
                                                              src={{ asset('himara/images/' . $item->author->image) }}
                                                              width="16" alt="Image">{{ $item->author->name }}</a>
                                                  </span>
                                                  <span class="date">
                                                      <a href="#">
                                                          <i
                                                              class="fa fa-clock-o"></i>{{ $item->created_at->format('F j, Y') }}</a>
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
                              <article class="post">
                                  <div class="row">
                                      <div class="col-sm-4">
                                          <div class="post-thumbnail">
                                              <figure class="gradient-overlay-hover link-icon">
                                                  <a href="#">
                                                      <img src="{{ asset('himara/images/rooms/king/comingsoon.jpg') }}"
                                                          class="img-fluid" alt="Image">
                                                  </a>
                                              </figure>
                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="post-details">
                                              <h2 class="post-title">
                                                  <a href="#">New Article Coming Soon</a>
                                              </h2>
                                              <div class="post-meta">
                                                  <span class="author">
                                                      <a href="#"><img
                                                              src="{{ asset('himara/images/users/admin.jpg') }}"
                                                              width="16" alt="Image">New Author Coming Soon</a>
                                                  </span>
                                                  <span class="date">
                                                      <a href="#">
                                                          <i class="fa fa-clock-o"></i>February 03, 2018</a>
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
                                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet
                                                  reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque,
                                                  officiis dicta! Sit numquam qui tenetur tempore officia minus, a
                                                  dignissimos ...</p>
                                          </div>
                                      </div>
                                  </div>
                              </article>
                          @endforelse
                      </div>
                      <!-- ========== PAGINATION ========== -->
                      {{ $blog->render('vendor.pagination.custom_pagination') }}
                  </div>
                  <!-- SIDEBAR -->
                  <div class="col-lg-3 col-12">
                      <div class="sidebar">
                          <aside class="widget noborder">
                              <div class="search">
                                  <form class="widget-search" action="{{ route('blogFront.search') }}" method="POST">
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
                                  @foreach ($categorie as $item)
                                      <li>
                                          <a href={{ route('blog.categorie', $item->id) }}>{{ ucfirst($item->name) }}<span
                                                  class="posts-num"></span></a>
                                      </li>
                                  @endforeach
                              </ul>
                          </aside>
                          <!-- WIDGET -->
                          <aside class="widget">
                              <h4 class="widget-title">Latest Posts</h4>
                              <div class="latest-posts">
                                  <!-- ITEM -->
                                  @foreach ($blogLast as $item)
                                      <div class="latest-post-item">
                                          <div class="row">
                                              <div class="col-5">
                                                  <figure class="gradient-overlay-hover link-icon sm">
                                                      <a href="{{ route('blog.show', $item->id) }}">
                                                          <img src={{ asset('himara/images/' . $item->image) }}
                                                              class="img-fluid" alt="Image">
                                                      </a>
                                                  </figure>
                                              </div>
                                              <div class="col-7">
                                                  <div class="post-details">
                                                      <h6 class="post-title">
                                                          <a href="blog-post.html">{{ $item->title }}</a>
                                                      </h6>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </aside>
                          <!-- WIDGET -->
                          <aside class="widget">
                              <h4 class="widget-title">Tags</h4>
                              <div class="tagcloud">
                                      @foreach ($tags as $tag)
                                          <a href={{ route('blog.tag', $tag->id) }}>
                                              <span class="tag">{{ $tag->name }}</span></a>
                                      @endforeach
                              </div>
                          </aside>
                      </div>
                  </div>
              </div>
          </div>
      </main>
