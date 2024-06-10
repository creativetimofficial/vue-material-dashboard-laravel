<template>
  <div class="py-4 container-fluid">
    <div class="mt-4 user">
      <div class="col-12">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-bottom">
            <div class="user d-flex align-items-center">
              <div class="col-6">
                <h5 class="mb-0 ms-0">Lista de Pagos</h5>
              </div>
              <div class="col-6 text-end">
                <material-button class="float-right btn btn-sm" @click="navigateToCreatePago">
                  <i class="fas fa-plus me-2"></i>
                  Crear Pago
                </material-button>
              </div>
            </div>
          </div>

          <!-- Card body -->
          <div class="px-0 pb-0 card-body">
            <table class="table table-flush mt-3">
              <thead class="thead-light">
              <tr>
                <th>Monto</th>
                <th>Moneda</th>
                <th class="text-end">Acciones</th>
              </tr>
              </thead>
              <tbody>
              <tr v-for="pago in pagos" :key="pago.id">
                <td>{{ pago.monto }}</td>
                <td>{{ pago.persona.nombre }}</td>
                <td class="text-end">
                  <material-button size="sm" @click="editPago(pago.id)" class="me-2">
                    Editar
                  </material-button>
                  <material-button size="sm" color="danger" @click="deletePago(pago.id)">
                    Eliminar
                  </material-button>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import MaterialButton from "@/components/MaterialButton.vue";

export default {
  data() {
    return {
      pagos: []
    };
  },
  components: {
    MaterialButton
  },
  mounted() {
    this.fetchPagos();
  },
  methods: {
    fetchPagos() {
      axios.get('http://localhost:8000/api/v2/pagos')
          .then(response => {
            this.pagos = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    deletePago(id) {
      axios.delete(`http://localhost:8000/api/v2/pagos/${id}`)
          .then(() => {
            this.pagos = this.pagos.filter(p => p.id !== id);
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    editPago(id) {
      this.$router.push(`/pagos/edit/${id}`);
    },
    navigateToCreatePago() {
      this.$router.push('/pagos/create');
    }
  }
}
</script>

<style scoped>
.card {
  margin: 20px 0;
}

.card-header {
  padding: 15px;
  background-color: #f8f9fa;
}

.card-body {
  padding: 15px;
}

.table-flush thead {
  background-color: #f8f9fa;
}

.table-flush tbody tr td {
  padding: 10px;
}

.text-end {
  text-align: right;
}
</style>
