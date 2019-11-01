<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-header">温度</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="(condition,key) in conditions">
                                {{condition.temp}}
                            </li>
                            <li v-for="(condition,key) in conditions">
                                {{condition.water_temp}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            axios.get('/api/test')
                .then(response =>{
                    this.conditions = response.data
                });
        },
        data:function(){
            return{
                conditions:[]
            }
        }
    }
</script>
