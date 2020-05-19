@extends('headers.main')
@section('content')
    <div>
        <h2 class="title">Sad to See You Leave! 😭 </h2>
        <h5>This is to notify you that you are no longer part of our mailing list. </h5>
        <h5>Thus you will not receive an alert when <b>{{env('APP_NAME', 'the app')}}</b> goes live.</h5>
    </div>
@endsection
@push('page-script')
    <script>
        initScrollAnimation();
    </script>
@endpush
