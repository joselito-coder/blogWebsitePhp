// console.log("hello world");


const heading = document.getElementById('title');
const contents = document.getElementsByClassName('blogContent');
const contentContainer = document.querySelector('.mainBlog .content')
const insertImage = document.getElementById('insertImage');
const insertVideo = document.getElementById('insertVideo');

heading.addEventListener('click', function() {

    heading.setAttribute('contenteditable', 'true');
    this.innerText = "";
    this.focus();
    this.style.color = "black";
    this.style.borderLeft = "none";
    this.addEventListener('keypress', function(event) {
        // event.key
        if (event.key == "Enter") {
            this.style.borderLeft = "2px solid grey";
            heading.setAttribute('contenteditable', 'false');
        }

    });


})



for (para of contents) {
    para.addEventListener('click', function() {

        this.setAttribute('contenteditable', 'true');
        this.style.color = "black";
        this.style.borderLeft = "none";
        this.addEventListener('keypress', function(event) {
            if (event.key == "Enter") {
                // this.style.borderLeft = "2px solid grey";
                para.setAttribute('contenteditable', 'false');
            }
        })
    })

}