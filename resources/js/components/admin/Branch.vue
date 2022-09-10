<template>
	<!-- BEGIN mailbox -->
	<div class="mailbox  ">
		<!-- BEGIN mailbox-sidebar -->
		<div class="mailbox-sidebar ">
			<div class="mailbox-sidebar-header d-flex justify-content-center">
				<b-button v-b-toggle.emailNav data-bs-toggle="collapse" class="btn btn-outline-danger btn-sm me-auto d-block d-lg-none">
					<i class="fa fa-cog"></i>
				</b-button>
				<a class="btn btn-outline-danger ps-40px pe-40px btn-sm">
					{{branch}}
				</a>
			</div>
			<b-collapse class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
				<!-- BEGIN scrollbar -->
				<vue-custom-scrollbar class="h-100">
                              <div class="nav-title"><b>FOLDERS</b></div>
                              <ul class="nav nav-inbox">
                                    <li @click="Irequested(branch)" :class="nav==='requested'?'active':''" >
                                    	<a>
                                    		<i class="fa fa-pen-to-square fa-lg fa-fw me-2"></i> Requested
                                    		<span class="badge bg-gray-600 fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span>
                                    	</a>
                                    </li>

                                    <li  @click="BreadProduction(branch)" :class="nav==='production'?'active':''" >
                                    		<a>
                                    		<i class="fa fa-chalkboard-user fa-lg fa-fw me-2"></i> Production
                                    	</a>
                                    </li>

                                    <li  @click="Icancelled(branch)" :class="nav==='cancelled'?'active':''" >
                                    		<a>
                                    		<i class="fa fa-rectangle-xmark fa-lg fa-fw me-2"></i> Cancellation
                                    	</a>
                                    </li>

                                     <li @click="Thistory(branch)" :class="nav==='history'?'active':''" >
                                    		<a>
                                    		<i class="fa fa-clock-rotate-left fa-lg fa-fw me-2"></i>History
                                    	</a>
                                    </li>
                                 
                                   
                              </ul>
                             
                        </vue-custom-scrollbar>
				<!-- END scrollbar  share-from-square share-from-square -->
			</b-collapse>
		</div>
		<!-- END mailbox-sidebar -->
		<!-- BEGIN mailbox-content -->
		<div class="mailbox-content">
			<div class="mailbox-content-header">
				<!-- BEGIN btn-toolbar -->
				<div class="btn-toolbar align-items-center">
					<div class="form-check me-2">
						<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailSelectAll" data-change="email-select-all" />
						<label class="form-check-label" for="emailSelectAll"></label>
					</div>
					<div class="dropdown me-2">
						<b-dropdown toggle-class="btn btn-white btn-sm">
							<template #button-content>
							View All <span class="caret ms-3px"></span>
							</template>
							
						</b-dropdown>
					</div>
					
					<button class="btn btn-sm btn-white me-2"><i class="fa fa-redo"></i></button>
					<div class="w-100 d-sm-none d-block mb-2 hide" data-email-action="divider"></div>
					<!-- BEGIN btn-group -->
					<div class="btn-group">
						<button class="btn btn-sm btn-white hide" data-email-action="delete"><i class="fa fa-times me-1"></i> <span class="hidden-xs">Delete</span></button>
						<button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-folder me-1"></i> <span class="hidden-xs">Archive</span></button>
						<button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-trash me-1"></i> <span class="hidden-xs">Junk</span></button>
					</div>
					<!-- END btn-group -->
					<!-- BEGIN btn-group -->
					<div class="btn-group ms-auto">
						<input type="text" name="" placeholder="search" class="form-control form-control-sm" >
					</div>
					<!-- END btn-group -->
				</div>
				<!-- END btn-toolbar -->
			</div>
			<div class="mailbox-content-body">
				<vue-custom-scrollbar class="h-100 bg-white">
					<router-view></router-view>
				</vue-custom-scrollbar>
			</div>
			
		</div>
		<!-- END mailbox-content -->
	</div>
	<!-- END mailbox -->
</template>

<script>
import AppOptions from '../assets/config/AppOptions.vue'
import axios from 'axios'
export default {
//	mounted(){
//			axios.post('/get_all_branch')
//			.then(res=>{
//				this.branches = res.data.status
//			})
//		},
	data() {
		AppOptions.appContentFullHeight = true;
		AppOptions.appContentClass = 'p-0';

		return { 
			branch:'',
			timerCount: 1,
			navbar:'btn w-100 btn-sm btn-outline-danger mb-1',
			navbar2:'btn w-100 btn-sm btn-danger mb-1',
			nav:''
		}
	},
	watch: {

            timerCount: {
                handler(value) {
				const path_branch = window.location.pathname.split('/')[3].replace(/-/g,' ');
				
                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
                        }, 1000);
					this.branch = path_branch

                    }

                },
                immediate: true // This ensures the watcher is triggered upon creation
            }

        },
	beforeRouteLeave (to, from, next) {
		AppOptions.appContentFullHeight = false;
		AppOptions.appContentClass = '';
		next();
	},
	mounted(){
		axios.post('/get_branch_id',{
			branch:this.branch
			})
		.then(res=>{
			localStorage.setItem("click_branch_id", res.data.status.id)
			this.nav =window.location.pathname.split('/')[4].replace(/-/g,' ')
			})
		.catch(err=>{

			})
		},
	methods:{
		Irequested(e){
			this.$router.push({ path:'/adminstrator/branch/'+e.replace(/ /g,"-")+'/requested' })
			.catch(res=>{})
			this.nav = 'requested'
		},
		Icancelled(e){
			this.$router.push({ path:'/adminstrator/branch/'+e.replace(/ /g,"-")+'/cancelled' })
			.catch(res=>{})
			this.nav = 'cancelled'
		},
		Thistory(e){
			this.$router.push({ path:'/adminstrator/branch/'+e.replace(/ /g,"-")+'/history' })
			.catch(res=>{})
			this.nav = 'history'
		},
		BreadProduction(e){
			this.$router.push({ path:'/adminstrator/branch/'+e.replace(/ /g,"-")+'/production' })
			.catch(res=>{})
			this.nav = 'production'
		},
		
	}
}
</script>

