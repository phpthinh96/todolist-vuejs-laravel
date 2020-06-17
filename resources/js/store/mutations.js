let mutations = {
    ADD_TODO(state, todo) { //adds a new to-do to the top our to-dos list
        state.todos.unshift(todo)
    },
    CACHE_REMOVED(state,todo){ //keeps track temporarily of the to-do to remove
        state.toRemove = todo;
    },
    GET_TODOS(state, todos) { //sets our to-dos list given some data
        state.todos = todos
    },
    DELETE_TODO(state, todo) { //responsible for deleting a to-do from our to-dos list
        state.todos.splice(state.todos.indexOf(todo), 1)
        state.toRemove = null;
    }
}
export default mutations