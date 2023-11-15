import VueFeather from 'vue-feather';

export default {
  install: (app) => {
    app.component(VueFeather.name, VueFeather);
  }
}