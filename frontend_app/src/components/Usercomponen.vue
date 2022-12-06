<template>
	<div class="row">
		<div class="col-6 mx-auto">
			<div class="card border-info">
				<div class="card-body">
					<h3>User</h3>
					<form @submit="validateAndSubmit">
						<div v-if="errors.length">
							<div class="alert alert-danger" v-bind:key="index" v-for="(error, index) in errors">
								{{ error }}
							</div>
						</div>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">Nama</label>
							<input type="text" class="form-control" v-model="nama" />
						</fieldset>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">Alamat</label>
							<input type="text" class="form-control" v-model="alamat" />
						</fieldset>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">Nama KK</label>
							<input type="text" class="form-control" v-model="namakk" />
						</fieldset>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">Jenis Kelamin</label>
							<input type="text" class="form-control" v-model="gender" />
						</fieldset>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">NIK</label>
							<input type="text" class="form-control" v-model="nik" />
						</fieldset>
						<fieldset class="d-grid col-8 mx-auto">
							<label class="text-start">No BPJS</label>
							<input type="text" class="form-control" v-model="bpjs" />
						</fieldset>
						<br />
						<button class="btn btn-success" type="submit">Save</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
import UserDataService from '../service/UserDataService'

export default {
	name: 'UserComponen',
	data() {
		return {
			nama: '',
			alamat: '',
			namakk: '',
			gender: '',
			nik: '',
			bpjs: '',
			errors: []
		}
	},
	computed: {
		id() {
			return this.$route.params.id
		}
	},
	methods: {
		refreshUserDetails() {
			if (this.id !== -1) {
				UserDataService.retrieveUser(this.id).then(res => {
					this.nama = res.data.nama
					this.alamat = res.data.alamat
					this.namakk = res.data.namakk
					this.gender = res.data.gender
					this.nik = res.data.nik
					this.bpjs = res.data.bpjs
				})
			}
		},
		validateAndSubmit(e) {
			e.preventDefault()
			this.errors = []
			if (!this.nama) {
				this.errors.push('Enter valid values')
			} else if (this.nama.length < 1) {
				this.errors.push('Masukkan nama lengkap mu')
			}
			if (!this.alamat) {
				this.errors.push('Enter valid values')
			} else if (this.alamat.length < 1) {
				this.errors.push('Isi alamat yang benar')
			}
			if (this.errors.length === 0) {
				if (this.id == -1) {
					UserDataService.createUser({
						nama: this.nama,
						alamat: this.alamat,
						namakk: this.namakk,
						gender: this.gender,
						nik: this.nik,
						bpjs: this.bpjs
					}).then(() => {
						this.$router.push('/users')
					})
				} else {
					UserDataService.updateUser({
						id: this.id,
						nama: this.nama,
						alamat: this.alamat,
						namakk: this.namakk,
						gender: this.gender,
						nik: this.nik,
						bpjs: this.bpjs
					}).then(() => {
						this.$router.push('/users')
					})
				}
			} else {
				alert('data tidak boleh kosong')
			}
		}
	},
	created() {
		this.refreshUserDetails()
	}
}
</script>
