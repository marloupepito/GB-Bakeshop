<template>
	<!-- BEGIN mailbox -->
	<div class="mailbox bg-white ">
		<!-- BEGIN mailbox-sidebar -->
		<div class="mailbox-sidebar ">
			<div class="mailbox-sidebar-header d-flex justify-content-center">
				<b-button v-b-toggle.emailNav data-bs-toggle="collapse" class="btn btn-danger btn-sm me-auto d-block d-lg-none">
					<i class="fa fa-cog"></i>
				</b-button>
				<router-link to="/email/compose" class="btn btn-danger ps-40px pe-40px btn-sm">
					Add Branch
				</router-link>
			</div>
			<b-collapse class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
				<!-- BEGIN scrollbar -->
				<vue-custom-scrollbar class="h-100">
					<div class="nav-title"><b>Branches</b></div>
					<ul class="nav nav-inbox">
						<li>
							<div id="accordion" class="accordion overflow-hidden">
							  <b-card class="bg-red text-white border-0 rounded-0" no-body>
							    <b-card-header header-tag="header" class="card-header bg-danger  pointer-cursor px-3 py-10px d-flex align-items-center" v-b-toggle.accordion1>
							      <i class="fa fa-store fa-lg fa-fw text-white me-2"></i> Ylagan Branch
							    <span class="badge bg-danger fs-10px rounded-pill ms-auto fw-bolder pt-4px pb-5px px-8px">52</span>
							    </b-card-header>
							    <b-collapse id="accordion1" accordion="my-accordion">
							      <b-card-body class="bg-white p-1">
							     	<router-link to="/adminstrator/branch/production/ylagan" class="btn w-100 btn-sm btn-danger mb-1">
							     		Production
							     	</router-link>
							     	<router-link to="/adminstrator/branch/request/ylagan" class="btn w-100 btn-sm btn-danger">
							     		Request Ingredients
							     	</router-link>
							      </b-card-body>
							    </b-collapse>
							  </b-card>
							</div>
							<hr class="m-0"/>
							<div id="accordion" class="accordion overflow-hidden">
							  <b-card class="bg-red text-white border-0 rounded-0" no-body>
							    <b-card-header header-tag="header" class="card-header bg-red text-white pointer-cursor px-3 py-10px d-flex align-items-center" v-b-toggle.accordion2>
							      <i class="fa fa-store fa-lg fa-fw text-white me-2"></i> Endrina Branch
							    </b-card-header>
							    <b-collapse id="accordion2" accordion="my-accordion">
							      <b-card-body>
							     
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
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2"></i> All</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-muted"></i> Unread</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-blue"></i> Contacts</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-success"></i> Groups</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-warning"></i> Newsletters</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-white"></i> Social updates</b-dropdown-item>
							<b-dropdown-item href="javascript:;"><i class="fa fa-circle fs-9px fa-fw me-2 text-indigo"></i> Everything else</b-dropdown-item>
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
						<input type="text" name="" >
					</div>
					<!-- END btn-group -->
				</div>
				<!-- END btn-toolbar -->
			</div>
			<div class="mailbox-content-body">
				<vue-custom-scrollbar class="h-100">
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

export default {
	data() {
		AppOptions.appContentFullHeight = true;
		AppOptions.appContentClass = 'p-0';

		return { }
	},
	beforeRouteLeave (to, from, next) {
		AppOptions.appContentFullHeight = false;
		AppOptions.appContentClass = '';
		next();
	}
}
</script>

