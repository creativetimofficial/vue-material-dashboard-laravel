<template>
  <div class="container-fluid mt-4">
    <div class="row align-items-center">
      <div class="col-12">
        <h1 class="mb-4">Lista de Personas</h1>
        <div v-for="person in persons" :key="person.id" class="card mb-3">
          <div class="card-body">
            <h5 class="card-title">{{ person.nombre }}</h5>
            <p class="card-text">Tipo de documento: {{ person.tipo_documento }}</p>
            <p class="card-text">Documento: {{ person.documento }}</p>
            <button class="btn btn-primary" @click="editPerson(person.id)">Editar</button>
            <button class="btn btn-danger" @click="deletePerson(person.id)">Eliminar</button>
          </div>
        </div>
        <router-link to="/personas/create" class="btn btn-success">Crear Persona</router-link>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "PersonasList",
  data() {
    return {
      persons: []
    };
  },
  mounted() {
    this.fetchPersons();
  },
  methods: {
    fetchPersons() {
      axios.get('http://localhost:8000/api/v2/personas')
          .then(response => {
            this.persons = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    deletePerson(id) {
      axios.delete(`http://localhost:8000/api/v2/personas/${id}`)
          .then(() => {
            this.persons = this.persons.filter(p => p.id !== id);
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    editPerson(id) {
      this.$router.push(`/personas/edit/${id}`);
    }
  }
}
</script>
