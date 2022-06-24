<template>
    <div>
        home
    </div>
</template>

<script>
export default {
    data() {
        return {
            menu: null
        }
    },
    created() {
        this.getMenu()
    },
    methods: {
        getMenu() {
            let uri = '/api/menu'
            this.axios.get(uri).then((response) => {
                console.log(response.data)
            })
            
        }
    }
}
</script>