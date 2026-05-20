<div class="offcanvas offcanvas-start bg-dark text-white" tabindex="-1" id="sidebar">

  <!-- Header -->
  <div class="offcanvas-header d-flex justify-content-between">
    <h5 class="offcanvas-title fw-bold">ExpenseTracker</h5>

<button type="button"
        class="btn btn-outline-danger btn-sm"
        data-bs-dismiss="offcanvas">

  <svg xmlns="http://www.w3.org/2000/svg"
       width="30" height="30" viewBox="0 0 24 24"
       fill="none" stroke="currentColor"
       stroke-width="2.5"
       stroke-linecap="round"
       stroke-linejoin="round">
    <line x1="18" y1="6" x2="6" y2="18"></line>
    <line x1="6" y1="6" x2="18" y2="18"></line>
  </svg>

</button>
 
  </div>

  <hr class="text-secondary m-0">

  <!-- Body -->
  <div class="offcanvas-body p-3">

    <ul class="nav nav-pills flex-column gap-2">


    <li class="nav-item">
      <a href="?page=dashboard=" class="nav-link d-flex align-items-center gap-2 rounded text-white">

    
        <svg width="20" height="20" viewBox="0 0 24 24">
          <defs>
            <linearGradient id="d1" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#00c6ff"/>
              <stop offset="100%" stop-color="#0072ff"/>
            </linearGradient>
          </defs>
          <rect x="3" y="3" width="7" height="7" rx="2" fill="url(#d1)"/>
          <rect x="14" y="3" width="7" height="7" rx="2" fill="#ff4d6d"/>
          <rect x="3" y="14" width="7" height="7" rx="2" fill="#00d084"/>
          <rect x="14" y="14" width="7" height="7" rx="2" fill="#ffb703"/>
        </svg>

        Dashboard
      </a>
    </li>

    
    <li class="nav-item">
      <a href="?page=transactions" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" fill="#00d4ff"/>
          <path d="M7 12h10" stroke="#fff" stroke-width="2"/>
        </svg>

        Transactions
      </a>
    </li>

    <!-- <li class="nav-item">
      <a href="#" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" fill="#ff4d6d"/>
          <path d="M12 7v10M7 12h10" stroke="#fff" stroke-width="2"/>
        </svg>

        Add Expense
      </a>
    </li> -->

    <!-- Add Income -->
    <!-- <li class="nav-item">
      <a href="#" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" fill="#ff4d6d"/>
          <path d="M12 7v10M7 12h10" stroke="#fff" stroke-width="2"/>
        </svg>

        Add Income
      </a>
    </li> -->

    <!-- Categories -->
    <li class="nav-item">
      <a href="?page=cetagories" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <rect x="4" y="4" width="16" height="16" rx="3" fill="#7b2cbf"/>
        </svg>

        Categories
      </a>
    </li>

    <!-- Reports -->
    <li class="nav-item">
      <a href="?page=reports" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <path d="M4 20V4h16v16H4z" fill="#00b4d8"/>
          <path d="M7 15h3V9H7v6zm5 0h3V6h-3v9z" fill="#fff"/>
        </svg>

        Reports
      </a>
    </li>

    <!-- Budget -->
    <!-- <li class="nav-item">
      <a href="#" class="nav-link d-flex align-items-center gap-2 text-white">

        <svg width="20" height="20" viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" fill="#ffd60a"/>
          <path d="M8 12h8" stroke="#000" stroke-width="2"/>
        </svg>

        Budget
      </a>
    </li> -->

  </ul>
  </div>
</div>