<template>
<!-- BEGIN list-email -->
					<ul class="list-group list-group-lg no-radius list-email">
						<li  v-for="(data, index) in requestData" :key="index" class="list-group-item unread">
							<div class="email-checkbox">
								<div class="form-check">
									<input type="checkbox" class="form-check-input" data-checked="email-checkbox" id="emailCheckbox1">
									<label class="form-check-label" for="emailCheckbox1"></label>
								</div>
							</div>
							<router-link :to="'/adminstrator/branch/'+branch+'/'+data.request_id+'/requested/show'" class="email-user bg-danger">
								<span class="text-white">B</span>
							</router-link>
							<div class="email-info">
								<router-link :to="'/adminstrator/branch/'+branch+'/'+data.request_id+'/requested/show'">
									<span class="email-sender">{{data.request_id}}</span>
									<span :class="data.ingredients_status === 'Pending'?'email-title badge bg-danger fs-10px rounded-pill ms-auto fw-bolder':data.ingredients_status === 'Approved'? 'email-title badge bg-warning fs-10px rounded-pill ms-auto fw-bolder':'email-title badge bg-teal fs-10px rounded-pill ms-auto fw-bolder'">{{data.ingredients_status === 'Received'?'Transaction Complete':data.ingredients_status}}</span>
									<span class="email-desc">Sed scelerisque dui lacus, quis pellentesque lorem tincidunt rhoncus. Nulla accumsan elit pharetra, lacinia turpis nec, varius erat.</span>
									<span class="email-time">Today</span>
								</router-link>
							</div>
						</li>
						
					</ul>
</template>

<script>

import moment from 'moment'
import axios from 'axios'
export default {

    data: function () {
	    return {
	    	requestData:[],
	    	branch:''
	    }
  },

  mounted(){
  	axios.post('/get_request_from_branch',{
  		id:localStorage.getItem("admin_branch_id").replace(/-/g,' '),
  	})
  	.then(res=>{
  		this.requestData =res.data.status
  		this.branch = localStorage.getItem("admin_branch_id")
  		console.log(localStorage.getItem("admin_branch_id").replace(/-/g,' '))
  
  	})
  	.catch(err=>{

  	})
  },
  methods: {
       
     
  }
}
</script>