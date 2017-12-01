<template>
<div class="requestCoinContainer">


 <div class="bmd-field-group">
    <input type="text" class="bmd-input"  required="">
    <span class="bmd-bar"></span>
    <label class="bmd-label">ICO Token or Coin Name</label>
    <span class="bmd-field-feedback"></span>
  </div>

 <div class="bmd-field-group">
    <input type="text" class="bmd-input"  required="">
    <span class="bmd-bar"></span>
    <label class="bmd-label">ICO Coin or Symbol Name</label>
    <span class="bmd-field-feedback"></span>
  </div>

   <div class="bmd-field-group">
    <input type="text" class="bmd-input"  required="">
    <span class="bmd-bar"></span>
    <label class="bmd-label">Website</label>
    <span class="bmd-field-feedback"></span>
  </div>

   <div class="bmd-field-group">
    <input type="text" class="bmd-input"  required="">
    <span class="bmd-bar"></span>
    <label class="bmd-label">Annoncement Page</label>
    <span class="bmd-field-feedback"></span>
  </div>

   <div class="bmd-field-group">
    <input type="text" class="bmd-input"  required="">
    <span class="bmd-bar"></span>
    <label class="bmd-label">Twitter</label>
    <span class="bmd-field-feedback"></span>
  </div>

    <textarea style="display:block;width:100%;height:200px;margin-top:10px;" placeholder="Description of ICO">
    </textarea>
    
    We'll tweet you when your ICO is listed
  

    

  
        
     <button style="margin:20px;" href="#" class="btn btn-primary bmd-ripple">Submit</button>

</div>
</template>


<script>

export default{
    data:function(){
        return {

    }
    }
}

</script>

<style scoped>

.requestCoinContainer{
    padding:30px;
}


</style>