<template>
	<h1 class="visually-hidden">Home Screeen</h1>

	<div class="px-4 py-5 my-5 text-center text-secondary">
		<img class="d-block mx-auto mb-4" src="../assets/klinikbaru.png" alt="" width="70" height="70">
		<h1 class="display-5 fw-bold">GSP KLINIK</h1>
		<div class="col-lg-6 mx-auto">
			<p class="lead mb-4">Berdiri sejak zaman penjajahan sebelum kemerdekaan sekitar tahun 1928.
				Namun tetap berdiri kokoh walaupaun banyak yang sudah diperbarui, jika kalin datang ke klinik akan
				terasa seperti wisata masalalu.
			</p>

		</div>
	</div>

	<div class="b-example-divider"></div>

	<div class="px-4 pt-5 my-5 text-center border-bottom text-secondary">
		<h1 class="display-4 fw-bold">Capture</h1>
		<div class="col-lg-6 mx-auto">
			<p class="lead mb-4">Tempat menyelesaikan permasalahan dan penyakit.
				mulai dari penyakit cinta, hingga penyakit hati.
			</p>
			<div class="row row-cols-1 row-cols-md-3 g-4">
				<div class="col">
					<div class="card h-100">
						<img src="../assets/1.svg" class="card-img-top" alt="...">
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../assets/2.svg" class="card-img-top" alt="...">
					</div>
				</div>
				<div class="col">
					<div class="card h-100">
						<img src="../assets/3.svg" class="card-img-top" alt="...">
					</div>
				</div>
			</div>
		</div>
		<div class="overflow-hidden" style="max-height: 30vh;">
			<div class="container px-5">

			</div>
		</div>
	</div>

	<div class="b-example-divider"></div>

	<div class="container col-xl-8 px-4 py-5 text-secondary">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-6 col-sm-8 col-lg-6">
				<img src="../assets/5.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
					height="500" loading="lazy">
			</div>
			<div class="col-lg-6">
				<h1 class="display-5 fw-bold lh-1 mb-3">Pesan</h1>
				<p class="lead">Tetap pastikan kondisi tubuh baik, demi kebaikan bersama.</p>
			</div>
		</div>
	</div>

	<div class="b-example-divider"></div>

	<div class="container my-5 text-secondary">
		<div class="row p-4  align-items-center rounded-3 border shadow-lg">
			<div class="col">
				<img class="rounded-lg-3" src="../assets/6.png" alt="" width="250">
			</div>
			<div class="col">
				<h4 class="display-4 fw-bold lh-1">TIM</h4>
				<p class="lead">Dr. dr. Akbar Ghofur, Sp.B. <br />dan<br />Dr. Ruth Sheliana, Sp.GK.</p>
			</div>
			<div class="col">
				<img class="rounded-lg-3" src="../assets/7.png" alt="" width="250">
			</div>
		</div>
	</div>

	<div class="b-example-divider"></div>

	<div class="bg-dark text-secondary px-4 py-5 text-center">
		<div class="py-5">
			<h1 class="display-5 fw-bold text-white">Follow Me</h1><br />
			<div class="col-lg-6 mx-auto">
				<p class="fs-5 mb-4"><i class="fa-brands fa-instagram fa-lg"></i>&emsp;<i
						class="fa-brands fa-facebook fa-lg"></i>&emsp;<i class="fa-brands fa-youtube fa-lg"></i>&emsp;<i
						class="fa-solid fa-envelope fa-lg"></i></p>
				<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
					<button type="button" class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold"><i
							class="fa-solid fa-thumbs-up"></i></button>
					<button type="button" class="btn btn-outline-light btn-lg px-4"><i
							class="fa-solid fa-face-smile-wink"></i></button>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
// @ is an alias to /src

export default {
	name: 'HomeView',
	components: {

	}
}
</script>

<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}

.b-example-divider {
	height: 3rem;
	background-color: rgba(0, 0, 0, .1);
	border: solid rgba(0, 0, 0, .15);
	border-width: 1px 0;
	box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.b-example-vr {
	flex-shrink: 0;
	width: 1.5rem;
	height: 100vh;
}

.bi {
	vertical-align: -.125em;
	fill: currentColor;
}

.nav-scroller {
	position: relative;
	z-index: 2;
	height: 2.75rem;
	overflow-y: hidden;
}

.nav-scroller .nav {
	display: flex;
	flex-wrap: nowrap;
	padding-bottom: 1rem;
	margin-top: -1px;
	overflow-x: auto;
	text-align: center;
	white-space: nowrap;
	-webkit-overflow-scrolling: touch;
}
</style>