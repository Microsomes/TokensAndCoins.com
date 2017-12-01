<!--
@author Muhammed T Javed
@date 29/11/2017
- this page shows top 100 coins
-->
<template>
    <div class="allCoinsContainer">

        <div class="tableNav">
        <ul  class="pagination bmd-state-default">
  <li class="disabled"><a href="#">«</a></li>
  <li class="active top100"><a @click="changePage" href="#">Top 100</a></li>
   <li class="showall"><a @click="changePage" href="#">Show All</a></li>
 
  <li><a href="#">»</a></li>
</ul><br>
        </div>
    <!-- add the table containing all the coins-->

    <table>
  <tr style="height:60px;">
    <th style="width:10%"><a href="#">#</a></th>
    <th style="width:10%;text-align:center">Name</th>
    <th style="width:20px">Price</th>
    <th style="width:100px;">Market Cap</th>
    <th style="width:80px;">Volume (24.1h)</th>
    <th style="width:100px;">Circulating Supply</th>
    <th style="width:100px;">Change (24.1h)</th>
    <th style="width:100px;">Price Graph (7d)</th>


   
  </tr>
   
  
  
   
  <tr style="height:50px" v-for="n in allCoins">
    <td>{{n.rank}}</td>
    <td>{{n.coinName}}</td>
    <td>{{n.coinPrice}}</td>
    <td>{{n.marketCap}}</td>
    <td>{{n.volume24hr}}</td>
    <td>{{n.circulatingSupply}}</td>
    <td>{{n.change24hr}}</td>
    <td>constructing data- eta 7 days</td>
  </tr>


</table>

    </div>

</template>

<script>

export default{
    data:function(){
        return{
            
            allCoins:[
            
            ],
            currentlyShowing:'top100'
        
        }
        
    },
    methods:{
        changePage(target){
            var valueOfClicked= target.target.textContent;
            //grab value of button clicked

                 //will be called when user clicks top 100 or show all button
                var navTop100= document.querySelector('.top100');
        //top 100 button
             var navShowAll= document.querySelector(".showall");
        //show all button 

            //use switch statement to determine which button was clicked
            switch(valueOfClicked){
                
                case "Top 100":
              //  alert("show top 100");
                navShowAll.className="showall";
                navTop100.className="active top100";
                this.grabCoinData("top100");
                //call method to show top 100 coins
                break;
                case "Show All":
                //alert("show all");
                navShowAll.className="active showall";
                navTop100.className="top100";
                this.grabCoinData("showall");
                //call to show all coins 
                break;
            }
 


        
        },
        grabCoinData(top100orshowall){
            //method will return coin data based on what is passed
            switch(top100orshowall){
                case "top100":
                this.allCoins=[];
                //clear all current coin data from the array
                this.grabTop100();
                //call to show top 100 coins
                break;
                case "showall":
                 this.allCoins=[];
                //clear all current coin data from the array
                this.grabAllCoins();
                //call to show all coins
                
                 break;
            }
        },grabTop100(){
             //get grab coin data

             
        /**/var coinMarketCapAPILink="https://api.coinmarketcap.com/v1/ticker/";
        //coin market cap api link used to grab top 100 coins
           var home=this;
            //reference to this object

         $.get(coinMarketCapAPILink, function(data, status){
             console.log(data[0]);
            var totalCoins= data.length;
             //total coins to loop through

            //loop through all the data
             for(var i=0;i<totalCoins;i++){
             var currentCoin= data[i];
             var id= currentCoin["id"];
             var name= currentCoin["name"];
             var symbol= currentCoin["symbol"];
             var rank= currentCoin["rank"];
             var price_usd= currentCoin["price_usd"];
             var price_btc= currentCoin["price_btc"];
             var t23hourVolume= currentCoin["24h_volume_usd"];
             var availableSupply= currentCoin["available_supply"];
             var totalSupply= currentCoin["total_supply"];
             var percent_change_1h= currentCoin["percent_change_1h"];
             var percent_change_7d= currentCoin["percent_change_7d"];
             var percent_chang_24h= currentCoin["percent_change_24h"];

            const numberWithCommas = (x) => {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
 
                //push coin to array
                home.allCoins.push({
                    coinName:name,
                    rank:rank,
                    coinPrice:'$'+price_usd,
                    marketCap:'$'+numberWithCommas(currentCoin['market_cap_usd']),
                   volume24hr:'$'+numberWithCommas(t23hourVolume),
                   circulatingSupply:numberWithCommas(availableSupply)+' '+symbol,
                   change24hr:percent_chang_24h
                });
             }//end of loop
            /*
              <td>{{n.coinName}}</td>
    <td>{{n.coinPrice}}</td>
    <td>{{n.marketCap}}</td>
    <td>{{n.volume24hr}}</td>
    <td>{{n.circulatingSupply}}</td>
    <td>{{n.change24hr}}</td>
    <td>N/A</td>
             */


         });
        },
        grabAllCoins(){
            //this may lag
            //alert("This may lag for a few second. Sorry if it does (:");
            var globalAllCoins= "https://api.coinmarketcap.com/v1/ticker/?limit=10000";
     //get grab coin data

             
        /**/var coinMarketCapAPILink="https://api.coinmarketcap.com/v1/ticker/";
        //coin market cap api link used to grab top 100 coins
           var home=this;
            //reference to this object

         $.get(globalAllCoins, function(data, status){
             console.log(data[0]);
            var totalCoins= data.length;
             //total coins to loop through

            //loop through all the data
             for(var i=0;i<totalCoins;i++){
             var currentCoin= data[i];
             var id= currentCoin["id"];
             var name= currentCoin["name"];
             var symbol= currentCoin["symbol"];
             var rank= currentCoin["rank"];
             var price_usd= currentCoin["price_usd"];
             var price_btc= currentCoin["price_btc"];
             var t23hourVolume= currentCoin["24h_volume_usd"];
             var availableSupply= currentCoin["available_supply"];
             var totalSupply= currentCoin["total_supply"];
             var percent_change_1h= currentCoin["percent_change_1h"];
             var percent_change_7d= currentCoin["percent_change_7d"];
             var percent_chang_24h= currentCoin["percent_change_24h"];

            const numberWithCommas = (x) => {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
 
                //push coin to array
                home.allCoins.push({
                    coinName:name,
                    rank:rank,
                    coinPrice:'$'+price_usd,
                    marketCap:'$'+numberWithCommas(currentCoin['market_cap_usd']),
                   volume24hr:'$'+numberWithCommas(t23hourVolume),
                   circulatingSupply:numberWithCommas(availableSupply)+' '+symbol,
                    change24hr:percent_chang_24h

                });
             }//end of loop
            /*
              <td>{{n.coinName}}</td>
    <td>{{n.coinPrice}}</td>
    <td>{{n.marketCap}}</td>
    <td>{{n.volume24hr}}</td>
    <td>{{n.circulatingSupply}}</td>
    <td>{{n.change24hr}}</td>
    <td>N/A</td>
             */


         });
            
        }
    },
    created(){
        //grab the top 100 coins

        this.grabTop100();
        //call to show top 100 coins by default

        

    }//end of created
}


</script>



<style scoped>

.tableNav{
    display:flex;
    align-items:flex-end;
     justify-content:flex-end;
    margin-left:20px;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    text-align:center;
}

tr:nth-child(even) {
   
}
</style>