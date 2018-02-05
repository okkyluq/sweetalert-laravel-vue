<template>
    <div class="jumbotron">
        <h1>azzz heading</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button" v-on:click.prevent="getAlert()">Sign up today</a></p>
    </div>
    
</template>

<script>
    

    export default {
        mounted() {
            
        },
        methods: {
            getAlert(){
                swal({
                  position: 'center',
                  type: 'success',
                  title: 'Your work has been saved',
                  showConfirmButton: true,
                  timer: 1500
                })
            }
        }
    }
</script>
