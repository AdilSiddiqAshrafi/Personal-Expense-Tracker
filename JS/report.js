async function k() {
    let res=await fetch("./apis/reports.php");
    let data=await res.json();

    //  total icnome expense and balnce
    document.querySelector(".income").innerText = data.income;
    document.querySelector(".expense").innerText = data.expense;
    document.querySelector(".balance").innerText = data.balance;

    // catgeroy wise
    let expense="";
    data.ctg.forEach(cat => {
        expense+=`
                    <tr>
                        <td>${cat.category}</td>
                        <td>${cat.total_amount}</td>
                        <td>${cat.total_transactions}</td>
                    </tr>
        `
    });
    document.querySelector(".ctg-wise-report").innerHTML=expense;

    // top expenses
    let topexpense="";
    data.topxpenses.forEach(element => {
        topexpense+=`
                    <tr>
                        <td>${element.category}</td>
                        <td>${element.amount}</td>
                        <td>${element.note}</td>
                        <td class="d-none d-md-table-cell">${element.date}</td>
                    </tr>
        `
    });
    document.querySelector(".top-expenses").innerHTML=topexpense;

    // lowest expnse
    let highex="";
    data.highexpense.forEach(element => {
    highex+=`
    <h6 class="text-success fw-bolder">🏆 Highest Spending</h6>
                    <h5>${element.category}</h5>
                    <span class="badge bg-success">${element.amount} PKR</span>
    `        
    });
    document.querySelector(".highexpensecard").innerHTML=highex;


     // lowest expnse
    let lowex="";
    data.lowexpense.forEach(element => {
    lowex+=`
                     <h6 class="text-warning fw-bolder">📉 Lowest Spending</h6>
                    <h5>${element.category}</h5>
                    <span class="badge bg-warning text-dark">${element.amount} PKR</span>
    `        
    });
    document.querySelector(".lowexpensecard").innerHTML=lowex;
}
k()