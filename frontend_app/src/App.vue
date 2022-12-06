<template>
	<div class="container">
		<header
			class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
			<router-link to="/home"
				class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
				<img src="./assets/klinikbaru.png" class="bi me-2" width="50" height="50" role="img"
					aria-label="Bootstrap">
			</router-link>

			<ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
				<li><router-link to="/home" class="nav-link px-2 link-secondary">Home</router-link></li>
				<li><router-link to="/users" class="nav-link px-2 link-dark">Data Pasien</router-link></li>
				<!--<li><router-link to="" class="nav-link px-2 link-dark">Pricing</router-link></li>-->
			</ul>

			<div class="col-md-3 text-end">
				<router-link type="button" class="btn btn-outline-primary me-2" to="/login">Login</router-link>
				<router-link type="button" class="btn btn-primary" to="/register">Sign-up</router-link>
			</div>
		</header>
	</div>
	<br />
	<router-view />
</template>

<style>
#app {
	font-family: Avenir, Helvetica, Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align: center;
	color: #a8c5e2;
}

nav {
	padding: 30px;
	background-color: #709FB0;
}

nav a {
	font-weight: bold;
	color: #2c3e50;
}

nav a.router-link-exact-active {
	color: #42b983;
}
</style>
