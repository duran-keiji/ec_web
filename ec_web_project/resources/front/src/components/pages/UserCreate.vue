<template>
  <v-app id="inspire">
    <v-main>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="4">
            <v-card>
              <v-card-title>
                <span class="headline">新規登録</span>
              </v-card-title>
              <v-card-text>
                <v-container>
                  <v-row>
                    <v-col cols="12" sm="4" md="6">
                      <v-text-field label="姓*" required id="last-name" v-model="UserInfo.last_name"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="4" md="6">
                      <v-text-field
                        label="名*"
                        persistent-hint
                        required
                        id="first-name"
                        v-model="UserInfo.first_name"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-text-field label="メールアドレス*" required id="email" v-model="UserInfo.email"></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-text-field
                        label="パスワード*"
                        type="password"
                        required
                        id="password"
                        v-model="UserInfo.password"
                      ></v-text-field>
                    </v-col>
                    <v-col cols="12">
                      <v-text-field label="パスワード再確認*" type="password" required id="check-password"></v-text-field>
                    </v-col>
                    <v-col cols="12" sm="6">
                      <v-select
                        label="年齢"
                        v-model="UserInfo.age"
                        :items="age"
                        item-text="text"
                        item-value="value"
                        return-object
                      ></v-select>
                    </v-col>
                    <v-col cols="12" sm="6">
                      <v-select
                        label="性別"
                        v-model="UserInfo.sex"
                        :items="sex"
                        item-text="text"
                        item-value="value"
                        return-object
                      ></v-select>
                    </v-col>
                    <v-col cols="12">
                      <v-autocomplete
                        :items="['ファション', 'アクセサリー', 'コスメ', 'スポーツ', '家具家電', '日用品', '書籍']"
                        label="興味"
                        multiple
                      ></v-autocomplete>
                    </v-col>
                  </v-row>
                </v-container>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn color="red" v-bind:to="{ name: 'Login' }">戻る</v-btn>
                <v-btn color="teal" v-on:click="CreateUser" type="button">保存</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-main>
  </v-app>
</template>
<script>
export default {
  name: "UserCreate",
  data: function() {
    return {
      UserInfo: {},
      age: [
        { text: "0-17", value: 1 },
        { text: "18-29", value: 2 },
        { text: "30-54", value: 3 },
        { text: "54以上", value: 4 }
      ],
      sex: [
        { text: "男性", value: 1 },
        { text: "女性", value: 2 },
        { text: "その他", value: 3 }
      ]
    };
  },
  methods: {
    CreateUser() {
      this.UserInfo.age = this.UserInfo.age.value;
      this.UserInfo.sex = this.UserInfo.sex.value;
      this.UserInfo.delete_flg = 0;

      this.axios
        .post("http://localhost:80/api/user/create", this.UserInfo)
        .then(res => {
          this.$router.push({ name: "Login" });
        });
    }
  }
};
</script>