    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url({{ asset('himara/images/breadcrumb.jpg') }}); background-repeat: no-repeat;
    background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>{{ Route::currentRouteName() }}</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>{{ Route::currentRouteName() }}</li>
                </ol>
            </div>
        </div>
    </div>
