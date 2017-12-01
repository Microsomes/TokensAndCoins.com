<template>

    <div class="adminContaner">

        <h2>Welcome the King</h2>
        <span style="text-align:center;display:block">Add Currencies and Markets below...</span>
<hr>

        <div class="infoMarkets">
        <h2>Market Sats</h2>
            <div class="totalMarkets">
            <span>There are {{marketData.totalMarkets}} markets </span>
            </div>
            
            <!-- table containing all markets-->


<table>
  <tr>
    <th>Market Name</th>
    <th>Total Currencies</th>
    <th>Market ID</th>
   </tr>
  <tr v-for="n in marketData.markets">
    <td>{{n.marketName}}</td>
    <td>{{n.totalSupported}}</td>
    <td>{{n.marketID}}</td>

     </tr>
  
 
  
 
     
</table>

            <!-- end of table that shows all markets-->
            

        </div><!-- end of market info data-->
<hr>
        <div class="coinData">
        <h2>Coins Sats</h2>
        <span>There are {{marketData.totalCoins}} Coins</span>
        <!-- table containing coins data-->

        

<table style="width:70%">
  <tr>
    <th>Coin Symbol</th>
    <th>Coin Name</th>
    <th>Max Supply</th>
    <th>Price_USD</th>
    <th>Price_BTC</th>
    <th>Nominated Market</th>
   </tr>
  <tr v-for="n in marketData.coins">
    <td>{{n.coinSymbol}}</td>
    <td>{{n.coinName}}</td>
    <td>{{n.MaxSupply}}</td>
    <td>{{n.price_usd}}</td>
    <td>{{n.price_btc}}</td>
    <td>{{n.nominatedMarket}}</td>
    </tr>
  
 
  
 
     
</table>

        <!-- end table containing coin data-->

        </div>

        <div class="buttonOptions">
         <button  @click="addCoin" href="#" class="btn btn-primary bmd-ripple">+ Add Coin</button>
         <button  @click="openMarketApplicaton" href="#" class="btn btn-primary bmd-ripple">+ Add Markets</button>
        </div>


        <div v-if="showCoinApplication" class="AddCoin">
            <h2>Add Coin</h2>


                <!-- form-->


<div style="margin:20px;" id="createform" class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label bmd-control-label"><i class="flaticon-black402"></i></label>
      <div class="col-lg-9">


        <div class="bmd-field-group">
          <input v-model="coinInputData.coinName" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Coin Name</label>
          <span class="bmd-field-feedback"></span>
        </div>

        <div class="bmd-field-group">
          <input v-model="coinInputData.coinSymbol" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Coin Symbol</label>
          <span class="bmd-field-feedback"></span>
        </div>
         <div class="bmd-field-group">
          <input v-model="coinInputData.coinMaxSupply" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Max Supply</label>
          <span class="bmd-field-feedback"></span>
        </div>

     <div class="bmd-field-group">
          <input v-model="coinInputData.coinCirculatingSupply" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Circulating Supply</label>
          <span class="bmd-field-feedback"></span>
        </div>

          <div class="bmd-field-group">
          <input v-model="coinInputData.websiteLink" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Website Link</label>
          <span class="bmd-field-feedback"></span>
        </div>

          <div class="bmd-field-group">
          <input v-model="coinInputData.annoncementLink" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Announcement Link</label>
          <span class="bmd-field-feedback"></span>
        </div>

        <div class="selectClass">

        <p>Select a class for what this coin is </p>
<select class="selectClassOfTocken">
  <option value="ERC-20">ERC-20 Tocken</option>
  <option value="coinMinable">Coin Minable</option>
  <option value="coin-nonminable">Coin Non Minable</option>
 </select>
</div>

