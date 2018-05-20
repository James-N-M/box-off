<template>
    <div class="form-group col-md-6">
        <label for="location">Location</label>
        <select class="form-control" name="location">
            <option
                v-bind:key="location.id"
                v-for="location in locations"
                v-bind:value="location.id"
            >
                {{ location.city }}
            </option>  
        </select>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                locations: [], 
                url: 'api/v1/locations',
            }
        }, 
        methods: {
            getLocations(){
                axios.get(this.url)
                .then(
                    locations => {
                        this.locations = locations.data; 
                    }
                ); 
            }
        },
        mounted() {
            this.getLocations()
        }
    }
</script>
