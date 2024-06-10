<template>
  <div class="py-4 container-fluid">
    <div class="card">
      <div class="card-header border-bottom">
        <div class="d-flex align-items-center justify-content-between">
          <h5 class="mb-0">{{ id ? 'Editar Página' : 'Crear Página' }}</h5>
          <material-button class="btn btn-sm" @click="showProMessage()">
            <i class="fas fa-save me-2"></i>
            Guardar
          </material-button>
        </div>
      </div>
      <div class="card-body">
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <input v-model="pagina.nombre" placeholder="Nombre de la página" class="form-control" />
          </div>
          <div class="mb-3">
            <input v-model="pagina.moneda" placeholder="Moneda" class="form-control" />
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import MaterialButton from "@/components/MaterialButton.vue"; // Asegúrate de tener este componente o adapta el nombre según tu estructura

export default {
  props: {
    id: {
      type: [String, Number],
      default: null
    }
  },
  components: {
    MaterialButton
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
    },
    showProMessage() {
      // Aquí deberías definir cómo quieres mostrar el mensaje al guardar, similar al primer componente
      alert('Guardar página');
    }
  }
}
</script>

<style scoped>
input {
  margin-bottom: 0.5rem; /* Ajuste para los inputs según prefieras */
}
</style>
