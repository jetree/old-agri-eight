<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">温度
                        <button @click=change class="btn btn-primary">更新</button>
                        <button @click=getChartData class="btn btn-primary">取得</button>
                    </div>

                    <div>
                    <!-- <div class="card-body chart"> -->
                        <line-chart v-if="loaded" 
                        :chart-data="datacollection" 
                        :options=options
                        :height="400"
                        />
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">温度
                        <button @click=change class="btn btn-primary">更新</button>
                        <button @click=getChartData class="btn btn-primary">取得</button>
                    </div>

                    <div>
                    <!-- <div class="card-body chart"> -->
                        <line-chart v-if="loaded" 
                        :chart-data="datacollection" 
                        :options=options
                        :height="400"
                        />
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
                datacollection: null,
                options: {
                    scales: {
                        xAxes: [{
                            type: 'time',
                            time: {
                                unit: 'day'
                            }
                        }]
                    },
                    responsive:true,
                    maintainAspectRatio:false,
                    aspectRatio:3
                }
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
                        label:'温度',
                        data: [],
                        backgroundColor: 'none',
                        borderColor: 'red',
                        borderWidth: 1,
                        fill: false,
                    },
                    {
                        label:'水温',
                        data: [],
                        backgroundColor: 'none',
                        borderColor: 'blue',
                        borderWidth: 1,
                        fill: false,
                    }],

                }
             },
             
            getChartData() {
                this.loaded = false
                let self = this
                axios.get('/api/test')
                    .then(response =>{
                        let $data = response.data
                        console.log($data)
                        $data = $data.reverse()
                        let temp_data = $data.map(function(value){
                            return value.temp
                        })
                        let water_temp_data = $data.map(function(value){
                            return value.water_temp
                        })
                        let date_data = $data.map(function(value){
                            return value.created_at
                        })
                        self.datacollection.datasets[0].data = temp_data
                        self.datacollection.datasets[1].data = water_temp_data
                        self.datacollection.labels= date_data
                        self.loaded = true
                    });
            },
            change(){
                this.loaded = false
                let self = this
                axios.get('/api/test/50')
                    .then(response =>{
                        let $data = response.data
                        console.log($data)
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
                })
            }
        }
    }
</script>

<style scoped>
    .chart{
        height: 100px;
    }
    
</style>