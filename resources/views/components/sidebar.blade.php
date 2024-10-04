<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                    Menu
                                </li>
                                <li class="nav-item ">
                                    <x-nav-link href="/finance" active="{{ request()->is('finance')}}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i> Dashboard</x-nav-link>
                                    <div id="submenu-1" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                                <div id="submenu-1-2" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="/finance">Finance</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                                <div id="submenu-1-1" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/disbursement" active="{{ request()->is('disbursement')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-money-bill"></i>Disbursement</x-nav-link>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/account-receivable" active="{{ request()->is('account-receivable')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-coins"></i>Account Receivables</x-nav-link>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/account-payable" active="{{ request()->is('account-payable')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-money-bill-alt"></i>Account Payable</x-nav-link>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/general-ledger" active="{{ request()->is('general-ledger')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-vault"></i>General Ledger</x-nav-link>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/collections" active="{{ request()->is('collections')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-address-book"></i>Collections</x-nav-link>
                                </li>
                                <li class="nav-item">
                                    <x-nav-link href="/budget-management" active="{{ request()->is('budget-management')}}" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa-solid fa-piggy-bank"></i>Budget Management</x-nav-link>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
