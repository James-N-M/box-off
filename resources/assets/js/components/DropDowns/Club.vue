<template>
    <div class="form-group col-md-6">
        <label for="location">Club</label>
        <select class="form-control" name="club">
            <option value=""></option>
            <option
                v-bind:key="club.id"
                v-for="club in clubs"
                v-bind:value="club.id"
            >
                {{ club.name }}
            </option>  
        </select>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                clubs: [], 
                url: 'api/v1/clubs',
            }
        }, 
        methods: {
            getLocations(){
                axios.get(this.url)
                .then(
                    clubs => {
                        this.clubs = clubs.data; 
                    }
                ); 
            }
        },
        mounted() {
            this.getLocations()
        }
    }
</script>
