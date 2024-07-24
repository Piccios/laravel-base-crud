const deleteFormsEl = document.querySelectorAll('form.animal-delete');

deleteFormsEl.forEach((deleteFormsEl)=>{
    deleteFormsEl.addEventListener('submit', function(event){
        event.preventDefault();
        if(window.confirm('Sei sicuro di voler eliminare questa scheda?')=== true){
            this.submit();
        }
    });
})
