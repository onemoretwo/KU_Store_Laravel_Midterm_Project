<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/admin.css') ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                                        <td><a class="btn btn-default btn-sm" href="/admin/delete_items/<?= $product->id ?>" role="button"><span class="glyphicon glyphicon-trash"></span></a>

                                        </td>
                                        
                                    </tr>
                                    
<?php endforeach; ?>


                                        <!-- <tr>
                                            <td>Shirt</td>
                                            <td>Picture</td>
                                            <td>original</td>
                                            <td> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lacinia ex
                                                at luctus varius. Nulla pulvinar tortor eu mi convallis, eget egestas
                                                dolor fringilla. Pellentesque ut gravida diam. Nunc laoreet elementum
                                                diam id commodo. Pellentesque commodo lacus et consequat mattis.
                                                Vestibulum ac orci porta, placerat orci ut, rutrum lectus. Nunc
                                                imperdiet ultricies tellus, eleifend sagittis diam cursus sit amet.
                                                Fusce ac placerat odio, eu scelerisque nisl. Morbi sagittis vel nisl
                                                gravida tempus. Nunc et dui urna. Donec dapibus, erat sed sodales
                                                mollis, ante dolor ultricies ligula, sed interdum velit purus a elit.
                                                Vivamus augue neque, ultrices eget mi vestibulum, hendrerit ultricies
                                                velit. Sed mollis libero eget ligula pulvinar, at faucibus dolor
                                                egestas.</td>
                                            <td>250 </td>
                                            <td><button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Shirt</td>
                                            <td>Picture</td>
                                            <td>original</td>
                                            <td> ......</td>
                                            <td>250 </td>
                                            <td><button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Shirt</td>
                                            <td>Picture</td>
                                            <td>original</td>
                                            <td> ......</td>
                                            <td>250 </td>
                                            <td><button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button></td>
                                        </tr>
                                        <tr>
                                            <td>Shirt</td>
                                            <td>Picture</td>
                                            <td>original</td>
                                            <td> ......</td>
                                            <td>250 </td>
                                            <td><button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-trash"></span>
                                                </button></td>
                                        </tr> -->
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





