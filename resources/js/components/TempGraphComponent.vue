<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mb-3">
                    <div class="card-header">温度
                        <button @click=change class="btn btn-primary">更新</button>
                    </div>

                    <div class="card-body">
                        <line-chart v-if="loaded" :chart-data="datacollection"></line-chart>
                        <button @click="fillData()">Randomize</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import LineChart from './LineChart.js'
    export default {
        components: {
            LineChart
        },
        data () {
            return {
                loaded:false,
                datacollection: null
            }
        },
        mounted () {
            this.fillData()
            this.getChartData()
        },
        methods:{
            fillData(){
                this.datacollection = {
                    labels: [],
                    datasets: [{
                        data: [],
                        backgroundColor: 'none',
                        borderColor: 'red',
                        borderWidth: 1,
                        fill: false,
                    }],
                }
             },
            getChartData() {
                let self = this
                axios.get('/api/test')
                    .then(response =>{
                        let $data = response.data
                        $data = $data.reverse()
                        let temp_data = $data.map(function(value){
                            return value.temp
                        })
                        let date_data = $data.map(function(value){
                            return value.created_at
                        })
                        self.datacollection.datasets[0].data = temp_data
                        self.datacollection.labels= date_data
                        self.loaded = true
                });
            },
            change(){
                this.datacollection = {
                    labels: [1,1,4,3,6,3,],
                    datasets: [{
                        data: [4,5,3,2,3,6],
                        backgroundColor: 'none',
                        borderColor: 'red',
                        borderWidth: 1,
                        fill: false,
                    }],
                }
            }
        }
    }
</script>