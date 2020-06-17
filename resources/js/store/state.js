let state = {
    todos: [], //todos: holds our to-dos got from the backend
    toRemove: null, // holds temporatily the to-do we intend to remove
    newTodo: {  //holds details about a new to-do we are about to add
        title: '',
        completed: false
    }
}

export default state