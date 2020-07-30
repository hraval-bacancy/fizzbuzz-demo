<template>
    <div class="container">
        <div>
        <h3>Click on FizzBuzz button to get detail.</h3>
        <b-button v-b-toggle.collapse-1 variant="primary">FizzBuzz</b-button>
        <b-collapse id="collapse-1" class="mt-2">
            <b-card>
                <div class="justify-content-center" v-if="data && data.length > 0">
                    <ul class="row">
                        <li v-for="(value,index) in data" :key="index" class="item"> 
                            <span :class="{'fizz-buzz-context': value == 'FizzBuzz'}">{{value}}</span>
                        </li>
                    </ul>
                </div>
                <div v-else>
                    No data found 
                </div>
            </b-card>
        </b-collapse>
        </div>
       
     
    </div>
</template>

<script>
    export default {
        name:'fizz-buzz',
        data(){
            return{
                data:[]
            }
        }, 
        created() {
            this.getData();
        },
        methods:{
            async getData() {
                await window.axios.get('/api/fizzBuzz')
                    .then(response => {
                        if(response.status == 200 && response.data.data){
                            this.data = response.data.data;
                        }
                    })
                    .catch(error => {
                        console.log(error);
                    })
                    .finally(() => {});
            }
        }
    }
</script>
<style scoped>
.item {
  margin-bottom: 15px;
  width: 10%;
}
.fizz-buzz-context{
    color: brown;
    font-weight: 700;
}
</style>