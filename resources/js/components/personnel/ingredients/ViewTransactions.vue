<template>
<div>
	<div class="nav-wizards-container">
  <nav class="nav nav-wizards-2 mb-3 mt-3">
    <div class="nav-item col">
      <a :class="process ==='Pending' || process ==='Approved' || process ==='Delivered' ?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">List of Ingredients</div>
      </a>
    </div>
<!-- nav-link active -->
    <div class="nav-item col">
      <a :class="process ==='Approved' || process ==='Delivered'?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">Approved</div>
      </a>
    </div>

    <div class="nav-item col">
      <a :class="process ==='Delivered'?'nav-link active':'nav-link disabled'" href="#">
        <div class="nav-text">Delivered</div>
      </a>
    </div>
  </nav>
</div>


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
        process:''
      }
  },

  mounted(){
    const search = window.location.search.substring(1)
    axios.post('/get_only_current_branch_request',{
      id:localStorage.getItem("id"),
      search:search
    })
    .then(res=>{
      this.requestData =res.data.status
      this.process = res.data.status[0].ingredients_status
    })
    .catch(err=>{

    })
  },
  methods: {
       
     
  }
}
</script>