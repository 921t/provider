<template>
    <form action="#" class="form-group" @submit.prevent="createNote">
        <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
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
        methods: {
            createNote() {
                console.log('2333')
            }
        }
    }
</script>
