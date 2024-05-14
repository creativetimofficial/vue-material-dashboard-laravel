<template>
  <div class="py-4 container-fluid">
    <div class="card">
      <div class="card-header border-bottom">
        <h5 class="mb-0">{{ id ? 'Editar Pago' : 'Crear Pago' }}</h5>
      </div>
      <div class="card-body">
        <form @submit.prevent="submitForm">
          <div class="mb-3">
            <input v-model="pago.monto" placeholder="Monto" class="form-control" />
          </div>
          <div class="mb-3">
            <input v-model="pago.moneda" placeholder="Moneda" class="form-control" />
          </div>
          <material-button type="submit" class="btn btn-primary">
            <i class="fas fa-save me-2"></i>
            Guardar
          </material-button>
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
      pago: {
        monto: '',
        moneda: ''
      }
    };
  },
  mounted() {
    if (this.id) {
      this.fetchPago();
    }
  },
  methods: {
    fetchPago() {
      axios.get(`http://localhost:8000/api/v2/pagos/${this.id}`)
          .then(response => {
            this.pago = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    submitForm() {
      const method = this.id ? 'put' : 'post';
      const url = this.id ? `http://localhost:8000/api/v2/pagos/${this.id}` : 'http://localhost:8000/api/v2/pagos';
      axios[method](url, this.pago)
          .then(() => {
            this.$router.push('/pagos');
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    }
  }
}
</script>

<style scoped>
.card {
  margin-top: 20px;
}

.card-header {
  background-color: #f8f9fa;
  padding: 15px;
}

.card-body {
  padding: 15px;
}

.form-control {
  margin-bottom: 1rem;
}
</style>
