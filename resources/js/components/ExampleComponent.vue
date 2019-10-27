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
                        {{ $data }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return $data
        },
        mounted() {
            $data = axios.get('/api/test')
            console.log($data)
        }
    }
</script>