<br>
    <p class="padding:20px;">Choose the Nominated Exchange- we will use the price of that exchange to reflect the price on the home page. Choose an exchange with the most volume for the coin you are adding.</p>
    
    <!-- select option for coins-->
         <select class="marketSelectionSelect">
  <option v-for="n in marketData.markets" v-bind:value="n.marketName">{{n}}</option>
  
        </select>
    <!-- end select option for coins-->
    <div class="bmd-field-group">
 
          <input v-model="coinInputData.nominatedExchangeTicker" type="text" class="bmd-input" required="">
          <span class="bmd-bar"></span>
          <label class="bmd-label">Coin Ticker on Nominated Exchange- Keep blank if you dont know what to enter.</label>
          <span class="bmd-field-feedback"></span>
        </div>

      </div>
        
        <div style="margin-top:10px;" class="col-lg-10 col-lg-offset-2">
         <button @click="addcouns" href="#" class="btn btn-primary bmd-ripple">Submit Application (:</button>
         <button @click="clearCoinApplication" href="#" class="btn btn-primary bmd-ripple">Clear (:</button>
         <button @click="closeCoinApplication" href="#" class="btn btn-primary bmd-ripple">Close Coin Application (:</button>
      </div>
    
       
    </div><!-- end of form group-->
 

        </div><!-- end of end coin-->
        
        <div v-if="showMarketApplication" class="marketApplicationForm">

            <h2>Add Market</h2>
            <span>There are {{marketData.totalMarkets}} Markets</span>

            <div class="marketAddForm">
                <div class="bmd-field-group">
                <input v-model="marketInputData.marketName" type="text" class="bmd-input" required="">
                <span class="bmd-bar"></span>
                <label class="bmd-label">Market Name</label>
                <span class="bmd-field-feedback"></span>
                </div>
           
                <div class="bmd-field-group">
                <input v-model="marketInputData.marketTickerURL" type="text" class="bmd-input" required="">
                <span class="bmd-bar"></span>
                <label class="bmd-label">Ticker URL</label>
                <span class="bmd-field-feedback"></span>
                </div>
           
         <button style="margin-top:10px;" @click="submitMarketApplication" href="#" class="btn btn-primary bmd-ripple">Submit Market Application (:</button>
         <button style="margin-top:10px;" @click="clearMarketApplicationForm" href="#" class="btn btn-primary bmd-ripple">Clear Market Application (:</button>

             </div><!-- end of market application form-->

            
        </div><!-- market add form-->
        

    </div>

</template>

<script>

export default{
    data:function(){
        return {
            showCoinApplication:false,
            showMarketApplication:false,
            marketData:{
                totalMarkets:0,
                totalCoins:0,
                markets:[
                   {marketName:'binance',totalSupported:1,marketID:1}
                ],
                coins:[
                    {
                        coinSymbol:'BTC',
                        coinName:'Bitcoin',
                        MaxSupply:21,
                        price_usd:100,
                        price_btc:0.002,
                        nominatedMarket:'Binance'
                    }
                ]
                            },
            coinInputData:{
                coinName:'',
                coinSymbol:'',
                coinMaxSupply:'',
                coinCirculatingSupply:'',
                nominatedExchangeTicker:'',
                websiteLink:'',
                annoncementLink:''
            },
            marketInputData:{
                marketName:'',
                marketTickerURL:''
            }
        }
    },methods:{
        addcouns(){

            var selectOfMarketOptions= document.querySelector(".marketSelectionSelect");
            //grab select from the form market selectino
            var valueOfMarketSelection= selectOfMarketOptions.value;
            //grab value of the selected value 

            var selectClassOfTockenOption= document.querySelector(".selectClassOfTocken");
            var valueOfSelectClassOfTockenOption= selectClassOfTockenOption.value;
            // grab and assign what the user classed as the class of the tocken being added

            
 
            //alert(valueOfMarketSelection);

            //verify all inputs are filled

            if(this.coinInputData.coinName.length>=1 && this.coinInputData.coinSymbol.length>=1 && this.coinInputData.coinMaxSupply.length>=1 && this.coinInputData.coinCirculatingSupply.length>=1){
                //proceed to the next checks
                alert("...");

            }else{
                alert("Ensure all inputs are filled");
            }

            this.clearCoinApplication();
            //call to clear coin applicaition


        },
        clearCoinApplication(){
            this.coinInputData.coinName="";
            this.coinInputData.coinSymbol="";
            this.coinInputData.coinMaxSupply="";
            this.coinInputData.coinCirculatingSupply="";
            this.coinInputData.nominatedExchangeTicker="";
            this.coinInputData.websiteLink="";
            this.coinInputData.annoncementLink="";
            /*method used to reset all the coin application form */
        },
        addCoin(){
            //show coin application
          this.showCoinApplication=true;
          this.showMarketApplication=false;
          //closr market application

        },
        closeCoinApplication(){
            //method used to close coin application
            this.showCoinApplication=false;
        },
        submitMarketApplication(){
            /*
            method will be used to submit market application
             */
            alert("submit market applicaiton");
        },
        clearMarketApplicationForm(){
            /*
            method will be used to clear market application

             marketName:'marketName',
                marketTickerURL:'tickerURL'
        
             */
             this.marketInputData.marketName="";
             this.marketInputData.marketTickerURL="";
            //clearing both inputs
         },
         openMarketApplicaton(){
             this.showCoinApplication=false;
             //close the coin application
            this.showMarketApplication=true;
             

         }
    }
}

</script>


<style scoped>

.buttonOptions{
    padding:20px;
    border:1px solid #ddd;
    margin-top:10px;
}
.marketAddForm{
    padding:100px;
}
.marketApplicationForm span{
    text-align:center;
    display:block;
}

.selectClass{
     height:100px;
    display:flex;
    align-items:center;
    justify-content:center;
    flex-flow:column;
}

.AddCoin{
    min-height:400px;
     margin-top:10px;
}

.coinData{
     min-height:150px;
    display:flex;
    align-items:center;
    flex-flow:column;
}

.infoMarkets{
     padding:10px;
    display:flex;
    align-items:center;
    flex-flow:column;
}

.adminContaner{
  }

h2{
    text-align:center;
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
    margin-top:10px;
 }

td, th {
    text-align: left;
    padding: 8px;
        text-align:center;

}

tr:nth-child(even) {
    background-color: #dddddd;
}

</style>