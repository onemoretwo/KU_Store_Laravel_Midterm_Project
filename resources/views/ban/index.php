<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="/css/ban-style.css">
<?php use App\Framework\Utilities\Session;
use App\Models\User;
$auth = Session::read('Auth');
$current_user = (new User())->find_user($auth['username'])[0]
?>

<header>
    <div class="header-area">
      <div class="header-logo">
        <img src="/images/logo2.png" alt="">
        <h3>User Status Management</h3>
      </div>
    </div>
  </header>

  <section class="section1">

  <div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Username">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                    <button type="submit"><i class="fa fa-search fa-2x"></i></button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
</div>

  <!-- <div align="center" class="container">
      <form class="form-horizontal" action="/edit/update" method="post" enctype="multipart/form-data">
      <h3>Search by username :</h3>
      <input type="password" class="form-control" id="email" placeholder="Enter repeat password" name="rpwd">
      <button type="submit"><i class="fas fa-search"></i></button>
      </form>
  </div> -->

  <div class="container table100 ver2 m-b-110" style="margin-top:80px">
<div class="table100-head">
<table>
<thead>
<tr class="row100 head">
<th class="cell100 column1"></th>
<th class="cell100 column2">Image</th>
<th class="cell100 column3">User name</th>
<th class="cell100 column4">point</th>
<th class="cell100 column5">role</th>
<th class="cell100 column6">status</th>
<th class="cell100 column7"></th>
</tr>
</thead>
</table>
</div>
<div class="table100-body js-pscroll">
<table>
<tbody>
    <?php $count = 0;
        foreach ($users as $user) :
        ++$count 
    ?>

        <tr class="row100 body">
            <td class="cell100 column1"><?= $count ?></td>
            <td class="cell100 column2"><img src="<?= $user->image_path ?>" alt=""></td>
            <td class="cell100 column3"><?= $user->username ?></td>
            <td class="cell100 column4"><?= $user->point ?></td>
            <td class="cell100 column5"><?= $user->role ?></td>
            <td class="cell100 column6"><?= $user->status ?></td>
            <td class="cell100 column7">
                <?php if ($user->status == 'active') : ?>
                    <a href="ban/changeStatus/<?= $user->id ?>" class="btn btn-info ban" role="button">Ban</a>
                <?php else : ?>
                    <a href="ban/changeStatus/<?= $user->id ?>" class="btn active" role="button">Active</a>
                <?php endif; ?>
            </td>
        </tr>

    <?php endforeach; ?>
</tbody>
</table>
</div>
</div>

  </section>