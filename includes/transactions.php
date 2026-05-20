  <div class="container py-4 overflow-hidden">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
    <div>
      <h3 class="fw-bold mb-0">Transactions</h3>
      <small class="text-muted">All your income & expenses in one place</small>
    </div>

    <button class="btn btn-primary mt-2 mt-md-0"
      data-bs-toggle="modal"
      data-bs-target="#incomemodal">
      + Add Transaction
    </button>
  </div>

  <!-- Filters -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">

      <div class="row g-2">

        <div class="col-12 col-md-5">
          <input type="text"
            class="form-control"
            name="search"
            id="search"
            placeholder="Search transactions...">
        </div>

        <div class="col-12 col-md-3">
          <select class="form-select">
            <option>All Types</option>
            <option>Income</option>
            <option>Expense</option>
          </select>
        </div>

        <div class="col-12 col-md-2">
          <button class="btn btn-outline-primary w-100">
            Filter
          </button>
        </div>

      </div>

    </div>
  </div>

  <!-- Transactions Table -->
<div class="card shadow-sm">
    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover mb-0 align-middle">

                <thead class="table-light">
                    <tr>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th class="text-end">Amount</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody class="alltransactiontable"></tbody>

            </table>

        </div>

    </div>
</div>

</div>

<!-- Add Transaction Modal -->
<div class="modal fade" id="incomemodal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-success">
          Add Transaction
        </h5>

        <button type="button"
          class="btn-close"
          data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body px-3">

        <h5 class="mb-3">Expense Tracker</h5>

        <div class="card p-3">

          <select class="form-control mb-2" id="type">
            <option value="income">Income</option>
            <option value="expense">Expense</option>
          </select>

          <input type="number"
            class="form-control mb-2"
            id="amount"
            placeholder="Amount">

          <input type="text"
            class="form-control mb-2"
            id="category"
            placeholder="Category">

          <textarea class="form-control mb-2"
            id="note"
            placeholder="Note"></textarea>

          <input type="date"
            class="form-control mb-2"
            id="date">

          <button class="btn btn-primary"
            onclick="addTransaction()"
            data-bs-dismiss="modal">
            Add Transaction
          </button>

        </div>

      </div>

      <div class="modal-footer">
        <button type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal">
          Close
        </button>
      </div>

    </div>
  </div>
</div>

<!-- Edit Transaction Modal -->
<div class="modal fade"
  id="edittransactions"
  tabindex="-1"
  aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content shadow rounded-3">

      <div class="modal-header py-2 bg-light">
        <h6 class="modal-title text-success fw-semibold mb-0">
          Edit Transaction
        </h6>

        <button type="button"
          class="btn-close btn-sm"
          data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body py-2">

        <div class="mb-2">
          <label class="form-label small">Type</label>

          <select class="form-select form-select-sm"
            id="edit_type">
            <option value="income">Income</option>
            <option value="expense">Expense</option>
          </select>
        </div>

        <div class="mb-2">
          <label class="form-label small">Amount</label>

          <input type="number"
            class="form-control form-control-sm"
            id="edit_amount">
        </div>

        <div class="mb-2">
          <label class="form-label small">Category</label>

          <input type="text"
            class="form-control form-control-sm"
            id="edit_category">
        </div>

        <div class="mb-2">
          <label class="form-label small">Note</label>

          <textarea class="form-control form-control-sm"
            id="edit_note"
            rows="2"></textarea>
        </div>

        <div class="mb-2">
          <label class="form-label small">Date</label>

          <input type="date"
            class="form-control form-control-sm"
            id="edit_date">
        </div>

      </div>

      <div class="modal-footer py-2 bg-light">

        <button class="btn btn-outline-secondary btn-sm"
          data-bs-dismiss="modal">
          Cancel
        </button>

        <button class="btn btn-success btn-sm"
          onclick="edittransactions()"
          data-bs-dismiss="modal">
          Save
        </button>

      </div>

    </div>

  </div>
</div>

<script src="JS/transactions.js"></script>
<script src="JS/delete.js"></script>
<script src="JS/edit.js"></script>
<script src="JS/search.js"></script>
<link rel="stylesheet" href="commonfiles/style.css">

