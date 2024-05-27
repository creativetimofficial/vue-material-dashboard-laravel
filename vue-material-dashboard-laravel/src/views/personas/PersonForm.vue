<template>
  <div class="multisteps-form__panel border-radius-xl bg-white" data-animation="FadeIn">
    <h5 class="font-weight-bolder mb-0">{{ id ? 'Editar Persona' : 'Crear Persona' }}</h5>
    <div class="multisteps-form__content">
      <div class="row mt-4 overflow-hidden">
        <div>
          <material-avatar :img="getImage" shadow="regular" class="img-fluid w-20 mt-7" :fixedSize="true"></material-avatar>
        </div>
        <div class="mt-1 mb-2">
          <material-button v-show="!file" size="sm" type="button">
            <label for="imageInput" class="mb-0 text-white small cursor-pointer">Select Image</label>
            <input id="imageInput" type="file" style="display: none;" accept="image/*" @change.prevent="onFileChange">
          </material-button>
          <div v-show="file">
            <material-button class="mx-2" size="sm" type="button" color="danger" @click.prevent="onFileRemove">
              <label class="mb-0 text-white small cursor-pointer">&#10005; Remove</label>
            </material-button>
            <material-button size="sm" type="button">
              <label for="imageInput" class="mb-0 text-white small cursor-pointer">Change</label>
              <input id="imageInput" type="file" style="display: none;" accept="image/*" @change.prevent="onFileChange">
            </material-button>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <material-input id="name" label="Nombre" variant="static" v-model:value="person.nombre" name="nombre" />
        <validation-error :errors="apiValidationErrors.nombre" />
      </div>
      <div class="row mt-5">
        <material-input id="tipo_documento" label="Tipo de documento" variant="static" v-model:value="person.tipo_documento" name="tipo_documento" />
        <validation-error :errors="apiValidationErrors.tipo_documento" />
      </div>
      <div class="row mt-5">
        <material-input id="documento" label="Documento" variant="static" v-model:value="person.documento" name="documento" />
        <validation-error :errors="apiValidationErrors.documento" />
      </div>
      <div class="row mt-5">
        <label for="perfiles">Perfiles:</label>
        <select v-model="selectedPerfiles" multiple>
          <option v-for="perfil in perfiles" :key="perfil.id" :value="perfil.id">{{ perfil.nombre }}</option>
        </select>
        <validation-error :errors="apiValidationErrors.perfiles" />
      </div>
      <div class="button-row d-flex mt-4">
        <material-button type="button" color="dark" variant="gradient" class="ms-auto mb-0" @click="submitForm">Guardar</material-button>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import MaterialInput from "@/components/MaterialInput.vue";
import MaterialButton from "@/components/MaterialButton.vue";
import MaterialAvatar from "@/components/MaterialAvatar.vue";
import ValidationError from "@/components/ValidationError.vue";
import formMixin from "@/mixins/formMixin.js";

export default {
  name: "PersonaForm",
  props: {
    id: {
      type: [String, Number],
      default: null
    }
  },
  components: {
    MaterialInput,
    MaterialButton,
    MaterialAvatar,
    ValidationError,
  },
  data() {
    return {
      person: {
        nombre: '',
        tipo_documento: '',
        documento: '',
        perfiles: []
      },
      selectedPerfiles: [],
      perfiles: [],
      file: null,
      imgSource: 'https://vue-material-dashboard-laravel-pro.creative-tim.com/img/placeholder.jpg',
      loading: null,
      apiValidationErrors: {},
    };
  },
  mixins: [formMixin],
  computed: {
    getImage() {
      if (!this.person.profile_image || this.loading) return this.imgSource;
      else return this.person.profile_image;
    }
  },
  mounted() {
    this.fetchPerfiles();
    if (this.id) {
      this.fetchPerson();
    }
  },
  methods: {
    fetchPerson() {
      axios.get(`http://localhost:8000/api/v2/personas/${this.id}`)
          .then(response => {
            this.person = response.data;
            this.selectedPerfiles = this.person.perfiles.map(perfil => perfil.id);
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    fetchPerfiles() {
      axios.get('http://localhost:8000/api/v2/perfiles')
          .then(response => {
            this.perfiles = response.data;
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    },
    onFileChange(event) {
      this.file = event.target.files[0];
      this.person.profile_image = URL.createObjectURL(this.file);
    },
    onFileRemove() {
      this.file = null;
      this.person.profile_image = this.imgSource;
    },
    submitForm() {
      const data = {
        ...this.person,
        perfiles: this.selectedPerfiles
      };

      const method = this.id ? 'put' : 'post';
      const url = this.id ? `http://localhost:8000/api/v2/personas/${this.id}` : 'http://localhost:8000/api/v2/personas';

      axios[method](url, data)
          .then(() => {
            this.$router.push('/personas');
          })
          .catch(error => {
            console.error("There was an error!", error);
          });
    }
  }
};
</script>

<style scoped>
.multisteps-form__panel {
  padding: 20px;
}

.button-row {
  justify-content: flex-end;
}
</style>
