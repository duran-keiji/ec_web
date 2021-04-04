<template>
  <v-app>
    <v-main>
      <v-container class="fill-height" fluid>
        <v-col class="image" cols="12" sm="4" md="6">
          <v-img v-bind:src="itemImage" aspect-ratio="1" class="grey lighten-2"></v-img>
        </v-col>
        <v-col cols="12" sm="4" md="6">
          <v-card>
            <v-card-title>{{itemInfo.item_name}}</v-card-title>
            <v-card-text>
              <v-row>
                <v-rating
                  :value="itemInfo.evaluation"
                  color="amber"
                  dense
                  half-increments
                  readonly
                  size="14"
                ></v-rating>

                <div class="grey--text ml-4">{{itemInfo.evaluation}} ({{itemInfo.review}})</div>
              </v-row>
              <v-divider class="mx-4"></v-divider>
            </v-card-text>
            <v-card-text>
              <v-row>
                <span>価格:¥</span>
                <span class="price red--text">{{itemInfo.price}}</span>
              </v-row>
              <v-row>残り{{itemInfo.stock_quantity}}個</v-row>
              <v-row>{{itemInfo.size}}</v-row>
              <v-row>{{itemInfo.color}}</v-row>
              <v-row>{{itemInfo.details}}</v-row>
            </v-card-text>
            <v-divider class="mx-4"></v-divider>
            <v-card-actions>
              <v-btn class="cart" color="deep-purple">カートに入れる</v-btn>
              <v-btn class="hart" color="grey darken-3
">♡</v-btn>
            </v-card-actions>
          </v-card>
        </v-col>

        <v-card>
          <v-card-title>商品説明</v-card-title>
          <v-row>{{itemInfo.desctiption}}</v-row>
          <v-card-title>Q&A</v-card-title>
          <v-row>
            <span>質問:</span>
            <span class="question">{{itemInfo.customer_question}}</span>
          </v-row>
          <v-row>
            <span>答え:</span>
            <span class="answer">{{itemInfo.customer_answer}}</span>
          </v-row>
        </v-card>
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
      itemInfo: [],
      itemImage: require("../../assets/image/item/" + this.itemId + "-1.png")
    };
  },
  created: function() {
    this.axios
      .get("http://localhost:80/api/itemDetail/index/" + this.itemId)
      .then(res => {
        this.itemInfo = res.data;
      });
  }
};
</script>
<style>
.price {
  margin-left: 5px;
  font-size: 20px;
}

.question,
.answer {
  margin-left: 20px;
}

.image {
  max-width: 597vh;
  max-height: 586.526vh;
  min-height: 30vh;
  min-width: 30vh;
}
.cart {
  width: 80%;
}
</style>