<?php $this->layout('layouts/app');
  use App\Framework\Utilities\Session; 
  use App\Models\User;
  $auth = Session::read('Auth');
  $image_path = (new User())->find_user($auth['username'])[0]->image_path;
  $point = (new User())->find_user($auth['username'])[0]->point;
?>

  <header>
    <div class="header-area">
      <div class="header-logo">
        <img src="/images/logo2.png" alt="">
        <h3>Cart & Payment</h3>
      </div>
    </div>
  </header>

  <section class="section1-area">
    <div class="container section1-padding">
      <div class="row section1-padding">
        <div class="col-12 col-md-6 locate">

          <h3><Span class="fas fa-shopping-cart" style="margin-right: 10px;color: grey;"></Span>Cart</h3>
          <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover table-striped mb-0">
              <thead>
                <tr>
                  <th>image</th>
                  <th>name</th>
                  <th>Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $total = 0;
                foreach ($carts as $item) :
                $total += $item->price ?>

                    <tr>
                      <td><img class="cart_img" src="<?= $item->image_path ?>" alt=""></td>
                      <td><?= $item->name ?></td>
                      <td><?= $item->price ?></td>
                      <td><a class="btn btn-primary" href="/cart/delete_cart_item/<?= $item->id ?>"><i class="fas fa-trash"></i></a></td>
                    </tr>
                    
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="total">
            <h3>Total Price: <?= $total ?> ฿</h3>
          </div>

        </div>
        <div class="col-12 col-md-6 left-border">
          <div class="info">

            <div class="sec-user">
              <img src="<?= $image_path ?>" alt="">
              <h4 style="display: inline-block"><?= $auth['username'] ?></h4>
              <p style="font-size: 18px;"><br> You have point : <?= $point ?></p>
            </div>
            <div class="sec-pay">

              <form action="/cart/submit_paid/<?= $total ?>" method="post">
                <h3 style="border-bottom:0.7px solid #dddee9;width: 120px;margin-left: -15px;">Payment</h3>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Credit
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Debit
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Alipay
                  </label>
                </div>
                <div class="form-group" style="margin-left: -30px;margin-bottom: 0;">
                  <label for="usr">Address:</label>
                  <input type="text" class="form-control" placeholder="Enter Shipping address">
                </div>
                <div class="form-group" style="margin-left: -30px;">
                  <label for="usr">Coupon:</label>
                  <input type="text" class="form-control" placeholder="Enter coupon's ID">
                </div>
                <button type="submit" class="btn btn-outline-success">Success</button>

              </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>