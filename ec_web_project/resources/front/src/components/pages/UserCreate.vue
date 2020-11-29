<template>
  <v-app id="inspire">
    <v-main>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="4">
            <v-card>
              <validation-observer ref="observer" v-slot="{ invalid }">
                <v-form>
                  <v-card-title>
                    <span class="headline">新規登録</span>
                  </v-card-title>
                  <v-card-text>
                    <v-container>
                      <v-row>
                        <v-col cols="12" sm="4" md="6">
                          <validation-provider v-slot="{ errors }" name="姓" rules="required|max:50">
                            <v-text-field
                              label="姓*"
                              required
                              id="last-name"
                              v-model="UserInfo.last_name"
                              :error-messages="errors"
                            ></v-text-field>
                          </validation-provider>
                        </v-col>
                        <v-col cols="12" sm="4" md="6">
                          <validation-provider v-slot="{ errors }" name="名" rules="required|max:50">
                            <v-text-field
                              label="名*"
                              persistent-hint
                              required
                              id="first-name"
                              v-model="UserInfo.first_name"
                              :error-messages="errors"
                            ></v-text-field>
                          </validation-provider>
                        </v-col>
                        <v-col cols="12">
                          <validation-provider
                            v-slot="{ errors }"
                            name="メールアドレス"
                            rules="required|email|max:256"
                          >
                            <v-text-field
                              label="メールアドレス*"
                              required
                              id="email"
                              v-model="UserInfo.email"
                              :error-messages="errors"
                            ></v-text-field>
                          </validation-provider>
                        </v-col>
                        <v-col cols="12">
                          <validation-provider
                            v-slot="{ errors }"
                            name="パスワード"
                            rules="required|max:50|min:8"
                            vid="confirmation"
                          >
                            <v-text-field
                              label="パスワード*"
                              type="password"
                              required
                              id="password"
                              v-model="UserInfo.password"
                              :error-messages="errors"
                            ></v-text-field>
                          </validation-provider>
                        </v-col>
                        <v-col cols="12">
                          <validation-provider
                            v-slot="{ errors }"
                            name="パスワード確認"
                            rules="required|max:50|confirmed:confirmation"
                          >
                            <v-text-field
                              label="パスワード再確認*"
                              type="password"
                              required
                              id="check-password"
                              v-model="CheckPassword"
                              :error-messages="errors"
                            ></v-text-field>
                          </validation-provider>
                        </v-col>
                        <v-col cols="12" sm="6">
                          <v-select
                            label="年齢"
                            v-model="UserInfo.age"
                            :items="age"
                            item-text="text"
                            item-value="value"
                            :rule="ageRules"
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
                            :rule="sexRules"
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
                    <v-btn color="teal" v-on:click="CreateUser" type="button" :disabled="invalid">保存</v-btn>
                  </v-card-actions>
                </v-form>
              </validation-observer>
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
      ],
      errors: "",
      CheckPassword: "",
      ageRules: [
        v =>
          (v && this.UserInfo.age.value >= 1 && this.UserInfo.age.value <= 4) ||
          "不正な値が入力されています"
      ],
      sexRules: [
        v =>
          (v && this.UserInfo.sex.value >= 1 && this.UserInfo.sex.value <= 3) ||
          "不正な値が入力されています"
      ]
    };
  },
  methods: {
    CreateUser: function() {
      if (this.$refs.observer.validate()) {
        this.UserInfo.age = this.UserInfo.age.value;
        this.UserInfo.sex = this.UserInfo.sex.value;
        this.UserInfo.delete_flg = 0;

        this.axios
          .post("http://localhost:80/api/user/create", this.UserInfo)
          .then(res => {
            alert("登録が完了しました");
            this.$router.push({ name: "Login" });
          });
      } else {
        alert("登録に失敗しました");
      }
    },
    activateConfirmErrMsg: function() {
      this.isConfirmed = true;
    }
  }
};
</script>