<template>
  <v-container class="fill-height" fluid>
    <v-row>
      <v-col cols="12">
        <v-data-table :headers="headers" :items="students">
        </v-data-table>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      students: [],
      headers: [
        { title: '#', value: 'id' },
        { title: 'Name', value: 'name', align: 'center' },
        { title: 'Original copy of PSA/Birth Certificate', value: 'o_psa', align: 'center' },
        { title: 'Original copy of F138', value: 'o_f138', align: 'center' },
        { title: 'Original copy of F137 (School-to-school)', value: 'o_f137', align: 'center' },
        { title: 'Photocopy of Good Moral Certificate', value: 'p_gmc', align: 'center' },
        { title: 'Photocopy of Certificate of Completion', value: 'p_coc', align: 'center' },
        { title: 'Pictures (2x2 & 1x1)', value: 'pic', align: 'center' },
        { title: 'ESC (only for Private School)', value: 'esc', align: 'center' },
      ]
    }
  },
  mounted() {
    this.getStudents();
  },
  methods: {
    getStudents() {
      axios.get('http://localhost/enrollment-required-documents-checklist/src/crud/fetch-data.php').then(res => {
        this.students = res.data;
      });
    }
  }

}
</script>
