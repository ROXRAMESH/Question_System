<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Material Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
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
                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="/quotation/add">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Add Question </a>
                    </li>
                    <li class="sidebar-item">
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
                        <h2 class="mb-0 p-1">Manage Users</h2>
                    </div>
                </header>
                <!-- Breadcrumb-->
                <div class="bg-white">
                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 py-3">
                                <li class="breadcrumb-item"><a class="fw-light" href="index.html">Home</a></li>
                                <li class="breadcrumb-item active fw-light" aria-current="page">Add Question</li>
                            </ol>
                        </nav>
                    </div>
                </div>


                <!-- users Section-->
                <form action="">
                    <div class="container-fluid">
                        <div class="row d-fles gap-3 justify-content-center mt-5">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Attention</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="attention" />

                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Customer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="customer" />

                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Project</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="project" />

                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Question Description</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="q_description" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-10">
                                            <input type="text" class="form-control" id="description" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Qty</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="qty" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3 row">
                                        <label for="staticEmail" class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="price" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <button type="button" class="btn btn-secondary" id="add">+ Add</button>
                                </div>
                            </div>



                            <!-- table start -->
                            <table class="table table-bordered table-dark">
                                <thead>
                                    <tr>
                                        <th style="background-color: rgb(150, 199, 234);" scope="col">Description</th>
                                        <th style="background-color: rgb(150, 199, 234);" scope="col">Quantity</th>
                                        <th style="background-color: rgb(150, 199, 234);" scope="col">Price</th>
                                        <th style="background-color: rgb(150, 199, 234); " scope="col">Total</th>
                                        <th style="background-color: rgb(150, 199, 234); " scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </tbody>
                            </table>
                            <!-- table end -->
                            <div class="mb-3 row offset-10">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Sub Total (LKR.)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="subtotal" readonly/>

                                </div>
                            </div>
                            <div class="mb-3 row offset-10">
                                <label for="staticEmail" class="col-sm-3 col-form-label">VAT(15%) (LKR.)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="vat" readonly/>

                                </div>
                            </div>
                            <div class="mb-3 row offset-10">
                                <label for="staticEmail" class="col-sm-3 col-form-label">Total including Tax (LKR.)</label>
                                <div class="col-sm-4">
                                    <b><input type="text" class="form-control font-weight-bold" id="total" readonly style="font-weight:bold;font-size: 25px;"/></b>

                                </div>
                            </div>
                            <button type="button" class="btn btn-success col-3" id="saveBTN">Save</button>
                            <button type="reset" class="btn btn-danger col-3">Cancel</button>
                        </div>
                    </div>
                </form>



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
        var addButton = document.getElementById('add');
        addButton.addEventListener('click', addItem);
        var saveButton = document.getElementById('saveBTN');
        saveButton.addEventListener('click', saveOrder);
        populateTable();

        function addItem() {
            // Read values from input fields
            var description = document.getElementById('description').value;
            var qty = document.getElementById('qty').value;
            var price = document.getElementById('price').value;

            // Create a JavaScript object with the values
            var item = {
                description: description,
                qty: qty,
                price: price
            };

            // Retrieve the existing array from localStorage or create a new one
            var itemList = JSON.parse(localStorage.getItem('itemList')) || [];

            // Append the object to the array
            itemList.push(item);

            // Store the updated array back into localStorage
            localStorage.setItem('itemList', JSON.stringify(itemList));
            populateTable();
        }

        function populateTable() {
            var itemList = JSON.parse(localStorage.getItem('itemList')) || [];
            var tableBody = document.querySelector('table tbody');
            var subtotal = 0;

            tableBody.innerHTML = '';

            for (var i = 0; i < itemList.length; i++) {
                var item = itemList[i];
                var row = document.createElement('tr');

                var descriptionCell = document.createElement('td');
                descriptionCell.textContent = item.description;
                row.appendChild(descriptionCell);

                var qtyCell = document.createElement('td');
                qtyCell.textContent = item.qty;
                row.appendChild(qtyCell);

                var priceCell = document.createElement('td');
                priceCell.textContent = item.price;
                row.appendChild(priceCell);

                var totalCell = document.createElement('td');
                var total = item.qty * item.price;
                totalCell.textContent = total.toFixed(2);
                row.appendChild(totalCell);

                var deleteButtonCell = document.createElement('td');
                var deleteButton = document.createElement('button');
                deleteButton.classList.add("btn");
                deleteButton.classList.add("btn-danger");
                deleteButton.textContent = 'Delete';
                deleteButton.addEventListener('click', deleteItem.bind(null, i));
                deleteButtonCell.appendChild(deleteButton);
                row.appendChild(deleteButtonCell);

                tableBody.appendChild(row);

                subtotal += total;
            }

            var vat = 0.15 * subtotal;
            var totalIncludingTax = subtotal + vat;

            document.getElementById('subtotal').value = subtotal.toFixed(2);
            document.getElementById('vat').value = vat.toFixed(2);
            document.getElementById('total').value = totalIncludingTax.toFixed(2);
        }

        function deleteItem(index) {
            var itemList = JSON.parse(localStorage.getItem('itemList')) || [];

            // Remove the item from the array
            itemList.splice(index, 1);

            // Store the updated array back into localStorage
            localStorage.setItem('itemList', JSON.stringify(itemList));

            // Repopulate the table and recalculate the totals
            populateTable();
        }

        function saveOrder() {
            // Retrieve values from the fields
            var attention = document.getElementById('attention').value;
            var customer = document.getElementById('customer').value;
            var project = document.getElementById('project').value;
            var questionDescription = document.getElementById('q_description').value;

            console.log("test");

            // Create an object with the values
            var orderData = {
                _token: '{{csrf_token()}}',
                attention: attention,
                customer: customer,
                project: project,
                questionDescription: questionDescription,
                itemList: JSON.parse(localStorage.getItem('itemList')) || []
            };

            // Make the API call with the orderData
            // Replace the URL below with the actual API endpoint for saving orders
            fetch('/quotation/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(orderData)
            })
            .then(response => response.json())
            .then(data => {
                // Store the returned order ID for future use
                localStorage.setItem('orderId', data.orderId);

                // Clear the localStorage and reset the table
                localStorage.removeItem('itemList');
                populateTable();

                // Clear the input fields
                document.getElementById('attention').value = '';
                document.getElementById('customer').value = '';
                document.getElementById('project').value = '';
                document.getElementById('q_description').value = '';

                window.location = "/quotation";
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }

    </script>
    <script>
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
        injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
