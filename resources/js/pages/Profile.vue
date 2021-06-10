<template>
  <div class="container">
    <div class="card">
      <div class="card-body"  id="card-body">
        <div class="card-header" id="card-headerProfile" style="color: #fff0e2" >Profile {{ users.username }}</div>
        <div class="row">
          <div class="col-md-3 toppad pull-right col-md-offset-3"></div>
          <div
            class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"
          >
          <div v-if="users.gender=='หญิง' ">
            <img
              src="images/024.png"
              class="rounded mx-auto d-block"
              id="imageuser"
            />
          </div>
          <div v-if="users.gender=='ชาย' ">
            <img
              src="images/022.png"
              class="rounded mx-auto d-block"
              id="imageuser"
            />
          </div>

            <div class="panel panel-info">
              <div class="panel-heading"></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3" align="center"></div>

                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>ชื่อ-นามสกุล :</td>
                        <td>
                          {{ users.prefix }}
                          {{ users.firstname }}
                          {{ users.lastname }}
                        </td>
                      </tr>
                      <tr>
                        <td>Email :</td>
                        <td>{{ users.email }}</td>
                      </tr>
                      <tr>
                        <td>เพศ :</td>
                        <td>{{ users.gender }}</td>
                      </tr>
                      <tr v-if="users.gender == 'หญิง'">
                        <td>คุณอยู่ในระหว่างต้ังครรภ์:</td>
                        <td>{{ users.duringpregnancy }}</td>
                      </tr>
                      <tr v-if="users.gender == 'หญิง'">
                        <td>คุณอยู่ในระยะให้นมบุตร:</td>
                        <td>{{ users.breastfeeding }}</td>
                      </tr>
                      <tr v-if="users.gender == 'หญิง'">
                        <td>คุณคลอดหรือแท้งภายใน 6 เดือน ที่ผ่านมา:</td>
                        <td>{{ users.givebirth_past_6 }}</td>
                      </tr>

                      <tr></tr>
                      <tr>
                        <td>กรุ๊ปเลือด :</td>
                        <td>{{ users.typeblood }}</td>
                      </tr>
                      <tr>
                        <td>กรุ๊ปเลือด RH :</td>
                        <td>{{ users.typerh }}</td>
                      </tr>
                      <tr>
                        <td>วัน/เดือน/ปีเกิด :</td>
                        <td>{{ users.date }}</td>
                      </tr>
                      <td>เบอร์โทรศัพท์ :</td>
                      <td>{{ users.phonnumber }}</td>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <router-link :to="{ name: 'edituser', params: { id: users.id }}" class="btn btn-danger btn btn-lg " id="edit">Edit</router-link>
         
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "profileH",
  props: ["app"],
  data() {
    return {
      users: null,
      
    };
  },
  mounted() {
    // this.getUserdata();
    this.app.req.get("auth/init").then((response) => {
      this.users = response.data.user;
    });
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
#card-headerProfile{
    background-color: #ff4b45;
     font-size: 25px;
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
#body {
  background-color:#F6F6F6;
}
#imageuser{
  margin-bottom: 3%;
  width: 150px;
}

</style>

