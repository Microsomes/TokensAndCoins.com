
<template>
  <div class="container">
 
  <div class="logo">

    <div class="logoImg">
    <img border="0" alt="W3Schools" src="logo.png" width="100%" height="100%">

    </div>
    <div class="logoTitle">
    <div class="mainTitleText">
    tokensandcoins.com
    </div>

    <div class="underText">
    coded with speed in mind
    </div>
    
    </div>
    
  </div><!-- end of nav-->
  
  <topBar></topBar>
  
  <!--add the top bar that shows market data and total market cap-->
<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Our site bot is busy importing all cryptocurrencies that enter the market but feel free to contact us if we are missing anything.</strong> 
</div>

  <navi></navi>
  <!-- add navigation bar component-->
   

  <div class="mainContent">
   <router-view></router-view>
  <!-- main content router view-->
</div>
  </div>
</template>

<script>

  import TopBar from './components/siteDataOverView.vue'
  import NavigationBar from './components/navigationBar.vue'


export default{
  data:function(){
    return {

    }
  },components:{
        'topBar': TopBar,
        'navi':NavigationBar
   }
}

</script>

<style scoped>



.mainContent{
   margin-top:10px;
  border-radius:5px;
 }

.logo{
  height:100px;
  background:;
  display:flex;
}

.logoImg{
  height:100%;
  width:100px;
    display:flex;
  align-items:center;
  justify-content:center;
  position:relative;
  top:10px;
}

.logoImg:hover{
  cursor:pointer;
}

.logoTitle{
  height:100%;
   width:600px;
  display:flex;
  margin-left:20px;
 flex-flow:column;


}

.underText{
   font-family: 'Press Start 2P', cursive;
   margin-left:6px;

}

.mainTitleText{
 font-family: 'Press Start 2P', cursive;
 font-size:30px;
  height:70%;
 display:flex;
 align-items:center;
  


}

.container{
 min-width:800px;
  background:white;
   margin:auto;
  }

</style>