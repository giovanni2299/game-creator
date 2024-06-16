import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);



// MODAL BEFORE DELETE / START

// i collect all the delete-form by the class
const delete_forms = document.querySelectorAll('.delete-form');

console.log(delete_forms);

// i cycle all the form and for each form i add an event listener above the submit.
// i take the event and i prevent the default behaviour.
delete_forms.forEach(delete_form =>{
    delete_form.addEventListener('submit', (event)=>{
        event.preventDefault();

        // i put a confirmation window out and if the user presses OK, the form will be submit
        if(confirm('Are you sure? Do you want to delete this, forever?')){
            delete_form.submit();
        }
    })
})

// MODAL BEFORE DELETE / END
