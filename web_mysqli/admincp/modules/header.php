<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
	unset($_SESSION['dangnhap']);
	header('Location:login.php');
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <a href="index.php?dangxuat=1" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Đăng xuất</a> -->

<nav id="navigate" class="navbar navbar-expand-md navbar-light  sticky-top">
	<div class="container-fluid ">
		<!-- Nút btn khi renponse -->
		<div class="navbar-branch" style="display: flex;">
			<p class="p1">Xin chào</p>
			<p class="p2">Admin</p>
		</div>

		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav mr-auto">
			</ul>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a id="nav-a" class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true" ></i>Trang Chủ</a>
				</li>
				<li class="nav-item">
					<a id="nav-a" class="nav-link" href="index.php?dangxuat=1"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng xuất</a>
				</li>
			</ul>
		</div>
</nav>