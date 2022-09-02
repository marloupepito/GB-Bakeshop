<template>
	<div class="menu">
		<div class="menu-profile">
			<a href="javascript:;" class="menu-profile-link" v-on:click="expand()">
				<!-- <div class="menu-profile-cover"></div>
				<div class="menu-profile-image">
					<img src="images/background.jpeg" alt="" />
				</div> -->
				<div class="menu-profile-info">
					<div class="d-flex align-items-center">
						<div class="flex-grow-1">
							<b>GB Bakeshop</b>
						</div>
					</div>
					<small>{{user}}</small>
				</div>
			</a>
		</div>
		
	</div>
</template>

<script>
import AppOptions from '../../config/AppOptions.vue'

export default {
	name: 'SidebarNavProfile',
	data() {
		const p =  localStorage.getItem("position");
		return {
			stat: '',
			appOptions: AppOptions,
			user:p === 'admin'?"Adminstrator":"Personnel"
		}
	},
	methods: {
		expand: function() {
			this.stat = (this.stat == 'expand') ? 'collapse' : 'expand'
		}
  }
}
</script>

<style>

</style>
