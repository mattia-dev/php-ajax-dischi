<template>
  <main>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
            <Album class="col d-flex" v-for="(album, index) in albums" :key="index"
                :cover="album.poster"
                :title="album.title"
                :artist="album.author"
                :year="album.year"
            />
        </div>
    </div>
  </main>
</template>

<script>
import Album from './Album.vue'

export default {
  name: 'Main',
  components: {
    Album,
  },
  props: {
    albums: Array
  }
}
</script>

<style scoped lang="scss">
main {
    padding: 48px 0;
}
</style>