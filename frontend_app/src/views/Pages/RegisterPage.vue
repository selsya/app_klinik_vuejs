<template>
	<div class="row mb-2 text-dark">
		<div class="col-md-6 mx-auto">
			<div class="card border-info">
				<div class="card-body">
					<form>
						<h1>Register</h1>
						<div class="d-grid col-6 mx-auto">
							<label for="exampleInputName" class="form-label text-start">Name</label>
							<input type="Name" class="form-control" name="Name" placeholder="Name" v-model="model.name">
						</div>
						<div class="d-grid col-6 mx-auto">
							<label for="exampleInputEmail1" class="form-label text-start">Email address</label>
							<input type="email" class="form-control" name="Email" placeholder="Email"
								v-model="model.email">
							<div id="emailHelp" class="form-text text-start">We'll never share your email with anyone
								else.</div>
						</div>
						<div class="d-grid col-6 mx-auto">
							<label for="exampleInputPassword1" class="form-label text-start">Password</label>
							<input type="password" class="form-control" name="Password" placeholder="Password"
								v-model="model.password">
						</div>
						<br />
						<button type="submit" class="btn btn-primary">Buat akun</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>
<script>

export default {
	name: 'RegisterPage',
	data() {
		return {
			model: {
				name: '',
				email: '',
				password: '',
				agree: false
			}
		}
	},
	methods: {
		onSubmit() {
			// this will be called only after form is valid. You can do an api call here to register users
		}
	}

};
</script>
<style>

</style>
