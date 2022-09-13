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
							<router-link :to="'/personnel/ingredients/transactions?'+data.request_id" class="email-user bg-blue">
								<span class="text-white">F</span>
							</router-link>
							<div class="email-info">
								<router-link :to="'/personnel/ingredients/transactions?'+data.request_id">
									<span class="email-sender">{{data.request_id}}</span>
									<span class="email-title">{{data.ingredients_status === 'Received'?'Transaction Complete':data.ingredients_status}}</span>
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
	    	requestData:[]
	    }
  },

  mounted(){
  	axios.post('/get_request_from_branch',{
  		id:localStorage.getItem("id"),
  	})
  	.then(res=>{
  		this.requestData =res.data.status
  		console.log(res.data.status)

  	})
  	.catch(err=>{

  	})
  },
  methods: {
       
     
  }
}
</script>