      <!-- ========== MAIN ========== -->
      <main class="location-page">
          <div class="container">
              <div class="row">
                  <!-- ITEM -->
                  @foreach ($team as $item)
                      <div class="col-lg-3 col-md-6">
                          <div class="staff-item">
                              <figure>
                                  <img src={{ asset('himara/images/' . $item->image) }} class="img-fluid" alt="Image">
                                  <div class="position">{{ $item->job }}</div>
                              </figure>
                              <div class="details">
                                  <h5>{{ $item->name }}</h5>
                                  <p>{{ $item->description }}</p>
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </main>
