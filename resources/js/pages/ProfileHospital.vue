<template>
  <div class="container">
    <div class="card">
      <div class="card-body" id="bodyy">
        <div class="card-header" id="card-headerProfile" style="color: #fff0e2">
          โรงพยาบาล {{ hospital.hospitalname }}
        </div>
        <div class="row">
          <div class="col-md-3 toppad pull-right col-md-offset-3"></div>

          <div
            class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad"
          >
            <img
              src="images/016.png"
              class="rounded mx-auto d-block"
              id="imagehos"
            />
            <div class="panel panel-info">
              <div class="panel-heading"></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-3 col-lg-3" align="center"></div>
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Email :</td>
                        <td>{{ hospital.email }}</td>
                      </tr>
                      <tr>
                        <td>ผู้ดูแล:</td>
                        <td>
                          {{ hospital.prefix }}
                          {{ hospital.firstname }}
                          {{ hospital.lastname }}
                        </td>
                      </tr>

                      <tr>
                        <td>ชื่อโรงพยาบาล :</td>
                        <td>
                          {{ hospital.hospitalname }}
                        </td>
                      </tr>
                      <tr>
                        <td>ที่อยู่โรงพยาบาล :</td>
                        <td>
                          {{ hospital.hospitaladdress }}
                          {{ hospital.provine }}
                          {{ hospital.addresscode }}
                        </td>
                      </tr>
                      <tr>
                        <td>เบอร์โทรศัพท์ :</td>
                        <td>
                          {{ hospital.phonnumber }}
                        </td>
                      </tr>
                      <tr>
                        <td>ละติจูด :</td>
                        <td>
                          {{ hospital.hospitallattitude }}
                        </td>
                      </tr>
                      <tr>
                        <td>ลองจิจูด :</td>
                        <td>
                          {{ hospital.hospitallongitude }}
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <router-link
            :to="{ name: 'edithospital', params: { id: hospital.id } }"
            class="btn btn-lg" id="edit"
            >Edit</router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "profilehospital",
  props: ["app"],
  data() {
    return {
      hospital: {
        prefix: "",
        firstname: "",
        lastname: "",
        hospitalname: "",
        hospitaladdress: "",
        provine: "",
        addresscode: "",
        hospitallattitude: "",
        hospitallongitude: "",
        phonnumber: "",
      },
    };
  },
  mounted() {
    // this.getUserdata();
    this.app.req.get("auth/hospital/init").then((response) => {
      this.hospital = response.data.hospital;
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
#imagehos {
  width: 150px;
}
#body{
  background-color: #fff0e2;
}
#edit{
  background-color:  #ff4b45;
  border-radius: 40px;
  color: #fff0e2;
  
}
</style>


