import Vue from "vue";
// import Alert from "./components/Alert.vue";
import CartComponent from "./components/CartComponent.vue";
import AddToCartComponent from "./components/AddToCartComponent.vue";
import GridListComponent from "./components/GridListComponent";

require('./bootstrap');

// Vue.component('alert', Alert);
Vue.component('cart', CartComponent);
Vue.component('addToCart', AddToCartComponent);
Vue.component('gridList', GridListComponent);

const app = new Vue({
    el: '#app',
    data() {
        return {
            cart: []
        }
    },
    methods: {
        addToCart(serviceId) {
            if(!this.isProductAdded(serviceId)) {
                this.cart.unshift(serviceId);
                localStorage.setItem('cart', JSON.stringify(this.cart));
            }
        },
        isProductAdded(serviceId) {
            if (this.cart.length === 0) {
                 return false;
            }
            return this.cart.some(service => service.id === serviceId.id);
        }
    }
});



