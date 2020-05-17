@extends('headers.main')
@section('content')
    @php
        use Illuminate\Support\Facades\DB;
        $db_connection_exists = false;
        try{
        	DB::connection()->getPdo();
        	$db_connection_exists = true;
        }catch(Throwable $th){}
    @endphp
    <div class="landing-page bg-rose sidebar-collapse">
        <div class="page-header header-filter" data-parallax="true"
             style="background-image: url({{asset('img/background.jpg')}}">
            <div class="container">
                <div class="d-flex text-center justify-content-center align-items-center show-on-scroll">
                    <div>
                        <h2 class="title">
                            Under Construction!
                        </h2>
                        <h5>Sit Back and Relax as we work day and night to make <b>{{env('APP_NAME', 'the app')}}</b> available to you.</h5>
                        @if($db_connection_exists)
                            <h5>You can Subscribe to receive an update once we go live.</h5>
                            <form method="POST" class="form-row container" role="form">
                                <div class="col-12 col-sm-1"></div>
                                <div class="col-12 col-sm-7">
                                    <div class="form-group mr-3">
                                        <div class="input-group w-100">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-envelope text-light"></i>
                                                </div>
                                            </div>
                                            <label class="sr-only" for="email">Email address</label>
                                            <input type="email" id="email" class="form-control transparent text-light" placeholder="Your email here...">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-3">
                                    <div class="bmd-form-group">
                                        <button type="submit" class="btn btn-rose btn-sm-block btn-sm btn-fill"><i class="fas fa-bell"></i> Notify Me</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('page-script')
    <script>
        initScrollAnimation();
    </script>
@endpush
