function getformdata() {
  let user_id = window.user ? window.user.userid : null;
  let type = document.getElementById("type").value;
  let amount = document.getElementById("amount").value;
  let category = document.getElementById("category").value;
  let note = document.getElementById("note").value;
  let date = document.getElementById("date").value;

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
  let data = getformdata();
  let response = await fetch("apis/create.php", {
    method: "POST",
    headers: {
      "content-type": "application/json"
    },
    body: JSON.stringify(data)
  });

  let result = await response.json();

  // refresh ui after insert
  loadDashboard();

}

async function loadDashboard() {
  let res = await fetch("./apis/fetchdisplay.php");
  let data = await res.json();

  let allrows = "";
  data.alltransactions.forEach(litr => {
    allrows += `
<tr>
  <td>${litr.date}</td>
  <td>${litr.note}</td>
  <td>${litr.category}</td>

  <td>
    <span class="badge bg-danger">${litr.type}</span>
  </td>

  <td class="text-end text-danger">
    - ${litr.amount}
  </td>

  <td class="text-end">
<button 
  class="btn btn-sm btn-outline-primary me-1" data-bs-toggle="modal" data-bs-target="#edittransactions" onclick="seteditid('${litr.id}')">
  ✏️
</button>

<button class="btn btn-sm btn-outline-danger" onclick="deleteItem(${litr.id})">
  🗑️
</button>
  </td>
</tr> 
`
  })
  document.querySelector(".alltransactiontable").innerHTML = allrows;
}

document.addEventListener("DOMContentLoaded", () => {
  loadDashboard();
})
