<template>
  <div class="container">
    <div class="card">
       <div class="card-header" id="reset">
        <h3 class="mb-1" style="color: #fff0e2">Reset Password</h3>
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form v-on:submit.prevent="updatePost">
            
            <div class="form-group">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="post.email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                v-model="post.password"
              />
            </div>
            <div class="form-group">
              <label>Password Again</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password Again"
                v-model="post.passwordAgain"
              />
            </div>

            <div class="text-center">
              <button class="btn  btn-lg btn-block" id="buttonlogin" style="color:#fff0e2">
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
      post:null,
    };
  },
  created() {
    axios
      .get(`http://127.0.0.1:8000/api/resetuser/${this.$route.params.id}`)
      .then((response) => {
        this.post = response.data;
        console.log(this.post);
      });
  },
  methods: {
    updatePost() {
      
      axios
        .post(
          `http://127.0.0.1:8000/api/resetuser/${this.$route.params.id}`,
          this.post
        )
        .then((response) => {
          this.$router.push({ name: "login" });
        });

    },
  },
};
</script>