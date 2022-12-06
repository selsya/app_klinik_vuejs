<template>
	<div class="row">
		<div class="col-sm-6 mx-auto">
			<div class="card border-info">
				<div class="card-body">
					<form>
						<h1>Login</h1>
						<div class="d-grid col-6 mx-auto">
							<label for="exampleInputEmail1" class="form-label text-start">Email address</label>
							<input type="email" class="form-control" name="Email" placeholder="Email"
								v-model="model.email">
							<div id="emailHelp" class="form-text text-start">We'll never share your email with anyone
								else.</div><br />
						</div>
						<div class="d-grid col-6 mx-auto">
							<label for="exampleInputPassword1" class="form-label text-start">Password</label>
							<input type="password" class="form-control" name="Password" placeholder="Password"
								v-model="model.password">
						</div>
						<RouterLink to="/register" id="emailHelp" class="form-text text-start">Buat Akun Baru</RouterLink><br />
						<br />
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import axios from 'axios'

const head_form = { headers: { 'Content-Type': 'multipart/form-data' } }

export default {
	created() {
		axios.defaults.baseURL = 'http://localhost/appweb/backend/Cuser.php'
	},
	data() {
		return {
			model: {
				email: '',
				password: '',
				rememberMe: false
			}
		};
	},
	methods: {
		// redirectMe() {
		//       this.$router.push('/Profile') 

		// }
		login: function () {
			const arr_post = {
				'email': this.model.email,
				'password': this.model.password
			}
			axios.post("login", arr_post, head_form)
				.then(response => (
					localStorage.setItem("login-email", response['data']['data'][0]['email_address']),
					localStorage.setItem("login-name", response['data']['data'][0]['name']),
					this.$router.push('/Profile')
				))
				.catch(error => alert(error));
		}
	}
};
</script>