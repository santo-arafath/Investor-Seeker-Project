
// import { setTimeout } from "timers/promises";


function showdate(messagenumber) {

    console.log(1);

    // messagenumber;

        const all = document.getElementsByClassName("myconversation");

        
        
        for (var i = 0; i < all.length; i++) {
            
            if(messagenumber == i){
            
            all[i].classList.add('showdate');

            }
        }
    
}














function hidedate(value)
{


    console.log(2);

    // val--;
        const all = document.getElementsByClassName("myconversation");
        
        for (let i = 0; i < all.length; i++) {
            
            if(value == i){
               
            all[i].classList.remove('showdate');

            }
        }
    // a.classList.remove('show');

     

}




function showdateHistory(messagenumber) {

    console.log(4);

    // messagenumber;

        const all = document.getElementsByClassName("history");

        
        
        for (let i = 0; i < all.length; i++) {
            
            if(messagenumber == i){
            
            all[i].classList.add('showdate');

            }
        }
    
}




function hidedateHistory(value)
{


    console.log(5);

    // val--;
        const all = document.getElementsByClassName("history");
        
        for (let i = 0; i < all.length; i++) {
            
            if(value == i){
               
            all[i].classList.remove('showdate');

            }
        }
    // a.classList.remove('show');

     

}