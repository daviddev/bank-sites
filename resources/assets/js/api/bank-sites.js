import axios from './axios'

export default {
    get(data) {
        return axios.get('/bank-sites', { params: {customerId:data} })
    },
    save(data, id) {
        if (!id) {
            return axios.post('bank-sites', data)
        } else {
            return axios.put('bank-sites/'+ id, data)
        }
    }
}
