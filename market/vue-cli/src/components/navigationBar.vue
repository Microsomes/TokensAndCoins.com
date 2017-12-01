<template>

<div class="navContainer">


<!-- new nav bar-->


<nav style="" class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand bmd-ripple" href="#"><router-link to="/"><i class="em em-sunglasses"></i></router-link></a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><router-link style="color:black" to="request"><a href="#" style="color:black" class="bmd-ripple">Request Form <span class="sr-only">(current)</span></a></router-link></li>
        <li><a href="#" class="bmd-ripple"> <router-link style="color:black" to="disclaimer">Disclaimer</router-link>  </a></li>
        <li><a href="#" class="bmd-ripple"><router-link style="color:black" to="source">Source Code</router-link></a></li>
        <li class="dropdown bmd-dropdown">
          <a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="true">Trending <i class="flaticon-show8"></i>
          </a><ul class="dropdown-menu" role="menu"><a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false">
            </a><li><a href="#" class="dropdown-toggle bmd-ripple" data-toggle="dropdown" role="button" aria-expanded="false"></a><a href="#">Gainers && losers</a></li>
            <li><a href="#">Recently Added</a></li>
            <li><a href="#">Trending ICOS</a></li>
             <li><a href="#">Incoming ICOS</a></li>
           </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon bmd-addon flaticon-search100"></span>
            <div class="searchCInput bmd-field-group">

            
              <input   v-model="searchValue"   @keyup="currentlySearching" placeholder="search coin" type="text" class="searchconininput input-sm bmd-input" required="" autocomplete="off">
              <div class="searchResultsCoinSearch">
                search feature coming soon
              </div>
              <span class="bmd-bar"></span>
            </div>
            <span class="input-group-btn">
             </span>
            <span class="bmd-field-feedback"></span>
          </div>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="bmd-ripple">Donate</a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="searchResultsContainer">
     
      <div @click="goToCoin" v-for="n in searchResults" v-bind:data="n.symbol" class="searchableItem">
         <div class="name">{{n.name}}</div>
 
      </div>
    </div>
<!-- end of new nav bar-->

    <div style="display:none" class="navOptions">
    
    <div class="btn-group-vertical bmd-btn-group">
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="allcoins">Show All</router-link></a>
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="showCoins">Coins</router-link></a>
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="showTokens">Tokens</router-link></a>
 </div>

   <div class="btn-group-vertical bmd-btn-group">
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="gainerslosers">Gained and Losers</router-link></a>
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="recentlyadded">Recently Added</router-link></a>
  </div>

 <div class="btn-group-vertical bmd-btn-group">
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="myportfolio">My Portfilio</router-link></a>
   </div>

    <div class="btn-group-vertical bmd-btn-group">
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="request">Request Coin to add</router-link></a>
  <a href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link to="donate">Donate</router-link></a>
  </div>

   <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label bmd-control-label"><i class="flaticon-black402"></i></label>
      <div class="searchCoinContainer col-lg-9">
    

        <div class="bmd-field-group">
          <input type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Search Coins
          </label>
          <span class="bmd-field-feedback"></span>
          
        </div>
      </div>
    </div>
  </div>




</div>

</template>

<script>

export default{
  data:function(){
    return {
      searchValue:'',
      searchResults:[
        
      ],
      allCoins:[
        'bitcoin',
        'ethreum',
        'bitconnect'
      ]
    }
  },methods:{
    goToCoin(target){
      //will be called when user clicks on a search result item
       var coinToGo= target.target.textContent;
      alert("showing coin"+coinToGo);
    },
    currentlySearching(){
      //clear current in search result
      this.searchResults=[];

    //method is called when user starts typing in the search box
  
    //filter through all coins array and see if theres a match

    var strings = this.allCoins;
    var needle = this.searchValue.toLowerCase();

    if(needle==""){
      return ;
    }
   var home=this;

for (var i = 0; i < strings.length; ++i) {
    if (strings[i].substring(0, needle.length) === needle) {
 
        //found add to search result array
        home.searchResults.push({name:strings[i]});
        //add searched result to search result array

    }
}

  }

  }
}

</script>

<style scoped>

.searchResultsContainer{
  display:flex;
}

.searchableItem{
   width:200px;
  display:flex;
   height:50px;
   transition:all .5s;
}

.searchableItem:hover{
  cursor:pointer;
  transform:scale(1.2);
  margin-left:20px;
}

.searchableItem .symbol{
  border:1px solid #ddd;
  width:20%;
  display:flex;
  align-items:center;
  justify-content:center;
}

.searchableItem .name{
  border:1px solid #ddd;
  width:40%;
  display:flex;
  align-items:center;
  justify-content:center;
}
.searchableItem .price{
  border:1px solid black;
  width:40%;
  border:1px solid #ddd;
  display:flex;
  align-items:center;
  justify-content:center;
}
 

.searchCInput{
  position:relative;
}

.searchconininput{
  transition: all .5s;
  position:relative;
}

.searchconininput:focus{
  padding:20px;
  border:1px solid #ddd;
}

 

.searchResultsCoinSearch{
  position:absolute;
  z-index:10;
  background:#ddd;
  height:100px;
  width:200px;
  left:-35px;
  top:44px;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  display:none;
  
}


 
 
 


.navOptions{
    display:flex;
    align-items:center;
    justify-content:space-around;
  }

.navContainer{
      border:1px solid #ddd;
     margin-top:10px;
     padding:10px;
         border-radius:5px;

}

</style>