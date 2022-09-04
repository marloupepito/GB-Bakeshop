<template>
	<!-- BEGIN login -->
	<div class="login login-with-news-feed">
		<!-- BEGIN news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/images/background.png)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>GB</b> Bakeshop</h4>
				<p>
					This page is only authorized person can access this site.
				</p>
			</div>
		</div>
		<!-- END news-feed -->
		
		<!-- BEGIN login-container -->
		<div class="login-container">
			<!-- BEGIN login-header -->
			<div class="login-header mb-30px">
				<div class="brand">
					<div class="d-flex align-items-center">
						<span class="logo"></span>
						<b class="text-danger">GB</b> Bakeshop
					</div>
					<small>San Carlos City Negros Occidental</small>
				</div>
				<div class="icon">
					<i class="fa fa-sign-in-alt"></i>
				</div>
			</div>
			<!-- END login-header -->
			<div class="text-danger p-2 text-center align-middle">
<b >{{incorrect}}</b>
				</div>
			<!-- BEGIN login-content -->
			<div class="login-content">
				<form @submit="validate">
						<div class="form-floating mb-20px">
							<input type="text" v-model="username" required class="form-control h-45px fs-13px" placeholder="Username" id="emailAddress" />
							<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Username</label>
						</div>
						<div class="form-floating mb-40px">
							<input type="password" v-model="password"  required class="form-control h-45px fs-13px" placeholder="Password" />
							<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
						</div>
						<br />
						<div class="mb-20px">
							<button type="submit" class="btn btn-red d-block w-100 h-45px btn-lg">Login</button>
						</div>

					
					</form>
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login-container -->
	</div>
	<!-- END login -->
</template>


<script>
import axios from 'axios'
import AppOptions from '../components/assets/config/AppOptions.vue'
export default {
	mounted(){
			
		},
			created() {
		AppOptions.appEmpty = true;
	},
	beforeRouteLeave (to, from, next) {
		AppOptions.appEmpty = false;
		next();
	},
	data() {
		return {
			incorrect:null,
		      valid: true,
		      username:'',
		      password: '',
			bg: {
				activeImg: '/assets/img/login-bg/login-bg-17.jpg',
				bg1: {
					active: true,
					img: '/assets/img/login-bg/login-bg-17.jpg'
				},
				
			}
		}
	},
	methods: {
		 validate (e) {
		 	e.preventDefault()
		 	this.incorrect =''
          axios.post('/user_login',{
                username:this.username,
                password:this.password
            })
            .then(res=>{   
            console.log(res.data.status)     
                if(res.data.status === 'success' && res.data.user.branch_position === 'personnel'){
                    window.location ='/personnel/branch'
                    localStorage.setItem("position", "personnel");
                    localStorage.setItem("branch", res.data.user.branch_name);
                    localStorage.setItem("id", res.data.user.id);
                }else if(res.data.status === 'success' && res.data.user.branch_position === 'admin'){
                   window.location ='/adminstrator/dashboard'
                   localStorage.setItem("position", "admin");
                }else{
                	this.incorrect = res.data.status
                }
            })
            .catch(err=>{
                console.log(err)
            //    this.$refs.form.reset()
            })
      },
		
		
	}
}
</script>

