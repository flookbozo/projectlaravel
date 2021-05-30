<template>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form v-on:submit.prevent="updatePost">
            <div class="form-group">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="userss.email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                v-model="userss.password"
              />
            </div>
            <div class="form-group">
              <label>Password Again</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password Again"
                v-model="userss.passwordAgain"
              />
            </div>

            <div class="text-center">
              <button class="btn btn-success btn-lg btn-block">
                Reset Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "resetpasswordUser",

  data() {
    return {
      users: [],
      userss: {
        email: "",
        password: "",
        passwordAgain: "",
  
      },
    };
  },
  created() {
    axios.get("api/edituser").then((response) => {
      this.users = response.data;
    });
  },
  methods: {
    updatePost() {
      for (var i = 0; i < this.users.length; i++) {
        if (this.userss.email == this.users[i].email) {
          axios
            .post(
              `http://127.0.0.1:8000/api/edituser/${this.$route.params.id}`,
              this.userss
            )
            .then((response) => {
              this.$router.push({ name: "profile" });
            });
        }
      }
    },
  },
};
</script>