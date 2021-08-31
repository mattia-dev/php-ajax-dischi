<template>
  <header>
    <img src="../assets/spotify-logo.png" alt="spotify-logo">

    <div class="search-field">
        <div class="input-search">
            <div>Search by artist</div>
            <input type="text" class="form-control" placeholder="Type artist's name" v-model="searchedArtist" @keyup.enter="[$emit('search', searchedArtist), clear()]">
        </div>

        <div class="select-search">
            <div>Search by genre</div>
            <select class="form-select" v-model="selectedGenre" @change="$emit('select', selectedGenre)">
                <option value="All">All genres</option>
                <option v-for="(genre, index) in genreSelection()" :key="index" :value="genre">{{genre}}</option>
            </select>
        </div>
    </div>
  </header>
</template>

<script>
export default {
  name: 'Header',
  props: {
    albums: Array
  },
  data() {
    return {
        selectedGenre: "All",
        searchedArtist: ""
    }
  },
  methods: {
    genreSelection: function() {
        let genres = [];

        this.albums.forEach(album => {
            if (!genres.includes(album.genre)) {
                genres.push(album.genre);
            }
        });

        return genres;
    },
    clear: function() {
        this.searchedArtist = "";
    }
  }
}
</script>

<style scoped lang="scss">
@import "../style/colors";

header {
    height: 80px;
    background-color: $bg-secondary;
    padding: 0 24px;
    display: flex;
    justify-content: space-between;
    align-items: center;
     
    img {
        height: 75%;
    }  

    .search-field {
        flex-basis: 45%;
        height: 60%;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        color: $title-color;
        
        .input-search, .select-search {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .input-search {
            width: 50%;

            input {
                width: 180px;
            }
        }

        .select-search {
            width: 50%;

            select {
                width: 150px;
            }
        }

        div {
            margin-right: 12px;
        }
    }
}
</style>