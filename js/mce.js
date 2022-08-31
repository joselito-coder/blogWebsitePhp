// console.log("this is mce.js");

// Initialize the editor
tinymce.init({
    selector: '.blogContent',
    menubar: false,
    // inline: true,
    placeholder: "Enter Blog content",
    plugins: 'image media codesample',
    images_file_types: 'jpg,svg,webp,png',
    codesample_languages: [
        { text: 'HTML/XML', value: 'markup' },
        { text: 'JavaScript', value: 'javascript' },
        { text: 'CSS', value: 'css' },
        { text: 'PHP', value: 'php' },
        { text: 'Ruby', value: 'ruby' },
        { text: 'Python', value: 'python' },
        { text: 'Java', value: 'java' },
        { text: 'C', value: 'c' },
        { text: 'C#', value: 'csharp' },
        { text: 'C++', value: 'cpp' }
    ],

    toolbar: 'undo redo | bold italic underline | media image codesample',
})