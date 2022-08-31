const fabBox = document.getElementById('fabBox');
const fab = document.getElementById('fab');


fab.addEventListener('click',()=>{


    if(fabBox.classList.contains('hidden')){
        fabBox.classList.remove('hidden');

    }
    else{
        fabBox.classList.add('hidden');

    }



})

