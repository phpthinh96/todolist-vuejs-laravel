import Axios from "axios"

let actions = {
    ADD_TODO ( {commit}, todo) {
        Axios.post('/api/todos', todo).then(
            res=> {
                if (res.data === 'added')
                    console.log('ok')
            }
        ).catch(err => {
            console.log(err)
        })
    },
    DELETE_TODO({commit}, todo){
        Axios.delete('/api/todos/${todo.id}').then(res=> {
            if(res.data === 'deleted')
                console.log('deleted')
        }).catch(err => {
            console.log(err)
        })
    },
    GET_TODOS({commit}) {
        Axios.get('/api/todos').then(res => {
            {
                console.log(res.data)
                commit('GET_TODOS', res.data)
            }
        }).catch(err => {
            console.log(err)
        })
    }
}

export default actions