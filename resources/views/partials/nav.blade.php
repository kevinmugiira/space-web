

<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"> My Blog Site</a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{routes('blogs.index')}}">Blogs
                    </a>
                </li>
                <li>
                    <a href="{{routes('blogs.create')}}">Create</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Sign Up</a> </li>
                <li><a href="#">Login</a> </li>
            </ul>
        </div>
    </div>


</nav>
