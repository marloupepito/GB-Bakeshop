<script>
const p =  localStorage.getItem("position");
import axios from 'axios'

const sidebarMenu = []

axios.post('/get_all_branch')
.then(res=>{
  if(p === 'admin'){
  sidebarMenu.push(
  { path: '/adminstrator/dashboard', icon: 'fa fa-chart-line', title: 'Dashboard'},
  { path: '/adminstrator/branch',icon: 'fa fa-city',  title: 'Branches',
    children:res.data.status.map(a=>a)
  },
   { path: '/adminstrator/accounts', icon: 'fa fa-users', title: 'Accounts',
    children: [
      { path: '/adminstrator/dashboard', title: 'User 1' },
      { path: '/adminstrator/accounts/faculty', title: 'User 2' }
    ]
  },
)
}else{
sidebarMenu.push(
  { path: '/personnel/branch',icon: 'fa fa-store',  title: localStorage.getItem("branch"),
    // children: [
    //   { path: '/personnel/faculty/regular', title: 'Branch 1' },
    //   { path: '/personnel/faculty/casual', title: 'Branch 2' },
    // ]
  },
   { path: '/personnel/ingredients', icon: 'fa fa-cart-plus', title: 'Ingredients',
    //  children: [
    //   { path: '/personnel/ingredients/request', title: 'Ingredients Request' },
    //   { path: '/personnel/ingredients/received', title: 'Ingredients Received' },
    //   { path: '/personnel/ingredients/history', title: 'Transaction History' }
    // ]
  },
   { path: '/personnel/production', icon: 'fa fa-bread-slice', title: 'Production'},
   // { path: '/personnel/employees', icon: 'fa fa-users', title: 'Employees'},
)
  
}

})





export default sidebarMenu;
</script>
