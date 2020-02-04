<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/edit-style.css') ?>">


    <header>
    <div class="header-area">
      <div class="header-logo">
        <img src="/images/logo2.png" alt="">
        <h3>Profile & Edit</h3>
      </div>
    </div>
    </header>

    <section class="section1">
        <div class="container divide-2">
          <div class="profile">
            <h2>My Profile</h2>
            <span><img src="/images/user_img/profiletest.jpg" alt=""></span>
            <span>admin</span>
            <!-- upload picture form -->
            <form action="/edit/upload_pic" method="post">
              <input type="file" name="file">
              <input type="submit" name="submit">
            </form>
            <!-- ------------------------------ -->
            <div class="profile-info">
              <p>Email : admin@ku.th</p>
              <p>Point : 10000</p>
              <p>Status : user</p>
            </div>
          </div>

          <div class="edit">
            <div>
              <h2>Weekly point got</h2>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover table-striped mb-0">
              <thead>
                <tr>
                  <th></th>
                  <th>date</th>
                  <th>point</th>
                </tr>
              </thead>
              <tbody>
                <!-- point log (got) for user -->
                <?php $count = 0;
                foreach ($usersget as $user) : 
                ++$count?>
                  <tr>
                    <td><?= $count ?></td>
                    <td><?= date("d-m-Y",strtotime($user->create_at)) ?></td>
                    <td class="getpoint"><?= "+".$user->point ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          </div>
          <!----------------------------------------->
          <div>
              <h2>Weekly point used</h2>
            <div class="table-wrapper-scroll-y my-custom-scrollbar">
            <table class="table table-hover table-striped mb-0">
              <thead>
              <tr>
                  <th></th>
                  <th>date</th>
                  <th>point</th>
                </tr>
              </thead>
              <tbody>
                <!-- point log (used) for user -->
                <?php $count = 0;
                foreach ($usersuse as $user) : 
                ++$count?>
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
          <!-- -------------------------------- -->
          <div>
          </div>
            </div>
        </div>
    </section>
    <section class="section2">
      <div class="container">
        <form action="edit/update" method="post">
          
          <div>
            <label for="email">Email edit</label>
            <input type="hidden" name="default_email" value="arnon@ku.th">
            <input type="text" name="email">
          </div>

          <div>
            <label for="pass">password edit</label>
            <input type="text" name="pass">
          </div>

          <button type="submit">Edit</button>
        </form>
      </div>
    </section>