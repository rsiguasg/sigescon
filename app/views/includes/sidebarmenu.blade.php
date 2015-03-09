<nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu " class="nav">
            <div class="clearfix"></div>
            <li class="active">
                <a href="dashboard.html">
                    <i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="treeview nav-hover">
                <a href="#">
                    <i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i>
                    <span class="menu-title">Administración</span>
                     <i class="fa fa-angle-left pull-right"></i>
                </a>
                 <ul class="treeview-menu nav-second-level">
                    <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right submenu-title"></i> Invitaciones</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Usuarios</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Recibos</a></li>
                </ul> 

            </li>
            <li class="treeview nav-hover">
                <a href="#" >
                    <i class="fa fa-users fa-fw ">
                        <div class="icon-bg bg-green "></div>
                    </i>
                    <span class="menu-title">Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu nav-second-level">
                    <li><a href="{{ action('PageController@regUsuarios') }}"><i class="fa fa-angle-double-right submenu-title"></i> Registro Usuarios</a></li>    
                    <li><a href="{{ action('PageController@infoUsuarios') }}"><i class="fa fa-angle-double-right"></i>Informe Usuarios</a></li>
                </ul> 
            </li>
            <li class="treeview nav-hover">
                <a href="#" >
                    <i class="fa fa-send-o fa-fw ">
                        <div class="icon-bg bg-green "></div>
                    </i>
                    <span class="menu-title">Condominios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu nav-second-level">
                    <li><a href="{{ action('PageController@regCondominio') }}"><i class="fa fa-angle-double-right submenu-title"></i> Registro Condominios</a></li>    
                    <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i>Informe Condominios</a></li>
                </ul> 
            </li>
            <li class="treeview nav-hover">
                <a href="#" >
                    <i class="fa fa-send-o fa-fw ">
                        <div class="icon-bg bg-green "></div>
                    </i>
                    <span class="menu-title">Recibos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu nav-second-level">
                    <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right submenu-title"></i> Emitir Recibos</a></li>    
                    <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Reporte Recibos</a></li>
                </ul> 
            </li>
 
            <li>
                <a href="#" class="acolor">
                    <i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i>
                    <span class="menu-title">Pagos</span>
                </a>
            </li>
            <li>
                <a href="#" class="acolor">
                    <i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i>
                    <span class="menu-title">Egresos</span>
                </a>
            </li>
            <li>
                <a href="#" class="acolor">
                    <i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i>
                    <span class="menu-title">Comunicados</span>
                </a>
            </li>
            <li>
                <a href="#" class="acolor">
                    <i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i>
                    <span class="menu-title">Informes</span>
                </a>
            </li>
            <li>
                <a href="#" class="acolor">
                    <i class="fa fa-gift fa-fw">
                        <div class="icon-bg bg-grey"></div>
                    </i>
                    <span class="menu-title">Acerca</span>
                </a>
            </li>
        </ul>
    </div>
</nav>