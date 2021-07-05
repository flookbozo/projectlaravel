<template>
  <div class="container">
    <div class="registerfrom">
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
          >Register Hospital</a
        >
        <a
          class="nav-item nav-link"
          id="pills-user-tab"
          data-toggle="pill"
          href="#pills-user"
          role="tab"
          aria-controls="pills-user"
          aria-selected="false"
          >Register User</a
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
                  <div class="alert alert-danger" v-if="hospital.errors401.length">
                    <ul class="mb-0">
                      <li
                        v-for="(error, index) in hospital.errors401"
                        :key="index"
                      >
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

                  <div class="form-group">
                    <label>Password Again</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password Again"
                      v-model="hospital.passwordAgain"
                    />
                    <div class="text-danger" v-if="hospital.errors.passwordAgain">
                      {{ hospital.errors.passwordAgain }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email"
                      v-model="hospital.email"
                    />
                    <div class="text-danger" v-if="hospital.errors.email">
                      {{ hospital.errors.email }}
                    </div>
                  </div>

                  <label>ชื่อผู้ดูแล</label>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <select
                          class="form-control Prefix"
                          v-model="hospital.prefix"
                        >
                          <option value="">คำนำหน้า</option>
                          <option>นาย</option>
                          <option>นาง</option>
                          <option>นางสาว</option>
                        </select>
                        <div class="text-danger" v-if="hospital.errors.prefix">
                          {{ hospital.errors.prefix }}
                        </div>
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="ชื่อ"
                          v-model="hospital.firstname"
                        />
                        <div class="text-danger" v-if="hospital.errors.firstname">
                          {{ hospital.errors.firstname }}
                        </div>
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="นามสกุล"
                          v-model="hospital.lastname"
                        />
                        <div class="text-danger" v-if="hospital.errors.lastname">
                          {{ hospital.errors.lastname }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ชื่อโรงพยาบาล</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="ชื่อโรงพยาบาล"
                      v-model="hospital.hospitalname"
                    />
                    <div class="text-danger" v-if="hospital.errors.hospitalname">
                      {{ hospital.errors.hospitalname }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ที่อยู่โรงพยาบาล</label>
                    <div>
                      <textarea
                        class="form-control"
                        name="address"
                        id="address"
                        placeholder="ที่อยู่โรงพยาบาล"
                        v-model="hospital.hospitaladdress"
                      ></textarea>
                    </div>
                    <div class="text-danger" v-if="hospital.errors.hospitaladdress">
                      {{ hospital.errors.hospitaladdress }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>จังหวัด</label>
                    <select
                      class="form-control Prefix"
                      v-model="hospital.provine"
                    >
                      <option value="">กรุณาเลือกจังหวัด</option>
                      <option>กระบี่</option>
                      <option>กรุงเทพมหานคร</option>
                      <option>กาญจนบุรี</option>
                      <option>กาฬสินธุ์</option>
                      <option>กำแพงเพชร</option>
                      <option>ขอนแก่น</option>
                      <option>จันทบุรี</option>
                      <option>ฉะเชิงเทรา</option>
                      <option>ชลบุรี</option>
                      <option>ชัยนาท</option>
                      <option>ชัยภูมิ</option>
                      <option>ชุมพร</option>
                      <option>เชียงราย</option>
                      <option>เชียงใหม่</option>
                      <option>ตรัง</option>
                      <option>ตราด</option>
                      <option>ตาก</option>
                      <option>นครนายก</option>
                      <option>นครปฐม</option>
                      <option>นครพนม</option>
                      <option>นครราชสีมา</option>
                      <option>นครศรีธรรมราช</option>
                      <option>นครสวรรค์</option>
                      <option>นนทบุรี</option>
                      <option>นราธิวาส</option>
                      <option>น่าน</option>
                      <option>บึงกาฬ</option>
                      <option>บุรีรัมย์</option>
                      <option>ปทุมธานี</option>
                      <option>ประจวบคีรีขันธ์</option>
                      <option>ปราจีนบุรี</option>
                      <option>ปัตตานี</option>
                      <option>พระนครศรีอยุธยา</option>
                      <option>พะเยา</option>
                      <option>พังงา</option>
                      <option>พัทลุง</option>
                      <option>พิจิตร</option>
                      <option>พิษณุโลก</option>
                      <option>เพชรบุรี</option>
                      <option>เพชรบูรณ์</option>
                      <option>แพร่</option>
                      <option>ภูเก็ต</option>
                      <option>มหาสารคาม</option>
                      <option>มุกดาหาร</option>
                      <option>แม่ฮ่องสอน</option>
                      <option>ยโสธร</option>
                      <option>ยะลา</option>
                      <option>ร้อยเอ็ด</option>
                      <option>ระนอง</option>
                      <option>ระยอง</option>
                      <option>ราชบุรี</option>
                      <option>ลพบุรี</option>
                      <option>ลำปาง</option>
                      <option>ลำพูน</option>
                      <option>เลย</option>
                      <option>ศรีสะเกษ</option>
                      <option>สกลนคร</option>
                      <option>สงขลา</option>
                      <option>สตูล</option>
                      <option>สมุทรปราการ</option>
                      <option>สมุทรสงคราม</option>
                      <option>สมุทรสาคร</option>
                      <option>สระแก้ว</option>
                      <option>สระบุรี</option>
                      <option>สิงห์บุรี</option>
                      <option>สุโขทัย</option>
                      <option>สุพรรณบุรี</option>
                      <option>สุราษฎร์ธานี</option>
                      <option>สุรินทร์</option>
                      <option>หนองคาย</option>
                      <option>หนองบัวลำภู</option>
                      <option>อ่างทอง</option>
                      <option>อำนาจเจริญ</option>
                      <option>อุดรธานี</option>
                      <option>อุตรดิตถ์</option>
                      <option>อุทัยธานี</option>
                      <option>อุบลราชธานี</option>
                    </select>
                    <div class="text-danger" v-if="hospital.errors.provine">
                      {{ hospital.errors.provine }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>รหัสไปรษณีย์</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="รหัสไปรษณีย์"
                      v-model="hospital.addresscode"
                    />
                    <div class="text-danger" v-if="hospital.errors.addresscode">
                      {{ hospital.errors.addresscode }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>เบอร์โทรศัพท์โรงพยาบาล</label>
                    <input
                      class="form-control"
                      placeholder="เบอร์โทรศัพท์"
                      v-model="hospital.phonnumber"
                    />
                    <div class="text-danger" v-if="hospital.errors.phonnumber">
                      {{ hospital.errors.phonnumber }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ละติจูด</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="ตัวอย่าง: 13.716331"
                      v-model="hospital.hospitallattitude"
                    />
                    <div class="text-danger" v-if="hospital.errors.hospitallattitude">
                      {{ hospital.errors.hospitallattitude }}
                    </div>
                  </div>
                  <div class="form-group">
                    <label>ลองจิจูด</label>
                    <input
                      type=""
                      class="form-control"
                      placeholder="ตัวอย่าง: 100.5917665"
                      v-model="hospital.hospitallongitude"
                    />
                    <div class="text-danger" v-if="hospital.errors.hospitallongitude">
                      {{ hospital.errors.hospitallongitude }}
                    </div>
                  </div>

                  <div class="form-group">
                    <div
                      id="card-header"
                      class="card-header"
                      style="background-color: #ff4343"
                    >
                      <h9 class="mb-3" style="color: #fff0e2"
                        >เลือกคำถามและคำตอบเพื่อความปลอดภัย</h9
                      >
                    </div>

                    <div class="form-group">
                      <label
                        >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                        และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
                      >
                      <div
                        class="rs-select4 js-select-simple select--no-search"
                      >
                        <select
                          class="form-control typeblood"
                          v-model="hospital.question"
                        >
                          <option value="">โปรดเลือกคำถาม</option>
                          <option>สัตว์เลี้ยงตัวแรก</option>
                          <option>ชื่อสัตว์เลี้ยงตัวแรก</option>
                          <option>สัตว์ที่คุณกลัว</option>
                          <option>สัตว์ที่คุณชอบ</option>
                          <option>คุณเกิดจังหวัดอะไร</option>
                          <option>ชื่อบิดา</option>
                          <option>ชื่อมารดา</option>
                          <option>ชื่อน้องสาว/พี่สาวของคุณ</option>
                          <option>ชื่อน้องชาย/พี่ชายของคุณ</option>
                        </select>
                        <div class="select-dropdown"></div>
                        <div class="text-danger" v-if="hospital.errors.question">
                          {{ hospital.errors.question }}
                        </div>
                      </div>

                      <input
                        id="answerRegis"
                        class="form-control"
                        placeholder="คำตอบ"
                        v-model="hospital.answer"
                      />
                      <div class="text-danger" v-if="hospital.errors.answer">
                        {{ hospital.errors.answer }}
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <button
                      class="btn btn-lg btn-block"
                      id="regis"
                      style="color: #fff0e2"
                    >
                      สมัคร
                    </button>
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
          <div class="card">
            <div class="card-body" id="card-body">
              <div class="col-md-6 offset-md-3">
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

                  <div class="form-group">
                    <label>Password Confirm</label>
                    <input
                      type="password"
                      class="form-control"
                      placeholder="Password Confirm"
                      v-model="user.passwordAgain"
                    />
                    <div class="text-danger" v-if="user.errors.passwordAgain">
                      {{ user.errors.passwordAgain }}
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Email"
                      v-model="user.email"
                    />
                    <div class="text-danger" v-if="user.errors.email">
                      {{ user.errors.email }}
                    </div>
                  </div>

                  <label>ชื่อ</label>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <select
                          class="form-control Prefix"
                          v-model="user.prefix"
                        >
                          <option value="">คำนำหน้า</option>
                          <option>นาย</option>
                          <option>นาง</option>
                          <option>นางสาว</option>
                        </select>
                        <div class="text-danger" v-if="user.errors.prefix">
                          {{ user.errors.prefix }}
                        </div>
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="ชื่อ"
                          v-model="user.firstname"
                        />
                        <div class="text-danger" v-if="user.errors.firstname">
                          {{ user.errors.firstname }}
                        </div>
                      </div>
                      <div class="col">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="นามสกุล"
                          v-model="user.lastname"
                        />
                        <div class="text-danger" v-if="user.errors.lastname">
                          {{ user.errors.lastname }}
                        </div>
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
                      <div class="text-danger" v-if="user.errors.gender">
                        {{ user.errors.gender }}
                      </div>
                      <div v-if="user.gender == 'หญิง'">
                        <label style="color: #ff4343"
                          >*โปรดกรอกข้อมูลเพิ่มเติม*</label
                        >
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
                            <div class="text-danger" v-if="user.errors.duringpregnancy">
                              {{ user.errors.duringpregnancy }}
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
                            <div class="text-danger" v-if="user.errors.breastfeeding">
                              {{ user.errors.breastfeeding }}
                            </div>
                          </div>

                          <label
                            >คุณคลอดหรือแท้งภายใน 6 เดือนที่ผ่านมาหรือไม่</label
                          >
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
                            <div class="text-danger" v-if="user.errors.givebirth_past_6">
                              {{ user.errors.givebirth_past_6 }}
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
                        <div
                          class="rs-select4 js-select-simple select--no-search"
                        >
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
                       <div class="text-danger" v-if="user.errors.typeblood">
                          {{ user.errors.typeblood }}
                        </div>
                      </div>
                      <div class="col">
                        <div
                          class="rs-select4 js-select-simple select--no-search"
                        >
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
                        <div class="text-danger" v-if="user.errors.typerh">
                          {{ user.errors.typerh }}
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
                      <div class="text-danger" v-if="user.errors.date">
                        {{ user.errors.date }}
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input
                      class="form-control"
                      placeholder="เบอร์โทรศัพท์"
                      v-model="user.phonnumber"
                    />
                    <div class="text-danger" v-if="user.errors.phonnumber">
                      {{ user.errors.phonnumber }}
                    </div>
                  </div>

                  <div class="form-group">
                    <div
                      id="card-header"
                      class="card-header"
                      style="background-color: #ff4343"
                    >
                      <h9 class="mb-3" style="color: #fff0e2"
                        >เลือกคำถามและคำตอบเพื่อความปลอดภัย</h9
                      >
                    </div>

                    <div class="form-group">
                      <label
                        >*คำถามเหล่านี้จะถูกใช้เพื่อยืนยันตัวตนของคุณ
                        และช่วยกู้คืนรหัสผ่านหากคุณลืม</label
                      >
                      <div
                        class="rs-select4 js-select-simple select--no-search"
                      >
                        <select
                          class="form-control typeblood"
                          v-model="user.question"
                        >
                          <option value="">โปรดเลือกคำถาม</option>

                          <option>สัตว์เลี้ยงตัวแรก</option>
                          <option>ชื่อสัตว์เลี้ยงตัวแรก</option>
                          <option>สัตว์ที่คุณกลัว</option>
                          <option>สัตว์ที่คุณชอบ</option>
                          <option>คุณเกิดจังหวัดอะไร</option>
                          <option>ชื่อบิดา</option>
                          <option>ชื่อมารดา</option>
                          <option>ชื่อน้องสาว/พี่สาวของคุณ</option>
                          <option>ชื่อน้องชาย/พี่ชายของคุณ</option>
                        </select>
                        <div class="select-dropdown"></div>
                      </div>
                      <div class="text-danger" v-if="user.errors.question">
                        {{ user.errors.question }}
                      </div>

                      <input
                        class="form-control"
                        id="answerRegis"
                        placeholder="คำตอบ"
                        v-model="user.answer"
                      />
                      <div class="text-danger" v-if="user.errors.answer">
                        {{ user.errors.answer }}
                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <button
                      class="btn btn-lg btn-block"
                      id="regis"
                      href="#"
                      style="color: #fff0e2"
                    >
                      สมัคร
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "register",
  props: ["app"],

  data() {
    return {
      users: [],
      hospitals: [],
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
        errors: [],
        errors401: []
      },
      hospital: {
        username: "",
        password: "",
        passwordAgain: "",
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
        question: "",
        answer: "",
        errors: [],
        errors401: []
      },
    };
  },
  created() {
    axios.get("api/edituser").then((response) => {
      this.users = response.data;
    });
    axios.get("api/edithospital").then((response) => {
      this.hospitals = response.data;
    });
  },

  methods: {
    onSubmitUser() {
      window.scrollTo({ top: 0, left: 0, behavior: "smooth" });
      this.user.errors = [];
      this.user.errors401 = [];
      var checkUsername = false;
      var checkUseremail = false;
      for (var i = 0; i < this.users.length; i++) {
        if (this.user.email == this.users[i].email) {
          checkUseremail = true;
        }
        if (this.user.username == this.users[i].username) {
          checkUsername = true;
        }
      }
      if (checkUsername == true) {
        this.user.errors401.push("มี Username นี้อยู่ในระบบแล้ว");
      }
  
      if (checkUseremail == true) {
        this.user.errors401.push("มี Email นี้อยู่ในระบบแล้ว");
      }
      if (this.user.username == "") {
        this.user.errors['username'] = "โปรดใส่ Username";
        this.user.errors.length++;
      }
      else if(/[^\w.]/.test(this.user.username))
      {
        this.user.errors['username'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.user.errors.length++;
      }

      if (!this.user.password) {
        this.user.errors['password'] = "โปรดใส่ Password";
        this.user.errors.length++;
      }

      if (!this.user.passwordAgain) {
        this.user.errors['passwordAgain'] = "โปรดใส่ Password อีกครั้ง";
        this.user.errors.length++;
      }

      if (this.user.password !== this.user.passwordAgain) {
        this.user.errors401.push("Passwords ไม่ตรงกัน");
      }
      if (this.user.email == "") {
        this.user.errors['email'] = "โปรดใส่ Email";
        this.user.errors.length++;
      }
      else if(!/[\w.@]/.test(this.user.email))
      {
        this.user.errors['email'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.user.errors.length++;
      }
      else if(!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(this.user.email))
      {
        this.user.errors['email'] = "โปรดกรอกแบบฟอร์มอีเมล ตัวอย่าง a@email.com";
        this.user.errors.length++;
      }

      if (!this.user.prefix) {
        this.user.errors['prefix'] = "โปรดใส่คำนำหน้า";
        this.user.errors.length++;
      }

      if (this.user.firstname == "") {
        this.user.errors['firstname'] = "โปรดใส่ชื่อ";
        this.user.errors.length++;
      }
      else if(/[^\wก-๙]/.test(this.user.firstname))
      {
        this.user.errors['firstname'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.user.errors.length++;
      }
      if (this.user.lastname == "") {
        this.user.errors['lastname'] = "โปรดใส่นามสกุล";
        this.user.errors.length++;
      }
      else if(/[^\wก-๙]/.test(this.user.lastname))
      {
        this.user.errors['lastname'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.user.errors.length++;
      }
      if (!this.user.gender) {
        this.user.errors['gender'] = "โปรดเลือกเพศ";
        this.user.errors.length++;
      }
      if (this.user.gender == "หญิง") {
        if (!this.user.duringpregnancy) {
          this.user.errors['duringpregnancy'] = "โปรดกรอกข้อมูลเพิ่มเติมให้ครบ";
          this.user.errors.length++;
        }
        if (!this.user.breastfeeding) {
          this.user.errors['breastfeeding'] = "โปรดกรอกข้อมูลเพิ่มเติมให้ครบ";
          this.user.errors.length++;
        }
        if (!this.user.givebirth_past_6) {
          this.user.errors['givebirth_past_6'] = "โปรดกรอกข้อมูลเพิ่มเติมให้ครบ";
          this.user.errors.length++;
        }
      }
      if (!this.user.typeblood) {
        this.user.errors['typeblood'] = "โปรดเลือกกรุ๊ปเลือด";
        this.user.errors.length++;
      }
      if (!this.user.typerh) {
        this.user.errors['typerh'] = "โปรดเลือกกรุ๊ปเลือด RH";
        this.user.errors.length++;
      }
      if (!this.user.date) {
        this.user.errors['date'] = "โปรดใส่วัน/เดือน/ปีเกิด";
        this.user.errors.length++;
      }
      if (!this.user.phonnumber) {
        this.user.errors['phonnumber'] = "โปรดใส่เบอร์โทรศัพท์";
        this.user.errors.length++;
      }
      if (!this.user.question) {
        this.user.errors['question'] = "ใส่คำถามเพื่อความปลอดภัย";
        this.user.errors.length++;
      }
      if (!this.user.answer) {
        this.user.errors['answer'] = "ใส่คำตอบเพื่อความปลอดภัย";
        this.user.errors.length++;
      }
      if (!this.user.errors.length) {
        const data = {
          username: this.user.username,
          password: this.user.password,
          email: this.user.email,
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
          question: this.user.question,
          answer: this.user.answer,
        };
        console.log(this.user);
        this.app.req
          .post("auth/user/register", this.user)
          .then((response) => {
            this.app.user = response.data.user;
            this.$router.push("/");
          })
          .catch((error) => {
            this.user.errors401.push(error.response.data.user.error);
          });
      }
    },
    onSubmitHospital() {
      window.scrollTo({ top: 0, left: 0, behavior: "smooth" });
      this.hospital.errors = [];
      this.hospital.errors401 = [];
      var checkUsernameH = false;
      var checkHosemail = false;

      for (var i = 0; i < this.hospitals.length; i++) {
        if (this.hospital.email == this.hospitals[i].email) {
          checkHosemail = true;
        }
        if (this.hospital.username == this.hospitals[i].username) {
          checkUsernameH = true;
        }
      }

      if (checkUsernameH == true) {
        this.hospital.errors401.push("มี Username นี้อยู่ในระบบแล้ว");
      }
      if (checkHosemail == true) {
        this.hospital.errors401.push("มี Email นี้อยู่ในระบบแล้ว");
      }

      if (this.hospital.username == "") {
        this.hospital.errors['username'] = "โปรดใส่ Username";
        this.hospital.errors.length++;
      }
      else if(/[^\w.]/.test(this.hospital.username))
      {
        this.hospital.errors['username'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }

      if (!this.hospital.password) {
        this.hospital.errors['password'] = "โปรดใส่ Password";
        this.hospital.errors.length++;
      }

      if (!this.hospital.passwordAgain) {
        this.hospital.errors['passwordAgain'] = "โปรดใส่ Password อีกครั้ง";
        this.hospital.errors.length++;
      }

      if (this.hospital.password !== this.hospital.passwordAgain) {
        this.hospital.errors401.push("Passwords ไม่ตรงกัน");
      }
      if (this.hospital.email == "") {
        this.hospital.errors['email'] = "โปรดใส่ Email";
        this.hospital.errors.length++;
      }
      else if(!/[\w.@]/.test(this.hospital.email))
      {
        this.hospital.errors['email'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }
      else if(!/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i.test(this.hospital.email))
      {
        this.hospital.errors['email'] = "โปรดกรอกแบบฟอร์มอีเมล ตัวอย่าง a@email.com";
        this.hospital.errors.length++;
      }
      if (!this.hospital.prefix) {
        this.hospital.errors['prefix'] = "โปรดใส่คำนำหน้า";
        this.hospital.errors.length++;
      }
      if (this.hospital.firstname == "") {
        this.hospital.errors['firstname'] = "โปรดใส่ชื่อ";
        this.hospital.errors.length++;
      }
      else if(/[^\wก-๙]/.test(this.hospital.firstname))
      {
        this.hospital.errors['firstname'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }
      if (this.hospital.lastname == "") {
        this.hospital.errors['lastname'] = "โปรดใส่นามสกุล";
        this.hospital.errors.length++;
      }
      else if(/[^\wก-๙]/.test(this.hospital.lastname))
      {
        this.hospital.errors['lastname'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }
      if (!this.hospital.hospitalname) {
        this.hospital.errors['hospitalname'] = "โปรดใส่ชื่อโรงพยาบาล";
        this.hospital.errors.length++;
      }
      else if(/[^\wก-๙. ]/.test(this.hospital.hospitalname))
      {
        this.hospital.errors['hospitalname'] = "โปรดกรอกตัวอักษรหรือตัวเลข";
        this.hospital.errors.length++;
      }
      if (!this.hospital.hospitaladdress) {
        this.hospital.errors['hospitaladdress'] = "โปรดใส่ที่อยู่โรงพยาบาล";
        this.hospital.errors.length++;
      }
      if (!this.hospital.provine) {
        this.hospital.errors['provine'] = "โปรดใส่จังหวัด";
        this.hospital.errors.length++;
      }
      if (!this.hospital.addresscode) {
        this.hospital.errors['addresscode'] = "โปรดใส่เลขไปรษณีย์";
        this.hospital.errors.length++;
      }
      if (!this.hospital.phonnumber) {
        this.hospital.errors['phonnumber'] = "โปรดใส่เบอร์โทรศัพท์";
        this.hospital.errors.length++;
      }
      if (!this.hospital.hospitallongitude) {
        this.hospital.errors['hospitallongitude'] = "โปรดใส่ลองจิจูด";
        this.hospital.errors.length++;
      }
      if (!this.hospital.hospitallattitude) {
        this.hospital.errors['hospitallattitude'] = "โปรดใส่ละติจูด";
        this.hospital.errors.length++;
      }
      if (!this.hospital.question) {
        this.hospital.errors['question'] = "ใส่คำถามเพื่อความปลอดภัย";
        this.hospital.errors.length++;
      }
      if (!this.hospital.answer) {
        this.hospital.errors['answer'] = "ใส่คำตอบเพื่อความปลอดภัย";
        this.hospital.errors.length++;
      }

      if (!this.hospital.errors.length) {
        const data = {
          username: this.hospital.username,
          password: this.hospital.password,
          email: this.hospital.email,
          prefix: this.hospital.prefix,
          firstname: this.hospital.firstname,
          lastname: this.hospital.lastname,
          hospitalname: this.hospital.hospitalname,
          hospitaladdress: this.hospital.hospitaladdress,
          provine: this.hospital.provine,
          addresscode: this.hospital.addresscode,
          hospitallattitude: this.hospital.hospitallattitude,
          hospitallongitude: this.hospital.hospitallongitude,
          phonnumber: this.hospital.phonnumber,
          question: this.hospital.question,
          answer: this.hospital.answer,
        };
        this.app.req
          .post("auth/hospital/register", this.hospital)
          .then((response) => {
            this.app.hospital = response.data.hospital;
            this.$router.push("/");
          })
          .catch((error) => {
            this.hospital.errors401.push(error.response.data.hospital.error);
          });
      }
    },
  },
};
</script>

<style>
.nav {
  height: 60px;
}
.nav-link {
  font-size: 20px;
}
#regis {
  background-color: #00b4a9;
  border-radius: 40px;
}
#answerRegis {
  margin-top: 2%;
}
#card-header {
  margin-top: 5%;
}
</style>