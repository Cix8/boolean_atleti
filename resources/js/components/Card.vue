<template>
  <div class="card mb-4">
    <div class="card-body">
        <h5 class="card-title">{{ athlete.name }}</h5>
        <p class="card-text">{{ athlete.genre }}</p>
        <p class="category-text">Category: {{ category }}</p>
    </div>
    <div class="card-body">
        <router-link :to="{ name: 'athlete', params: { slug: athlete.slug } }" class="card-link">Read More</router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "Card",
  props: {
    post: Object
  },
  computed: {
    category() {
      if (this.athlete.category) {
        return this.athlete.category.name, this.athlete.category.discipline, this.athlete.category.genre
      }
    }
  },
  methods: {
    truncateText(text, maxCharNumber) {
      if (text.length > maxCharNumber) {
          return text.substr(0, maxCharNumber) + "...";
      } else {
          return text;
      }
    }
  }
}
</script>

<style lang="scss" scoped>
  .category-text {
    font-size: 0.7rem;
    color: gray;
  }
</style>