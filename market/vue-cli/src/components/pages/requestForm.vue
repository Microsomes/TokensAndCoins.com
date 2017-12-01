<template>

<div class="requestForm">

    <h2>Request Form</h2>
    <span>Please fill in all the details fully and correctly</span>
     <div class="formContainer">
    
      <div class="btn-group bmd-btn-group">
    <a @click="currentPage='requestcoin'" href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400">Request Coin or Tocken</a>
    <a @click="currentPage='requestICo'" href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400">Request ICO</a>
    <a style="height:34px" @click="currentPage='requestICo'" href="#" class="btn btn-default bmd-ripple bmd-ink-grey-400"><router-link style="color:black;" to="/"><i class="material-icons">arrow_back</i></router-link></a>
   </div>
  
</div>
 
    <div class="formform">
        <component :is="currentPage"></component>
    </div>

    </div>

</div>

</template>

<script>

export default{
    data:function(){
        return {
            currentPage:'requestcoin'
        }
    }
}

</script>


<style scoped>


.formform{
    min-height:300px;
    border:1px solid #ddd;
    margin-bottom:20px;
    border-radius:5px;
}


h2{
    text-align:center;
}
span{
    text-align:center;
    display:block;
}
.formContainer{
    padding:100px;
    padding-top:20px;
}

</style>