@php
use App\Http\Controllers\FormController as FC;
@endphp

@extends('layout/layout')

@section('script')
    <script type="text/javascript">
        $(function() {
            $('#fullpage').fullpage({

                navigation: true,
                scrollBar: true,
                slidesNavigation: true,
                keyboardScrolling: true,

            });

        });
    </script>
@endsection

@section('content')
@endsection
