import AuthService from '../services/auth.service';

const user = JSON.parse(localStorage.getItem('user_free'));
const initialState = user ? { loggedIn: true } : { loggedIn: false };

export const auth = {
  namespaced: true,
  state: initialState,
  actions: {
    async login({ commit }, user) {
      try {
        await AuthService.login(user);
        commit('isLoggedIn', true);
      } catch (error) {
        commit('isLoggedIn', false);
        throw(error)
      }
    },
    async logout({ commit }) {
      try {
        await AuthService.logout();
        commit('isLoggedIn', false);
      }catch(error){
        commit('isLoggedIn', true);
      }
    },
    async register({ commit }, user) {
      try {
        await AuthService.register(user);
        commit('isLoggedIn', true);
      } catch (error) {
        commit('isLoggedIn', false);
        throw(error)
      }
    },
    // eslint-disable-next-line no-unused-vars
    async passwordForgot({commit}, userEmail){
      await AuthService.passwordForgot(userEmail);
    },
    // eslint-disable-next-line no-unused-vars
    async passwordReset({commit}, passwordDTO){
      await AuthService.passwordReset(passwordDTO);
    },
  },
  mutations: {
    isLoggedIn(state, loggedIn) {
      state.loggedIn = loggedIn
    }
  },
  getters: {
    isLoggedIn(state){
      return state.loggedIn;
    }
  }
};