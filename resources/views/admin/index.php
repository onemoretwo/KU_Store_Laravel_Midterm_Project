<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="/css/admin.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/fontawesome-free-5.12.0-web/css/all.min.css">
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
    <h2 style="text-align: center;">Item Management</h2>
    <div class="container" style="margin-top: 20px; color:dimgrey">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Table</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Add Products</a>
            </li>

        </ul>
        <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
                <div class="container">
                    

                        <div class="card" class="col-md-12">

                            <div class="card-body table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-warning">
                                        <tr>
                                            <th style="text-align: center;">Type</th>
                                            <th style="text-align: center;">Products</th>
                                            <th style="text-align: center;">Name</th>
                                            <th style="text-align: center;">Description</th>
                                            <th style="text-align: center;">Price</th>
                                            <th style="text-align: center;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($products as $product) : ?>
                                    <tr>
                                    
                                        <td><?= $product->type?></td>
                                        <td><img style="width:90px;,height:90px;"src="<?= $product->image_path?>" alt=""></td>
                                        <td><?= $product->name?></td>
                                        <td><?= $product->description?></td>
                                        <td><?= $product->price?></td>
                                        <td><a class="btn btn-default btn-sm" href="/admin/delete_items/<?= $product->id ?>" role="button"><i class="fa fa-trash"></i></a>

                                        </td>
                                        
                                    </tr>
                                    
<?php endforeach; ?>


                                     
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <div class="container">

                        <form action="/admin/upload_item" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleSelect1">Type</label>
                                <select class="form-control" id="exampleSelect1" name="type">
                                    <option value="Shirts">Shirts</option>
                                    <option values="Pants">Pants</option>
                                    <option value="Accessories">Accessories</option>
                                    
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"></textarea>
                              </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Price</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            
                            
                                <div class="file-field">
                                  <div class="btn btn-primary btn-sm float-left">
                                    <span>Choose file</span>
                                    <input type="file" name="file">
                                  </div>
                                  <div class="file-path-wrapper">
                                    
                                  </div>
                                </div>
                              
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>

                </div>
            </div>


        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>




