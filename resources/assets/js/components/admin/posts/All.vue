<script>
import axios from 'axios';
import tinymce from '../TinyMCE'

export default {
    data () {
        return {
            posts: [],
            errors: [],
            createPostVisibility: false,
            title: '',
            editor: 'Dr.Nagy Bea',
            published_at: '',
            content: '',
            //image: []
        }
    },
    components: {
        tinymce
    },
    created () {
        return this.getAllPosts()
    },
    computed: {
        post () {
            return {
                title: this.title,
                editor: this.editor,
                published_at: this.published_at,
                description: this.content
            }
        }
    },
    methods: {
        getAllPosts () {
            axios.get('/api/posts')
                .then(response => {
                    // JSON responses are automatically parsed.
                    this.posts = response.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        createPost () {
            axios.post('/api/posts', this.post)
                .then(response => {
                    //this.createPostVisibility = false
                    this.title = ''
                    this.editor = 'Dr.Nagy Bea'
                    this.published_at = ''
                    this.content = ''
                })
                .catch(e => {
                    this.errors.push(e)
                })

            return this.getAllPosts()
        },
        //imageUpload () {

        //},
        deletePost(id) {
            axios.delete('/api/posts', id)
                .catch(e => {
                    this.errors.push(e)
                })

            return this.getAllPosts()
        }
    }
}
</script>

