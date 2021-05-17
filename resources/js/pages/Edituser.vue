<template>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <h3 class="mb-0">Register User</h3>
      </div>
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
                placeholder="Username"
                v-model="user.username"
              />
            </div>

            <div class="form-group">
              <label>Password</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password"
                v-model="user.password"
              />
            </div>

            <div class="form-group">
              <label>Password Confirm</label>
              <input
                type="password"
                class="form-control"
                placeholder="Password Confirm"
                v-model="user.passwordAgain"
              />
            </div>

            <div class="form-group">
              <label>Email</label>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                v-model="user.email"
              />
            </div>

            <label>ชื่อ</label>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <select class="form-control Prefix" v-model="user.prefix">
                    <option value="">คำนำหน้า</option>
                    <option>นาย</option>
                    <option>นาง</option>
                    <option>นางสาว</option>
                  </select>
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ชื่อ"
                    v-model="user.firstname"
                  />
                </div>
                <div class="col">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="นามสกุล"
                    v-model="user.lastname"
                  />
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>เพศ</label>
              <div class="rs-select2 js-select-simple select--no-search">
                <select class="form-control gender" v-model="user.gender">
                  <option value="">โปรดเลือกเพศ</option>
                  <option value="ชาย">ชาย</option>
                  <option value="หญิง">หญิง</option>
                </select>
                <div v-if="user.gender == 'หญิง'">
                  <label style="color: red">*โปรดกรอกข้อมูลเพิ่มเติม*</label>
                  <div class="form-group">
                    <label>คุณอยู่ในระหว่างการตั้งครรภ์</label>
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio1"
                          value="ใช่"
                          v-model="user.duringpregnancy"
                        />
                        <label class="form-check-label" for="inlineRadio1"
                          >ใช่</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions"
                          id="inlineRadio2"
                          value="ไม่ใช่"
                          v-model="user.duringpregnancy"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                          >ไม่ใช่</label
                        >
                      </div>
                    </div>
                    <label>คุณอยู่ในระหว่างการให้นมบุตรหรือไม่</label>
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions1"
                          id="inlineRadio1"
                          value="ใช่"
                          v-model="user.breastfeeding"
                        />
                        <label class="form-check-label" for="inlineRadio1"
                          >ใช่</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions1"
                          id="inlineRadio2"
                          value="ไม่ใช่"
                          v-model="user.breastfeeding"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                          >ไม่ใช่</label
                        >
                      </div>
                    </div>

                    <label>คุณคลอดหรือแท้งภายใน 6 เดือนที่ผ่านมาหรือไม่</label>
                    <div class="form-group">
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions2"
                          id="inlineRadio1"
                          value="ใช่"
                          v-model="user.givebirth_past_6"
                        />
                        <label class="form-check-label" for="inlineRadio1"
                          >ใช่</label
                        >
                      </div>
                      <div class="form-check form-check-inline">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="inlineRadioOptions2"
                          id="inlineRadio2"
                          value="ไม่ใช่"
                          v-model="user.givebirth_past_6"
                        />
                        <label class="form-check-label" for="inlineRadio2"
                          >ไม่ใช่</label
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label>กรุ๊ปเลือด</label>
              <div class="row">
                <div class="col">
                  <div class="rs-select4 js-select-simple select--no-search">
                    <select
                      class="form-control typeblood"
                      v-model="user.typeblood"
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
                      v-model="user.typerh"
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
            <label>วัน/เดือน/ปีเกิด</label>
            <div class="form-group">
              <div class="col-20">
                <input
                  class="form-control"
                  type="date"
                  id="example-date-input"
                  v-model="user.date"
                />
              </div>
            </div>

            <div class="form-group">
              <label>เบอร์โทรศัพท์</label>
              <input
                class="form-control"
                placeholder="เบอร์โทรศัพท์"
                v-model="user.phonnumber"
              />
            </div>

            <div class="text-center">
              <button class="btn btn-success btn-lg">บันทึก</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "edit",
  props: ["app"],
  data() {
    return {
      users: {
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

      if (!this.user.passwordAgain) {
        this.user.errors.push("โปรดใส่ Password อีกครั้ง");
      }

      if (this.user.password !== this.user.passwordAgain) {
        this.user.errors.push("Passwords ไม่ตรงกัน");
      }
      if (!this.user.email) {
        this.user.errors.push("โปรดใส่ Email");
      }
      if (!this.user.prefix) {
        this.user.errors.push("โปรดใส่คำนำหน้า");
      }

      if (!this.user.firstname) {
        this.user.errors.push("โปรดใส่ชื่อ");
      }
      if (!this.user.lastname) {
        this.user.errors.push("โปรดใส่นามสกุล");
      }
      if (!this.user.gender) {
        this.user.errors.push("โปรดเลือกเพศ");
      }
      if (this.user.gender == "หญิง") {
        if (!this.user.duringpregnancy) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
        if (!this.user.breastfeeding) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
        if (!this.user.givebirth_past_6) {
          this.user.errors.push("โปรดกรอกข้อมูลเพิ่มเติมให้ครบ");
        }
      }
      if (!this.user.typeblood) {
        this.user.errors.push("โปรดเลือกกรุ๊ปเลือด");
      }
      if (!this.user.typerh) {
        this.user.errors.push("โปรดเลือกกรุ๊ปเลือด RH");
      }
      if (!this.user.date) {
        this.user.errors.push("โปรดใส่วัน/เดือน/ปีเกิด");
      }
      if (!this.user.phonnumber) {
        this.user.errors.push("โปรดใส่เบอร์โทรศัพท์");
      }
      if (!this.user.errors.length) {
        const data = {
          username: this.user.username,
          password: this.user.password,
          firstname: this.user.firstname,
          lastname: this.user.lastname,
          gender: this.user.gender,
          duringpregnancy: this.user.duringpregnancy,
          breastfeeding: this.user.breastfeeding,
          givebirth_past_6: this.user.givebirth_past_6,
          typeblood: this.user.typeblood,
          typerh: this.user.typerh,
          date: this.user.date,
          phonnumber: this.user.phonnumber,
        };
        console.log(this.user);
        this.app.req
          .post("auth/user/register", this.user)
          .then((response) => {
            this.app.user = response.data.user;
            this.$router.push("/");
          })
          .catch((error) => {
            this.user.errors.push(error.response.data.user.error);
          });
      }
    },
  },
};
</script>

  <style >
.user-row {
  margin-bottom: 14px;
}

.user-row:last-child {
  margin-bottom: 0;
}

.dropdown-user {
  margin: 13px 0;
  padding: 5px;
  height: 100%;
}

.dropdown-user:hover {
  cursor: pointer;
}

.table-user-information > tbody > tr {
  border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
  border-top: 0;
}

.table-user-information > tbody > tr > td {
  border-top: 0;
}
.toppad {
  margin-top: 20px;
}
.card .card-body {
  background-color: #eeee;
}
</style>
</template>

