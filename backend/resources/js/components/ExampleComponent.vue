<template>
    <div class="container site-section-heading text-center mb-5 w-border mx-auto
stify-content-center ">
            <div>
                    <h2>Comment</h2>
                    <form @submit.prevent="exec" class="input-group mb-3">
                        <textarea v-model="body" required rows="5" minlength="1" cols="30">ここに記入してください</textarea>
                        <button type="submit" class="btn btn-primary">送信</button>
                    </form>


                    <div>
                        <!-- I'm an example component. {{info.data.data[0].body}} -->
                        <table style="text-align:left;border-bottom:1px dotted gray;width:100%" v-for="comment in info.data.data">
                                {{ comment.body }}
                            </tr>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</template>

<script>
export default {
    props:["tests"],
    data () {
        return {
            info: null,
            body:null
        }
    },
    methods:{
        exec: function(){
            axios
            .post('/api/comment/',{
                    body: this.body,
                    news_id: this.tests,
            })
            .then(response => (this.info = response))
            .catch(error => console.log(error))

        }
    },
    mounted(){
        axios
            .get('/api/comment/'+this.tests)
            .then(response => {
                this.info = response
                }
            )
            .catch(error => console.log(error))
    }
}
</script>
