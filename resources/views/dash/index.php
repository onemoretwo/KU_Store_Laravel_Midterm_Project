<?php $this->layout('layouts/app');?>
<link rel="stylesheet" href="<?=$this->asset('/css/admin.css')?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <br>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="/dash/index">DashBoard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/index">Products</a>
        </li>

    </ul>

    <div class="container">
        <h2>Analytics</h2>
        <br>
        <div class="container" style="align-items: center;">

            <!-- <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6" style="align-items: center;">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">people_alt</i>
                            </div>
                            <p class="card-category">Users</p>
                            <h3 class="card-title">1,234 people

                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">money</i>
                            </div>
                            <p class="card-category">Income</p>
                            <h3 class="card-title">34,567฿</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> Last 24 Hours
                            </div>
                        </div>
                    </div>
                </div>


            </div> -->

            <div class="container" style="margin-top: 20px;">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Daily</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Weekly</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Monthly</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                    <form action="/action_page.php">
                        Choose Date:
                        <input type="date" name="bday">
                        <input type="submit">
                    </form>
                    <h3>Customers List</h3>
            <div class="row" align="center">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Customer checkpoint</h4>
                            <p class="card-category">Collect get & used customer points</p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Get</th>
                                        <th>Used</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($userPoint as $user):?>
                                    
                                <tr>
                                    <td><?= $count ?></td>
                                    <td><?= date("d-m-Y",strtotime($user->create_at)) ?></td>
                                    <td class="usepoint"><?= "-".$user->point ?></td>
                                </tr>
<?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                    <form action="/action_page.php">
                        Choose Date:
                        <input type="date" name="bday">
                        <input type="submit">
                    </form>
                    <h3>Customers List</h3>
            <div class="row" align="center">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Customer checkpoint</h4>
                            <p class="card-category">Collect get & used customer points</p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Get</th>
                                        <th>Used</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Arnon</td>
                                        <td>1,234</td>
                                        <td> 25</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                    
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</p>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                    <form action="/action_page.php">
                        Choose Date:
                        <input type="date" name="bday">
                        <input type="submit">
                    </form>
                    <h3>Customers List</h3>
            <div class="row" align="center">

                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Customer checkpoint</h4>
                            <p class="card-category">Collect get & used customer points</p>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover">
                                <thead class="text-warning">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Get</th>
                                        <th>Used</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Arnon</td>
                                        <td>1,234</td>
                                        <td> 25</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam.</p>
                    </div>
                </div>
            </div>
            

        </div>

</body>
