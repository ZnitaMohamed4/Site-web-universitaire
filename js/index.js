



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




