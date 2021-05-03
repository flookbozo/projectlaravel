<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container ">
      <a class="navbar-brand" href="/">Blood Donate</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="collapsibleNavId"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <router-link class="nav-link" to="/Home">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/About">About</router-link>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdownId"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              >Dropdown</a
            >
            <div class="dropdown-menu" aria-labelledby="dropdownId">
              <a class="dropdown-item" href="#">Action 1</a>
              <a class="dropdown-item" href="#">Action 2</a>
            </div>
          </li>
        </ul>
        <div v-if="!app.user" class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <router-link class="nav-link" to="/Login">Login</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/register">Register</router-link>
          </li>
        </div>

        <div v-if="app.user" class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="dropdownId"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              {{ app.user.username }}</a
            >
            <div class="dropdown-menu">
              <a class="dropdown-item">
                <router-link to="/Profile">ข้อมูลส่วนตัว</router-link>
              </a>
              <a @click="logout" href="javascript:;" class="dropdown-item"
                >Logout
              </a>
            </div>
          </li>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: "navbar",
  props: ["app"],
  data() {
    return {};
  },
  methods: {
    logout() {
      this.app.req.post("auth/logout").then(() => {
        this.app.user = null;
        this.app.hospital = null;
        this.$router.push("/login");
      });
      this.app.req.post("auth/hospital/logout").then(() => {
        this.app.user = null;
        this.app.hospital = null;
        this.$router.push("/login");
      });
    },
  },
};
</script>

<style>
.navbar-brand {
  font-size: 20px;
}
.nav-link {
  font-size: 15px;
}
.nav{
  position: fixed top;
  
}
</style>