import axios from './axios'

export default {
    get(data) {
        return axios.get('/bank-sites', { params: data })
    },
    post(data) {
        return axios.post('bank-sites', data)
    }
}
