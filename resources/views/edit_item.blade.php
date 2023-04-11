<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Welcome, admin</a>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="all_products.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                Expenses
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <form action="{{ route('updateItem') }}" method="POST">
                @csrf

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    <div class="body" style="margin-top: 20px">
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Item Name <span class="text-danger">*</span></label>
                            <div class="col-lg-12">
                                <input type="text" class="form-control" placeholder="item name" name="item"
                                    value="{{ $item->name }}">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Amount <span class="text-danger">*</span></label>
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="800.00" name="amount"
                                    value="{{ $item->amount }}">
                            </div>
                            <div class="col-lg-6">
                                <select name="currency_symbol" class="form-control">




                                    @if ($item->category == '$ - US')
                                        <option value="$ - US">$ - US Dollar</option>
                                    @else
                                        <option value="$ - US">$ - US Dollar</option>
                                    @endif
                                    @if ($item->category == '£ - GBP')
                                        <option value="£ - GBP">£ - British Pound</option>
                                    @else
                                        <option value="£ - GBP">£ - British Pound</option>
                                    @endif
                                    @if ($item->category == '$ - CAD')
                                        <option value="$ - CAD">$ - Canadian Dollar</option>
                                    @else
                                        <option value="$ - CAD">$ - Canadian Dollar</option>
                                    @endif

                                </select>
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Expense Date <span
                                    class="text-danger">*</span></label>
                            <div class="col-lg-12">
                                <input class="datepicker-input form-control" type="text"
                                    value="{{ $item->expense_date }}" name="expense_date"
                                    data-date-format="dd-mm-yyyy">
                            </div>
                        </div>
                        <div class="form-group form-row">
                            <label class="col-lg-12 control-label">Category <span class="text-danger">*</span></label>
                            <div class="col-lg-12">
                                <select name="category" class="form-control m-b" id="main_category">
                                    <option value="" disabled="">Choose Category</option>
                                    @if ($item->category == '4')
                                        <option value="4" selected>Hardware</option>
                                    @else
                                        <option value="4">Hardware</option>
                                    @endif
                                    @if ($item->category == '5')
                                        <option value="5" selected>Material</option>
                                    @else
                                        <option value="5">Material</option>
                                    @endif
                                    @if ($item->category == '6')
                                        <option value="6" selected>Vehicle</option>
                                    @else
                                        <option value="6">Vehicle</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </main>

            </form>
        </div>
    </div>

    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/jquery-3.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/bootstrap.js"
        integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous">
    </script>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/feather.js"></script>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/Chart.js"></script>
    <script src="Dashboard%20Template%20%C2%B7%20Bootstrap_files/dashboard.js"></script>

</body>

</html>