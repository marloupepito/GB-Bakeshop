<template>
    <!-- BEGIN pos-booking -->
    <div class="pos pos-booking p-0 bg-white" id="pos-booking">
        <!-- BEGIN pos-booking-header -->
<div class="nav-wizards-container">
  <nav class="nav nav-wizards-2 mb-3 mt-3">
    <!-- completed -->
    <div class="nav-item col">
      <a class="nav-link active" href="#">
        <div class="nav-text">Request Ingredients</div>
      </a>
    </div>


    <!-- active -->
    <div class="nav-item col">
      <a class="nav-link active" href="#">
        <div class="nav-text">Approved</div>
      </a>
    </div>

    <!-- disabled -->
    <div class="nav-item col">
      <a class="nav-link border" href="#">
        <div class="nav-text">Delivered</div>
      </a>
    </div>
  </nav>
</div>


 <b-modal size="lg" id="bv-modal-example" :no-close-on-backdrop="true" hide-footer>
    <template #modal-title>
      Request Ingredients
    </template>
    
<template>
    <!-- BEGIN pos-kitchen -->
    <div class="pos pos-kitchen p-0 bg-white" id="pos-kitchen">
        <div class="pos-kitchen-body">
        <div v-for="(i, index) in i" :key="index">
            {{i}}
        </div>
            <div class="pos-task-row">
                <div>
                <input text="text" v-model="searching" id="myInput" @input="search" placeholder="search" class="form-control-sm col-md-12" style="margin-bottom:15px !important"/>
                    <div class="pos-task-body p-0">
                        <div class="row">
                            <div class="pos-task-product  col-md-3 col-6"  v-for="(i, index) in ingredients" :key="index">
                                <div class="p-1 card">

                                <div class="pos-task-product-info">
                                    <div class="info">
                                        <div class="title" style="text-transform:capitalize;"><b>{{i}}</b></div>
                                        <div class="desc">
                                            - large size<br />
                                            - extra cheese<br />
                                        </div>
                                    </div>
                                </div>
                                <div class="pos-task-product-action">
                                    <a href="javascript:;" class="d-block btn btn-xs btn-danger" style="margin-bottom:7px" @click="add(i)">Add</a>
                                    <a href="javascript:;" @click="cancel(i)" class="d-block btn btn-xs btn-outline-inverse">Cancel</a>
                                </div>
                                </div><br />
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END pos-kitchen -->
</template>



    <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Close Me</b-button>
  </b-modal>


            <!-- BEGIN pos-booking-body -->
        <div class="pos-booking-body">
            <!-- BEGIN pos-booking-content -->
            <div class="pos-booking-content">
                <div class="pos-booking-content-container" data-scrollbar="true" data-height="100%" data-skip-mobile="true">
                    <div class="row offset-md-2">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <a  @click="openModal" class="table-booking card border border-danger">
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
                                        <div v-for="(i, index) in i" :key="index" class="booking text-black">
                                            <div bg-white class="time text-black" style="width:50% !important;text-transform:capitalize;">{{i}}</div>
                                            <div class="info bg-white">-</div>
                                            <div class bg-white="status"></div>
                                        </div>
                                     </div>
                                   </div>
                            </a>
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
      time: '00:00',
      posMobileSidebar: false,
      date:new moment(new Date()).format('LL'),
      dataIngredients:[],
      ingredients:[],
      i:[],
      searching:null
    }
  },

  mounted(){
  	axios.post('/get_all_ingredients')
  	.then(res=>{
        this.dataIngredients=res.data.status.map(aa=>aa.ingredients_name.toLowerCase())
  		this.ingredients=res.data.status.map(aa=>aa.ingredients_name.toLowerCase())
  	})
  	.catch(err=>{

  	})
  },
  methods: {
    openModal(){
            this.$nextTick(() => {
                  this.$bvModal.show('bv-modal-example')
              })
        },
            add(i){
                const ingredients = this.i
                const str = i;
                if (!ingredients.includes(str)) {
                  ingredients.push(str);
                }
            },
            cancel(ic){
            
              const products_name  = this.i
             products_name.splice(products_name.indexOf(ic), 1)

           
            },
        search(e){
            const products_name  = this.dataIngredients
              const txt = e.target.value.toLowerCase();
              var results = start_search(txt);
             this.ingredients =results

            function start_search(text) {
              return products_name.filter(pr => pr.includes(text))
            }


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