<template>
  <v-container class="fill-height" fluid>
    <v-row>
      <v-col cols="12">
        <v-data-table :items="students"></v-data-table>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from 'axios';
export default {
  name: 'students',
  data() {
    return {
      students: [],
    }
  },
  mounted() {
    this.getStudents();
  },
  methods: {
    getStudents() {
      axios.get('http://localhost/crud-vue-php/src/crud/fetch.php').then(res => {
        this.students = res.data;
      });
    }
  }

}
</script>
