var app = new Vue({
    el: '#app',
    data: {
        dischi: {},
    },
    mounted() {

        axios.get('http://localhost:8888/php-ajax-dischi/php/api.php')
        .then( response => {
            this.dischi = response.data;
            console.log(this.dischi);
            });

    },
});
  