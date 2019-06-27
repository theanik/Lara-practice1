<template>
   <button :type="btype" v-text="testdata.age" class="btn btn-success"></button>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            
            axios.post('api/testvue',{})
                .then(res=>{
                    this.testdata = res.data
                })
          
        },
        data:()=>{
            return {
                testdata:null
            }
        },
        
        props:[
            "btext",
            "btype"
        ],
    }
</script>
