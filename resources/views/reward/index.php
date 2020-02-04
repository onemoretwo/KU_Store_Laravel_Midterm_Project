<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/reward-style.css') ?>">

<header>
<div class="header-area">
      <div class="header-logo">
        <img src="/images/logo2.png" alt="">
      </div>
    </div>
  </header>

  <div class="border-bot">
        <div class="header-bar bg-header">
            <h1>REWARD</h1>
        </div>
      </div>

      <section class="section-form border-bot">
          <div class="container item-center">
              <h3>Ranking Board</h3>
              <div class="container">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Point</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- top 5 rank point user can only see -->
                      <?php foreach ($users as $user) : ?>

                        <tr>
                          <td><span class="user"><img src="<?= $user->image_path ?>" alt=""></span></td>
                          <td><?= $user->username ?></td>
                          <td><?= $user->point ?></td>
                        </tr>

                      <?php endforeach; ?>
                    </tbody>
                  </table>
              </div>
          </div>
      </section>

      <section class="section-form">
          <div class="row container">
            <div class="col-12 col-lg-4" style="border-right: 2px solid #dddee9">
                <div class="myPoint">
                    <img src="/images/user_img/profiletest.jpg" alt="">
                    <h4 style="display: inline-block">Admin</h4>
                    <p style="font-size: 18px;"><br> You have point : 2,000</p>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                Redeem reward
            </div>
          </div>
      </section>