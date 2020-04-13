<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <note-create :notes="notes"></note-create>

                    <div class="card-header">Note Component</div>

                    <div class="card-body">
                        <div v-for="note in notes">
                            <h4>{{ note.user.name }}</h4>
                            <p>{{ note.content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import NoteCreate from './NoteCreate.vue';

    export default {
        data() {
            return {
                notes: []
            }
        },
        components: [
            NoteCreate
        ],
        mounted() {
            axios.get('notes').then((response) => {
                this.notes = response.data
            })
        }
    }
</script>
