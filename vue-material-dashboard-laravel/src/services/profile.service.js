import axios from 'axios';
import authHeader from './auth-header';
import Jsona from 'jsona';

const API_URL = process.env.VUE_APP_API_BASE_URL;
const dataFormatter = new Jsona();

export default {
  async getProfile() {
    const response = await axios.get(API_URL + "/me", { headers: authHeader() })
    return dataFormatter.deserialize(response.data);
  },

  async editProfile(profile) {
    profile.type = 'profile'
    const newJson = dataFormatter.serialize({ stuff: profile })
    const response = await axios.patch(API_URL + "/me", newJson, { headers: authHeader() })
    return dataFormatter.deserialize(response.data);
  },

  async uploadPic(pic, userId) {
    const postUrl = API_URL + "/uploads/users/" + userId + "/profile-image";
    const response = await axios.post(postUrl,
      { attachment: pic },
      { headers: { 'Content-Type': 'multipart/form-data' } }
    );
    return response.data;
  }

}