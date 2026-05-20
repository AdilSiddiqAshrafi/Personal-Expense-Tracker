<body class="bg-light">

<div class="container py-3 py-md-4">

    <!--  Summary -->
 
  <div class="row g-3 mb-4">

    <div class="col-lg-4 col-md-6">
      <div class="card border-0 shadow-sm bg-success">
        <div class="card-body text-white">
          <h6 class="">Total Income</h6>
          <h3 class="income"></h3>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-6 text-white">
      <div class="card border-0 shadow-sm bg-danger">
        <div class="card-body text-white">
          <h6 class="">Total Expense</h6>
          <h3 class="expense"></h3>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-12 text-white">
      <div class="card border-0 shadow-sm bg-primary">
        <div class="card-body text-white">
          <h6 class="">Balance</h6>
          <h3 class="balance"></h3>
        </div>
      </div>
    </div>

  </div>

    <!-- insights -->
    <div class="row g-3 mb-4">

        <div class="col-12 col-md-6">
            <div class="card border-success h-100">
                <div class="card-body highexpensecard">
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card border-warning h-100">
                <div class="card-body lowexpensecard">
                </div>
            </div>
        </div>

    </div>

    <!-- category wise report -->
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <span><h4>Category-wise Report</h4></span>
            <span class="badge bg-secondary">April</span>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Category</th>
                        <th>Total</th>
                        <th>Transactions</th>
                    </tr>
                </thead>
                <tbody class="ctg-wise-report">
                </tbody>
            </table>
        </div>
    </div>

    <!--  top expenses -->
    <div class="card">
        <div class="card-header">
            <h4>Top 5 Expenses</h4>
        </div>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Amount</th>
                        <th>Category</th>
                         <th>Title</th>
                        <th class="d-none d-md-table-cell">Date</th>
                    </tr>
                </thead>
                <tbody class="top-expenses">
                </tbody>
            </table>
        </div>
    </div>

</div>


<script src="JS/report.js"></script>
</body>