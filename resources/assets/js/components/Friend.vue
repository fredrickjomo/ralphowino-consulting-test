<template>
    <div class="container">
        <div class="row justify-content-center">
            <p class="text-center " v-if="loading">
                Loading...
            </p>
            <p class="text-center" v-if="!loading">
            <button class="btn btn-success" v-if="status==0" @click="add_friend">Add Friend</button>
                <button class="btn btn-success" v-if="status=='pending'" @click="accept_friend">Accept Friend</button>
                <span class="text-success" v-if="status=='waiting'">Waiting for response</span>
                <span class="text-success" v-if="status=='friends'">Friends</span>
            </p>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'
    export default {
        name:'Friends',
        mounted() {
            axios.get('friendship_status/' + this.profile_user_id)
                .then((response)=>{
                console.log(response)
                    this.status=response.body.status
                    this.loading=false
                })
        },
        props:['profile_user_id'],
        data(){
            return {
                status:'',
                loading:true
            }
        },
        methods:{
            add_friend(){
                this.loading=true
                axios.get('add_friend/' + this.profile_user_id)
                    .then((response)=>{
                  if(response.body==1){
                      this.status='waiting'
                      this.loading=false
                  }
                    })
            },
            accept_friend(){
                this.loading=true
                axios.get('accept_friend/' +this.profile_user_id)
                    .then((response)=>{
                    if (response.body==1){
                        this.loading='Friends'
                        this.loading=false

                    }
                    })

            }
        }
    }
</script>
