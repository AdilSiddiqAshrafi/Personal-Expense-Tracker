<body class="bg-light">

  <div class="container py-3">

    <!-- flex container -->
    <div class="d-flex flex-column flex-md-row gap-3">

      <!-- left categories -->
      <div class="card border-0 shadow-sm w-100" style="max-width: 300px;">
        <div class="card-body">
          <div class="d-flex  justify-content-between align-items-center">
            <h5 class="fw-bold mb-3">Categories</h5>
            <button class="btn btn-success border-0 mb-3" data-bs-toggle="modal" data-bs-target="#addcetogry">Add
              category</button>
          </div>
          <div class="d-grid gap-2 catrgorys">
          </div>

        </div>
      </div>

      <!-- right transactions -->
      <div class="flex-grow-1">

        <!-- header -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-3 gap-2">
          <div>
            <h5 class="mb-0">Shopping</h5>
            <small class="text-muted">Transactions</small>
          </div>
        </div>



        <!-- transactions -->


        <div class="card shadow-sm">
          <div class="card-body p-0">

            <div class="table-responsive w-100">
              <table class="table table-hover mb-0 align-middle">

                <thead class="table-light">
                  <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th class="text-end">Amount</th>
                  </tr>
                </thead>

                <tbody class="trbody">

                </tbody>

              </table>
            </div>

          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- edit transactions modal -->
  <div class="modal fade" id="addcetogry" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
      <div class="modal-content shadow rounded-3">

        <!-- Header -->
        <div class="modal-header py-2 bg-light">
          <h6 class="modal-title text-success fw-semibold mb-0">
            Add Category
          </h6>
          <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal"></button>
        </div>

        <!-- Body -->
        <div class="modal-body py-2">

          <div class="mb-2">
            <label class="form-label small">Enter Category</label>
            <input type="text" class="form-control form-control-sm" id="addc">
          </div>

        </div>

        <!-- Footer -->
        <div class="modal-footer py-2 bg-light">
          <button class="btn btn-outline-secondary btn-sm" data-bs-dismiss="modal">
            Cancel
          </button>
          <button class="btn btn-success btn-sm" onclick="addcat()" data-bs-dismiss="modal">
            Save
          </button>
        </div>

      </div>
    </div>
  </div>

</body>
<script src="JS/category.js"></script>
<link rel="stylesheet" href="commonfiles/style.css">
