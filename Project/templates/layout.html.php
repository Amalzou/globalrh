<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>recompense</title>

<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="/assets/fonts/line-icons.css">

<link rel="stylesheet" href="/assets/plugins/morris/morris.css">

<link rel="stylesheet" type="text/css" href="/assets/css/main.css">

<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
<link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>
<body background="/assets/img/R1.jpg">
<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>
<?php if ($loggedIn): ?>
<div class="app header-default side-nav-dark">
<div class="layout">

<div class="header navbar">
<div class="header-container">
<div class="nav-logo">
<b><img src="/assets/img/Capture.PNG" alt=""></b>
</div>
<ul class="nav-left">
<li>
<a class="sidenav-fold-toggler" href="javascript:void(0);">
<i class="lni-menu"></i>
</a>
<a class="sidenav-expand-toggler" href="javascript:void(0);">
<i class="lni-menu"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="search-box">
<input class="form-control" type="text" placeholder="Type to search...">
<i class="lni-search"></i>
</li>
<li class="massages dropdown dropdown-animated scale-left">
<span class="counter"></span>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-envelope"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<div class="dropdown-item align-self-center">
<h5><span class="badge badge-primary float-right">  </span>Messages</h5>
</div>
</li>

<li class="check-all text-center">

</li>
</ul>
</li>
<li class="notifications dropdown dropdown-animated scale-left">

<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="lni-alarm"></i>
</a>
<ul class="dropdown-menu dropdown-lg">
<li>
<h5 class="n-title text-center">
<i class="lni-alarm"></i>
<span>Notifications</span>
</h5>
</li>
<li>
<ul class="list-media">
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-primary">
<i class="lni-envelope"></i>
</div>
</div>
<div class="info">
<span class="title">
 messages
</span>
</div>
</a>
</li>
<li class="list-item">
<a href="#" class="media-hover">
<div class="media-img">
<div class="icon-avatar bg-success">
<i class="lni-comments-alt"></i>
</div>
</div>
<div class="info">
<span class="title">
commenter
</span>
</div>
</a>
</li>


</ul>
</li>
<li class="check-all text-center">
<span>
<a href="#" class="text-gray">Check all notifications</a>
</span>
 </li>
</ul>
</li>
<li class="user-profile dropdown dropdown-animated scale-left">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img class="profile-img img-fluid" src="/assets/img/avatar/avatar.jpg" alt="">
</a>
<ul class="dropdown-menu dropdown-md">
<li>
<ul class="list-media">
<li class="list-item avatar-info">
<div class="media-img">
<img src="/assets/img/avatar/avatar.jpg" alt="">
</div>
<div class="info">
<span class="title text-semibold"><?=$user->nom ?> <?=$user->nom ?></span>
<span class="sub-title">UI/UX Desinger</span>
</div>
</li>
</ul>
</li>
<li role="separator" class="divider"></li>
<li>
<a href="#">
<i class="lni-cog"></i>
<span>Setting</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-user"></i>
<span>Profile</span>
</a>
</li>
<li>
<a href="#">
<i class="lni-envelope"></i>
<span>Inbox</span>
<span class="badge badge-pill badge-primary pull-right">2</span>
</a>
</li>
<li>
<a href="/logout">
<i class="lni-lock"></i>
<span>Logout</span>
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>





<div class="side-nav expand-lg">
<div class="side-nav-inner">
<ul class="side-nav-menu">
<?php if($user->permissions==63): // Admin?>
<li class="nav-item">
<a href="/utilisateur/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G. Utilisateurs</span>
</a>
</li>

<li class="nav-item">
<a href="/groupe/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G. Groupes</span>
</a>
</li>

<li class="nav-item">
<a href="/temps_travail/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G. Emplois de temps</span>
</a></li>
<li class="nav-item">
<a href="/assiduite/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G. assiduite</span>
</a></li>

 <?php endif;?>
	<?php if($user->permissions==32): // sup?>
<li class="nav-item">
<a href="/utilisateur/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G.note</span>
</a>
</li>


<li class="nav-item">
<a href="/tache/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">G.tache</span>
</a>
</li>
<li class="nav-item">
<a href="/demande/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">liste demande</span>
</a>
</li>


<?php endif;?>
	<?php if($user->permissions==16): // Employee?>
<li class="nav-item">
<a href="/tache/list" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">valider tache</span>
</a>
</li>
<li class="nav-item">
<a href="/note/list?iduser=<?=$user->id?>" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">note</span>
</a>
</li>
<li class="nav-item">
<a href="/recompenses/list?id_emp=<?=$user->id?>" class="">
<span class="icon-holder">
<i class="lni-dashboard"></i>
</span>
<span class="title">recompenses</span>
</a>
</li>


<?php endif;?>
</ul>
</div>
</div>

<?=$output?>

</div>
</div>
<?php else: ?>
<div class="wrapper-page">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-5 col-md-12 col-xs-12">
<div class="card">
<div class="card-header border-bottom text-center">
<h4 class="card-title">Sign In</h4>
</div>
<div class="card-body">
<form class="form-horizontal m-t-20" method='post' action='/login'>
<div class="form-group">
<input class="form-control" type="text" required="" placeholder="Username"  name='login'>
</div>
<div class="form-group">
<input class="form-control" type="password" required="" placeholder="Password" name='password'>
</div>
<div class="form-group">
<div class="custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="customCheck1">
<label class="custom-control-label" for="customCheck1">Remember me</label>
</div>
</div>
<div class="form-group text-center m-t-20">
<button class="btn btn-common btn-block" type="submit">Log In</button>
</div>
<?php if ($title=='Error log in'):?>
							<center><label class="text-bold text-red" style="font-size:90%;">invalid login et password</label></center><?php endif; ?>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<?php endif; ?>
<script src="/assets/js/jquery-min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/jquery.app.js"></script>
<script src="/assets/js/main.js"></script>

<script src="/assets/plugins/morris/morris.min.js"></script>
<script src="/assets/plugins/raphael/raphael-min.js"></script>
<script src="/assets/js/dashborad1.js"></script>
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

<script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables/jszip.min.js"></script>
<script src="/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables/buttons.colVis.min.js"></script>

<script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

<script src="/assets/js/datatables.init.js"></script>
</body>

</html>