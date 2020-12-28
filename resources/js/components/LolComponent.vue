<template>
    <div class="container">
      <br>
      <br>
      <br>
        <input v-model='text' type="text" name="text">
        <br>
        <span v-on:click="subm" >Suka</span>

    </div>
</template>

<script>
    export default {
      data() {
          return {
                  text: ''
          }
      },
      methods:{
        subm:function(){
          $.ajax({
            url:
          })
        }
      }

    }
</script>
