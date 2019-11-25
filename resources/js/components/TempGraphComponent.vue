<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-header">温度</div>

                    <div class="card-body">
                            <!-- {{chartdata}} -->
                        <chart-component 
                            v-if="loaded" 
                            :chartdata="chartdata">
                        </chart-component>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        async mounted() {
            this.getChartData()
        },
        data:function(){
            return{
                loaded:false,
                chartdata:{
                    type:'line',
                    labels: ['1/1','2/1','3/1'],
                    datasets: [{
                        data: [],
                        backgroundColor: 'none',
                        borderColor: 'red',
                        borderWidth: 1,
                        fill: false,
                    }],
                },
            }
        },
        methods:{
            getChartData() {
                let self = this
                axios.get('/api/test')
                    .then(response =>{
                        console.log(response.data)
                        let $data = response.data
                        let temp_data = $data.map(function(value){
                            return value.temp
                        })
                        let date_data = $data.map(function(value){
                            return value.created_at
                        })
                        self.chartdata.datasets[0].data = temp_data
                        self.chartdata.labels= date_data
                        this.loaded = true
                });
            }
        }
    }
</script>