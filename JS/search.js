document.getElementById("search").addEventListener("input", search);

async function search() {
    try {
        let val = document.getElementById("search").value;

        let data = { val };

        let response = await fetch("apis/search.php", {
            method: "POST",
            headers: {
                "content-type": "application/json"
            },

            body: JSON.stringify(data)
        })

        let result = await response.json();
        updateTable(result);
    } catch (error) {
        console.log("Error", error);
    }

}

async function updateTable(data) {

    let allrows = "";
    if (data.srchtrans && data.srchtrans.length > 0) {
        data.srchtrans.forEach(litr => {
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
    } else {
        // if no data found
        allrows = `
<tr>
  <td colspan="6" class="text-center text-danger fw-bold fs-5">
    No records found
  </td>
</tr>`;
    }


    document.querySelector(".alltransactiontable").innerHTML = allrows;
}
