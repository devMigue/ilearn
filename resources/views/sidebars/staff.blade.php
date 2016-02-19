<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ $picture or "https://placeimg.com/160/160/people" }}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->fullname }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Cari..."/>
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>

		<ul class="sidebar-menu">
			<li class="header">MENU UTAMA</li>
			<li class="active"><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> <span>Beranda</span></a></li>
			<li class="treeview">
				<a href="#"><i class="fa fa-volume-up"></i> <span>Pengumuman</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Pengumuman</a></li>
					<li><a href="#">Tambah Pengumuman</a></li>
				</ul>
			</li>


			<li class="header">MANAJEMEN KELAS</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-book"></i> <span>Mata Pelajaran</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Mapel</a></li>
					<li><a href="#">Tambah Mapel</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-users"></i> <span>Kelas</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Kelas</a></li>
					<li><a href="#">Tambah Kelas</a></li>
				</ul>
			</li>

			<li class="header">MANAJEMEN USER</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>Staff</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Staff</a></li>
					<li><a href="#">Tambah Staff</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>Guru</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Guru</a></li>
					<li><a href="#">Tambah Guru</a></li>
				</ul>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>Siswa</span> <i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a href="#">Lihat Semua Siswa</a></li>
					<li><a href="#">Tambah Siswa</a></li>
				</ul>
			</li>
		</ul>
	</section>
</aside>