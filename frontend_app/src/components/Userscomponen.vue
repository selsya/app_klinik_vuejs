<template>
	<div class="container">
		<h3>Data Pasien</h3><br />
		<div v-if="message" class="alert alert-success">{{ this.message }}</div>
		<div class="container">
			<table class="table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Nama KK</th>
						<th>Jenis Kelamin</th>
						<th>NIK</th>
						<th>No Bpjs</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>
					<tr v-for="user in users" v-bind:key="user.id">
						<td>{{ user.nama }}</td>
						<td>{{ user.alamat }}</td>
						<td>{{ user.namakk }}</td>
						<td>{{ user.gender }}</td>
						<td>{{ user.nik }}</td>
						<td>{{ user.bpjs }}</td>
						<td>
							<button class="btn btn-warning" v-on:click="updateUser(user.id)">
								Update
							</button>
						</td>
						<td>
							<button class="btn btn-danger" v-on:click="deleteUser(user.id)">
								Delete
							</button>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="row">
				<button class="btn btn-success" v-on:click="addUser()">Add</button>
			</div>
		</div>
	</div>
</template>
<script>
import UserDataService from "../service/UserDataService";

export default {
	name: "UsersComponen",
	data() {
		return {
			users: [],
			message: ""
		};
	},
	methods: {
		refreshUsers() {
			UserDataService.retrieveAllUsers().then(res => {
				this.users = res.data;
			});
		},
		addUser() {
			this.$router.push(`/user/-1`);
		},
		updateUser(id) {
			this.$router.push(`/user/${id}`);
		},
		deleteUser(id) {
			UserDataService.deleteUser(id).then(() => {
				this.refreshUsers();
			});
		}
	},
	created() {
		this.refreshUsers();
	}
};
</script>
