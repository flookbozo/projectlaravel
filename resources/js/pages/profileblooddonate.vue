<template>
  <div class="container">
    <div class="card">
     
      <div class="card-header" id="giveblood" style="color: #fff0e2">
        ตารางผู้บริจาค
      </div>
      <table class="table table-striped" align="center">
        <div
          v-for="giveblooddonate in giveblooddonates"
          :key="giveblooddonate.id"
        >
          <div v-if="giveblooddonate.idHospital == app.user.id">
            <div v-for="user in users" :key="user.id">
              <div v-if="user.id == giveblooddonate.idUser">
                <div v-for="giveblood in givebloods" :key="giveblood.id">
                  <div v-if="giveblooddonate.idRequest == giveblood.id">
                    <tr id="tablegive" style="color: #ff4b45">
                      <th class="text-center col-sm-2" scope="col">ชื่อ</th>
                      <th class="text-center col-sm-2" scope="col ">นามสกุล</th>
                      <th class="text-center col-sm-1" scope="col">
                        กรุ๊ปเลือดที่บริจาค
                      </th>
                      <th class="text-center col-sm-2" scope="col">กรุ๊ป RH</th>
                      <th class="text-center col-sm-3" scope="col">
                        ปริมาณโลหิตที่บริจาค (cc.)
                      </th>
                      <th class="text-center col-sm-3" scope="col">
                        ปริมาณโลหิตที่ยังต้องการ
                      </th>
                    </tr>
                    <tbody>
                      <tr id="tablegiveblood" scope="row">
                        <td class="text-center">{{ user.firstname }}</td>
                        <td class="text-center">{{ user.lastname }}</td>
                        <td class="text-center">{{ giveblood.typeblood }}</td>
                        <td class="text-center">{{ giveblood.typerh }}</td>
                        <td class="text-center">
                          {{ giveblooddonate.blooddonate }}
                        </td>
                        <td class="text-center">{{ giveblood.bloodsupply }}</td>
                      </tr>
                    </tbody>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </table>
    </div>
  </div>
</template>
<script>
import axios from "axios";

export default {
  name: "profileblooddonate",
  props: ["app"],
  data() {
    return {
      giveblooddonates: [],
      users: [],
      givebloods: [],
      giveblooddonate: {
        id: "",
        idUser: "",
        idHospital: "",
        blooddonate: "",
        idRequest: "",
      },
      giveblood: {
        id: "",
        idHospital: "",
        typeblood: "",
        typerh: "",
        date: "",
        deficiencyBlood: "",
      },
      user: {
        username: "",
        password: "",
        passwordAgain: "",
        gender: "",
        email: "",
        prefix: "",
        firstname: "",
        lastname: "",
        gender: "",
        duringpregnancy: "",
        breastfeeding: "",
        givebirth_past_6: "",
        typeblood: "",
        typerh: "",
        date: "",
        phonnumber: "",
        question: "",
        answer: "",
      },
    };
  },
  mounted() {
    this.getGivebloods();
    this.geUser();
    this.getGiveblooddonate();
    this.app.req.get("auth/hospital/init").then((response) => {
      this.hospital = response.data.hospital;
    });
  },
  methods: {
    getGivebloods() {
      axios.get("api/giveblooddonate").then((response) => {
        this.giveblooddonates = response.data;
      });
    },
    geUser() {
      axios.get("api/edituser").then((response) => {
        this.users = response.data;
      });
    },
    getGiveblooddonate() {
      axios.get("api/givebloods").then((response) => {
        this.givebloods = response.data;
      });
    },
  },
};
</script>
