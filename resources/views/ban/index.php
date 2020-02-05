<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/ban-style.css') ?>">

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
<th class="cell100 column6"></th>
</tr>
</thead>
</table>
</div>
<div class="table100-body js-pscroll">
<table>
<tbody>
<tr class="row100 body">
<td class="cell100 column1">1</td>
<td class="cell100 column2">Boxing</td>
<td class="cell100 column3">arnon</td>
<td class="cell100 column4">11000</td>
<td class="cell100 column5">user</td>
<td class="cell100 column6">10</td>
</tr>
</tbody>
</table>
</div>
</div>

  </section>