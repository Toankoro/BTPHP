
document.addEventListener("click",function(e){
    if(e.target.classList.contains("card-img-top")){
        const src =e.target.getAttribute("src");
        document.querySelector(".modal-img").src=src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'))
        myModal.show();
    }
})

function scrollToAboutUs() {
    const target = document.getElementById('about-us');
    const offset = 150; // Khoảng cách lùi xuống
    const topPosition = target.getBoundingClientRect().top + window.scrollY - offset;
    
    window.scrollTo({
        top: topPosition,
        behavior: 'smooth'
    });
}
function scrollToBook() {
    const target = document.getElementById('book');
    const offset = 50; // Khoảng cách lùi xuống
    const topPosition = target.getBoundingClientRect().top + window.scrollY - offset;
    
    window.scrollTo({
        top: topPosition,
        behavior: 'smooth'
    });
}
// function scrollToAboutUs2() {
//     window.onload = function() {
//         const target = document.getElementById('.about-us');
//         const offset = 150; // Khoảng cách lùi xuống
//         const topPosition = target.getBoundingClientRect().top + window.scrollY - offset;
    
//         window.scrollTo({
//         top: topPosition,
//         behavior: 'smooth'
//         });
//     };
// }