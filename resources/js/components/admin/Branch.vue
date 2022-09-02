<template>
	<!-- BEGIN mailbox -->
	<div class="mailbox  ">
		<!-- BEGIN mailbox-sidebar -->
		<div class="mailbox-sidebar ">
			<div class="mailbox-sidebar-header d-flex justify-content-center">
				<b-button v-b-toggle.emailNav data-bs-toggle="collapse" class="btn btn-danger btn-sm me-auto d-block d-lg-none">
					<i class="fa fa-cog"></i>
				</b-button>
				<a class="btn btn-danger ps-40px pe-40px btn-sm">
					Add Branch
				</a>
			</div>
			<b-collapse class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
				<!-- BEGIN scrollbar -->
				<vue-custom-scrollbar class="h-100">
					<div class="nav-title"><b>Branches</b></div>
					<ul class="nav nav-inbox">
						<li>
							<div v-for="(branch, index) in branches" :key="index" id="accordion" class="accordion overflow-hidden" style="padding-right:5px; padding-left:5px">
							  <b-card no-body>
							    <b-card-header header-tag="header" class="card-header text-white bg-danger pointer-cursor d-flex align-items-center"  v-b-toggle="'accordion-' + index">
							      <i class="fa fa-store fa-lg fa-fw  me-2"></i> {{branch.branch_name}}
							    <span class="badge border fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span>
							    </b-card-header>
							    <b-collapse :id="'accordion-'+index" accordion="my-accordion">
							      <b-card-body>
							     	<router-link :to="'/adminstrator/branch/production/'+branch.branch_name" class="btn w-100 btn-sm btn-danger mb-1">
							     		Production
							     	</router-link>
							     	<router-link :to="'/adminstrator/branch/request/'+branch.branch_name" class="btn w-100 btn-sm btn-danger">
							     		Request Ingredients
							     	</router-link>
							      </b-card-body>
							    </b-collapse>
							  </b-card>
							</div>
							
						</li>
					
					</ul>
					
				</vue-custom-scrollbar>
				<!-- END scrollbar -->
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
	mounted(){
		axios.post('/get_all_branch')
		.then(res=>{
			this.branches = res.data.status
		})
	},
	data() {
		AppOptions.appContentFullHeight = true;
		AppOptions.appContentClass = 'p-0';

		return { 
			branches:[]
		}
	},
	beforeRouteLeave (to, from, next) {
		AppOptions.appContentFullHeight = false;
		AppOptions.appContentClass = '';
		next();
	}
}
</script>

