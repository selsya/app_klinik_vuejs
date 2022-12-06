import HomeView from '@/views/HomeView.vue'
import LoginPage from '@/views/Pages/LoginPage.vue'
import RegisterPage from '@/views/Pages/RegisterPage.vue'
import { createRouter, createWebHistory } from 'vue-router'


const routes = [
	{
		path: '/',
		name: 'Users',
		component: () => import("../components/Userscomponen.vue")
	},
	{
		path: "/users",
		name: "Users",
		component: () => import("../components/Userscomponen.vue")
	},
	{
		path: "/user/:id",
		name: "User",
		component: () => import("../components/Usercomponen.vue")
	},
	{
		path: "/login",
		name: "login",
		component: LoginPage
	},
	{
		path: "/home",
		name: "home",
		component: HomeView
	},
	{
		path: "/register",
		name: "register",
		component: RegisterPage
	}
]

const router = createRouter({
	history: createWebHistory(process.env.BASE_URL),
	routes
})

export default router
