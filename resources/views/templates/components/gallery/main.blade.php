      <!-- ========== MAIN ========== -->
      <main class="gallery-page">
          <!-- FILTERS -->
          <div class="container">
              <div class="gallery-filters">
                  <a href="#" data-filter="*" class="filter active">ALL</a>
                  @foreach ($gallerietag as $item)
                      <a href="#" data-filter=".{{ $item->filter }}"
                          class="filter">{{ strtoupper($item->name) }}</a>
                  @endforeach
              </div>
          </div>
          <!-- GALLERY -->
          <div class="container">
              <div class="grid image-gallery row">
                  <!-- ITEM -->
                  @foreach ($gallerie as $item)
                      <div class="gallery-item {{ $item->tag_gallerie->filter }} col-md-3">
                          <figure class="gradient-overlay image-icon">
                              <a href="{{ asset('himara/' . $item->image) }}">
                                  <img src={{ asset('himara/' . $item->image) }} class="img-fluid" alt="Image">
                              </a>
                              <figcaption>{{ $item->name }}</figcaption>
                          </figure>
                      </div>
                  @endforeach

              </div>
          </div>
      </main>
