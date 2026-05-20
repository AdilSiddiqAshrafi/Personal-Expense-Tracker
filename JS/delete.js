async function deleteItem(id) {
try {
      let del=await fetch("apis/delete.php",{
      method:"DELETE",
      headers:{
         "content-type":"application/json"
     },
     body:JSON.stringify({id})
   });
   if(!del.ok){
    throw new Error("Failed to Delte");
   }

   let result=await del.json();
loadDashboard();

} catch (error) {
    console.log('Error',error);
}



   
}

document.addEventListener("DOMContentLoaded",()=>{
    loadDashboard();
})