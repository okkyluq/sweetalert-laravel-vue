import VueRouter from 'vue-router'



let routes = [
	
	{
		path:'/',
		component:require('./components/index')

	},
	
]


export default new VueRouter({
	routes,
	mode:'history'
})