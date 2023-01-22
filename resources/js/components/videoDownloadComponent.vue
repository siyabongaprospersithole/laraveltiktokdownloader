<template>
  <div>
    
    <form action="#" class="banner_search_form">
                        <input type="search" v-model="link" class="form-control" placeholder='Paste instagram video link'>
                       
                        <button type="button" @click="Save"><i class="icon_search"></i></button>
                    </form>

                    <div class="is-invalid" v-if="errors.link" style="color: red;">{{  errors.link[0] }}</div> 

                    <br>
                    <div v-if="tiktok" id="video-image" class="rounded-2 py-2 row mx-1 mt-5" style="background-color: #E7E9EB;max-width: 570px;margin: 0 auto;display: contents;">
                        <img id="video_image" :src="tiktok.image" alt="tiktok" class="rounded-3 col-auto p-0 mx-2" style="height: 100px; width: 100px; ">
                        <div class="col">
                        <p id="author" style="margin-top: 4%; font-size: 18px!important;" class="fw-bold">{{  tiktok.user }}</p>
                        <p id="video_title" style="font-size: 14px!important;">{{  tiktok.description }} </p>
                       


                        <a :href="'/dwn/wm/'+tiktok.link" class="btn action_btn thm_btn">Download watermarked video</a>

                        <a :href="'/dwn/sd/'+tiktok.link" class="btn action_btn thm_btn">Download Sound</a>
                        </div>
                        </div>
                        </div>

</template>

<script>
    export default {
        data(){
            return {
                tiktok: '',
                link: '',
                errors: [],

            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            Save: function(){
                let self = this;

               
                axios({
              method: 'post',
              url: '/tik',
              data: {
                link: this.link
              }
            })
            .then(function (response) {                   
            //A Successful response of type Array is expected
            //Array status should include the values : Success and Invalid
     
        //    $('#addApiModal').modal('hide');

        self.tiktok = response.data.tiktok;
          

       // setTimeout(function(){ window.location.reload(); }, 1500);
             console.log(response.data.html)
       
            }).catch(function (errors){
               
                //set the errors variable to response errors so that they can be displayed dynamically
                self.errors = errors.response.data.errors; 
        
            
            });



            

            },
        }
    }
</script>
