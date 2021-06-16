<template>
  <footer class="page-footer font-small indigo">
    <div class="container">
      <div class="row text-center d-flex justify-content-center pt-5 mb-3">
        <div class="col-md-2 mb-3" id="footercolor">
          <div class="text-uppercase" id="uppercase">
            <a style="color: #fff0e2" href="/">Home</a>
          </div>
        </div>


      
      </div>
      <hr class="style1" style="margin: 0 15%" />

      <div class="row d-flex text-center justify-content-center mb-md-0 mb-5">
        <div class="col-md-8 col-12 mt-5" style="color: #fff0e2">
          <div class="text-center">
            <img
              src="images/048.png"
              id="imfooter"
              class="rounded float-left"
              alt="..."
            />
            <img
              src="images/012.png"
              id="imfooter"
              class="rounded float-right"
              alt="..."
            />
            <img
              src="images/046.png"
              id="imfooter"
              class="rounded mx-auto d-block"
              alt="..."
            />
          </div>
          <p style="line-height: 1.7rem">
            สะดวกและรวดเร็วมากขึ้นเมื่อคุณสามารถบริจาคเลือดกับโรงพยาบาลที่ต้องการเลือดได้
            โดยใช้แอปพลิเคชันและเว็บไซต์ Blood doanate
            การช่วยเหลือของคุณเป็นสิ่งสำคัญสำหรับอีกชีวิตนึง
          </p>
        </div>
      </div>

      <div class="text-center">
        <router-link
          class="btn"
          id="regisnow"
          style="color: #fff0e2"
          to="/register"
          
          >Register Now</router-link
        >
      </div>

      <div class="footer-copyright text-center py-3" id="footerBlood">
        <a style="color: #ff4343"> Blood Donate</a>
      </div>
    </div>
  </footer>
</template>
<script>
export default {};
</script>
<style >
footer {
  background-color: #0f428a;
}

#linefooter {
  color: #fff0e2;
}
.rgba-white-light {
  color: #fff0e2;
}
hr.style1 {
  border-top: 1px solid #fff0e2;
}
#uppercase {
  font-size: 20px;
}
#imfooter {
  width: 80px;
  margin-bottom: 3%;
}
#regisnow {
  font-size: 16px;
  border: none;
  background-color: #36cc8e;
  color: #fff0e2;
  border-radius: 40px;
}
#footerBlood {
  font-size: 25px;
}
</style>