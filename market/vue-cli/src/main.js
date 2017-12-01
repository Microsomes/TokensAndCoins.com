/*
@author Muhammed T Javed - The King
@date 29/11/2017
- main vue js file
*/

import Vue from 'vue'
import App from './App.vue'


import VueRouter from 'vue-router';
//imports the vue router

Vue.use(VueRouter);
//add router to the application

 
import homePage from './components/pages/mainHome.vue';

import allCoins from './components/pages/allCoins.vue';


import addCurrenciesPage from './components/pages/addCurrencies.vue';


import requestCurrencyForm from './components/pages/requestForm.vue';
//imported request currency form


import requestCoinAndTocken from './components/pages/requestCoinAndTocken.vue';
//request currency

//register request coin and tocken component
Vue.component("requestcoin",requestCoinAndTocken);


import requestICOFormPage from './components/pages/requestICOForm.vue';
//requestICOForm 
Vue.component("requestICo",requestICOFormPage);
//registering the ico request form

import disclaimer from './components/pages/disclaimer.vue';
//importing the disclaimer page

import sourceCode from './components/pages/sourceCode.vue';
// importing source code page

import incomdingICO from './components/pages/incomingICO.vue';
//importing incomingICO

 
 


 
 

export const routers=[

  {
    path:'/',
    component:allCoins
  },
  {
    path:'/allcoins',
    component:allCoins
  },
  {
    path:'/admin',
    component:addCurrenciesPage
  },
  {
    path:'/request',
    component:requestCurrencyForm
  },
  {
    path:'/disclaimer',
    component:disclaimer
  },
  {
    path:'/source',
    component:sourceCode
  },
  {
    path:'/ico',
    component:incomdingICO
  }
   
  
  ];


const router = new VueRouter({
  routes:routers
})



new Vue({
  el: '#app',
  render: h => h(App),
  router
})
