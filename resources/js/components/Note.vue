<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
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
    export default {
        data() {
            return {
                notes: []
            }
        },
        mounted() {
            axios.get('notes').then((response) => {
                console.log(response)
                this.notes = response.data
            })
        }
    }
</script>
