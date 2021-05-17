<template>
  <div>
    <h1>dff</h1>

    <h3 class="text-center">All Books</h3>
    <br />

    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Author</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="giveblood in givebloods" :key="giveblood.id">
          <div v-if="giveblood.idHospital===app.user.id">
            <td>{{ giveblood.typeblood }}</td>
            <td>{{ giveblood.typerh }}</td>
            <td>{{ giveblood.date }}</td>
            <td>{{ giveblood.deficiencyBlood }}</td>
          </div>
        </tr>
        <td>
          <div class="btn-group" role="group"></div>
        </td>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";

export default {
  mounted() {
    this.getGivebloods();
  },
  
  methods: {
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
