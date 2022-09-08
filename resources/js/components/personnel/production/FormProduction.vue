<template>
      <!-- BEGIN mailbox -->
      <div>
            <table class="table table-striped align-middle m-0">
                    <tr>
                  <th width="14.2%">Cashier Name:</th>
                  <th width="14.2%">Cashier 1</th>
                  <th width="14.2%">Sales Clerk:</th>
                  <th width="14.2%">sales 1</th>
                  <th width="14.2%">Trainee:</th>
                  <th width="14.2%">Trainee 1</th>
                  <th width="14.2%">
                        <button class="btn btn-danger btn-xs w-100" @click="saveProduction">
                              Save
                      </button>
                  </th>
                </tr>
            </table>
          <table  class="table table-striped table-bordered align-middle">
              <thead >
                
                <tr>
                  <th width="20%">Name of Bread</th>
                  <th width="10%">Beginning <small>pcs</small></th>
                  <th width="10%">New Production <small>pcs</small></th>
                  <th width="5%">Price</th>
                  <th width="10%">Total</th>
                  <th width="5%">Bread Out</th>
                  <th width="10%">Charge/PC</th>
                  <th width="10%">Remaining <small>pcs</small></th>
                  <th width="10%">Sold Bread</th>
                  <th width="10%">Sales</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(value,index) in data" :key="index">
                  <td width="20%">{{value.bread_name}}</td>
                  <td class="p-0 text-center" width="10%">{{value.beginning_pcs}}</td>
                  <td class="p-0 text-center" width="10%">{{value.new_production_pcs}}</td>
                  <td class="p-0 text-center"  width="5%">{{value.price}}</td>
                  <td class="p-0 text-center" width="5%">{{value.total}}</td>
                  <td class="p-0" width="10%"><input v-model="value.bread_out" class="form-control p-0 form-control-sm" type="text" /></td>
                  <td class="p-0" width="10%"><input v-model="value.charge_pc" class="form-control p-0 form-control-sm" type="text" /></td>
                  <td class="p-0" width="10%"><input v-model="value.remaining_pcs" class="form-control p-0 form-control-sm" type="text" /></td>
                  <td class="p-0" width="10%"><input v-model="value.sold_bread" class="form-control p-0 form-control-sm" type="text" /></td>
                  <td class="p-0" width="10%"><input v-model="value.sales" class="form-control p-0 form-control-sm" type="text" /></td>
                </tr>
                
              </tbody>
            </table>
      </div>

</template>

<script>
      import axios from 'axios'

export default {
      mounted(){
            axios.post('/get_specific_production',{
                  production_id:window.location.search.substring(1)
                  })
            .then(res=>{
                  this.data = res.data.status
            })
      },
      methods:{
            saveProduction(){
                  axios.post('/update_bread_out',{
                        data:this.data
                        })
                  .then(res=>{
                         this.$swal({
                            position: 'center',
                            icon: 'success',
                            title: 'Bread Recorded Successfully!',
                            showConfirmButton: false,
                            timer: 1500
                          })
                        })
                  .catch(err=>{

                        })
            }
      },
      data() {
            return {
                  data:[],
             }
      },

}
</script>