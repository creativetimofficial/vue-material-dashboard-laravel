<template>
  <div>
    <h1>{{ id ? 'Editar Pago' : 'Crear Pago' }}</h1>
    <form @submit.prevent="submitForm">
      <input v-model="pago.monto" placeholder="Monto" />
      <input v-model="pago.moneda" placeholder="Moneda" />
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
