<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">首頁</a></li>
                <!-- <li><a href="{{url('/tool')}}">Tool</a></li> -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">工具(Tool)
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/tool/filter')}}">字元篩選器(Filter)</a></li>
                        <li><a href="{{url('/tool/distance')}}">單位換算(Distance)</a></li>
                    </ul>
                </li>


            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>
