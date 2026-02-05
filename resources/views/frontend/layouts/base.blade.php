<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>

    @include('frontend.layouts.base-meta')
    @stack('title')
    @include('frontend.layouts.base-styles')

</head>

<body class="bg-dark text-gray-300 font-sans antialiased overflow-x-hidden relative">


    <!--**********************************
        Main wrapper start
    ***********************************-->

    {{-- <!--**********************************
        Nav header start
        ***********************************-->
        @include('backend.users.layouts.base-header-brand')
        <!--**********************************
            Nav header end --}}

   


        <!--**********************************
            Header start
        ***********************************-->
        @include('frontend.layouts.base-header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        @yield('page-content')
        <!--**********************************
            Content body end
        ***********************************-->
   
        <!--**********************************
            Footer start
        ***********************************-->
        @include('frontend.layouts.base-footer')
        <!--**********************************
            Footer end
        ***********************************--> 

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('frontend.layouts.base-scripts')

</body>

</html>
