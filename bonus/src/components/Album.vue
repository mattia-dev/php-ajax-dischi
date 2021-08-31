<template>
  <div>
      <div class="album-card">
        <img :src="cover" :alt="`cover of ${title}`">
        <div class="title">{{title}}</div>
        <div class="album-info">
            <div class="artist">{{artist}}</div>
            <div class="year">{{year}}</div>
        </div>
      </div>
  </div>
</template>

<script>
export default {
  name: 'Album',
  props: {
    cover: String,
    title: String,
    artist: String,
    year: Number,
  }
}
</script>

<style scoped lang="scss">
@import "../style/colors";

.album-card {
    width: 100%;
    background-color: $bg-secondary;
    padding: 24px;
    margin: 12px 0;
    text-align: center;
    border-radius: 5px;
    box-shadow: 6px 3px 3px rgba(0, 0, 0, .15);

    img {
        width: 100%;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        color: $title-color;
        margin: 12px 0;
    }

    .album-info {
        color: $subtitle-color;

        .artist {
            font-size: 16px;
            font-weight: 600;
        }

        .year {
            font-size: 14px;
        }
    }
}
</style>