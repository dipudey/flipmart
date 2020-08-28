import Home from '../components/frontend/layouts/Home'
import ProductDetails from '../components/frontend/pages/ProductDetails'
import OK from '../components/frontend/layouts/ok'


export const routes = [
  { path: '/', component: Home},
  { path: '/product', component: ProductDetails, name: 'productDetails'},
  { path: '/test', component: OK, name: 'OK'}
]
