<template>
  <v-app>
    <!-- ヘッダー -->
    <v-app-bar app color="primary" dark>
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-dark.png"
          transition="scale-transition"
          width="40"
        />

        <v-img
          alt="Vuetify Name"
          class="shrink mt-1 hidden-sm-and-down"
          contain
          min-width="100"
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-name-dark.png"
          width="100"
        />
      </div>

      <v-spacer></v-spacer>

      <v-btn
        color="primary"
        href="https://github.com/vuetifyjs/vuetify/releases/latest"
        target="_blank"
        text
      >
        <span class="mr-2">Latest Release</span>
        <v-icon>mdi-open-in-new</v-icon>
      </v-btn>
    </v-app-bar>

    <div v-if="show">
      <Header />
    </div>
    <v-main>
      <router-view />
    </v-main>
  </v-app>
</template>

<script>
import Header from "./components/common/Header";
export default {
  name: "App",
  components: {
    Header
  },

  data: function() {
    return {
      show: true
    };
    //
  },
  mounted: function() {
    // URLが"/Login"の場合にヘッダーを非表示
    if (this.$route.path == "/Login") {
      this.show = false;
    }
  }
};
</script>