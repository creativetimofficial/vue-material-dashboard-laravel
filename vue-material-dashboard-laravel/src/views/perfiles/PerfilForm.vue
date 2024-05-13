<template>
  <div>
    <h1>{{ id ? 'Editar Perfil' : 'Crear Perfil' }}</h1>
    <form @submit.prevent="submitForm">
      <input v-model="perfil.nombre" placeholder="Nombre del Perfil" />
      <button type="submit">Guardar</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    id: {
      type: [String, Number],
      default: null
    }
  },
  data() {
    return {
      perfil: {
        nombre: ''
      }
    };
  },
  mounted() {
    if (this.id) {
      this.fetchPerfil();
    }
  },
  methods: {
    fetchPerfil() {
      axios.get(`http://localhost:8000/api/v2/perfiles/${this.id}`)
          .then(response => {
            this.perfil = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    submitForm() {
      const method = this.id ? 'put' : 'post';
      const url = this.id ? `http://localhost:8000/api/v2/perfiles/${this.id}` : 'http://localhost:8000/api/v2/perfiles';

      axios[method](url, this.perfil)
          .then(() => {
            this.$router.push('/perfiles');
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    }
  }
}
</script>
