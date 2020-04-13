<template>
    <form action="#" class="form-group" @submit.prevent="createNote">
        <textarea class="form-control" cols="30" rows="10" v-model="content"></textarea>
        <br>
        <button class="btn btn-danger float-right" type="submit">创建笔记</button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                content: null
            }
        },
        props: [
            'notes'
        ],
        methods: {
            createNote() {
                axios.post('notes', { content: this.content }).then((response) => {
                    this.notes.unshift(response.data)
                })
            }
        }
    }
</script>
