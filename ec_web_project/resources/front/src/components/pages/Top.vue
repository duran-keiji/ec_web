<template>
  <v-app>
    <v-main>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <!-- <v-col v-for="n in 50" :key="n" class="d-flex child-flex" cols="3"> -->
          <v-col v-for="(image, index) in itemList" :key="index" class="d-flex child-flex" cols="3">
            <v-img v-bind:src="image" aspect-ratio="1" class="grey lighten-2">
              <template v-slot:placeholder>
                <v-row class="fill-height ma-0" align="center" justify="center">
                  <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                </v-row>
              </template>
            </v-img>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "Top",
  props: {
    source: String
  },
  data: function() {
    return {
      itemCode: {},
      itemList: {}
    };
  },
  created: function() {
    this.axios.get("http://localhost:80/api/top/index").then(res => {
      this.itemCode = res.data.map(code => code.item_id.toString());
      this.itemList = this.itemCode.map(x =>
        require("../../assets/image/item/" + x + "-1.png")
      );
    });
  }
};
</script>
<style>
.v-main {
  padding-right: 7% !important;
  padding-left: 7% !important;
  margin-top: -53vh !important;
}
</style>