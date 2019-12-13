<template>
    <a href="#" class="btn btn-success" role="button" @click.prevent="processform">Procesar</a>
</template>

<script>
export default {
    mounted() {
        alert('hi!')
    },

    methods: {
        processform () {
            const form = document.getElementById('testform')
            const formdata = Object.fromEntries(new FormData(form).entries())

            console.log(formdata)

            axios.post("/process-test", formdata)
                .then(data => {
                    console.log(data)
                })
        }
    }
}
</script>
