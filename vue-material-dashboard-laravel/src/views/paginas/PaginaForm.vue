<template>
  <div>
    <h1>{{ id ? 'Editar Página' : 'Crear Página' }}</h1>
    <form @submit.prevent="submitForm">
      <input v-model="pagina.nombre" placeholder="Nombre de la página" />
      <input v-model="pagina.moneda" placeholder="Moneda" />
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
      pagina: {
        nombre: '',
        moneda: ''
      }
    };
  },
  mounted() {
    if (this.id) {
      this.fetchPagina();
    }
  },
  methods: {
    fetchPagina() {
      axios.get(`http://localhost:8000/api/v2/paginas/${this.id}`)
          .then(response => {
            this.pagina = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    submitForm() {
      const method = this.id ? 'put' : 'post';
      const url = this.id ? `http://localhost:8000/api/v2/paginas/${this.id}` : 'http://localhost:8000/api/v2/paginas';

      axios[method](url, this.pagina)
          .then(() => {
            this.$router.push('/paginas');
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    }
  }
}
</script>
