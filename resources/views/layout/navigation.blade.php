<style>
    .navbar{
        font-size: large;
    }
    .navbar-brand{
        font-weight: bold;
    }
    .navigation{
        margin-bottom: 60px;
    }
</style>
<div class="navigation">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <!-- Navbar content -->
    <div class="container">
        <a class="navbar-brand" href="{{route("home")}}">Home</a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{route("list-product.index")}}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
    </div>
</nav>
    </div>
