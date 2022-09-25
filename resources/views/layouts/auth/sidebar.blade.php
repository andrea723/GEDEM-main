<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                @if ( auth()->check() && auth()->user()->rol_id < 7 )
                    {{-- <li>
                        <a href="{{ route('home') }}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span key="t-overview-detail">@lang('translation.Overview')</span>
                        </a>
                    </li> --}}
                    <li class="menu-title" key="t-apps">@lang('translation.your_businnes')</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-bank-transfer-out"></i>
                            <span key="t-transfers">@lang('translation.Withdrawals')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('transfers') }}" key="t-transfers">@lang('translation.Withdrawals')</a></li>
                            <li><a href="{{ route('balances') }}" key="t-transfers-balances">@lang('translation.Balances_History')</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('allTransactions') }}" class="waves-effect">
                            <i class="mdi mdi-bank-transfer"></i>
                            <span key="t-all-transactions">@lang('translation.Transactions')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allCustomers') }}" class="waves-effect">
                            <i class="mdi mdi-account-supervisor-circle"></i>
                            <span key="t-all-transactions">@lang('translation.Customers')</span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-apps">@lang('translation.collect_payments')</li>
                    <li>
                        <a href="{{ route('paymentsLinks') }}" class="waves-effect">
                            <i class="mdi mdi-cash"></i>
                            <span key="t-paymentlinks">@lang('translation.Payment_Links')</span>
                        </a>
                    </li>
                    <li class="menu-title" key="t-apps">@lang('translation.Billing_Tools')</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-tools"></i>
                            <span key="t-settings">@lang('translation.Settings')</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('settingsGeneral') }}" key="t-settings-general">@lang('translation.General')</a></li>
                            <li><a href="{{ route('settingsBankAccounts') }}" key="t-settings-bankaccounts">@lang('translation.Bank_Accounts')</a></li>
                            <li><a href="{{ route('settingsUsers') }}" key="t-settings-users">@lang('translation.Users')</a></li>
                            @if ( Auth::user()->rol_id != 6 )
                                <li><a href="{{ route('settingsApi') }}" key="t-settings-api">@lang('translation.API')</a></li>
                            @endif
                            {{-- <li><a href="{{ route('settingsWebhooks') }}" key="t-settings-webhooks">Webhooks</a></li> --}}
                            {{-- <li><a href="{{ route('settingsAccountsSettings') }}" key="t-settings-accountsettings">Accounts Settings</a></li> --}}
                        </ul>
                    </li>
                @endif

                @if ( auth()->check() && auth()->user()->rol_id >= 7 )
                    <li class="menu-title" key="t-apps">Administrative Panel</li>

                    <li>
                        <a href="{{ route('withdrawPending') }}" class="waves-effect">
                            <i class="mdi mdi-account-cash"></i>
                            <span key="t-withdrawPendingAdmins">Pending Withdrawals</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('withdrawHistories') }}" class="waves-effect">
                            <i class="mdi mdi-cash-check"></i>
                            <span key="t-withdrawHistoryAdmins">Withdrawal History</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settingsAdmins') }}" class="waves-effect">
                            <i class="mdi mdi-cogs"></i>
                            <span key="t-settingsAdmins">Settings General</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('usersAdmins') }}" class="waves-effect">
                            <i class="mdi mdi-account-key"></i>
                            <span key="t-usersAdmins">Users</span>
                        </a>
                    </li>
                @endif



               {{--  
                
<hr>
                <li class="menu-title" key="t-apps">Your Businnes</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-bank-transfer"></i>
                        <span key="t-transactions">Transactions</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('allRefunds') }}" key="t-all-refunds">All Refunds</a></li>
                        <li><a href="{{ route('detailRefunds') }}" key="t-refunds-detail">Detail Refunds</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-bank-transfer-out"></i>
                        <span key="t-transfers">Transfers</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('transfers') }}" key="t-transfers">Transfers</a></li>
                        <li><a href="{{ route('detailSettlements') }}" key="t-transfers-settlements-detail">Detail Settlements</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('subAccounts') }}" class="waves-effect">
                        <i class="mdi mdi-account-multiple"></i>
                        <span key="t-subaccounts">Subaccounts</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-cards">Cards</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('cards.index') }}" key="t-cards">All Cards</a></li>
                        <li><a href="{{ route('cards.create') }}" key="t-cards-datail">Detail Card</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('chargeBacks') }}" class="waves-effect">
                        <i class="mdi mdi-backup-restore"></i>
                        <span key="t-chargebacks">Chargebacks</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                </li>
                
                <li class="menu-title" key="t-apps">Collect Payments</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-weight"></i>
                        <span key="t-store">Store</span><span class="badge rounded-pill bg-warning ms-2">80%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('store') }}" key="t-store">Store</a></li>
                        <li><a href="{{ route('storeCreateProduct') }}" key="t-store-addproduct">Create Product</a></li>
                        <li><a href="{{ route('storeEditProduct') }}" key="t-store-editproduct">Edit Product</a></li>
                        <li><a href="{{ route('storeProducstLinks') }}" key="t-store-productlinks" target="_black">Links Products</a></li>
                        <li><a href="{{ route('storeCreateOrUpdateCode') }}" key="t-store-code">Discount Code</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('pointOfSale') }}" class="waves-effect">
                        <i class="mdi mdi-weight"></i>
                        <span key="t-point-of-sale">Point of Sale</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                </li>

                <li class="menu-title" key="t-apps">Collect Payments</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-sign-text"></i>
                        <span key="t-paymentplans">Payment Plans</span><span class="badge rounded-pill bg-warning ms-2">50%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('paymentPlans') }}" key="t-paymentplans">Payment Plans</a></li>
                        <li><a href="{{ route('detailPaymentPlans') }}" key="t-paymentplans-detail">Detailt Payment Plans</a></li>
                        <li><a href="#" key="t-paymentplans-subcriptions">Subcriptions</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-receipt"></i>
                        <span key="t-invoices">Invoices</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('invoices') }}" key="t-invoices">Invoices</a></li>
                        <li><a href="{{ route('createInvoices') }}" key="t-invoices-create">Create Invoices</a></li>
                        <li><a href="{{ route('detailInvoices') }}" key="t-invoices-deatil">Detail Invoices</a></li>
                        <li><a href="{{ route('linksInvoices') }}" target="_black" key="t-invoices-links">Links Invoices</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('referral') }}" class="waves-effect">
                        <i class="mdi mdi-state-machine"></i>
                        <span key="t-referrals">Referrals</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-tools"></i>
                        <span key="t-settings">Settings</span><span class="badge rounded-pill bg-success ms-2">100%</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('settingsGeneral') }}" key="t-settings-general">General</a></li>
                        <li><a href="{{ route('settingsBankAccounts') }}" key="t-settings-bankaccounts">Bank Accounts</a></li>
                        <li><a href="{{ route('settingsUsers') }}" key="t-settings-users">Users</a></li>
                        <li><a href="{{ route('settingsApi') }}" key="t-settings-api">API</a></li>
                        <li><a href="{{ route('settingsWebhooks') }}" key="t-settings-webhooks">Webhooks</a></li>
                        <li><a href="{{ route('settingsAccountsSettings') }}" key="t-settings-accountsettings">Accounts Settings</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
