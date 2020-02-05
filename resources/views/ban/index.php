<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/ban-style.css') ;
use App\Framework\Utilities\Session;
use App\Models\User;
$auth = Session::read('Auth');
$current_user = (new User())->find_user($auth['username'])[0]
?>">

<header>
    <div class="header-area">
      <div class="header-logo">
        <img src="/images/logo2.png" alt="">
        <h3>User Status Management</h3>
      </div>
    </div>
  </header>

  <section class="section1">

  <div class="container table100 ver2 m-b-110">
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