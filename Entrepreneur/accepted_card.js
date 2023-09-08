
function showinfo(cardnumber,id) {

    cardnumber--;

    console.log(cardnumber);
    console.log(id);
        const all = document.getElementsByClassName("profile-card");
        
        // Loop through all elements with class "profile-card"
        for (var i = 0; i < all.length; i++) {
            // Add the "show" class to each element
            
            if(cardnumber == i){
            
            all[i].classList.add('show');

            }
        }
    
}





function hideinfo(val)
{

    val--;
        const all = document.getElementsByClassName("profile-card");
        
        for (var i = 0; i < all.length; i++) {
            
            if(val == i){
            
            all[i].classList.remove('show');

            }
        }
    // a.classList.remove('show');

     

}