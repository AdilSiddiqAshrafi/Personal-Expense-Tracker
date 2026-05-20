function addcategory() {
    let user_id = window.user ? window.user.userid : null;
    let category = document.getElementById("addc").value;

    let data = {
        user_id,
        category
    };

    return data;
}

async function addcat() {
    try {
        let data = addcategory();

        let response = await fetch("apis/category.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        let result = await response.json();

        loadcategory();
    } catch (error) {
        console.log('Error', error);
    }
}


async function loadcategory() {
    let response = await fetch("apis/fetchcategorys.php");

    let data = await response.json();

    let allcateogrys = "";

    data.categorysss.forEach(list => {
        allcateogrys += `
        <a href="#"
            class="ctgvalue btn btn-outline-primary text-start d-flex justify-content-between align-items-center">
            <span><i class="bi bi-cart me-2"></i>${list.category}</span>
        </a>
        `;
    });

    document.querySelector(".catrgorys").innerHTML = allcateogrys;

}

document.body.addEventListener("click", function (e) {
    let span = e.target.closest(".ctgvalue");
    if (span) {
        selectedCategory = span.textContent.trim();
        let user_id = window.user ? window.user.userid : null;
        displayctgtrans(selectedCategory, user_id);
    }
});

async function displayctgtrans(category, user_id) {
    try {

        let data = {
            category: category,
            user_id: user_id
        };

        let response = await fetch("apis/ctgtrans.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(data)
        });

        let result = await response.json();

        renderTransactions(result);

    } catch (error) {
        console.log("Error", error);
    }
}



async function renderTransactions(data) {

    let allcateogrystrans = "";

    if (data.listctg && Array.isArray(data.listctg)) {

        data.listctg.forEach(list => {
            allcateogrystrans += `
            <tr>
<td>${list.date}</td>
                <td>${list.note}</td>
                <td>${list.category}</td>
                <td><span class="badge bg-danger">${list.type}</span></td>
                <td class="text-end text-danger">${list.amount}</td>
            </tr>
            `;
        });

    } else {
        allcateogrystrans = `
            <tr>
                <td colspan="5" class="text-center text-muted">
                    No data found
                </td>
            </tr>
        `;
    }

    document.querySelector(".trbody").innerHTML = allcateogrystrans;
}

//  refresh page to after contant
document.addEventListener("DOMContentLoaded", () => {
    loadcategory();
});