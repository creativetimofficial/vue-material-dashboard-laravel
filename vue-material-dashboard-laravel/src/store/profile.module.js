import ProfileService from "@/services/profile.service"

const initialState = { userProfile: null };

export const profile = {
    namespaced: true,
    state: initialState,
    actions: {
        async getProfile({ commit }) {
            const userProfile = await ProfileService.getProfile();
            commit('success', userProfile);
        },

        async editProfile({ commit }, modifiedProfile) {
            const userProfile = await ProfileService.editProfile(modifiedProfile);
            commit('success', userProfile);
        },

        //eslint-disable-next-line no-unused-vars
        async uploadPic({ commit }, file) {
           const picURL = (await ProfileService.uploadPic(file, this.state.profile.userProfile.id)).url;
           commit('successUpload', picURL);
        },

        

    },
    mutations: {
        success(state, userProfile) {
            state.userProfile = userProfile;
        },
        successUpload(state, picURL){
            state.userProfile.profile_image = picURL;
        }
    },
    getters: {
        getUserProfile(state){
            return state.userProfile
        },
        getUserProfileImage(state){
            return state.userProfile.profile_image
        }
    }
}