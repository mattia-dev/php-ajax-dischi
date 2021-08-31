Vue.config.devtools = true;

new Vue (
    {
        el:'#app',
        data: {
            discs: [],
            genreList: [],
            filteredDiscs: [],
            selectedGenre: ''
        },
        created() {
            axios.get('http://localhost/php-ajax-dischi/backend/api.php')
                .then((response) => {
                    this.discs = response.data;
                    this.discs.forEach((element) => {
                        if (!this.genreList.includes(element.genre)) {
                            this.genreList.push(element.genre)
                        }
                    })
                });
        },
        methods: {
            getApi() {
                if (this.selectedGenre === '') {
                    axios.get('http://localhost/php-ajax-dischi/backend/api.php')
                        .then((response) => {
                            this.filteredDiscs = response.data;
                    })
                } else {
                axios.get('http://localhost/php-ajax-dischi/backend/apiFiltered.php' + '?genere=' + this.selectedGenre)
                    .then((response) => {
                        this.filteredDiscs = response.data;
                    })
                }
            }
        }
    }
);