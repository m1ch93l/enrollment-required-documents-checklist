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
        { title: '#', value: 'id', sortable: false },
        { title: 'Name', value: 'name', align: 'center', sortable: true },
        { title: 'Original copy of PSA/Birth Certificate', value: 'o_psa', align: 'center', sortable: false },
        { title: 'Original copy of F138', value: 'o_f138', align: 'center', sortable: false },
        { title: 'Original copy of F137 (School-to-school)', value: 'o_f137', align: 'center', sortable: false },
        { title: 'Photocopy of Good Moral Certificate', value: 'p_gmc', align: 'center', sortable: false },
        { title: 'Photocopy of Certificate of Completion', value: 'p_coc', align: 'center', sortable: false },
        { title: 'Pictures (2x2 & 1x1)', value: 'pic', align: 'center', sortable: false },
        { title: 'ESC (only for Private School)', value: 'esc', align: 'center', sortable: false },
      ],
      items: [],
      editItem: null,
      editMode: false,
      fields: [
        { name: 'id', label: '#', type: 'number' },
        { name: 'name', label: 'Name', type: 'text' },
        { name: 'o_psa', label: 'Original copy of PSA/Birth Certificate', type: 'select', options: ['Yes', 'No'] },
        { name: 'o_f138', label: 'Original copy of F138', type: 'select', options: ['Yes', 'No'] },
        { name: 'o_f137', label: 'Original copy of F137 (School-to-school)', type: 'select', options: ['Yes', 'No'] },
        { name: 'p_gmc', label: 'Photocopy of Good Moral Certificate', type: 'select', options: ['Yes', 'No'] },
        { name: 'p_coc', label: 'Photocopy of Certificate of Completion', type: 'select', options: ['Yes', 'No'] },
        { name: 'pic', label: 'Pictures (2x2 & 1x1)', type: 'select', options: ['Yes', 'No'] },
        { name: 'esc', label: 'ESC (only for Private School)', type: 'select', options: ['Yes', 'No'] },
      ],
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
