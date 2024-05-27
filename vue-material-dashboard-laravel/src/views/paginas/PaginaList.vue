<template>
  <div class="py-4 container-fluid">
    <div class="mt-4 user">
      <div class="col-12">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-bottom">
            <div class="user d-flex align-items-center">
              <div class="col-6">
                <h5 class="mb-0 ms-0">Lista de Páginas</h5>
              </div>
              <div class="col-6 text-end">
                <material-button class="float-right btn btn-sm" @click="navigateToCreatePage">
                  <i class="fas fa-plus me-2"></i>
                  Crear Página
                </material-button>
              </div>
            </div>
          </div>

          <!-- Card body -->
          <div class="px-0 pb-0 card-body">
            <table class="table table-flush mt-3">
              <thead class="thead-light">
              <tr>
                <th>Nombre</th>
                <th>Moneda</th>
                <th class="text-end">Acciones</th>
              </tr>
              </thead>
              <tbody>
              <tr v-for="pagina in paginas" :key="pagina.id">
                <td>{{ pagina.nombre }}</td>
                <td>{{ pagina.moneda }}</td>
                <td class="text-end">
                  <material-button size="sm" @click="editPagina(pagina.id)" class="me-2">
                    Editar
                  </material-button>
                  <material-button size="sm" color="danger" @click="deletePagina(pagina.id)">
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
      paginas: []
    };
  },
  components: {
    MaterialButton
  },
  mounted() {
    this.fetchPaginas();
  },
  methods: {
    fetchPaginas() {
      axios.get('http://localhost:8000/api/v2/paginas')
          .then(response => {
            this.paginas = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    deletePagina(id) {
      axios.delete(`http://localhost:8000/api/v2/paginas/${id}`)
          .then(() => {
            this.paginas = this.paginas.filter(p => p.id !== id);
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    editPagina(id) {
      this.$router.push(`/paginas/edit/${id}`);
    },
    navigateToCreatePage() {
      this.$router.push('/paginas/create');
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
