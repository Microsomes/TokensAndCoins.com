<template>
<div class="siteContainer">

    <div class="marketInfo">

        <div class="marketAndCurrencies">
            <div class="amountOfCoins">{{marketData.totalCounts}} coins</div>
            <div class="amountOfMarkets">{{marketData.totalMarkets}} markets</div>
        </div>

        <div class="marketInfod">
            <div class="marketCap">Market Cap ${{marketData.totalMarketCap}}</div>
            <div class="24HrVol">24h Vol {{marketData.dayTotalVolume}}</div>
            <div class="BtcDominatce">BTC Dominace {{marketData.bitcoinDominance}}%</div>
        </div>
        
        <div class="followUs">
            <a target="_blank" href="https://twitter.com/tockensandcoins">Follow Us</a>
        </div>

    </div>
</div>

</template>

<script>
export default{
    data:function(){
        return {
            marketData:{
                totalCounts:0,
                totalMarkets:0,
                totalMarketCap:1,
                dayTotalVolume:33,
                bitcoinDominance:20
            }
        }
    },created(){
        //grab market info data
        var globalDataAPILink="https://api.coinmarketcap.com/v1/global/";
        //grab global market info from coin market cap
        var home=this;
        //refers to the main object
        //get global market data
         $.get(globalDataAPILink, function(data, status){
        console.log(data);

        var totalMarketCap= data["total_market_cap_usd"];
        var active_markets= data['active_markets'];
        var bitcoinDominance= data['bitcoin_percentage_of_market_cap'];
        var total24hrVolume= data["total_24h_volume_usd"];
        var active_currencies= data['active_currencies'];

        //method used to add commas in numbers
        const numberWithCommas = (x) => {
          return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        home.marketData.totalMarkets=active_markets;
        home.marketData.totalCounts=active_currencies;
        home.marketData.totalMarketCap=numberWithCommas(totalMarketCap);
        home.marketData.dayTotalVolume=numberWithCommas(total24hrVolume);
        home.marketData.bitcoinDominance=bitcoinDominance;
        });
    }
}
</script>

<style scoped>

.followUs{
    display:flex;
    align-items:center;
    justify-content:center;
}

.marketInfo{
    display:flex;
}

.marketInfod{
    display:flex;
     width:60%;
    justify-content:space-around;
    align-items:center;
        font-family: 'Roboto', sans-serif;


}

.siteContainer{
    border:1px solid #ddd;
    height:30px;
    margin-top:20px;
}
.marketAndCurrencies{
    display:flex;
     height:30px;
    width:200px;
    display:flex;
    align-items:center;
    font-family: 'Roboto', sans-serif;
    margin-left:50px;

 }
.amountOfCoins{
     width:50%;
    display:flex;
        justify-content:center;

}
</style>