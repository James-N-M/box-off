<template>
    <div class="form-group col-md-6">
        <label for="location">Status</label>
        <select class="form-control" name="status">
            <option value=""></option>
            <option
                v-bind:key="status.id"
                v-for="status in statuses"
                v-bind:value="status.id"
            >
                {{ status.title }}
            </option>  
        </select>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                statuses: [], 
                url: 'api/v1/statuses',
            }
        }, 
        methods: {
            getLocations(){
                axios.get(this.url)
                .then(
                    statuses => {
                        this.statuses = statuses.data; 
                    }
                ); 
            }
        },
        mounted() {
            this.getLocations()
        }
    }
</script>