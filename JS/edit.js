function seteditid(id) {
    window.edit_id = id;
}
function getdataforedit() {
    let id = window.edit_id;
    let type = document.getElementById("edit_type").value;
    let amount = document.getElementById("edit_amount").value;
    let category = document.getElementById("edit_category").value;
    let note = document.getElementById("edit_note").value;
    let date = document.getElementById("edit_date").value;

    let data = {
        id,
        type,
        amount,
        category,
        note,
        date
    };
    return data;
}

async function edittransactions() {
    try {
        let data = getdataforedit();

        let response = await fetch("apis/edit.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        let result = await response.json();

        loadDashboard();
    } catch (error) {
        console.log('Error', error);
    }
}

document.addEventListener("DOMContentLoaded", () => {
    loadDashboard();
})