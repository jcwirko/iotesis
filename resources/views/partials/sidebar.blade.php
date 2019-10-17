<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="text-align: center;">
                    <img alt="image" class="rounded" src="{{asset('/img/elonmusk1.jpg')}}" style="width: 65px"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#" >
                        <span class="block m-t-xs font-bold" style="color:white; font-weight: bold;">{{$professor}}<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IoT
                </div>
            </li>
            <li class="active">
                <a href="layouts.html">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <span class="nav-label">Configuración</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
