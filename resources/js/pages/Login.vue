<template>
  <div class="container">
    <nav
      class="nav nav-pills nav-justified navbar-dark bg-dark"
      id="pills-tab"
      role="tablist"
    >
      <a
        class="nav-item nav-link active"
        id="pills-hospital-tab"
        data-toggle="pill"
        href="#pills-hospital"
        role="tab"
        aria-controls="pills-hospital"
        aria-selected="true"
        text
        >Hospital</a
      >
      <a
        class="nav-item nav-link"
        id="pills-user-tab"
        data-toggle="pill"
        href="#pills-user"
        role="tab"
        aria-controls="pills-user"
        aria-selected="false"
        >User</a
      >
    </nav>
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="pills-hospital"
        role="tabpanel"
        aria-labelledby="pills-hospital-tab"
      >
        <div class="card">
          <div class="card-header">
            <h3 class="mb-1">Login Hospital</h3>
          </div>
          <div class="card-body">
            <div class="col-md-6 offset-md-3">
              <form v-on:submit.prevent="onSubmitHospital">
                <div class="alert alert-danger" v-if="hospital.errors.length">
                  <ul class="mb-0">
                    <li v-for="(error, index) in hospital.errors" :key="index">
                      {{ error }}
                    </li>
                  </ul>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username..."
                    v-model="hospital.username"
                  />
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password..."
                    v-model="hospital.password"
                  />
                </div>

                <button class="btn btn-success">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div
        class="tab-pane fade"
        id="pills-user"
        role="tabpanel"
        aria-labelledby="pills-user-tab"
      >
        <div class="card">
          <div class="card-header">  <h3 class="mb-1">Login User</h3></div>
          <div class="card-body">
            <div class="col-md-6 offset-md-3">
              <form v-on:submit.prevent="onSubmitUser">
                <div class="alert alert-danger" v-if="user.errors.length">
                  <ul class="mb-0">
                    <li v-for="(error, index) in user.errors" :key="index">
                      {{ error }}
                    </li>
                  </ul>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username..."
                    v-model="user.username"
                  />
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password..."
                    v-model="user.password"
                  />
                </div>

                <button class="btn btn-success">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "login",
  props: ["app"],
  data() {
    return {
      user: {
        username: "",
        password: "",
        errors: [],
      },
      hospital: {
        username: "",
        password: "",
        errors: [],
      },
    };
  },
  methods: {
    onSubmitUser() {
      this.user.errors = [];

      if (!this.user.username) {
        this.user.errors.push("โปรดใส่ Username");
      }

      if (!this.user.password) {
        this.user.errors.push("โปรดใส่ Password");
      }

      if (!this.user.errors.length) {
        const data = {
          username: this.user.username,
          password: this.user.password,
        };
        this.app.req
          .post("auth/user/login", this.user)
          .then((response) => {
            this.app.user = response.data.user;
            localStorage.setItem("User", "User");
            this.$router.push("/");
          })
          .catch((error) => {
            this.user.errors.push(error.response.data.error);
          });
      }
    },
    onSubmitHospital() {
      this.hospital.errors = [];

      if (!this.hospital.username) {
        this.hospital.errors.push("โปรดใส่ Username");
      }

      if (!this.hospital.password) {
        this.hospital.errors.push("โปรดใส่ Password");
      }

      if (!this.hospital.errors.length) {
        const data = {
          username: this.hospital.username,
          password: this.hospital.password,
        };

        this.app.req
          .post("auth/hospital/login", this.hospital)
          .then((response) => {
            this.app.hospital = response.data.hospital;
            localStorage.setItem("User", "H");
            this.$router.push("/");
          })
          .catch((error) => {
            this.hospital.errors.push(error.response.data.error);
          });
      }
    },
  },
};
</script>


<style>
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #ff4343;
  font-size: 20px;
}
.nav-link.active,
.nav-link {
  color: #fff;
  font-size: 20px;
}
.tab-content {
  background-color: #eeee;
}
</style>