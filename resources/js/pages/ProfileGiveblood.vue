<template>
  <div class="container">
    <div class="card">
      <div class="card-header" id="giveblood1" style="color: #ff4b45">
        {{ hospital.hospitalname }}
      </div>
      <div class="card-header" id="giveblood" style="color: #fff0e2">
        ขอบริจาคเลือด
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3" align="center">
          <img
            src="images/001.png"
            class="rounded mx-auto d-block"
            id="imagegive"
          />
          <table class="table table-striped" align="center">
            <tr id="tablegive" style="color: #ff4b45">
              <th class="text-center col-sm-2" scope="col">กรุ๊ปเลือด</th>
                <th class="text-center col-sm-2" scope="col ">
                  กรุ๊ปเลือด RH
                </th>
                <th class="text-center col-sm-3" scope="col">
                  ปริมาณโลหิตที่ต้องการ (cc)
                </th>
                <th class="text-center col-sm-4" scope="col">ลบคำขอ</th>
            </tr>
            <tbody>
              <tr id="tablegiveblood" scope="row" v-for="(giveblood, index) in givebloods" :key="giveblood.id">
                <template v-if="giveblood.idHospital == app.user.id">
                  <td class="text-center">{{ giveblood.typeblood }}</td>
                  <td class="text-center">{{ giveblood.typerh }}</td>
                  <td class="text-center">
                    {{ giveblood.deficiencyBlood }}
                  </td>
                  <td class="text-center">
                  <div class="btn-group" role="group">
                    <a
                      href="javascript:;"
                      class="btn"
                      id="edit"
                      v-on:click="deleteBlood(giveblood.id, index)"
                    >
                      Delete
                    </a>
                  </div>
                  </td>
                </template>
              </tr>
            </tbody>
          </table>
          <div class="text-center">
            <router-link
              class="btn btn-lg btn-block"
              id="buttonlogin"
              style="color: #fff0e2"
              to="/Giveblood"
              >ร้องขอเลือด</router-link
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "profilegiveblood",
  props: ["app"],
  data() {
    return {
      hospital: null,
      givebloods: [],
      giveblood: {
        id: "",
        idHospital: "",
        typeblood: "",
        typerh: "",
        date: "",
        deficiencyBlood: "",
      },
      location: {
        id: "",
        latitude: "",
        longitude: "",
      },
      loading: false,
      interval: null,
      size: null,
      num: null,
      localInterval: null
    };
  },
  async mounted() {
    await this.app.req.get("auth/hospital/init").then((response) => {
      this.hospital = response.data.hospital;
    });
    await this.getGivebloods();
    await this.setLocation();
    await this.calInterval();
  },

  methods: {
    deleteBlood(id, index) {
      this.loading = true;
      axios.delete("api/givebloods/" + id).then((response) => {
          this.givebloods.splice(index, 1);
          this.checkRequest();
          this.loading = false;
      });
    },

    getGivebloods() {
      axios.get("api/givebloods").then((response) => {
        this.givebloods = response.data;
      });
    },
    calDistance()
    {
      this.loading = true;
      axios.post("api/calculate", this.location)
      .then((response) => {
        console.log(this.location);
      })
      .finally(() => (this.loading = false));
    },
    setLocation()
    {
      this.location.id = this.app.user.id;
      this.location.latitude = this.app.user.hospitallattitude;
      this.location.longitude = this.app.user.hospitallongitude;
    },
    async calInterval()
    {
      await axios.get("api/givebloods").then((response) => {
        this.size = response.data.length;
      });
      if(this.size == 0)
      {
        clearInterval(this.interval);
      }
      else if(this.size == 1)
      {
        this.interval = setInterval(this.calDistance, 5000);
        localStorage.setItem("interval", this.interval);
      }
      console.log(this.size);
      this.localInterval = localStorage.getItem("interval");
      console.log(this.localInterval);
    },
    async checkRequest()
    {
      await axios.get("api/givebloods").then((response) => {
        this.size = response.data.length;
      });
      if(this.size == 0)
      {
        this.interval = localStorage.getItem("interval");
        clearInterval(this.interval);
        this.num++;
      }
      console.log(this.size);
      console.log(this.num);
      console.log(this.interval);
    }
  },
};
</script>
<style>
#tablegive {
  background-color: #fff0e2;
}
#tablegiveblood {
  background-color: #fff;
}
#imagegive {
  width: 80px;
  margin-bottom: 3%;
}
#giveblood1 {
  background-color: #fff;
  font-size: 30px;
}
</style>
