<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <link rel="stylesheet" href="{{asset('vendor/choices.js/public/assets/styles/choices.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
</head>

<body>
    <div class="page">
        <!-- Main Navbar-->
        <header class="header z-index-50">
            <nav class="navbar py-3 px-0 shadow-sm text-white position-relative">
                <!-- Search Box-->
                <div class="search-box shadow-sm">
                    <button class="dismiss d-flex align-items-center">
                        <svg class="svg-icon svg-icon-heavy">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>

                </div>
                <div class="container-fluid w-100">
                    <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                        <!-- Navbar Header-->
                        <div class="navbar-header">
                            <!-- Navbar Brand -->
                            <a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                                <div class="brand-text d-none d-lg-inline-block"><span>
                                    </span><strong>LoopWeb</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                            </a>
                            <!-- Toggle Button--><a class="menu-btn active" id="toggle-btn"
                                href="#"><span></span><span></span><span></span></a>
                        </div>
                        <!-- Navbar Menu -->
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                            <!-- Search-->
                            <li class="nav-item d-flex align-items-center">
                                <a id="search" href="#">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#find-1"> </use>
                                    </svg></a>
                            </li>


                            <!-- Logout    -->
                            <li class="nav-item">
                                <a class="nav-link text-white" href="login.html"> <span
                                        class="d-none d-sm-inline">Logout</span>
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#security-1"> </use>
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">
            <!-- Side Navbar -->
            <nav class="side-navbar z-index-40">
                <!-- Sidebar Header-->
                <div class="sidebar-header d-flex align-items-center py-4 px-3">
                    <div class="ms-3 title">
                        <h1 class="h4 mb-2">Maruka Technologies</h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Question System</p>
                    </div>
                </div>
                <!-- Sidebar Navidation Menus--><span
                    class="text-uppercase text-gray-400 text-xs letter-spacing-0 mx-3 px-2 heading">Main</span>
                <ul class="list-unstyled py-4">
                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="/quotation/add">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Add Question </a>
                    </li>
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="/quotation">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#portfolio-grid-1"> </use>
                            </svg>Question List</a>
                    </li>
            </nav>
            <div class="content-inner w-100">
                <!-- Page Header-->
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Question List</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="bg-white">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 py-3">
                                <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active fw-light" aria-current="page">Question List</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <!-- users Section-->
                <div class="container-fluid">
                    <div class="row d-fles gap-3 justify-content-center mt-5">
                        <center>
                            <h2>Question List</h2>
                        </center>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col-2">Question Id</th>
                                    <th scope="col-3">Company Name</th>
                                    <th scope="col-3">Date</th>
                                    <th scope="col-2">Project</th>
                                    <th scope="col-2">Description</th>
                                    <th scope="col-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($dataList as $item)
                                    <tr>
                                        <th scope="row">{{$item->id}}</th>
                                        <td>{{$item->attention}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->project}}</td>
                                        <td>{{$item->question_description}}</td>
                                        <td><button type="button" class="btn btn-outline-primary">View</button> <button
                                                type="button" class="btn btn-outline-success">Update</button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>


                    </div>

                </div>



                <!-- Page Footer-->
                <footer class="position-absolute bottom-0 bg-darkBlue text-white text-center py-3 w-100 text-xs"
                    id="footer">
                    <div class="container-fluid">
                        <div class="row gy-2">
                            <div class="col-sm-6 text-sm-start">
                                <p class="mb-0">Your company &copy; 2017-2021</p>
                            </div>
                            <div class="col-sm-6 text-sm-end">
                                <p class="mb-0">Design by <a href="https://bootstrapious.com/p/admin-template"
                                        class="text-white text-decoration-none">Bootstrapious</a></p>
                                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('vendor/just-validate/js/just-validate.min.js')}}"></script>
    <script src="{{asset('vendor/choices.js/public/assets/scripts/choices.min.js')}}"></script>
    <script src="{{asset('js/charts-custom.js')}}"></script>
    <!-- Main File-->
    <script src="{{asset('js/front.js')}}"></script>
    <script>
        // ------------------------------------------------------- //
        //   Inject SVG Sprite -
        //   see more here
        //   https://css-tricks.com/ajaxing-svg-sprite/
        // ------------------------------------------------------ //
        function injectSvgSprite(path) {

            var ajax = new XMLHttpRequest();
            ajax.open("GET", path, true);
            ajax.send();
            ajax.onload = function (e) {
                var div = document.createElement("div");
                div.className = 'd-none';
                div.innerHTML = ajax.responseText;
                document.body.insertBefore(div, document.body.childNodes[0]);
            }
        }
        // this is set to BootstrapTemple website as you cannot
        // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
        // while using file:// protocol
        // pls don't forget to change to your domain :)
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
