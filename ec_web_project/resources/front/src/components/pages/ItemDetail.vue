<template>
  <v-app>
    <v-main>
      <v-container class="fill-height" fluid>
        <v-img v-bind:src="itemImage" aspect-ratio="1" class="grey lighten-2"></v-img>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "ItemDetail",
  props: {
    itemId: Number
  },
  data: function() {
    return {
      itemImage: require("../../assets/image/item/" + this.itemId + "-1.png")
    };
  }
};
</script>
<style>
</style>