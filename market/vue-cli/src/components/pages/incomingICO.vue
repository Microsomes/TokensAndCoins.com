<template>
<div class="incommingICO">
    <h2>Incoming ICOS</h2>
    <span>Invest in the very best ICOS</span>


    <div class="ICOListContainer">

        <div class="ICOItem">
            <div class="topItemICO">
                <div class="image"></div>

                <div class="text"></div>

                <div class="percentage"></div>
            </div><!-- end of top item ico-->
            <div class="bottomItemICO">
                <div class="bottomItemText"></div>
            </div><!-- end of bottom item ico-->
        </div><!-- end of ICO ITEM-->
        
    </div><!-- end of icolistcontainer-->

</div><!-- end of incomming ico-->

</template>

<style scoped>

.ICOListContainer{
    border:1px solid black;
    height:200px;
}

*{
    margin:0px;
}
.incommingICO{
    min-height:300px;
    border:1px solid #ddd;
    padding:20px;
}

.incommingICO h2{
    text-align:center;
}

.incommingICO span{
    text-align:center;
    display:block;
    position:relative;
    left:-4px;
    
}
</style>