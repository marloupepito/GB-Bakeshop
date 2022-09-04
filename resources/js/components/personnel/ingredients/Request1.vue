<template>
    <!-- BEGIN pos-booking -->
    <div class="pos pos-booking p-0 bg-white" id="pos-booking">
        <!-- BEGIN pos-booking-header -->







            <!-- BEGIN pos-booking-body -->
        <div class="pos-booking-body">
            <!-- BEGIN pos-booking-content -->
            <div class="pos-booking-content">
                <div class="pos-booking-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                     <div :class="loading1">
                              <div style="margin-top:20%;" class="progress rounded-pill mb-2 p-0 text-center">
                                <div class="progress-bar bg-danger progress-bar-striped progress-bar-animated rounded-pill fs-10px fw-bold" style="width: 100%">Please wait ...</div>
                              </div>
                            </div>
                 <div :class="loading2">
                    <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                    <form @submit="add_ingredient">
                        Ingredient

                        <v-select  @input="searchIngredients" label="title" class="w-100 is-invalid" :options="ingredients" v-model="i">
                              <template #search="{attributes, events}">
                                <input
                                  class="vs__search"
                                  :required="!i"
                                  v-bind="attributes"
                                  v-on="events"
                                />
                              </template>
                    </v-select>
                        Quantity
                        <input required class="form-control" v-model="ii" type="number" /><br />
                        <input type="submit" value="Add Ingredient" class="btn btn-danger d-block w-100" />
                    </form>
                    </div>
                      
                        

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <a  class="table-booking card border border-danger">
                                <div class="table-booking-container text-black bg-white">
                                    <div class="table-booking-header">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-1">
                                                <div class="title text-black">Request Form
                                                </div>
                                                <div class="no">
                                                01</div>
                                            </div>
                                            <div class="pr-1 text-danger">
                                            	<div class="desc">{{date}}</div>
                                                <i class="fa-5x fa fa-clipboard-list" style="padding-left:40px !important"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" bg-white table-booking-body">
                                    <div  class="booking text-black">
                                            <div bg-white class="time text-black font-weight-bold" style="width:25% !important;text-transform:capitalize;">Ingredient Name</div>
                                            <i class="info bg-white fa-2x status fa fa-minus"></i>
                                            <div  class="font-weight-bold"  style="width:25% !important;text-transform:capitalize;">Package</div>
                                            <div class="font-weight-bold"  style="width:25% !important;text-transform:capitalize;">Quantity</div>
                                            <div  class="font-weight-bold text-center"  style="width:25% !important;text-transform:capitalize;">Option</div>
                                        </div>

                                        <div  class="booking text-black"  v-for="(i, index) in dataIngredients">
                                            <div bg-white class="time text-black" style="width:25% !important;text-transform:capitalize;">{{i[0]}}</div>
                                            <i class="info bg-white fa-2x status fa fa-minus"></i>
                                            <div   style="width:25% !important;text-transform:capitalize;">Sack</div>
                                            <div  style="width:25% !important;text-transform:capitalize;">{{i[1]}}</div>
                                            <button @click="cancel(index)" class="btn btn-danger btn-xs w-100"  style="width:25% !important;text-transform:capitalize;">Cancel</button>
                                        </div>
                                     </div>
                                     <button @click="requestSend" v-if="dataIngredients.length !== 0" class="btn btn-danger btn-xs d-block w-100">
                                        Submit Request
                                     </button>
                                   </div>
                            </a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- END pos-counter-content -->
        </div>
        <!-- END pos-booking-body -->
        
        <!-- END #modalPosBooking -->
    </div>
    <!-- END pos-booking -->
</template>

<script>
import moment from 'moment'
import axios from 'axios'
export default {

    data: function () {
    return {
      value: 1,
      time: '00:00',
      posMobileSidebar: false,
      date:new moment(new Date()).format('LL'),
      dataIngredients:[],
      ingredients:[],
      i:'',
      ii:'',
      loading1:'col-xl-12 d-none  col-lg-12 col-md-12 col-sm-12',
      loading2:''
    }
  },

  mounted(){
  	axios.post('/get_all_ingredients')
  	.then(res=>{
  		this.ingredients=res.data.status.map(res=>res.ingredients_name)
  	})
  	.catch(err=>{

  	})
  },
  methods: {
         cancel(e){
            const products_name  =  this.dataIngredients
             products_name.splice(e, 1)

        },
        requestSend(){
           this.loading1='col-xl-12 col-lg-12 col-md-12 col-sm-12'
           this.loading2='d-none'
            axios.post('/send_request_form',{
                data:this.dataIngredients,
                id:localStorage.getItem("id")
                })
                .then(res=>{
                    this.loading2=''
                     this.loading1='col-xl-12 d-none col-lg-12 col-md-12 col-sm-12'
                    const empty =this.dataIngredients.length
                    this.dataIngredients.splice(0,empty);
                    this.$swal({
                      position: 'center',
                      icon: 'success',
                      title: 'Sending Request Successfully!',
                      showConfirmButton: false,
                      timer: 1500
                    })
                })
                .catch(err=>{

                    })
            },
      searchIngredients(e){
        this.i = e
        },
        add_ingredient(e){
           e.preventDefault()
               const data = [this.i,this.ii,'Package','Pending'];
                const ingredients = this.dataIngredients
                if (!ingredients.includes(data)) {
                  ingredients.push(data);
                }
                this.i = []
                this.ii = ''
        },
        
        hideModal() {
            this.$refs['modalPosBooking'].hide();
        },
        posMobileSidebarToggled: function() {
            this.posMobileSidebar = !this.posMobileSidebar;
        },
        handleCheckTime: function(i) {
            if (i < 10) {
                i = '0' + i;
            }
            return i;
        },
        handleStartTime: function() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var a;
            m = this.handleCheckTime(m);
            a = (h > 11) ? 'pm' : 'am';
            h = (h > 12) ? h - 12 : h;
            
            this.time = h + ':' + m + a;
            setTimeout(() => {
                this.handleStartTime();
            }, 500);
        }
  }
}
</script>

<style>

</style>