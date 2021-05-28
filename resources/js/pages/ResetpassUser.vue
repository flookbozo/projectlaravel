<template>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form v-on:submit.prevent="onSubmitUser">
            <div class="form-group">
              <label>Email</label>
              <input
                type="text"
                class="form-control"
                placeholder="Email"
                v-model="email"
              />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                v-model="password"
              />
            </div>
            <div class="form-group">
              <label>Password Again</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password Again"
                v-model="passwordAgain"
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

      users: {},
    };
  },
  created() {
    axios
      .get(`http://127.0.0.1:8000/api/edituser/${this.$route.params.id}`)
      .then((response) => {
        this.post = response.data;
        console.log(this.post);
      });
  },
};
</script>