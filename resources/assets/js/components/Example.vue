<template>
    <div class="container"> 
        <div class="chart-container" style="position: relative; height:10vh; width:10wh">
        <h1>Posts Per Month Graph</h1>
        <br>
        <canvas id="postsGraph"></canvas>
        <h1>Comments Per Month Graph</h1>
        <br>
        <canvas id="commentsGraph"></canvas>
        <br>
       <h1>Users Per Month Graph</h1>
       <br>
        <canvas id="usersGraph"></canvas>
        <br>
        <h1>Events Per Month Graph</h1>
        <br>
        <canvas id="eventsGraph"></canvas>
        <br>
        <h1>Matches Per Month Graph</h1>
        <br>
        <canvas id="matchesGraph" ></canvas>
        <br>
       <h1>Locations Added Per Month Graph</h1>
        <br>
        <canvas id="locationsGraph" ></canvas>
       <br>
       <h1>Clubs Added Per Month Graph</h1>
        <br>
        <canvas id="clubsGraph"></canvas>
        </div>
        </div>
</template>

<script>
    export default {
        data(){
            return {

            }
        },
        mounted() {
            this.getPosts(),
            this.getComments(),
            this.getUsers(),
            this.getEvents(),
            this.getMatches(),
            this.getLocations(),
            this.getClubs()
        },
        methods: {
            getPosts(){
                axios.get('/api/getposts').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("postsGraph");
                ctx.height = 200;
                ctx.width = 200;
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Posts Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            },
            getComments(){
                axios.get('/api/getcomments').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("commentsGraph");
                var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Comments Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            }, // end of Graph 
                getUsers(){
                axios.get('/api/getusers').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("usersGraph");
                var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Users Signed Up Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            }, // end of Graph 
                getEvents(){
                axios.get('/api/getevents').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("eventsGraph");
                var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Events Made Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            }, // end of Graph 
                getMatches(){
                axios.get('/api/getmatches').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("matchesGraph");
                var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Matches Made Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            }, // end of Graph 
                getLocations(){
                axios.get('/api/getlocations').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("locationsGraph");
                var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Locations Added Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            }, // end of Graph 
                getClubs(){
                axios.get('/api/getclubs').then(response => {
                let labels = response.data.map(function(item){
                    return item.month; 
                }); 

                let data = response.data.map(function(item){
                    return item.count; 
                });

                var ctx = document.getElementById("clubsGraph");
                var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Clubs Added Per Month',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
                })
            } // end of Graph 
        }
    }
</script>
