
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ url('index') }}">Shop Keeper</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-auto me-md-3 my-2 my-md-0">
                {{-- <h1 class="text-light text-center">Shop-Keeper Management System</h1> --}}
            </div>
            <!-- Navbar-->
        </nav>

        <div id="layoutSidenav">

            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Add Product</a>
                                    <a class="nav-link" href="{{ route('product.index') }}">View Product</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Add Product</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="col-md-4">
                            @if (session()->has('success'))
                                <p class="bg-success text-white">{{ session()->get('success') }}</p>
                            @endif
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form class="form-control" action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                                <fieldset>
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label mb-2" for="product_name">Product Name</label>
                                        <div class="mb-2">
                                            <input id="product_name" name="product_name" placeholder="Product Name" class="form-control" required="" type="text" value="{{ $product->name }}" required>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label mb-2" for="product_name">Product Description</label>
                                        <div class="mb-2">
                                            <textarea name="description" class="form-control" placeholder="Product Description" required>{{ $product->description }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-2" for="product_name">Product Price</label>
                                        <div class="mb-2">
                                            <input id="" name="product_price" placeholder="Product Price" class="form-control" required="" type="number" value="{{ $product->price }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label mb-2" for="product_stock">Product Stock</label>
                                        <div class="mb-2">
                                            <input id="product_name" name="product_stock" placeholder="Product Stock" class="form-control" required="" type="number" value="{{ $product->stock }}" required>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group mb-2">
                                        <div class="">
                                            <button id="add_product" name="add_product" class="btn btn-primary">Update Product</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets/demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
    </body>
</html>