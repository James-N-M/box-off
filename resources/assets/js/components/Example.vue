<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Here is a different component</div>

                    <div class="card-body">
                        <ul v-for="post in posts">
                            <li>{{post.id}}</li>
                            <li>{{post.title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                posts: [],
                post: {
                    id: 0,
                    title: '',
                    body: ''
                }
            }
        },
        mounted() {
            this.getPosts()
        },
        methods: {
            getPosts(){
                axios.get('/api/getposts').then(response => {
                    console.log(response)
                    this.posts = response.data
                })
            }
        }
    }
</script>
