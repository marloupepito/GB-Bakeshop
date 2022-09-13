<template>
	<div>
		<!-- BEGIN #header -->
		<div id="header" class="app-header" v-bind:class="{ 'app-header-inverse': appOptions.appHeaderInverse }">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<button type="button" class="navbar-mobile-toggler" v-on:click="toggleSidebarEndMobile" v-if="appOptions.appSidebarTwo">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<router-link to="/adminstrator/dashboard" class="navbar-brand"><span class="navbar-logo"></span> <b class="text-danger">GB&nbsp;</b> Bakeshop</router-link>
				<button type="button" class="navbar-mobile-toggler" v-on:click="toggleTopMenuMobile" v-if="appOptions.appTopMenu && !appOptions.appSidebarNone">
					<span class="fa-stack fa-lg text-inverse">
						<i class="far fa-square fa-stack-2x"></i>
						<i class="fa fa-cog fa-stack-1x"></i>
					</span>
				</button>
				<button type="button" class="navbar-mobile-toggler" v-on:click="toggleTopMenuMobile" v-if="appOptions.appTopMenu && appOptions.appSidebarNone">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-mobile-toggler" v-on:click="toggleHeaderMegaMenuMobile" v-if="appOptions.appHeaderMegaMenu">
					<span class="fa-stack fa-lg text-inverse m-t-2">
						<i class="far fa-square fa-stack-2x"></i>
						<i class="fa fa-cog fa-stack-1x"></i>
					</span>
				</button>
				<button type="button" class="navbar-mobile-toggler" v-on:click="toggleSidebarMobile" v-if="!appOptions.appSidebarNone">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			
		
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				<header-mega-menu v-if="appOptions.appHeaderMegaMenu"></header-mega-menu>
			<!-- 	<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div> -->
		<!-- 		<div class="navbar-item navbar-form">
					<form action="" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div> -->

				<b-nav-item-dropdown v-if="user ==='admin'" class="navbar-item" menu-class="dropdown-menu media-list" right toggle-class="navbar-link dropdown-toggle icon" no-caret>
					<template slot="button-content">
						<i class="fa fa-bell"></i>
						<span class="badge">{{countnotify}}</span>
					</template>
					<div class="dropdown-header bg-danger">NOTIFICATIONS ({{countnotify}})</div>
					
				

					<a  v-for="(i, index) in production" @click="gotoProduction(i.branch_name.replace(/ /g,'-'),i.production_id )"
					 class="dropdown-item media">
						<div class="media-left">
							<i class=" fa fa-plus media-object bg-danger"></i>
						</div>
					<div class="media-body">
							<h6 class="media-heading">{{i.branch_name}}</h6>
							<p>{{i.branch_name}} filled up the production form. Just click to show</p>
							<div class="text-muted fs-10px">35 minutes ago</div>
						</div>
					</a>



					<a v-for="(i, index) in ingredients" @click="gotoIngredients(i.branch_name.replace(/ /g,'-'),i.request_id)"    class="dropdown-item media">
						<div class="media-left">
							<i class="fa fa-envelope media-object bg-danger"></i>
							<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
						</div>
						<div class="media-body">
							<h6 class="media-heading">{{i.branch_name}}</h6>
							<p>{{i.branch_name}} is requesting ingredients. Just click to show</p>
							<div class="text-muted fs-10px">35 minutes ago</div>
						</div>
					</a>


					<div class="dropdown-footer text-center">
						<a href="javascript:;" class="text-decoration-none">View more</a>
					</div>
				</b-nav-item-dropdown>
				
				<b-nav-item-dropdown class="navbar-item" toggle-class="navbar-link dropdown-toggle" no-caret  v-if="appOptions.appHeaderLanguageBar">
					<template slot="button-content">
						<span class="flag-icon flag-icon-us me-1" title="us"></span>
						<span class="name d-none d-sm-inline me-1">EN</span> <b class="caret"></b>
					</template>
					<b-dropdown-item href="javascript:;"><span class="flag-icon flag-icon-us" title="us"></span> English</b-dropdown-item>
					<b-dropdown-item href="javascript:;"><span class="flag-icon flag-icon-cn" title="cn"></span> Chinese</b-dropdown-item>
					<b-dropdown-item href="javascript:;"><span class="flag-icon flag-icon-jp" title="jp"></span> Japanese</b-dropdown-item>
					<b-dropdown-item href="javascript:;"><span class="flag-icon flag-icon-be" title="be"></span> Belgium</b-dropdown-item>
					<b-dropdown-divider class="m-b-0"></b-dropdown-divider>
					<b-dropdown-item href="javascript:;" class="text-center">more options</b-dropdown-item>
				</b-nav-item-dropdown>
				<b-nav-item-dropdown right menu-class="me-1" class="navbar-item navbar-user dropdown" toggle-class="navbar-link dropdown-toggle d-flex align-items-center" no-caret>
					<template slot="button-content">
						<img src="/images/logo.png" alt="" /> 
						<span class="d-none d-md-inline">{{user}}</span> <b class="caret"></b>
					</template>
				
					<div class="dropdown-divider"></div>
					<a href="javascript:;" class="dropdown-item" @click="logout">Log Out</a>
				</b-nav-item-dropdown>
				<div class="navbar-divider d-none d-md-block" v-if="appOptions.appSidebarTwo"></div>
				<div class="navbar-item d-none d-md-block" v-if="appOptions.appSidebarTwo">
					<a href="javascript:;" v-on:click="toggleSidebarEnd" class="navbar-link icon">
						<i class="fa fa-th"></i>
					</a>
				</div>
			</div>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
	</div>
