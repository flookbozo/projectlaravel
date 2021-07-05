<template>
  <div class="container">
    <nav
      class="nav nav-pills nav-justified navbar-dark"
      style="background-color: #fff0e2"
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
        >Login Hospital</a
      >
      <a
        class="nav-item nav-link"
        id="pills-user-tab"
        data-toggle="pill"
        href="#pills-user"
        role="tab"
        aria-controls="pills-user"
        aria-selected="false"
        >Login User</a
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
          <div class="card-body" id="card-body">
            <div class="col-md-6 offset-md-3">
              <form v-on:submit.prevent="onSubmitHospital">
                <div
                  class="alert alert-danger glyphicon glyphicon-info-sign"
                  v-if="hospital.errors401.length"
                >
                  <ul class="mb-0">
                    <li v-for="(error, index) in hospital.errors401" :key="index">
                      {{ error }}
                    </li>
                  </ul>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username"
                    v-model="hospital.username"
                  />
                  <div class="text-danger" v-if="hospital.errors.username">
                    {{ hospital.errors.username }}
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="hospital.password"
                  />
                  <div class="text-danger" v-if="hospital.errors.password">
                    {{ hospital.errors.password }}
                  </div>
                </div>

                <div class="text-center">
                  
                  <div class="text-center">
                  <router-link
                    id="forget"
                    class="nav-link"
                    style="color: #ff4343"
                    to="ForgetpassHospital"
                    >ลืมรหัสผ่าน</router-link
                  >
                  <button class="btn btn-lg btn-block" id="buttonlogin" style="color:#fff0e2">
                    Login
                  </button>
                </div>
                </div>
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
        <div class="card"  >
          <div class="card-body" id="card-body" >
            <div class="col-md-6 offset-md-3" > 
              <form v-on:submit.prevent="onSubmitUser">
                <div class="alert alert-danger" v-if="user.errors401.length">
                  <ul class="mb-0">
                    <li v-for="(error, index) in user.errors401" :key="index">
                      {{ error }}
                    </li>
                  </ul>
                </div>

                <div class="form-group">
                  <label>Username</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Username"
                    v-model="user.username"
                  />
                  <div class="text-danger" v-if="user.errors.username">
                    {{ user.errors.username }}
                  </div>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input
                    type="password"
                    class="form-control"
                    placeholder="Password"
                    v-model="user.password"
                  />
                  <div class="text-danger" v-if="user.errors.password">
                    {{ user.errors.password }}
                  </div>
                </div>
                <div class="text-center">
                  <router-link
                    id="forget"
                    class="nav-link"
                    style="color: #ff4343"
                    to="ForgetpassUser"
                    >ลืมรหัสผ่าน</router-link
                  >
                   <button class="btn btn-lg btn-block" id="buttonlogin" style="color:#fff0e2">
                    Login
                  </button>
                </div>
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
        errors401: []
      },
      hospital: {
        username: "",
        password: "",
        errors: [],
        errors401: []
      },
    };
  },
  methods: {
    onSubmitUser() {
      this.user.errors = [];
      this.user.errors401 = [];
      if (this.user.username == "") {
        this.user.errors['username'] = "โปรดใส่อีเมล";
        this.user.errors.length++;
      }
      else if(!/[\w.@]/.test(this.user.username))
      {
        this.user.errors['username'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.user.errors.length++;
      }

      if (!this.user.password) {
        this.user.errors['password'] = "โปรดใส่รหัสผ่าน";
        this.user.errors.length++;
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
            this.user.errors401.push(error.response.data.error);
          });
      }
    },
    onSubmitHospital() {
      this.hospital.errors = [];
      this.hospital.errors401 = [];
     if (!this.hospital.username) {
        this.hospital.errors['username'] = "โปรดใส่อีเมล";
        this.hospital.errors.length++;
      }
      else if(!/[\w.@]/.test(this.hospital.username))
      {
        this.hospital.errors['username'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }
      
      if (!this.hospital.password) {
        this.hospital.errors['password'] = "โปรดใส่รหัสผ่าน";
        this.hospital.errors.length++;
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
            this.hospital.errors401.push(error.response.data.error);
          });
      }
    },
    created() {
      console.log("===> " + this.$store.getters.getloginid);
    },
  },
};
</script>


<style>
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff0e2;
  background-color: #ff4b45;
  font-size: 20px;
}
#card-body{
  background-color:#fff;
}
.nav-link.active,
.nav-link {
  color: #ff4b45;
  font-size: 20px;
}

#forget {
  margin-top: -3%;
}
#buttonlogin{
  background-color: #00B4A9;
  border-radius: 40px;
}
</style>