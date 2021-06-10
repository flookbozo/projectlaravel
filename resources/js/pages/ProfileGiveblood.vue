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
            <div v-for="(giveblood, index) in givebloods" :key="giveblood.id">
              <div v-if="giveblood.idHospital == app.user.id">
                <div>
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
                    <tr id="tablegiveblood" scope="row">
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
                    </tr>
                  </tbody>
                </div>
              </div>
            </div>
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
  name: "ProfileGiveblood",
  props: ["app"],
  mounted() {
    this.getGivebloods();
    this.app.req.get("auth/hospital/init").then((response) => {
      this.hospital = response.data.hospital;
    });
  },

  methods: {
    deleteBlood(id, index) {
      axios.delete("api/givebloods/" + id).then((response) => {
        this.givebloods.splice(index, 1);
      });
    },

    getGivebloods() {
      axios.get("api/givebloods").then((response) => {
        this.givebloods = response.data;
      });
    },
  },
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
    };
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
