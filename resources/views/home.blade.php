@extends('layouts.main', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'William Company'])

    
    
@endsection

@push('js')
    <script src="js/plugins/chartjs.min.js"></script>
@endpush
