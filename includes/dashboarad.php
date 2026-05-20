<body class="bg-light">

<div class="container py-4">

  <!-- TOP HEADER -->
  <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">

    <div>
      <h3 class="fw-bold mb-1">💼 Finance Dashboard</h3>
      <small class="text-muted">Track your money smartly & easily</small>
    </div>

    <div class="mt-2 mt-md-0">
      <button class="btn btn-outline-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#incomemodal">+ Add Income</button>
      <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#incomemodal">+ Add Expense</button>
    </div>

  </div>

  <!-- SUMMARY CARDS -->
  <div class="row g-3">

    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h6 class="text-muted">Total Income</h6>
          <h3 class="text-success income"></h3>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h6 class="text-muted">Total Expense</h6>
          <h3 class="text-danger expense"></h3>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12">
      <div class="card border-0 shadow-sm">
        <div class="card-body">
          <h6 class="text-muted">Balance</h6>
          <h3 class="text-primary balance"></h3>
        </div>
      </div>
    </div>

  </div>

  <!-- RECENT TRANSACTIONS -->
  <div class="card border-0 shadow-sm mt-4">

    <div class="card-header bg-white d-flex justify-content-between align-items-center">
      <h5 class="mb-0">Recent Transactions</h5>
      <button class="btn btn-outline-secondary btn-sm"><a class="text-danger" href="?page=transactions"> View All</a></button>
    </div>

    <div class="card-body p-0">

      <div class="table-responsive">
        <table class="table table-hover mb-0">

          <thead class="table-light">
            <tr>
              <th>Date</th>
              <th>Category</th>
              <th>Type</th>
              <th class="text-end">Amount</th>
            </tr>
          </thead>

          <tbody class="tablebody">
          </tbody>

        </table>
      </div>

    </div>
  </div>

</div>



<!-- Modal -->
<div class="modal fade" id="incomemodal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <div class="d-flex">
        <h5 class="modal-title text-success">Add Income/</h5>
        <h5 class="modal-title text-danger">Add Expense</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

  <h2>Expense Tracker</h2>

  <div class="card p-3">

    <select class="form-control mb-2" id="type">
      <option value="income">Income</option>
      <option value="expense">Expense</option>
    </select>

    <input type="number" class="form-control mb-2" id="amount" placeholder="Amount">

    <input type="text" class="form-control mb-2" id="category" placeholder="Category">

    <textarea class="form-control mb-2" id="note" placeholder="Note"></textarea>

    <input type="date" class="form-control mb-2" id="date">

    <button class="btn btn-primary" onclick="addTransaction()" data-bs-dismiss="modal">
      Add Transaction
    </button>

  </div>

</div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<script src="JS/script.js"></script>
