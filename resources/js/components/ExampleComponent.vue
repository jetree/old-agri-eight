<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">API TEST</div>

                    <div class="card-body">
                        <ul>
                            <li v-for="(condition,key) in conditions">
                                {{condition.temp}}
                                {{condition.water_temp}}
                            </li>
                        </ul>
                        {{ conditions }}
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
