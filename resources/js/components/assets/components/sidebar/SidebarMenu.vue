<script>
const p =  localStorage.getItem("position");
const sidebarMenu = p === 'admin'?[
  { path: '/adminstrator/dashboard', icon: 'fa fa-chart-line', title: 'Dashboard'},
  { path: '/adminstrator/branch',icon: 'fa fa-city',  title: 'Branches',
    // children: [
    //   { path: '/adminstrator/faculty/regular', title: 'Branch 1' },
    //   { path: '/adminstrator/faculty/casual', title: 'Branch 2' },
    // ]
  },
   { path: '/adminstrator/accounts', icon: 'fa fa-users', title: 'Accounts',
    // children: [
    //   { path: '/adminstrator/accounts/students', title: 'User 1' },
    //   { path: '/adminstrator/accounts/faculty', title: 'User 2' }
    // ]
  },
]:[
  { path: '/personnel/branch',icon: 'fa fa-store',  title: localStorage.getItem("branch"),
    // children: [
    //   { path: '/personnel/faculty/regular', title: 'Branch 1' },
    //   { path: '/personnel/faculty/casual', title: 'Branch 2' },
    // ]
  },
   { path: '/personnel/ingredients', icon: 'fa fa-cart-plus', title: 'Ingredients',
     children: [
      { path: '/personnel/ingredients/request', title: 'Request Ingredients' },
      { path: '/personnel/ingredients/history', title: 'Request History' }
    ]
  },
   { path: '/personnel/breads', icon: 'fa fa-bread-slice', title: 'Breads'},
   { path: '/personnel/employees', icon: 'fa fa-users', title: 'Employees'},
]

export default sidebarMenu;
</script>
