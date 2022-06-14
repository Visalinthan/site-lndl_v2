<nav class="navbar" >
    <div class="nav-logo">
        <a href="home.php">
            <img class="logo-lndl" alt="logo LNDL" src="../img/logo.png" />
        </a>
        <div class=" form-check form-switch">
            <input class="form-check-input" type="checkbox" id="mySwitch" name="pageHome">
            <label id="label-nav" class="form-check-label" for="mySwitch"></label>
        </div>
    </div>
    <ul class="nav-list">
        <li class="list-item part">
            <a href="qsn.php">Qui sommes-nous ?</a>
        </li>
        <li class="list-item pro">
            <a href="#">A propos</a>
        </li>
        <li class="list-item part">
            <a href="services.php">Nos services</a>
        </li>
        <li class="list-item pro">
            <a href="services.php">Nos prestations</a>
        </li>
        <li class="list-item part">
            <a href="aides.php">Aides et subventions</a>
        </li>
        <li class="list-item">
            <a href="#">Contact</a>
        </li>
    </ul>
    <div id="nav-btn">
        <a href="simulation.php" class="btn-simuler">Faire une estimation</a>
    </div>

</nav>

<input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
<label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
</label>

<div id="sidebarMenu">
    <ul class="sidebarMenuInner">
        <li>
            <a href="#">À propos</a>
        </li>
        <li>
            <a href="#">Nos services</a>
        </li>
        <li>
            <a href="#">Les aides</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    <div id="sidebar-btn">
        <button class="btn-simuler">Faire une estimation</button>
    </div>
</div>