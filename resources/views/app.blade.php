<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    {{-- google icons --}}
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../Style/home.css">

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('style/home.css') }}">
    <link rel="stylesheet" href="{{ asset('style/condidate.css') }}">
    <link rel="stylesheet" href="{{ asset('style/company.css') }}">
    <title>GetJob</title>
</head>

<body>
    <!-- CONTAINER CONTAIN 3 SECTIONS -->
    <div class="container">
        <!-- NAV SECTION   -->
        @yield('nav-bar')
        <!-- MAIN SECTION  -->
        <div class="jobs v-box flex-align-center">
            <!-- search  -->

            <!-- jobs-list -->
            @yield('content')

        </div>
        <!-- ASIDE SECTION -->
        <div class="job-selected v-box flex-align-center">
            @isset($jobSelected)
                @yield('jobDetail')
            @else
                @yield('guide')
            @endisset
        </div>
    </div>
</body>

</html>
