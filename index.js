/* 
===============================================================================
                  changer les images  pages pricibale 
===============================================================================

*/
// const images = [
//     './images_u/u_1.jpeg',
//     './images_u/u_2.jpeg',
//     './images/banner.png',
//     './images_u/u_3.jpeg',
//     './images_u/u_4.jpg',
//     './images_u/u_5.jpg',
//     './images/banner.png',

// ];

// function changeRandomImage() {
//     // Génère un index aléatoire
//     const randomIndex = Math.floor(Math.random() * images.length);

//     // Sélectionne l'élément div par son ID
//     let randomImageElement = document.getElementById('header-img');

//     // Met à jour le style de fond de l'élément avec l'URL aléatoire
//     randomImageElement.style.backgroundImage = `linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url(${images[randomIndex]})`;
// }

// // Appelle la fonction au chargement de la page
// document.addEventListener('DOMContentLoaded', () => {
//     // Change l'image toutes les 2 secondes avec transition
//     setInterval(changeRandomImage, 2000);
// });



/*
===============================================================================
                 chanbe les contanet entre objectif programme coordinateur 
===============================================================================

*/
let  objectif = document.getElementById("obj") ;
    let  programme = document.getElementById("pro") ;
    let  comp = document.getElementById("comp") ;
    let  coordinateur = document.getElementById("coor") ;

    // variables description de chaque partie 
    let  descr = document.getElementById("descr") ;
    let  table_pro = document.getElementById("table_pro") ;
    let  list_COMPETENCES = document.getElementById("list_COMPETENCES") ;
    let  des_coor = document.getElementById("des_coor") ;


    programme.addEventListener('click' ,  function (){
    list_COMPETENCES.style.display= "none" ;     
    descr.style.display = "none" ; 
    des_coor.style.display = "none" ; 
    table_pro.style.display = "inline-block" ; 

        
    }); 
    objectif.addEventListener('click' , function (){
    des_coor.style.display = "none" ; 
    list_COMPETENCES.style.display= "none" ;    
    descr.style.display = "inline-block" ; 
    table_pro.style.display = "none" ; 

        
    }); 
    comp.addEventListener('click' ,  () => {
    des_coor.style.display = "none" ; 
    list_COMPETENCES.style.display= "inline-block" ;    
    descr.style.display = "none" ; 
    table_pro.style.display = "none" ; 

        
    }); 
    coordinateur.addEventListener('click' ,  () => {
    des_coor.style.display = "inline-block" ; 
    list_COMPETENCES.style.display= "none" ;    
    descr.style.display = "none" ; 
    table_pro.style.display = "none" ; 

        
    }); 
