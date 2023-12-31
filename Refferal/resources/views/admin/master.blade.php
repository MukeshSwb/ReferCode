
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- @if(!empty($SettingData)) -->
    <title>
        App
        <!-- {{ $SettingData->site_name }} -->

    </title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset($SettingData->fav_icon)}}">
    <!-- @endif -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-confirm/jquery-confirm.min.css') }}">
    <link href="{{ asset('css/jquery-ui.css')}}" rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/Timepicker/jquery.timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables/jquery.dataTables.min.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet"> -->
        
    <!-- multi select css -->
    <link href="{{ asset('css/multiselect_dropdown/bootstrap-multiselect.css')}}" rel="stylesheet" />
    <!-- End multi select css -->
        
    <!-- <link rel="stylesheet" href="{{asset('js/jstree/dist/themes/default/style.min.css')}}" type="text/css"/> -->

    @if(env('ALP_SERVER')=='localhost')
    <link href="{{ asset('css/backend-style.css') }}" rel="stylesheet">
    @else
    <link href="{{ asset('css/backend-style.min.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('css/admin_dashboard.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}"/>
    <link href="{{asset('css/jquery.timepicker.min.css')}}" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/jquery/3.4.1/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.cookie.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>        
        var BASE_URL = "{{ URL::to('/') }}";
        var CSRF_TOKEN = "{{ csrf_token() }}";
        var APP_ENV = "{{env('APP_ENV','local')}}";
        var ALP_SERVER = "{{env('ALP_SERVER')}}";
        var APP_LANGUAGE = "{{app()->getLocale()}}";
    </script>

    <!-- Start Load language js file -->
    @if(app()->getLocale() == 'en')
        @if(env('ALP_SERVER')=='localhost')
        <script type="text/javascript" src="{{ asset('js/languages/language_en.js')}}"></script>
        @else
        <script type="text/javascript" src="{{ asset('js/languages/language_en.min.js')}}"></script>
        @endif
    @endif
    @if(app()->getLocale() == 'ch')
        @if(env('ALP_SERVER')=='localhost')
        <script type="text/javascript" src="{{ asset('js/languages/language_ch.js')}}"></script>
        @else
        <script type="text/javascript" src="{{ asset('js/languages/language_ch.min.js')}}"></script>
        @endif
    @endif
    <!-- End Load language js file -->
    
