      <!-- ========== PAGE TITLE ========== -->
      <div class="page-title gradient-overlay op5" style="background: url({{ asset('himara/images/breadcrumb.jpg') }}); background-repeat: no-repeat;
    background-size: cover;">
          <div class="container">
              <div class="inner">
                  <h1>{{ $id->city }}</h1>
                  <div class="room-details-price">
                      €{{ $id->price }} / NIGHT
                  </div>
                  <ol class="breadcrumb">
                      <li>
                          <a href="{{ route('home') }}">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('rooms') }}">Rooms</a>
                      </li>
                      <li>{{ $id->city }}</li>
                  </ol>
              </div>
          </div>
      </div>