</template>

<script>
import AppOptions from '../../config/AppOptions.vue'
import HeaderMegaMenu from './HeaderMegaMenu.vue'
import axios from 'axios'
export default {
  name: 'Header',
	components: {
		HeaderMegaMenu
	},
	mounted(){
				axios.post('/get_notification')
				.then(res=>{
					console.log('ingredients',res.data.status1)
					console.log('production',res.data.status2)
					this.ingredients =res.data.status1
					this.production =res.data.status2
					this.countnotify = res.data.status1.length + res.data.status2.length
					})
				.catch(err=>{

					})
		},
		created () {
			setInterval(() => {
				axios.post('/get_notification')
				.then(res=>{
					this.ingredients =res.data.status1
					this.production =res.data.status2
					this.countnotify = res.data.status1.length + res.data.status2.length
					})
				.catch(err=>{

					})
			}, 90000)
		},
  data() {
		const p =  localStorage.getItem("position");
		return {
			appOptions: AppOptions,
			user:p === 'admin'?"Adminstrator":"Personnel",
			countnotify:null,
			ingredients:[],
			production:[],
			user:localStorage.getItem("position")
		}
  },
	methods: {
			gotoProduction(branch_name,id){

			window.location ='/adminstrator/branch/'+branch_name+'/'+id+'/production/form'
			},
			gotoIngredients(branch_name,id){
				window.location ='/adminstrator/branch/'+branch_name+'/'+id+'/requested/show' 
			},
		logout(){
			axios.post('/logout')
			.then(res=>{
				 this.$router.push({ path: '/'})
			})
		},
		home(){
			window.location='/'
		},
		toggleSidebarMobile() {
			this.appOptions.appSidebarMobileToggled = !this.appOptions.appSidebarMobileToggled;
		},
		toggleSidebarEnd() {
			this.appOptions.appSidebarEndToggled = !this.appOptions.appSidebarEndToggled;
		},
		toggleSidebarEndMobile() {
			this.appOptions.appSidebarEndMobileToggled = !this.appOptions.appSidebarEndMobileToggled;
		},
		toggleTopMenuMobile() {
			this.appOptions.appTopMenuMobileToggled = !this.appOptions.appTopMenuMobileToggled;
		},
		toggleHeaderMegaMenuMobile() {
			this.appOptions.appHeaderMegaMenuMobileToggled = !this.appOptions.appHeaderMegaMenuMobileToggled;
		},
		checkForm: function(e) {
			e.preventDefault();
			this.$router.push({ path: '/extra/search' })
		}
	}
}
</script>