</head>
<body>
    <div class="container-fluid">
        <nav class="sidebar">            
            <div>
                <div class="sidebar__logo">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_129_9347)">
                        <path d="M19.5386 23.4366C19.3904 23.5849 19.2144 23.7025 19.0208 23.7828C18.8271 23.863 18.6195 23.9043 18.4099 23.9043C18.2003 23.9043 17.9927 23.863 17.799 23.7828C17.6053 23.7025 17.4294 23.5849 17.2812 23.4366L8.09921 14.2561C6.77491 12.9048 6.03741 11.0854 6.04697 9.19342C6.05652 7.30139 6.81236 5.48959 8.15024 4.15171C9.48812 2.81383 11.2999 2.05799 13.192 2.04843C15.084 2.03888 16.9033 2.77638 18.2547 4.10067L24.0578 9.90378C24.3563 10.2039 24.5235 10.6103 24.5224 11.0337C24.5213 11.457 24.3521 11.8626 24.052 12.1612C23.7518 12.4598 23.3454 12.6269 22.9221 12.6258C22.4987 12.6247 22.0931 12.4555 21.7945 12.1554L15.9987 6.35228C15.2499 5.60352 14.2344 5.18287 13.1755 5.18287C12.1166 5.18287 11.101 5.60352 10.3523 6.35228C9.6035 7.10104 9.18285 8.11658 9.18285 9.17549C9.18285 10.2344 9.6035 11.2499 10.3523 11.9987L19.5342 21.1807C19.8338 21.4793 20.0026 21.8847 20.0034 22.3078C20.0042 22.7308 19.837 23.1368 19.5386 23.4366Z" fill="#7C5CFC"/>
                        <path d="M24.0012 27.8992C22.6533 29.2436 20.8272 29.9987 18.9234 29.9987C17.0197 29.9987 15.1936 29.2436 13.8457 27.8992L8.04986 22.0961C7.88902 21.951 7.75941 21.7747 7.66891 21.5779C7.57841 21.3811 7.52892 21.1679 7.52346 20.9514C7.51799 20.7348 7.55667 20.5194 7.63713 20.3183C7.71758 20.1172 7.83814 19.9346 7.99145 19.7816C8.14477 19.6286 8.32762 19.5084 8.52889 19.4283C8.73015 19.3482 8.94561 19.31 9.16214 19.3158C9.37867 19.3217 9.59173 19.3716 9.78835 19.4625C9.98497 19.5534 10.161 19.6833 10.3058 19.8445L16.1017 25.6476C16.8516 26.3875 17.8637 26.8008 18.9172 26.7972C19.9707 26.7937 20.98 26.3737 21.7249 25.6287C22.4698 24.8838 22.8899 23.8745 22.8934 22.821C22.8969 21.7675 22.4837 20.7554 21.7437 20.0055L12.5618 10.8192C12.2624 10.5198 12.0942 10.1138 12.0942 9.69047C12.0942 9.26712 12.2624 8.86111 12.5618 8.56176C12.8611 8.26241 13.2671 8.09424 13.6905 8.09424C14.1138 8.09424 14.5198 8.26241 14.8192 8.56176L24.0012 17.7437C25.346 19.0914 26.1013 20.9176 26.1013 22.8215C26.1013 24.7253 25.346 26.5515 24.0012 27.8992Z" fill="#7C5CFC"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_129_9347">
                        <rect width="20.1005" height="28" fill="currentColor" transform="translate(6 2)"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <h2 class="sidebar__logo-header">Reffer</h2>    
                </div>
                <ul class="side-nav">
                    <a href="{{ route('admin.dashboard') }}">
                        <!-- <span class="side-nav__header">Main Menu</span> -->
                        <li class="side-nav__item {{ request()->is('admin/dashboard') ? 'side-nav__item-active' : '' }}">
                            <svg width="22" height="23" viewBox="0 0 22 23" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.23201 3.4202L9.23239 3.41989C10.2108 2.63408 11.7843 2.63834 12.7781 3.42994C12.7783 3.43005 12.7784 3.43015 12.7785 3.43025L18.7784 8.2301C18.7789 8.23054 18.7795 8.23099 18.78 8.23143C19.1189 8.50835 19.4146 8.94381 19.6058 9.44415C19.7968 9.94409 19.8672 10.4662 19.8014 10.8985L18.6475 17.8037C18.6474 17.8042 18.6473 17.8047 18.6472 17.8052C18.4217 19.0989 17.1608 20.1667 15.8585 20.1667H6.1418C4.81982 20.1667 3.58766 19.1252 3.36227 17.8148C3.36221 17.8145 3.36215 17.8142 3.36209 17.8138L2.20746 10.9043L2.20726 10.9032C2.13345 10.4677 2.19947 9.94466 2.39002 9.44498C2.58055 8.94535 2.87982 8.51038 3.22697 8.2334L3.22784 8.2327L9.23201 3.4202ZM11.0001 18.1876C11.6521 18.1876 12.1876 17.652 12.1876 17.0001V14.2501C12.1876 13.5981 11.6521 13.0626 11.0001 13.0626C10.3482 13.0626 9.81263 13.5981 9.81263 14.2501V17.0001C9.81263 17.652 10.3482 18.1876 11.0001 18.1876Z" fill="currentColor" stroke="currentColor"/>
                            </svg>                       
                            <span>Dashboard</span>
                        </li>
                    </a>

                    <a href="{{ route('admin.dashboard') }}">
                        <!-- <span class="side-nav__header">Main Menu</span> -->
                        <li class="side-nav__item {{ request()->is('admin/dashboard') ? 'side-nav__item-active' : '' }}">
                            <svg width="22" height="23" viewBox="0 0 22 23" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.23201 3.4202L9.23239 3.41989C10.2108 2.63408 11.7843 2.63834 12.7781 3.42994C12.7783 3.43005 12.7784 3.43015 12.7785 3.43025L18.7784 8.2301C18.7789 8.23054 18.7795 8.23099 18.78 8.23143C19.1189 8.50835 19.4146 8.94381 19.6058 9.44415C19.7968 9.94409 19.8672 10.4662 19.8014 10.8985L18.6475 17.8037C18.6474 17.8042 18.6473 17.8047 18.6472 17.8052C18.4217 19.0989 17.1608 20.1667 15.8585 20.1667H6.1418C4.81982 20.1667 3.58766 19.1252 3.36227 17.8148C3.36221 17.8145 3.36215 17.8142 3.36209 17.8138L2.20746 10.9043L2.20726 10.9032C2.13345 10.4677 2.19947 9.94466 2.39002 9.44498C2.58055 8.94535 2.87982 8.51038 3.22697 8.2334L3.22784 8.2327L9.23201 3.4202ZM11.0001 18.1876C11.6521 18.1876 12.1876 17.652 12.1876 17.0001V14.2501C12.1876 13.5981 11.6521 13.0626 11.0001 13.0626C10.3482 13.0626 9.81263 13.5981 9.81263 14.2501V17.0001C9.81263 17.652 10.3482 18.1876 11.0001 18.1876Z" fill="currentColor" stroke="currentColor"/>
                            </svg>                       
                            <span>Profile</span>
                        </li>
                    </a>

                    <a href="{{ route('refer.amount') }}">
                        <li class="side-nav__item {{ request()->is('refer') ? 'side-nav__item-active' : '' }}">
                            <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.30664 17.1375V15.24" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M11 17.1375V13.3425" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M15.6934 17.1375V11.4358" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                <path d="M15.6933 5.86255L15.2716 6.35755C12.9341 9.08922 9.79914 11.0234 6.30664 11.8942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                <path d="M13.0073 5.86255H15.6932V8.53922" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.25016 20.6667H13.7502C18.3335 20.6667 20.1668 18.8334 20.1668 14.25V8.75004C20.1668 4.16671 18.3335 2.33337 13.7502 2.33337H8.25016C3.66683 2.33337 1.8335 4.16671 1.8335 8.75004V14.25C1.8335 18.8334 3.66683 20.6667 8.25016 20.6667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                   
                                <span>Refer Amount</span>
                        </li> 
                    </a>
                    
                </ul>
    
            </div>          
            
            <ul class="side-nav">
                <a href="{{ route('logout') }}">
                    <li class="side-nav__item last-item">
                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.8999 8.05999C9.2099 4.45999 11.0599 2.98999 15.1099 2.98999H15.2399C19.7099 2.98999 21.4999 4.77999 21.4999 9.24999V15.77C21.4999 20.24 19.7099 22.03 15.2399 22.03H15.1099C11.0899 22.03 9.2399 20.58 8.9099 17.04" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M15.0001 12.5H3.62012" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M5.85 9.14999L2.5 12.5L5.85 15.85" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                                       
                        <span>Log Out</span>
                    </li>
                </a>
            </ul>            
        </nav>
        @yield('content')
    </div>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>