<template>
  <div class="py-4 container-fluid">
    <div class="mt-4 user">
      <div class="col-12">
        <div class="card">
          <!-- Card header -->
          <div class="card-header border-bottom">
            <div class="user d-flex align-items-center">
              <div class="col-6">
                <h5 class="mb-0 ms-0">Lista de Perfiles</h5>
              </div>
              <div class="col-6 text-end">
                <material-button class="float-right btn btn-sm" @click="navigateToCreatePerfil">
                  <i class="fas fa-plus me-2"></i>
                  Crear Perfil
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
                <th class="text-end">Acciones</th>
              </tr>
              </thead>
              <tbody>
              <tr v-for="perfil in perfiles" :key="perfil.id">
                <td>{{ perfil.nombre }}</td>
                <td class="text-end">
                  <material-button size="sm" @click="editPerfil(perfil.id)" class="me-2">
                    Editar
                  </material-button>
                  <material-button size="sm" color="danger" @click="deletePerfil(perfil.id)">
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
      perfiles: []
    };
  },
  components: {
    MaterialButton
  },
  mounted() {
    this.fetchPerfiles();
  },
  methods: {
    fetchPerfiles() {
      axios.get('http://localhost:8000/api/v2/perfiles')
          .then(response => {
            this.perfiles = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    deletePerfil(id) {
      axios.delete(`http://localhost:8000/api/v2/perfiles/${id}`)
          .then(() => {
            this.perfiles = this.perfiles.filter(p => p.id !== id);
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    editPerfil(id) {
      this.$router.push(`/perfiles/edit/${id}`);
    },
    navigateToCreatePerfil() {
      this.$router.push('/perfiles/create');
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
