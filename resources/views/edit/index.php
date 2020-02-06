<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/edit-style.css') ?>">
<?php use App\Framework\Utilities\Session; 
  use App\Models\User;
  $auth = Session::read('Auth');
  $cemail = (new User())->find_user($auth['username'])[0]->email;
  $point = (new User())->find_user($auth['username'])[0]->point;
  $role = (new User())->find_user($auth['username'])[0]->role;
  $image_path = (new User())->find_user($auth['username'])[0]->image_path;
?>


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
            <span><img src="<?= $image_path ?>" alt=""></span>
            <span><?= $auth['username']; ?></span>
            <div class="profile-info">
              <p>email : <?= $cemail ?></p>
              <p>point : <?= $point ?></p>
              <p>Status : <?= $role ?></p>
            </div>
          </div>

          <div class="edit">
            <div>
              <h2>All point got</h2>
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
              <h2>All point used</h2>
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
                    <td><?= $user_id ?></td>
                    <td class="point"><?= $user->point ?></td>
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
      <div class="container con">
        <h2>Edit Profile</h2>

    <form class="form-horizontal" action="/edit/update" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Change profile picture:</label>
        <div class="col-sm-10">
          <input type="file" name="file">
        </div>
      </div>
  
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="Enter new email" name="email">
          <input type="hidden" class="form-control" id="email" name="cemail"value="<?= $cemail ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Current Password:</label>
        <div class="col-sm-10">          
          <input type="password" class="form-control" id="pwd" placeholder="Enter current password" name="cpwd">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">New Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="email" placeholder="Enter new password" name="npwd">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Repeat Password:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="email" placeholder="Enter repeat password" name="rpwd">
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
      </div>
    </section>