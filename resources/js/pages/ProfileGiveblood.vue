<template>
  <div class="container">
    <h3 class="text-center">All Books</h3>
    <br />

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>กรุ๊ปเลือด</th>
          <th>กรุ๊ปเลือด RH</th>
          <th>ปริมาณโลหิตที่ต้องการ</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(giveblood, index) in givebloods" :key="giveblood.id">
          <div v-if="giveblood.idHospital == app.user.id">
            <td>{{ giveblood.typeblood }}</td>
            <td>{{ giveblood.typerh }}</td>
            <td>{{ giveblood.date }}</td>
            <td>{{ giveblood.deficiencyBlood }}</td>
            <td>
              <div class="btn-group" role="group">
                <a
                  href="javascript:;"
                  class="btn btn-danger"
                  v-on:click="deleteBlood(giveblood.id, index)"
                >
                  Delete
                </a>
              </div>
            </td>
          </div>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "ProfileGiveblood",
  props: ["app"],
  mounted() {
    this.getGivebloods();
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
