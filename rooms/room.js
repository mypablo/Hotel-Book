document.addEventListener("DOMContentLoaded",() => {
   const $textarea = document.querySelector("#textID");
   const $remainingChars = document.querySelector("#RemainingChars");
   const $errorMsg = document.querySelector("#textError");
   const MAX_ALLOWED_CHARS = 250;

   const $addedreview = document.querySelector("#added-Review");
   const $textareaRev = document.querySelector("#textarea-Review")
   const $submitBtn = document.querySelector("#submit-button");
   const $form = document.getElementById("form");

   
//  TEXT AREA MAX CHARS && WARNING BAR

   $textarea.addEventListener("input", (e)=>{
       const remainingChars = MAX_ALLOWED_CHARS - e.target.value.length;

       if(remainingChars >= 0){
           $remainingChars.innerHTML = remainingChars;
           $errorMsg.classList.add("hidden");
          }else{
              $errorMsg.classList.remove("hidden");
          }
   })

   $errorMsg.classList.add("hidden");


   // ADDED REVIEWS



   
    $submitBtn.addEventListener("click", (e)=>{

        $addedreview.innerHTML = $textareaRev.value;
    
      console.log($textareaRev.value);

      
   
  
   })
   

  
} 
)
  
   


