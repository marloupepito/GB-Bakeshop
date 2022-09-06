<template>
      <!-- BEGIN mailbox -->
      <div class="mailbox">
            <!-- BEGIN mailbox-sidebar -->
            <div class="mailbox-sidebar">
                  <div class="mailbox-sidebar-header d-flex justify-content-center">
                        <b-button v-b-toggle.emailNav data-bs-toggle="collapse" class="btn btn-dark btn-sm me-auto d-block d-lg-none">
                              <i class="fa fa-cog"></i>
                        </b-button>
                        <router-link to="/email/compose" class="btn btn-dark ps-40px pe-40px btn-sm">
                              Compose
                        </router-link>
                  </div>
                  <b-collapse class="mailbox-sidebar-content collapse d-lg-block" id="emailNav">
                        <!-- BEGIN scrollbar -->
                        <vue-custom-scrollbar class="h-100">
                              <div class="nav-title"><b>FOLDERS</b></div>
                              <ul class="nav nav-inbox">
                                    <li @click="active(1)" :class="path === '/personnel/production/breadin'?'active':'' "><router-link to="/personnel/production/breadin"><i class="fa fa-right-to-bracket fa-lg fa-fw me-2"></i> Bread In </router-link></li>

                                    <li @click="active(2)" :class="path === '/personnel/production/breadout'?'active':'' "><router-link to="/personnel/production/breadout"><i class="fa fa-right-from-bracket fa-lg fa-fw me-2"></i> Bread Out </router-link></li>


                                    <!-- <li @click="active(2)"  :class="path === '/personnel/ingredients/received'?'active':'' "><router-link to="/personnel/ingredients/received"><i class="fa fa-flag fa-lg fa-fw me-2"></i> Ingredients Received</router-link></li>
                                    <li @click="active(3)" :class="path === '/personnel/ingredients/history'?'active':'' "><router-link to="/personnel/ingredients/history"><i class="fa fa-envelope fa-lg fa-fw me-2"></i> Transaction History</router-link></li> -->
                                   
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
                                    <button class="btn btn-white btn-sm">
                                          <i class="fa fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-white btn-sm">
                                          <i class="fa fa-chevron-right"></i>
                                    </button>
                              </div>
                              <!-- END btn-group -->
                        </div>
                        <!-- END btn-toolbar -->
                  </div>
                  <div class="mailbox-content-body">
                        <vue-custom-scrollbar class="h-100">
                               <router-view v-if="timerCount ===0"></router-view>
                              <!-- END list-email -->
                        </vue-custom-scrollbar>
                  </div>
                  <div class="mailbox-content-footer d-flex align-items-center">
                        <div class="text-inverse fw-bold">1,232 messages</div>
                        <div class="btn-group ms-auto">
                              <button class="btn btn-white btn-sm">
                                    <i class="fa fa-fw fa-chevron-left"></i>
                              </button>
                              <button class="btn btn-white btn-sm">
                                    <i class="fa fa-fw fa-chevron-right"></i>
                              </button>
                        </div>
                  </div>
            </div>
            <!-- END mailbox-content -->
      </div>
      <!-- END mailbox -->
</template>

<script>
import AppOptions from '../../assets/config/AppOptions.vue'

export default {
      mounted(){
            const path = window.location.pathname
            this.path = path 
      },
      methods:{
            active(e){
                  if(e === 1){
                        this.path = '/personnel/production/breadin'
                  }else if(e === 2){
                        this.path = '/personnel/production/breadout'
                  }else if(e === 3){
                        this.path = '/personnel/ingredients/history'
                  }else{

                  }
            }
      },
      data() {
            AppOptions.appContentFullHeight = true;
            AppOptions.appContentClass = 'p-0';

            return {
                  path:null,
                   timerCount: 1
             }
      },
       watch: {

            timerCount: {
                handler(value) {

                    if (value > 0) {
                        setTimeout(() => {
                            this.timerCount--;
                        }, 1000);
                    }

                },
                immediate: true
            }

        },
      beforeRouteLeave (to, from, next) {
            AppOptions.appContentFullHeight = false;
            AppOptions.appContentClass = '';
            next();
      }
}
</script>