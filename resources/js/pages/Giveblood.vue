<template>
  <div class="container">
    <div class="card">
      <div class="card-header" id="giveblood" style="color: #fff0e2">
        ขอบริจาคเลือด
      </div>
      <div class="card-body">
        <div class="col-md-6 offset-md-3">
          <form @submit.prevent="onSubmitGiveblood">
            <div class="alert alert-danger" v-if="giveblood.errors.length">
              <ul class="mb-0">
                <li v-for="(error, index) in giveblood.errors" :key="index">
                  {{ error }}
                </li>
              </ul>
            </div>
            <div class="text-center">
             <img
              src="images/026-blood-type.png"
              class="rounded"
              id="imagegblood"
            />
             <img
              src="images/027-blood-type-1.png"
              class="rounded "
              id="imagegblood"
            /> <img
              src="images/028.png"
              class="rounded "
              id="imagegblood"
            />
             <img
              src="images/029.png"
              class="rounded"
              id="imagegblood"
            />
            </div>

            <div class="form-group">
              <label>กรุ๊ปเลือด</label>
              <div class="row">
                <div class="col">
                  <div class="rs-select4 js-select-simple select--no-search">
                    <select
                      class="form-control typeblood"
                      v-model="giveblood.typeblood"
                    >
                      <option value="">โปรดเลือกกรุ๊ปเลือด</option>
                      <option>A</option>
                      <option>B</option>
                      <option>AB</option>
                      <option>O</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="rs-select4 js-select-simple select--no-search">
                    <select
                      class="form-control typeblood"
                      v-model="giveblood.typerh"
                    >
                      <option value="">โปรดเลือกกรุ๊ป RH</option>
                      <option>RH+</option>
                      <option>RH-</option>
                    </select>
                    <div class="select-dropdown"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>ปริมาณโลหิตที่ต้องการ (cc)</label>
              <input
                type="text"
                class="form-control"
                placeholder="ปริมาณโลหิตที่ต้องการ"
                v-model="giveblood.deficiencyBlood"
              />
            </div>
            <div class="text-center">
             <button class="btn btn-lg btn-block" id="buttonlogin" style="color:#fff0e2" >ส่งคำขอเลือด</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  name: "giveblood",
  props: ["app"],
  data() {
    return {
      giveblood: {
        idHospital: "",
        typeblood: "",
        typerh: "",
        deficiencyBlood: "",
        errors: [],
      },
    };
  },
  methods: {
    onSubmitGiveblood() {
      this.giveblood.errors = [];

      if (!this.giveblood.typeblood) {
        this.giveblood.errors.push("โปรดใส่กรุ๊ปเลือด");
      }
      if (!this.giveblood.typerh) {
        this.giveblood.errors.push("โปรดใส่กรุ๊ปเลือด RH");
      }
      if (!this.giveblood.deficiencyBlood) {
        this.giveblood.errors.push("โปรดใส่ปริมาณเลือดที่ต้องการ");
      }
      if (!this.giveblood.errors.length) {
        const data = {
          typeblood: this.giveblood.typeblood,
          typerh: this.giveblood.typerh,
          deficiencyBlood: this.giveblood.deficiencyBlood,
        };
        this.giveblood.idHospital = this.app.user.id;
        axios.post("api/givebloods", this.giveblood)
        .then((response) =>{
          this.$router.push("/profilegiveblood");
          console.log(response.data);
            
        })
        .finally(() => (this.loading = false));
      }
    },
  },
};
</script>
<style >
  #giveblood{
    background-color:#ff4343 ;
    font-size: 25px;
    
  }
  #imagegblood{
    width : 100px;
    margin-bottom: 4%;
  }
</style>