<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

    <div class="sidebar-wrapper">
        <div class="logo">
            @if(auth()->user()->role == 'supervisor')
                <a href="/supervisor" class="simple-text">
                    Forteoil
                </a>
            @elseif(auth()->user()->role == 'cashier')
                <a href="/cashier" class="simple-text">
                    Forteoil
                </a>
            @endif
        </div>

        <ul class="nav">

           @if(auth()->user()->role == 'supervisor')
                <li class="active">
                    <a href="/supervisor">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/supervisor/profile">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="/supervisor/income">
                        <i class="ti-view-list-alt"></i>
                        <p>Income</p>
                    </a>
                </li>
                <li>
                    <a href="/supervisor/expense">
                        <i class="ti-view-list-alt"></i>
                        <p>Expenses/Make Payment</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="ti-pencil-alt2"></i>
                        <p>Request Payment</p>
                    </a>
                </li>

            @elseif(auth()->user()->role == 'cashier')
                <li class="active">
                    <a href="/cashier">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="/cashier/profile">
                        <i class="ti-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li>
                    <a href="/cashier/income">
                        <i class="ti-view-list-alt"></i>
                        <p>Income</p>
                    </a>
                </li>
                <li>
                    <a href="/cashier/expense">
                        <i class="ti-view-list-alt"></i>
                        <p>Expenses/Make Payment</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>