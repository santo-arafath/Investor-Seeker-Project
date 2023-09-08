function showdate(messagenumber) {

    messagenumber;

        const all = document.getElementsByClassName("myconversation");

        
        
        for (var i = 0; i < all.length; i++) {
            
            if(messagenumber == i){
            
            all[i].classList.add('showdate');

            }
        }
    
}





// function hideinfo(val)
// {

//     val--;
//         const all = document.getElementsByClassName("profile-card");
        
//         for (var i = 0; i < all.length; i++) {
            
//             if(val == i){
            
//             all[i].classList.remove('show');

//             }
//         }
//     // a.classList.remove('show');

     

// }