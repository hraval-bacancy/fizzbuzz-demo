<template>
    <div>
        <ul>
            <li v-for="(value,index) in data" :key="index"> 
                <span>{{value}}</span>
            </li>
        </ul>
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
