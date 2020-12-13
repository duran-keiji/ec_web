<template>
  <v-app id="inspire">
    <v-main>
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="4">
            <v-card class="elevation-12">
              <validation-observer ref="observer">
                <v-form>
                  <v-toolbar color="primary" dark flat>
                    <v-toolbar-title>ログイン</v-toolbar-title>
                    <v-spacer></v-spacer>
                  </v-toolbar>
                  <v-card-text>
                    <v-form>
                      <validation-provider
                        v-slot="{ errors }"
                        name="メールアドレス"
                        rules="required|email|max:256"
                      >
                        <v-text-field
                          label="メールアドレス*"
                          required
                          id="email"
                          name="email"
                          prepend-icon="mdi-account"
                          type="text"
                          v-model="UserInfo.email"
                          :error-messages="errors"
                        ></v-text-field>
                      </validation-provider>

                      <validation-provider v-slot="{ errors }" name="パスワード" rules="required|max:50">
                        <v-text-field
                          id="password"
                          label="パスワード*"
                          name="password"
                          prepend-icon="mdi-lock"
                          type="password"
                          required
                          v-model="UserInfo.password"
                          :error-messages="errors"
                        ></v-text-field>
                      </validation-provider>
                    </v-form>
                  </v-card-text>
                  <v-card-actions>
                    <v-btn v-bind:to="{ name: 'UserCreate' }" color="teal">新規登録</v-btn>
                    <v-spacer></v-spacer>
                    <v-spacer></v-spacer>
                    <v-btn
                      color="primary"
                      v-on:click="CheckUserInfo(UserInfo.email, UserInfo.password)"
                    >ログイン</v-btn>
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
  name: "Login",
  data: function() {
    return {
      UserInfo: {},
      errors: ""
    };
  },
  methods: {
    CheckUserInfo(email, password) {
      if (this.$refs.observer.validate()) {
        this.axios
          .get("http://localhost:80/api/user/get/" + email + "/" + password)
          .then(res => {
            if (res.data.status == 200) {
              this.$router.push({ name: "Top" });
            } else {
              alert(res.data.error_msg);
            }
          });
      }
    }
  }
};
</script>
