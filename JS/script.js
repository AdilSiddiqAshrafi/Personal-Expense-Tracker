function getformdata(){
    let user_id=window.user ? window.user.userid:null;
    let type=document.getElementById("type").value;
    let amount=document.getElementById("amount").value;
    let category=document.getElementById("category").value;
    let note=document.getElementById("note").value;
    let date=document.getElementById("date").value;
    
    let data = {
        user_id,
        type,
        amount,
        category,
        note,
        date
    };
return data;
}

async function addTransaction() {
 let data=getformdata();
 let response=await fetch("apis/create.php",{
    method:"POST",
    headers:{
        "content-type":"application/json"
    },
    body:JSON.stringify(data)
 });

 let result=await response.json();
    // refresh ui after insert
    loadDashboard();

}

async function loadDashboard(){
    let res=await fetch("./apis/fetchdisplay.php");
    let data=await res.json();
   
    document.querySelector(".income").innerText = data.income;
    document.querySelector(".expense").innerText = data.expense;
    document.querySelector(".balance").innerText = data.balance;

    let rows="";
    data.transactions.forEach(el => {
       rows+=`
           <tr>
              <td>${el.date}</td>
              <td>${el.type}</td>
              <td><span class="badge bg-success">${el.category}</span></td>
              <td class="text-end">${el.amount}</td>
            </tr>
        `
    });
    document.querySelector(".tablebody").innerHTML=rows;


}
document.addEventListener("DOMContentLoaded",()=>{
    loadDashboard();
})