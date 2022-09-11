<template>
<div>
	<div class="nav-wizards-container">
  <nav class="nav nav-wizards-2 mb-3 mt-3">
    <div class="nav-item col">
      <a :class="processs ==='Pending' || processs ==='Approved' || processs ==='Received' ?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">Requested</div>
      </a>
    </div>
<!-- nav-link active -->
    <div class="nav-item col">
      <a :class="processs ==='Approved' || processs ==='Received'?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">Approved</div>
      </a>
    </div>


    <div class="nav-item col">
      <a :class="processs ==='Received'?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">Received</div>
      </a>
    </div>

  </nav>
</div>
<a :class="processs === 'Pending'?'btn btn-danger btn-md  d-block offset-md-9 col-md-3 col-xs-12 col-sm-12':'d-none'" @click="acceptRequest" >ACCEPT REQUEST</a>

<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Transaction #</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantities</th>
      <th scope="col">Packages</th>
    </tr>
  </thead>
  <tbody>
    <tr  v-for="(data, index) in requestData" :key="index">
      <td>{{data.request_id}}</th>
      <td>{{data.ingredients_name}}</td>
      <td>{{data.ingredients_quantity}}</td>
      <td>{{data.ingredients_package}}</td>
    </tr>
  </tbody>
</table>

</div>
</template>



<script>

import moment from 'moment'
import axios from 'axios'

export default {

    data: function () {
      return {
        requestData:[],
        processs:'',
        requestid:'',
        branchid:''
      }
  },

  mounted(){
    const requestid = window.location.pathname.split('/')[4]
    const branchid = localStorage.getItem("click_branch_id");
    axios.post('/get_only_current_branch_request',{
      id:branchid,
      search:requestid
    })
    .then(res=>{
    	this.requestid = requestid
    	this.branchid =  branchid
        this.requestData =res.data.status
        this.processs = res.data.status[0].ingredients_status
   
    })
    .catch(err=>{

    })
  },
  methods: {
       acceptRequest(){
       		axios.post('/accept_request_ingredients',{
       			response:'Approved',
       			branchid:this.branchid,
       			requestid:this.requestid
       		})
   			.then(res=>{
   				this.requestData = res.data.status
   				this.processs = res.data.status[0].ingredients_status
   				 this.$swal({
                      position: 'center',
                      icon: 'success',
                      title: 'Approved Successfully!',
                      showConfirmButton: false,
                      timer: 1000
                    })
   				})
			.catch(err=>{

			})
       	

       }
  }
}
</script>